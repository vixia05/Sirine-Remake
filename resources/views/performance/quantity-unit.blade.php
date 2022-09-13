@section('title', 'Qty Unit')
@extends('layouts.app')
@section('content')
    <div class="relative flex flex-col justify-center px-8 py-6">
        <div class="w-full rounded-t-xl bg-white py-3 px-4 shadow drop-shadow-md">
            <div class="flex justify-between border-b-2 pb-3">
                <div class="flex flex-col">
                    <h5 class="w-full text-xl font-bold text-gray-700">Hasil Produksi Unit
                        Verifikasi Pita Cukai</h5>
                    <span class="text-sm font-light text-gray-500">Periode September 2022</span>
                </div>
                <div class="my-auto flex justify-end">
                    <select class="min-w-fit rounded-l border-blue-400 py-2 pl-2 text-sm font-bold text-gray-700"
                        id="team" name="team">
                        <option selected>Team</option>
                        <option>Verifikasi Pita Cukai Team A</option>
                    </select>
                    <select class="min-w-fit border-blue-400 py-2 pl-2 text-sm font-bold text-gray-700" id="mode"
                        name="mode">
                        <option selected>Tipe</option>
                        <option value="1">Pencapaian Target</option>
                        <option value="2">Jumlah Verifikasi</option>
                        <option value="3">Rata-Rata</option>
                    </select>
                    <input type="text" class="min-w-fit border-blue-400 py-2 pl-2 text-sm font-bold text-gray-700"
                        id="dateRange" name="dateRange" placeholder="Periode" />
                    <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
                        class="inline-block rounded-r bg-blue-500 px-3 py-2 text-sm font-semibold leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-lg focus:bg-blue-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg">Reset</button>
                </div>
            </div>
        </div>
        <div class="min-h-[80vh] w-full overflow-hidden rounded-b-xl bg-white px-8 py-2 shadow drop-shadow-md">
            <canvas id="qtyUnit" name="qtyUnit" class="mt-6"></canvas>
        </div>
    </div>
@endsection
@section('script-js')
    @push('js')
        <script src="{{ asset('js/performance/qty-unit.js') }}"></script>
        <script src="{{ asset('component/chart/qty-unit.js') }}"></script>
    @endpush
@endsection
