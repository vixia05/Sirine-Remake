@section('title', 'Input Kelolosan')
@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="px-6 py-6 mx-auto lg:px-8">
            <div class="flex justify-center">
                <div class="p-4 rounded bg-slate-800 bg-opacity-70 text-slate-100 backdrop-blur-sm backdrop-filter">
                    <h6 class="pb-2 text-xl border-b-2">Input Data Kelolosan</h6>
                    <form class="py-4">
                        <div class="grid grid-cols-3 gap-4">
                            {{-- 1.3 Input Tanggal --}}
                            <div class="flex flex-col mb-4">
                                <label for="tglCek" class="inline-block pb-2 font-medium text-slate-300">Tanggal Cek K3</label>
                                <input type="date"
                                    class="w-full font-light leading-tight border-none rounded-md bg-slate-600 bg-opacity-60 drop-shadow-md focus:ring-blue-500"
                                    id="tglCek" name="tglCek" value="{{ old('tglCek') }}" required>
                            </div>
                            {{-- 1.1 Input NP --}}
                            <div class="flex flex-col mb-4">
                                <label for="np" class="inline-block pb-2 font-medium text-slate-300">Nomor Pegawai</label>
                                <input type="text" maxlength="4"
                                    class="w-full font-light leading-tight border-none rounded-md bg-slate-600 bg-opacity-60 drop-shadow-md focus:ring-blue-500"
                                    id="np" name="np" value="{{ old('np') }}" required>
                            </div>
                            {{-- 1.2 Input Nama --}}
                            <div class="flex flex-col">
                                <label for="nama" class="inline-block pb-2 font-medium text-slate-300">Nama</label>
                                <input type="text"
                                    class="w-full font-light leading-tight border-none rounded-md bg-slate-600 bg-opacity-60 drop-shadow-md focus:ring-blue-500"
                                    id="nama" name="np" value="{{ old('nama') }}" required>
                            </div>
                        </div>
                        {{-- 1.2 Input Nama --}}
                        <div class="flex flex-col">
                            <label for="evaluasi" class="inline-block pb-2 font-medium text-slate-300">Pesan Evaluasi</label>
                            <textarea
                                class="w-full font-light leading-tight border-none rounded-md bg-slate-600 bg-opacity-60 drop-shadow-md focus:ring-blue-500"
                                id="evaluasi" name="evaluasi" value="{{ old('evaluasi') }}" rows="4" required></textarea>
                        </div>
                        <div class="mt-6">
                            <h6 class="pb-2 mb-6 text-xl border-b-2">Jenis Kelolosan </h6>
                            {{-- 2.1 Jenis Produk --}}
                            <div class="flex flex-col justify-center">
                                <label for="jProduk" class="inline-block pb-2 font-medium text-slate-300">Jenis
                                    Produk</label>
                                <select
                                    class="w-full font-light leading-tight border-none rounded-md bg-slate-600 bg-opacity-60 drop-shadow-md focus:ring-blue-500"
                                    id="jProduk" name="jProduk" required>
                                    <option value="1" selected>PCHT</option>
                                    <option value="2">MMEA</option>
                                </select>
                            </div>
                            {{-- 2.2 Jenis Kelolosan Row 1 --}}
                            <div class="grid grid-cols-4 gap-4 mt-4">
                                {{-- 2.2.1 Kelolosan Blobor --}}
                                <div>
                                    <label for="blobor"
                                        class="inline-block pb-2 font-medium text-slate-300">Blobor</label>
                                    <input type="number" min="0"
                                        class="w-full font-light leading-tight border-none rounded-md bg-slate-600 bg-opacity-60 drop-shadow-md focus:ring-blue-500"
                                        id="blobor" name="blobor" value="{{ old('blobor') }}" required>
                                </div>
                                {{-- 2.2. Kelolosan --}}
                                <div>
                                    <label for="plooi" class="inline-block pb-2 font-medium text-slate-300">Plooi</label>
                                    <input type="number" min="0"
                                        class="w-full font-light leading-tight border-none rounded-md bg-slate-600 bg-opacity-60 drop-shadow-md focus:ring-blue-500"
                                        id="plooi" name="plooi" value="{{ old('plooi') }}" required>
                                </div>
                                {{-- 2.2. Kelolosan --}}
                                <div>
                                    <label for="blur" class="inline-block pb-2 font-medium text-slate-300">Blur</label>
                                    <input type="number" min="0"
                                        class="w-full font-light leading-tight border-none rounded-md bg-slate-600 bg-opacity-60 drop-shadow-md focus:ring-blue-500"
                                        id="blur" name="blur" value="{{ old('blur') }}" required>
                                </div>
                                {{-- 2.2. Kelolosan --}}
                                <div>
                                    <label for="hologram"
                                        class="inline-block pb-2 font-medium text-slate-300">Hologram</label>
                                    <input type="number" min="0"
                                        class="w-full font-light leading-tight border-none rounded-md bg-slate-600 bg-opacity-60 drop-shadow-md focus:ring-blue-500"
                                        id="hologram" name="hologram" value="{{ old('hologram') }}" required>
                                </div>
                            </div>
                            {{-- 2.2 Jenis Kelolosan Row 1 --}}
                            <div class="grid grid-cols-4 gap-4 mt-4">
                                {{-- 2.2.1 Kelolosan Blobor --}}
                                <div>
                                    <label for="noda" class="inline-block pb-2 font-medium text-slate-300">Noda</label>
                                    <input type="number" min="0"
                                        class="w-full font-light leading-tight border-none rounded-md bg-slate-600 bg-opacity-60 drop-shadow-md focus:ring-blue-500"
                                        id="noda" name="blobor" value="{{ old('noda') }}" required>
                                </div>
                                {{-- 2.2. Kelolosan --}}
                                <div>
                                    <label for="missReg" class="inline-block pb-2 font-medium text-slate-300">Miss
                                        Register</label>
                                    <input type="number" min="0"
                                        class="w-full font-light leading-tight border-none rounded-md bg-slate-600 bg-opacity-60 drop-shadow-md focus:ring-blue-500"
                                        id="missReg" name="missReg" value="{{ old('missReg') }}" required>
                                </div>
                                {{-- 2.2. Kelolosan --}}
                                <div>
                                    <label for="tipis" class="inline-block pb-2 font-medium text-slate-300">Tipis</label>
                                    <input type="number" min="0"
                                        class="w-full font-light leading-tight border-none rounded-md bg-slate-600 bg-opacity-60 drop-shadow-md focus:ring-blue-500"
                                        id="tipis" name="tipis" value="{{ old('tipis') }}" required>
                                </div>
                                {{-- 2.2. Kelolosan --}}
                                <div>
                                    <label for="gradasi"
                                        class="inline-block pb-2 font-medium text-slate-300">Gradasi</label>
                                    <input type="number" min="0"
                                        class="w-full font-light leading-tight border-none rounded-md bg-slate-600 bg-opacity-60 drop-shadow-md focus:ring-blue-500"
                                        id="gradasi" name="gradasi" value="{{ old('gradasi') }}" required>
                                </div>
                            </div>
                            {{-- 2.2 Jenis Kelolosan Row 1 --}}
                            <div class="grid grid-cols-4 gap-4 mt-4">
                                {{-- 2.2.1 Kelolosan Blobor --}}
                                <div>
                                    <label for="sobek"
                                        class="inline-block pb-2 font-medium text-slate-300">Sobek</label>
                                    <input type="number" min="0"
                                        class="w-full font-light leading-tight border-none rounded-md bg-slate-600 bg-opacity-60 drop-shadow-md focus:ring-blue-500"
                                        id="sobek" name="sobek" value="{{ old('sobek') }}" required>
                                </div>
                                {{-- 2.2. Kelolosan --}}
                                <div>
                                    <label for="terpotong"
                                        class="inline-block pb-2 font-medium text-slate-300">Terpotong</label>
                                    <input type="number" min="0"
                                        class="w-full font-light leading-tight border-none rounded-md bg-slate-600 bg-opacity-60 drop-shadow-md focus:ring-blue-500"
                                        id="terpotong" name="terpotong" value="{{ old('terpotong') }}" required>
                                </div>
                                {{-- 2.2. Kelolosan --}}
                                <div>
                                    <label for="tercampur"
                                        class="inline-block pb-2 font-medium text-slate-300">Tercampur</label>
                                    <input type="number" min="0"
                                        class="w-full font-light leading-tight border-none rounded-md bg-slate-600 bg-opacity-60 drop-shadow-md focus:ring-blue-500"
                                        id="tercampur" name="tercampur" value="{{ old('tercampur') }}" required>
                                </div>
                                {{-- 2.2. Kelolosan --}}
                                <div>
                                    <label for="botak" class="inline-block pb-2 font-medium text-slate-300">Botak \
                                        Blanko</label>
                                    <input type="number" min="0"
                                        class="w-full font-light leading-tight border-none rounded-md bg-slate-600 bg-opacity-60 drop-shadow-md focus:ring-blue-500"
                                        id="botak" name="" value="{{ old('botak') }}" required>
                                </div>
                            </div>
                            {{-- Submit --}}
                            <div class="flex justify-end pt-8 space-x-2">
                                <button type="submit" data-mdb-ripple="true" data-mdb-ripple-color="light"
                                    class="inline-block px-6 py-2.5 bg-blue-600 text-blue-50 font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
