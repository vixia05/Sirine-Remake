@extends('layout.app')
@section('tittle', 'Dashboard')
@section('content')
<div class="c-body">
  <main class="c-main">
    <div class="container-fluid">
      <div class="fade-in">
        {{-- Start Data Untuk Perbandingan Verifikasi & Defect --}}
        @if (\Helper::call()->level() === 0 || \Helper::call()->level() > 2)
          @include('layout.dashboard.admin-chart')
        @else
          @include('layout.dashboard.user-chart')
        @endif
        {{-- End Data Untuk Perbandingan Verifikasi & Defect --}}
      </div>
    </div>
  </main>
</div>
@endsection

@section('scriptchrt')
@if(Helper::call()->level() === 0 || Helper::call()->level() > 2)
    <script>
      var dataChart = {
        verifPcht : @json($dataVerifPcht),
        returPcht : @json($dataReturPcht),
      }
    </script>
@elseif (Helper::call()->level() == 1 || Helper::call()->level() == 2)
<script>
  var dataChart = {
    namaUser  : @json($namaUser),
    rekapVerif   : @json($rekapVerif),
    qtyVerifInd  : @json($qtyVerifInd),
    qtyVerifUnit : @json($qtyVerifUnit),
    qtyDefectInd : @json($totalReturInd),
    qtyDefectUnit: @json($totalReturUnit),
  }
</script>
@endif
@push('js')

{{-- <script src="{{ asset('js/Chart.min.js') }}"></script> --}}
{{-- <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script> --}}

@if(Helper::call()->level() === 0 || Helper::call()->level() > 2)
  <script src="{{ asset('assets/chart/dashboard_adm.js') }}"></script>
@else
  <script src="{{ asset('assets/chart/dashboard_user.js') }}"></script>
@endif
@endpush
@endsection
