@section('title', 'Input Kelolosan')
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="mx-auto px-6 py-6 lg:px-8">
            <div class="flex justify-center">
                <div
                    class="rounded bg-white/70 p-4 font-semibold text-slate-800 backdrop-blur-sm backdrop-filter dark:bg-slate-800 dark:bg-opacity-70 dark:text-slate-100">
                    <h6 class="border-b-2 border-slate-600 pb-2 text-xl dark:border-slate-100">INPUT DATA KELOLOSAN</h6>
                    <form class="py-4">
                        <div class="grid grid-cols-3 gap-4">
                            {{-- 1.3 Input Tanggal --}}
                            <div class="mb-4 flex flex-col">
                                <label for="tglCek"
                                    class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Tanggal Cek
                                    K3</label>
                                <input type="date"
                                    class="w-full rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 font-light leading-tight drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40"
                                    id="tglCek" name="tglCek" value="{{ old('tglCek') }}" required>
                            </div>
                            {{-- 1.1 Input NP --}}
                            <div class="mb-4 flex flex-col">
                                <label for="np"
                                    class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Nomor
                                    Pegawai</label>
                                <input type="text" maxlength="4"
                                    class="w-full rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 font-light leading-tight drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600  dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                    id="npUser" name="npUser" value="{{ old('np') }}" required>
                            </div>
                            {{-- 1.2 Input Nama --}}
                            <div class="flex flex-col">
                                <label for="nama"
                                    class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Nama</label>
                                <input type="text"
                                    class="w-full rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 font-light leading-tight drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600  dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                    id="namaUser" name="namaUser" value="{{ old('nama') }}" required>
                            </div>
                        </div>
                        {{-- 1.2 Input Nama --}}
                        <div class="flex flex-col">
                            <label for="evaluasi"
                                class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Pesan
                                Evaluasi</label>
                            <textarea
                                class="w-full rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 font-light leading-tight drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600  dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                id="evaluasi" name="evaluasi" value="{{ old('evaluasi') }}" rows="4" required></textarea>
                        </div>
                        <div class="mt-6">
                            <h6 class="mb-6 border-b-2 border-slate-600 pb-2 text-xl dark:border-slate-100">Jenis Kelolosan
                            </h6>
                            {{-- 2.1 Jenis Produk --}}
                            <div class="flex flex-col justify-center">
                                <label for="jProduk"
                                    class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Jenis
                                    Produk</label>
                                <select
                                    class="w-full rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 font-light leading-tight drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600  dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                    id="jProduk" name="jProduk" required>
                                    <option value="1" selected>PCHT</option>
                                    <option value="2">MMEA</option>
                                </select>
                            </div>
                            {{-- 2.2 Jenis Kelolosan Row 1 --}}
                            <div class="mt-4 grid grid-cols-4 gap-4">
                                {{-- 2.2.1 Kelolosan Blobor --}}
                                <div>
                                    <label for="blobor"
                                        class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Blobor</label>
                                    <input type="number" min="0"
                                        class="w-full rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 font-light leading-tight drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600  dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                        id="blobor" name="blobor" value="{{ old('blobor') }}" required>
                                </div>
                                {{-- 2.2. Kelolosan Plooi --}}
                                <div>
                                    <label for="plooi"
                                        class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Plooi</label>
                                    <input type="number" min="0"
                                        class="w-full rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 font-light leading-tight drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600  dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                        id="plooi" name="plooi" value="{{ old('plooi') }}" required>
                                </div>
                                {{-- 2.2. Kelolosan Blur --}}
                                <div>
                                    <label for="blur"
                                        class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Blur</label>
                                    <input type="number" min="0"
                                        class="w-full rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 font-light leading-tight drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600  dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                        id="blur" name="blur" value="{{ old('blur') }}" required>
                                </div>
                                {{-- 2.2. Kelolosan Hologram --}}
                                <div>
                                    <label for="hologram"
                                        class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Hologram</label>
                                    <input type="number" min="0"
                                        class="w-full rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 font-light leading-tight drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600  dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                        id="hologram" name="hologram" value="{{ old('hologram') }}" required>
                                </div>
                            </div>
                            {{-- 2.2 Jenis Kelolosan Row 1 --}}
                            <div class="mt-4 grid grid-cols-4 gap-4">
                                {{-- 2.2.1 Kelolosan Blobor --}}
                                <div>
                                    <label for="noda"
                                        class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Noda</label>
                                    <input type="number" min="0"
                                        class="w-full rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 font-light leading-tight drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600  dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                        id="noda" name="blobor" value="{{ old('noda') }}" required>
                                </div>
                                {{-- 2.2. Kelolosan Miss Reg --}}
                                <div>
                                    <label for="missReg"
                                        class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Miss
                                        Register</label>
                                    <input type="number" min="0"
                                        class="w-full rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 font-light leading-tight drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600  dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                        id="missReg" name="missReg" value="{{ old('missReg') }}" required>
                                </div>
                                {{-- 2.2. Kelolosan Tipis--}}
                                <div>
                                    <label for="tipis"
                                        class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Tipis</label>
                                    <input type="number" min="0"
                                        class="w-full rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 font-light leading-tight drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600  dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                        id="tipis" name="tipis" value="{{ old('tipis') }}" required>
                                </div>
                                {{-- 2.2. Kelolosan Gradasi--}}
                                <div>
                                    <label for="gradasi"
                                        class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Gradasi</label>
                                    <input type="number" min="0"
                                        class="w-full rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 font-light leading-tight drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600  dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                        id="gradasi" name="gradasi" value="{{ old('gradasi') }}" required>
                                </div>
                            </div>
                            {{-- 2.2 Jenis Kelolosan Row 1 --}}
                            <div class="mt-4 grid grid-cols-4 gap-4">
                                {{-- 2.2.1 Kelolosan Sobek --}}
                                <div>
                                    <label for="sobek"
                                        class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Sobek</label>
                                    <input type="number" min="0"
                                        class="w-full rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 font-light leading-tight drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600  dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                        id="sobek" name="sobek" value="{{ old('sobek') }}" required>
                                </div>
                                {{-- 2.2. Kelolosan Terpotong --}}
                                <div>
                                    <label for="terpotong"
                                        class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Terpotong</label>
                                    <input type="number" min="0"
                                        class="w-full rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 font-light leading-tight drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600  dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                        id="terpotong" name="terpotong" value="{{ old('terpotong') }}" required>
                                </div>
                                {{-- 2.2. Kelolosan Tercampur --}}
                                <div>
                                    <label for="tercampur"
                                        class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Tercampur</label>
                                    <input type="number" min="0"
                                        class="w-full rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 font-light leading-tight drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600  dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                        id="tercampur" name="tercampur" value="{{ old('tercampur') }}" required>
                                </div>
                                {{-- 2.2. Kelolosan Botak \ Blanko--}}
                                <div>
                                    <label for="botak"
                                        class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Botak \
                                        Blanko</label>
                                    <input type="number" min="0"
                                        class="w-full rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 font-light leading-tight drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600  dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                        id="botak" name="" value="{{ old('botak') }}" required>
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
@endsection
