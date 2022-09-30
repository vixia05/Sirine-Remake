@section('title', 'Input Kelolosan')
@extends('layouts.app')
@section('content')
<div class="container">

    <div class="mx-auto px-6 py-6 lg:px-8">
        <div class="flex justify-center">
            <div class="rounded bg-slate-800 bg-opacity-70 p-4 text-slate-100 backdrop-blur-sm backdrop-filter">
                <h6 class="border-b-2 pb-2 text-xl">Input Data Kelolosan</h6>
                <form class="py-4">
                    {{-- 1.3 Input Tanggal --}}
                    <div class="flex flex-col mb-4">
                        <label for="tglCek" class="inline-block pb-2 font-medium text-slate-300">Tanggal Cek K3</label>
                        <input type="date"
                            class="w-full rounded-md border-none bg-slate-600 bg-opacity-60 leading-tight drop-shadow-md focus:ring-blue-500"
                            id="tglCek" name="tglCek" value="{{ old('tglCek') }}" required>
                    </div>
                    {{-- 1.1 Input NP --}}
                    <div class="flex flex-col mb-4">
                        <label for="np" class="inline-block pb-2 font-medium text-slate-300">Nomor Pegawai</label>
                        <input type="text" maxlength="4"
                            class="w-full rounded-md border-none bg-slate-600 bg-opacity-60 leading-tight drop-shadow-md focus:ring-blue-500"
                            id="np" name="np" value="{{ old('np') }}" required>
                    </div>
                    {{-- 1.2 Input Nama --}}
                    <div class="flex flex-col">
                        <label for="nama" class="inline-block pb-2 font-medium text-slate-300">Nama</label>
                        <input type="text"
                            class="w-full rounded-md border-none bg-slate-600 bg-opacity-60 leading-tight drop-shadow-md focus:ring-blue-500"
                            id="nama" name="np" value="{{ old('nama') }}" required>
                    </div>
                    <div class="mt-6">
                        <h6 class="border-b-2 pb-2 text-xl mb-6">Jenis Kelolosan </h6>
                        {{-- 2.1 Jenis Produk --}}
                        <div class="flex flex-col justify-center">
                            <label for="jProduk" class="inline-block pb-2 font-medium text-slate-300">Jenis Produk</label>
                            <select
                                class="w-full rounded-md border-none bg-slate-600 bg-opacity-60 leading-tight drop-shadow-md focus:ring-blue-500"
                                id="jProduk" name="jProduk" required>
                                <option value="1" selected>PCHT</option>
                                <option value="2" selected>MMEA</option>
                            </select>
                        </div>
                        {{-- 2.2 Jenis Kelolosan Row 1 --}}
                        <div class="grid grid-cols-4 gap-4 mt-4">
                            {{-- 2.2.1 Kelolosan Blobor --}}
                            <div>
                                <label for="blobor" class="inline-block pb-2 font-medium text-slate-300">Blobor</label>
                                <input type="number" min="0"
                                    class="w-full rounded-md border-none bg-slate-600 bg-opacity-60 leading-tight drop-shadow-md focus:ring-blue-500"
                                    id="blobor" name="blobor" value="{{ old('blobor') }}" required>
                            </div>
                            {{-- 2.2. Kelolosan --}}
                            <div>
                                <label for="" class="inline-block pb-2 font-medium text-slate-300">Plooi</label>
                                <input type="number" min="0"
                                    class="w-full rounded-md border-none bg-slate-600 bg-opacity-60 leading-tight drop-shadow-md focus:ring-blue-500"
                                    id="" name="" value="{{ old('') }}" required>
                            </div>
                            {{-- 2.2. Kelolosan --}}
                            <div>
                                <label for="" class="inline-block pb-2 font-medium text-slate-300">Blur</label>
                                <input type="number" min="0"
                                    class="w-full rounded-md border-none bg-slate-600 bg-opacity-60 leading-tight drop-shadow-md focus:ring-blue-500"
                                    id="" name="" value="{{ old('') }}" required>
                            </div>
                            {{-- 2.2. Kelolosan --}}
                            <div>
                                <label for="" class="inline-block pb-2 font-medium text-slate-300">Hologram</label>
                                <input type="number" min="0"
                                    class="w-full rounded-md border-none bg-slate-600 bg-opacity-60 leading-tight drop-shadow-md focus:ring-blue-500"
                                    id="" name="" value="{{ old('') }}" required>
                            </div>
                        </div>
                        {{-- 2.2 Jenis Kelolosan Row 1 --}}
                        <div class="grid grid-cols-4 gap-4 mt-4">
                            {{-- 2.2.1 Kelolosan Blobor --}}
                            <div>
                                <label for="blobor" class="inline-block pb-2 font-medium text-slate-300">Noda</label>
                                <input type="number" min="0"
                                    class="w-full rounded-md border-none bg-slate-600 bg-opacity-60 leading-tight drop-shadow-md focus:ring-blue-500"
                                    id="blobor" name="blobor" value="{{ old('blobor') }}" required>
                            </div>
                            {{-- 2.2. Kelolosan --}}
                            <div>
                                <label for="" class="inline-block pb-2 font-medium text-slate-300">Miss Register</label>
                                <input type="number" min="0"
                                    class="w-full rounded-md border-none bg-slate-600 bg-opacity-60 leading-tight drop-shadow-md focus:ring-blue-500"
                                    id="" name="" value="{{ old('') }}" required>
                            </div>
                            {{-- 2.2. Kelolosan --}}
                            <div>
                                <label for="" class="inline-block pb-2 font-medium text-slate-300">Tipis</label>
                                <input type="number" min="0"
                                    class="w-full rounded-md border-none bg-slate-600 bg-opacity-60 leading-tight drop-shadow-md focus:ring-blue-500"
                                    id="" name="" value="{{ old('') }}" required>
                            </div>
                            {{-- 2.2. Kelolosan --}}
                            <div>
                                <label for="" class="inline-block pb-2 font-medium text-slate-300">Gradasi</label>
                                <input type="number" min="0"
                                    class="w-full rounded-md border-none bg-slate-600 bg-opacity-60 leading-tight drop-shadow-md focus:ring-blue-500"
                                    id="" name="" value="{{ old('') }}" required>
                            </div>
                        </div>
                        {{-- 2.2 Jenis Kelolosan Row 1 --}}
                        <div class="grid grid-cols-4 gap-4 mt-4">
                            {{-- 2.2.1 Kelolosan Blobor --}}
                            <div>
                                <label for="blobor" class="inline-block pb-2 font-medium text-slate-300">Sobek</label>
                                <input type="number" min="0"
                                    class="w-full rounded-md border-none bg-slate-600 bg-opacity-60 leading-tight drop-shadow-md focus:ring-blue-500"
                                    id="blobor" name="blobor" value="{{ old('blobor') }}" required>
                            </div>
                            {{-- 2.2. Kelolosan --}}
                            <div>
                                <label for="" class="inline-block pb-2 font-medium text-slate-300">Terpotong</label>
                                <input type="number" min="0"
                                    class="w-full rounded-md border-none bg-slate-600 bg-opacity-60 leading-tight drop-shadow-md focus:ring-blue-500"
                                    id="" name="" value="{{ old('') }}" required>
                            </div>
                            {{-- 2.2. Kelolosan --}}
                            <div>
                                <label for="" class="inline-block pb-2 font-medium text-slate-300">Tercampur</label>
                                <input type="number" min="0"
                                    class="w-full rounded-md border-none bg-slate-600 bg-opacity-60 leading-tight drop-shadow-md focus:ring-blue-500"
                                    id="" name="" value="{{ old('') }}" required>
                            </div>
                            {{-- 2.2. Kelolosan --}}
                            <div>
                                <label for="" class="inline-block pb-2 font-medium text-slate-300">Botak \ Blanko</label>
                                <input type="number" min="0"
                                    class="w-full rounded-md border-none bg-slate-600 bg-opacity-60 leading-tight drop-shadow-md focus:ring-blue-500"
                                    id="" name="" value="{{ old('') }}" required>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
