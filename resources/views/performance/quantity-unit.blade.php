@extends('layouts.app')
@section('content')
    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1">
                <div class="rounded-xl bg-white shadow-md drop-shadow-md overflow-hidden px-8 py-2 max-h-screen">
                    <div class="p-3 mb-6">
                        <h5 class="text-gray-900 text-xl font-bold py-2">Hasil Produksi Unit
                            Verifikasi Pita Cukai</h5>
                    </div>
                    <canvas id="qtyUnit" name="qtyUnit" class="min-w-full"></canvas>
                </div>
            </div>
        </div>
    </div>
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
