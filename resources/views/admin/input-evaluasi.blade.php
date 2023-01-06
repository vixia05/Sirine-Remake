@section('title', 'Pesan Evaluasi')
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
                        Evaluasi Pegawai</h4>
                </div>
                <div class="px-4 pb-4">
                    <form class="py-4">
                        <div class="grid grid-cols-2 gap-4">
                            {{-- 1.1 Input NP --}}
                            <div class="mb-4 flex flex-col">
                                <label for="np"
                                    class="inline-block pb-2 text-sm font-medium text-slate-600 dark:text-slate-300">Nomor
                                    Pegawai</label>
                                <input type="text" maxlength="4"
                                    class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                    id="np" name="np" value="{{ old('np') }}" required>
                            </div>
                            {{-- 1.2 Input Nama --}}
                            <div class="flex flex-col">
                                <label for="nama"
                                    class="inline-block pb-2 text-sm font-medium text-slate-600 dark:text-slate-300">Nama</label>
                                <input type="text"
                                    class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                    id="nama" name="np" value="{{ old('nama') }}" required>
                            </div>
                        </div>
                        {{-- 1.2 Input Nama --}}
                        <div class="mb-4 flex flex-col">
                            <label for="subject"
                                class="inline-block pb-2 text-sm font-medium text-slate-600 dark:text-slate-300">Prihal</label>
                            <select
                                class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                id="subject" name="subject">
                                <option value="1" selected>Kinerja</option>
                                <option value="2">Kehadiran</option>
                            </select>
                        </div>
                        {{-- 1.2 Input Nama --}}
                        <div class="flex flex-col">
                            <label for="evaluasi"
                                class="inline-block pb-2 text-sm font-medium text-slate-600 dark:text-slate-300">Pesan
                                Evaluasi</label>
                            <textarea
                                class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                id="evaluasi" name="evaluasi" value="{{ old('evaluasi') }}" rows="4"
                                required></textarea>
                        </div>
                        {{-- Submit --}}
                        <div class="flex justify-end space-x-2 pt-8">
                            <button type="submit" data-mdb-ripple="true" data-mdb-ripple-color="light"
                                class="inline-block rounded bg-blue-600 px-6 py-2.5 text-sm font-medium uppercase leading-tight text-blue-50 shadow-md transition duration-150 ease-in-out hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
