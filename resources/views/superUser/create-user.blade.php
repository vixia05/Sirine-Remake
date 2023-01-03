@section('title', 'Create User')
@extends('layouts.app')
@section('content')
<div class="py-6">
    <div class="px-4 mx-auto lg:px-8">
        <form method="post" action="{{ route('users.store') }}" autocomplete="off" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                {{-- 1.0 Form Data Pegawai --}}
                <div
                    class="px-8 py-4 rounded-lg  bg-gradient-to-br from-slate-50 via-slate-100 to-slate-50 dark:backdrop-blur-sm dark:backdrop-filter dark:bg-slate-800 dark:bg-opacity-70">
                    <h5
                        class="pt-5 pb-3 mb-6 text-xl font-bold border-b-2 border-slate-600 text-slate-600 dark:border-slate-100 dark:text-slate-100">
                        DATA PEGAWAI</h5>
                    @csrf
                    {{-- 1.1 Input Nomor Pegawai --}}
                    <div class="grid grid-rows-2 mb-6">
                        <label for="np" class="inline-block py-1 font-medium text-slate-700 dark:text-slate-200">Nomor
                            Pegawai</label>
                        <input type="text" maxlength="4"
                            class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                            id="np" name="np" value="{{ old('np') }}" required>
                    </div>
                    {{-- 1.2 Input Nama Pegawai --}}
                    <div class="grid grid-rows-2 mb-6">
                        <label for="name"
                            class="inline-block font-medium text-slate-700 dark:text-slate-200">Nama</label>
                        <input type="text"
                            class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                            id="name" name="name" value="{{ old('name') }}" required>
                    </div>
                    {{-- 1.3 Input E-mail Pegawai --}}
                    <div class="grid grid-rows-2 mb-6">
                        <label for="email"
                            class="inline-block font-medium text-slate-700 dark:text-slate-200">E-Mail</label>
                        <input type="email"
                            class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                            id="email" name="email" value="{{ old('email') }}" required>
                    </div>
                    {{-- 1.5 Input Contact Pegawai --}}
                    <div class="grid grid-rows-2 mb-6">
                        <label for="contact"
                            class="inline-block font-medium text-slate-700 dark:text-slate-200">Contact</label>
                        <input type="text"
                            class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                            id="contact" name="contact" value="{{ old('contact') }}">
                    </div>
                    {{-- 1.6 Input Tanggal Lahir Pegawai --}}
                    <div class="grid grid-rows-2 mb-6">
                        <label for="birthDate"
                            class="inline-block font-medium text-slate-700 dark:text-slate-200">Tanggal Lahir</label>
                        <input type="date"
                            class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                            id="birthDate" name="birthDate" value="{{ old('birthDate') }}">
                    </div>
                    {{-- 1.6 Input Alamat Pegawai --}}
                    <div class="mb-6 form-control flex-col flex gap-2">
                        <label for="address"
                            class="inline-block font-medium text-slate-700 dark:text-slate-200">Alamat</label>
                        <textarea
                            class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                            id="address" name="address" value="{{ old('address') }}"></textarea>
                    </div>
                    {{-- Submit --}}
                    <div class="flex justify-end pt-4 space-x-2">
                        <button type="submit" data-mdb-ripple="true" data-mdb-ripple-color="light"
                            class="inline-block rounded bg-blue-500 brightness-125 px-6 py-2.5 text-xs font-medium uppercase leading-tight tracking-wider text-blue-100 shadow-md transition duration-300 ease-in-out hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg dark:text-slate-100 hover:shadow-blue-500/30">Simpan</button>
                    </div>
                </div>
                {{-- 2.0 Form Unit Kerja --}}
                <div class="grid grid-rows-2 gap-4">
                    <div
                        class="px-8 py-2 rounded-lg  bg-gradient-to-br from-slate-50 via-slate-100 to-slate-50 dark:backdrop-blur-sm dark:backdrop-filter dark:bg-slate-800 dark:bg-opacity-70">
                        <h5
                            class="pt-5 pb-3 mb-4 text-xl font-bold border-b-2 border-slate-600 text-slate-600 dark:border-slate-100 dark:text-slate-100">
                            Unit Kerja</h5>
                        {{-- 2.1 Select Divisi --}}
                        <div class="mb-5 form-control flex flex-col gap-2">
                            <label for="division"
                                class="inline-block font-medium text-slate-700 dark:text-slate-200">Divisi</label>
                            <select
                                class="w-full text-sm leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                id="divisi" name="divisi">
                                <option value="1">SBU Produk Non Uang</option>
                            </select>
                        </div>
                        {{-- 2.2 Select Seksi --}}
                        <div class="mb-5 form-control flex flex-col gap-2">
                            <label for="division"
                                class="inline-block font-medium text-slate-700 dark:text-slate-200">Seksi</label>
                            <select
                                class="w-full text-sm leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                id="seksi" name="seksi">
                                @foreach ($listSeksi as $seksi)
                                <option value="{{ $seksi->id }}">{{ $seksi->seksi }}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- 2.3 Select Unit --}}
                        <div class="mb-5 form-control flex flex-col gap-2">
                            <label for="division"
                                class="inline-block font-medium text-slate-700 dark:text-slate-200">Unit</label>
                            <select
                                class="w-full text-sm leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                id="unit" name="unit">
                                @foreach ($listUnit as $unit)
                                <option value="{{ $unit->id }}">{{ $unit->unit }}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- 2.4 Select Workstation --}}
                        <div class="mb-5 form-control flex flex-col gap-2">
                            <label for="division"
                                class="inline-block font-medium text-slate-700 dark:text-slate-200">Workstation</label>
                            <select
                                class="w-full text-sm leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                id="workstation" name="workstation">
                                @foreach ($listWorkstation as $station)
                                <option value="{{ $station->id }}">{{ $station->workstation }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    {{-- 3.0 Form Privillage --}}
                    <div
                        class="px-8 py-2 rounded-lg  bg-gradient-to-br from-slate-50 via-slate-100 to-slate-50 dark:backdrop-blur-sm dark:backdrop-filter dark:bg-slate-800 dark:bg-opacity-70">
                        <h5
                            class="pt-6 pb-3 mb-6 text-xl font-bold border-b-2 border-slate-600 text-slate-600 dark:border-slate-100 dark:text-slate-100">
                            Privillage</h5>
                        {{-- 3.1 Select Privillige/Role --}}
                        <div class="grid grid-rows-2 mb-4">
                            <label for="division"
                                class="inline-block font-medium text-slate-700 dark:text-slate-200">Privillage</label>
                            <select
                                class="w-full text-sm leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                id="privillage" name="privillage">
                                <option value="1">Super User</option>
                                <option value="2">Kepala Divisi</option>
                                <option value="3">Kepala Seksi</option>
                                <option value="4">Kepala Unit</option>
                                <option value="5">Admin</option>
                                <option value="6" selected>User</option>
                            </select>
                        </div>
                        {{-- 3.1 Select Privillige/Role --}}
                        <div class="grid grid-rows-2 mb-4">
                            <label for="division"
                                class="inline-block font-medium text-slate-700 dark:text-slate-200">Password</label>
                            <input type="password"
                                class="w-full text-sm leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                id="password" name="password" required>
                        </div>
                        <div class="grid grid-rows-2">
                            <label for="division"
                                class="inline-block font-medium text-slate-700 dark:text-slate-200">Confirm Password</label>
                            <input type="password"
                                class="w-full text-sm leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                id="passwordConfirmation" name="passwordConfirmation" required>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
