@section('title', 'Qty Unit')
@extends('layouts.app')
@section('content')
@livewire('performance.quantity-unit')
@endsection

@section('plugin-js')
<link rel="stylesheet" href="{{ asset('plugins/daterangepicker.css') }}">
<script src="{{ asset('plugins/jquery-3.6.1.min.js') }}"></script>
<script src="{{ asset('plugins/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker.min.js') }}"></script>
<script src="{{ asset('chart.js/chart.min.js') }}"></script>
@endsection

{{-- @section('script-js')
@push('js')
<script src="{{ asset('js/performance/qty-unit.js') }}"></script>
<script src="{{ asset('component/chart/qty-unit.js') }}"></script>
@endpush
@endsection --}}
