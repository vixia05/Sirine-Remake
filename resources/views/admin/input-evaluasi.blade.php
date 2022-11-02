@section('title', 'Pesan Evaluasi')
@extends('layouts.app')
@section('content')
<div class="mx-auto px-4 py-6 lg:px-8">
    <div class="grid grid-cols-1">
        <div
            class="w-full lg:w-1/2 rounded-md bg-white/70 p-4 text-slate-800 backdrop-blur-sm backdrop-filter dark:bg-slate-800 dark:bg-opacity-70 dark:text-slate-100">
            <h6 class="border-b-2 border-slate-600 pb-2 text-xl">PESAN EVALUASI</h6>
            <form class="py-4">
                <div class="grid grid-cols-2 gap-4">
                    {{-- 1.1 Input NP --}}
                    <div class="mb-4 flex flex-col">
                        <label for="np" class="inline-block pb-2 font-medium text-slate-600 dark:text-slate-300">Nomor
                            Pegawai</label>
                        <input type="text" maxlength="4"
                            class="w-full rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 font-light leading-tight drop-shadow-md focus:ring-blue-500 dark:bg-slate-600  dark:bg-opacity-40 dark:focus:bg-opacity-100"
                            id="np" name="np" value="{{ old('np') }}" required>
                    </div>
                    {{-- 1.2 Input Nama --}}
                    <div class="flex flex-col">
                        <label for="nama"
                            class="inline-block pb-2 font-medium text-slate-600 dark:text-slate-300">Nama</label>
                        <input type="text"
                            class="w-full rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 font-light leading-tight drop-shadow-md focus:ring-blue-500 dark:bg-slate-600  dark:bg-opacity-40 dark:focus:bg-opacity-100"
                            id="nama" name="np" value="{{ old('nama') }}" required>
                    </div>
                </div>
                {{-- 1.2 Input Nama --}}
                <div class="mb-4 flex flex-col">
                    <label for="subject"
                        class="inline-block pb-2 font-medium text-slate-600 dark:text-slate-300">Prihal</label>
                    <select
                        class="w-full rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 font-light leading-tight drop-shadow-md focus:ring-blue-500 dark:bg-slate-600  dark:bg-opacity-40 dark:focus:bg-opacity-100"
                        id="subject" name="subject">
                        <option value="1" selected>Kinerja</option>
                        <option value="2">Kehadiran</option>
                    </select>
                </div>
                {{-- 1.2 Input Nama --}}
                <div class="flex flex-col">
                    <label for="evaluasi" class="inline-block pb-2 font-medium text-slate-600 dark:text-slate-300">Pesan
                        Evaluasi</label>
                    <textarea
                        class="w-full rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 font-light leading-tight drop-shadow-md focus:ring-blue-500 dark:bg-slate-600  dark:bg-opacity-40 dark:focus:bg-opacity-100"
                        id="evaluasi" name="evaluasi" value="{{ old('evaluasi') }}" rows="4" required></textarea>
                </div>
                {{-- Submit --}}
                <div class="flex justify-end space-x-2 pt-8">
                    <button type="submit" data-mdb-ripple="true" data-mdb-ripple-color="light"
                        class="inline-block rounded bg-blue-600 px-6 py-2.5 text-xs font-medium uppercase leading-tight text-blue-50 shadow-md transition duration-150 ease-in-out hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
