@section('title', 'Pesan Evaluasi')
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="px-6 py-6 mx-auto lg:px-8">
            <div class="flex justify-center">
                <div class="p-4 rounded bg-slate-800 bg-opacity-70 text-slate-100 backdrop-blur-sm backdrop-filter w-1/2">
                    <h6 class="pb-2 text-xl border-b-2">Pesan Evaluasi</h6>
                    <form class="py-4">
                        <div class="grid grid-cols-2 gap-4">
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
                        <div class="flex flex-col mb-4">
                            <label for="subject" class="inline-block pb-2 font-medium text-slate-300">Prihal</label>
                            <select
                                class="w-full font-light leading-tight border-none rounded-md bg-slate-600 bg-opacity-60 drop-shadow-md focus:ring-blue-500"
                                id="subject" name="subject">
                                <option value="1" selected>Kinerja</option>
                                <option value="2">Kehadiran</option>
                            </select>
                        </div>
                        {{-- 1.2 Input Nama --}}
                        <div class="flex flex-col">
                            <label for="evaluasi" class="inline-block pb-2 font-medium text-slate-300">Pesan Evaluasi</label>
                            <textarea
                                class="w-full font-light leading-tight border-none rounded-md bg-slate-600 bg-opacity-60 drop-shadow-md focus:ring-blue-500"
                                id="evaluasi" name="evaluasi" value="{{ old('evaluasi') }}" rows="4" required></textarea>
                        </div>
                        {{-- Submit --}}
                        <div class="flex justify-end pt-8 space-x-2">
                            <button type="submit" data-mdb-ripple="true" data-mdb-ripple-color="light"
                                class="inline-block px-6 py-2.5 bg-blue-600 text-blue-50 font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
