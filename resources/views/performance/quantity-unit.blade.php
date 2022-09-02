@section('title', 'Qty Unit')
@extends('layouts.app')
@section('content')
    <div class="relative">
        <div class="absolute w-full bg-white">

        </div>
    </div>
    {{-- <div class="relative flex flex-auto justify-center px-8 py-6">
        <div class="h-screen w-screen overflow-hidden rounded-xl bg-white px-8 py-2 shadow-md drop-shadow-md">
            <div class="mb-6 p-3">
                <h5 class="py-2 text-xl font-bold text-gray-900">Hasil Produksi Unit
                    Verifikasi Pita Cukai</h5>
            </div>
            <div class="relative">
                <div class="mt-auto h-full w-full bg-blue-200">
                    border
                </div>
            </div>
        </div>
    </div> --}}
@endsection
@section('script-js')
    <script>
        var dataChart = {
            date: [1, 2, 3, 4, 5, 6],
            data: [3, 4, 2, 8, 9, 6],
        }
    </script>
    @push('js')
        <script src="{{ asset('component/chart/qty-unit.js') }}"></script>
    @endpush
@endsection
