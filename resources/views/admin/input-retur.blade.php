@section('title', 'Input Kelolosan')
@extends('layouts.app')
@section('content')
<div class="grid grid-cols-1">
    <div class="mx-auto px-4 py-6 lg:px-8">
        <div class="flex justify-center">
            <div
                class="w-full rounded-md bg-gradient-to-br from-slate-50 via-slate-100 to-slate-50  dark:bg-slate-800 dark:from-transparent dark:to-transparent dark:bg-opacity-60 dark:backdrop-blur-sm dark:backdrop-filter">
                {{-- Header --}}
                <div class="px-4 py-6">
                    <h4
                        class="my-auto border-b-2 pb-2 font-sans text-lg font-semibold leading-tight text-slate-500 dark:text-slate-100">
                        Kelolosan Pegawai</h4>
                </div>
                @if(session('success'))
                <div
                    class="bg-green-500 brightness-110 text-green-100 shadow-lg shadow-green-500/50 my-3 p-2 rounded text-center">
                    <h5 class="text-2xl">Data Berhasil Di Simpan</h5>
                </div>
                @endif
                <div class="px-4 pb-4">
                    <form class="py-4" action="{{ route('inputRetur.store') }}" method="post">
                        @method('post')
                        @csrf
                        <div class="grid grid-cols-2 gap-4">
                            {{-- 1.3 Input Tanggal --}}
                            <div class="mb-4 flex flex-col w-full">
                                <label for="tglCek"
                                    class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Tanggal Cek
                                    K3</label>
                                <input type="date"
                                    class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                    id="tglCek" name="tglCek" value="{{ old('tglCek') }}" required>
                            </div>
                            {{-- 1.1 Input NP --}}
                            <div class="mb-4 flex flex-col">
                                <label for="np"
                                    class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Nomor
                                    Pegawai</label>
                                <select required
                                    class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                    id="npUser" name="npUser">
                                    @foreach ($npUser as $np)
                                    <option value="{{ $np }}">{{ $np }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        {{-- 1.2 Input Nama --}}
                        <div class="flex flex-col">
                            <label for="evaluasi"
                                class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Pesan
                                Evaluasi</label>
                            <textarea
                                class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                id="evaluasi" name="evaluasi" value="{{ old('evaluasi') }}" rows="4"></textarea>
                        </div>
                        <div class="mt-6">
                            <h6 class="my-auto font-sans text-lg font-semibold leading-tight text-slate-500 dark:text-slate-100 border-b-2 pb-2 mb-2">Jenis Kelolosan
                            </h6>
                            {{-- 2.1 Jenis Produk --}}
                            <div class="flex flex-col justify-center">
                                <label for="jProduk"
                                    class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Jenis
                                    Produk</label>
                                <select
                                    class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                    id="jProduk" name="jProduk">
                                    <option value="PCHT" selected>PCHT</option>
                                    <option value="MMEA">MMEA</option>
                                </select>
                            </div>
                            {{-- 2.2 Jenis Kelolosan Row 1 --}}
                            <div class="mt-4 grid grid-cols-2 md:grid-cols-4 gap-4">
                                {{-- 2.2.1 Kelolosan Blobor --}}
                                <div>
                                    <label for="blobor"
                                        class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Blobor</label>
                                    <input type="number" min="0"
                                        class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                        id="blobor" name="blobor" value="{{ old('blobor') }}">
                                </div>
                                {{-- 2.2. Kelolosan Plooi --}}
                                <div>
                                    <label for="plooi"
                                        class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Plooi</label>
                                    <input type="number" min="0"
                                        class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                        id="plooi" name="plooi" value="{{ old('plooi') }}">
                                </div>
                                {{-- 2.2. Kelolosan Blur --}}
                                <div>
                                    <label for="blur"
                                        class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Blur</label>
                                    <input type="number" min="0"
                                        class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                        id="blur" name="blur" value="{{ old('blur') }}">
                                </div>
                                {{-- 2.2. Kelolosan Hologram --}}
                                <div>
                                    <label for="hologram"
                                        class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Hologram</label>
                                    <input type="number" min="0"
                                        class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                        id="hologram" name="hologram" value="{{ old('hologram') }}">
                                </div>
                            </div>
                            {{-- 2.2 Jenis Kelolosan Row 1 --}}
                            <div class="mt-4 grid  grid-cols-2 md:grid-cols-4 gap-4">
                                {{-- 2.2.1 Kelolosan Blobor --}}
                                <div>
                                    <label for="noda"
                                        class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Noda</label>
                                    <input type="number" min="0"
                                        class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                        id="noda" name="noda" value="{{ old('noda') }}">
                                </div>
                                {{-- 2.2. Kelolosan Miss Reg --}}
                                <div>
                                    <label for="missReg"
                                        class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Miss
                                        Register</label>
                                    <input type="number" min="0"
                                        class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                        id="missReg" name="missReg" value="{{ old('missReg') }}">
                                </div>
                                {{-- 2.2. Kelolosan Tipis--}}
                                <div>
                                    <label for="tipis"
                                        class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Tipis</label>
                                    <input type="number" min="0"
                                        class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                        id="tipis" name="tipis" value="{{ old('tipis') }}">
                                </div>
                                {{-- 2.2. Kelolosan Gradasi--}}
                                <div>
                                    <label for="gradasi"
                                        class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Gradasi</label>
                                    <input type="number" min="0"
                                        class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                        id="gradasi" name="gradasi" value="{{ old('gradasi') }}">
                                </div>
                            </div>
                            {{-- 2.2 Jenis Kelolosan Row 1 --}}
                            <div class="mt-4 grid  grid-cols-2 md:grid-cols-4 gap-4">
                                {{-- 2.2.1 Kelolosan Sobek --}}
                                <div>
                                    <label for="sobek"
                                        class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Sobek</label>
                                    <input type="number" min="0"
                                        class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                        id="sobek" name="sobek" value="{{ old('sobek') }}">
                                </div>
                                {{-- 2.2. Kelolosan Terpotong --}}
                                <div>
                                    <label for="terpotong"
                                        class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Terpotong</label>
                                    <input type="number" min="0"
                                        class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                        id="terpotong" name="terpotong" value="{{ old('terpotong') }}">
                                </div>
                                {{-- 2.2. Kelolosan Tercampur --}}
                                <div>
                                    <label for="tercampur"
                                        class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Tercampur</label>
                                    <input type="number" min="0"
                                        class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                        id="tercampur" name="tercampur" value="{{ old('tercampur') }}">
                                </div>
                                {{-- 2.2. Kelolosan Botak \ Blanko--}}
                                <div>
                                    <label for="botak"
                                        class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Botak \
                                        Blanko</label>
                                    <input type="number" min="0"
                                        class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                        id="botak" name="botak" value="{{ old('botak') }}">
                                </div>
                            </div>
                            {{-- Submit --}}
                            <div class="flex justify-end space-x-2 pt-8">
                                <button type="submit" data-mdb-ripple="true" data-mdb-ripple-color="light"
                                    class="inline-block rounded bg-blue-600 px-6 py-2.5 text-xs font-medium uppercase leading-tight text-blue-50 shadow-md transition duration-150 ease-in-out hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
