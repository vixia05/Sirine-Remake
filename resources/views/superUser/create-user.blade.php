@extends('layouts.app')
@section('content')
    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            <form method="post" action="{{ route('users.store') }}" autocomplete="off" enctype="multipart/form-data">
                <div class="grid grid-cols-2 gap-4">
                    {{-- 1.0 Form Data Pegawai --}}
                    <div class="rounded-2xl bg-slate-800 bg-opacity-70 backdrop-blur-sm backdrop-filter py-4 px-8">
                        <h5 class="text-white text-xl font-bold mb-6 border-b-2 pt-5 pb-3">Data Pegawai</h5>
                        @csrf
                        {{-- 1.1 Input Nomor Pegawai --}}
                        <div class="grid grid-rows-2 mb-6">
                            <label for="np" class="inline-block text-gray-200 font-medium py-1">Nomor Pegawai</label>
                            <input type="text" maxlength="4" class="border-none w-full rounded-md focus:ring-blue-500 drop-shadow-md bg-slate-600 bg-opacity-60 text-white leading-tight"
                                    id="np" name="np" value="{{ old('np') }}" required>
                        </div>
                        {{-- 1.2 Input Nama Pegawai --}}
                        <div class="grid grid-rows-2 mb-6">
                            <label for="name" class="inline-block text-gray-200 font-medium">Nama</label>
                            <input type="text" class="border-none w-full rounded-md focus:ring-blue-500 bg-slate-600 drop-shadow-md bg-opacity-60 text-white leading-tight"
                                    id="name" name="name" value="{{ old('name') }}" required>
                        </div>
                        {{-- 1.3 Input E-mail Pegawai --}}
                        <div class="grid grid-rows-2 mb-6">
                            <label for="email" class="inline-block text-gray-200 font-medium">E-Mail</label>
                            <input type="email" class="border-none w-full rounded-md focus:ring-blue-500 bg-slate-600 drop-shadow-md bg-opacity-60 text-white leading-tight"
                                    id="email" name="email" value="{{ old('email') }}" required>
                        </div>
                        {{-- 1.5 Input Contact Pegawai --}}
                        <div class="grid grid-rows-2 mb-6">
                            <label for="contact" class="inline-block text-gray-200 font-medium">Contact</label>
                           <input type="text" class="border-none w-full rounded-md focus:ring-blue-500 bg-slate-600 bg-opacity-60 drop-shadow-md text-white leading-tight"
                                    id="contact" name="contact" value="{{ old('contact') }}">
                        </div>
                        {{-- 1.6 Input Tanggal Lahir Pegawai --}}
                        <div class="grid grid-rows-2 mb-6">
                            <label for="birthDate" class="inline-block text-gray-200 font-medium">Tanggal Lahir</label>
                            <input type="date" class="border-none w-full rounded-md focus:ring-blue-500 bg-slate-600 bg-opacity-60 drop-shadow-md text-white leading-tight"
                                    id="birthDate" name="birthDate" value="{{ old('birthDate') }}">
                        </div>
                        {{-- 1.6 Input Alamat Pegawai --}}
                        <div class="form-control mb-6">
                            <label for="address" class="inline-block text-gray-200 font-medium">Alamat</label>
                            <textarea class="border-none w-full rounded-md focus:ring-blue-500 bg-slate-600 bg-opacity-60 drop-shadow-md text-white  leading-tight mt-1" id="address" name="address"
                                    value="{{ old('address') }}"></textarea>
                        </div>
                        {{-- Submit --}}
                        <div class="flex space-x-2 justify-end pt-4">
                            <button type="submit" data-mdb-ripple="true" data-mdb-ripple-color="light"
                                class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Submit</button>
                        </div>
                    </div>
                    {{-- 2.0 Form Unit Kerja --}}
                    <div class="grid grid-rows-2 gap-4">
                        <div class="rounded-2xl bg-slate-800 bg-opacity-70 backdrop-blur-sm backdrop-filter py-2 px-8">
                            <h5 class="text-white text-xl font-bold mb-4 border-b-2 pt-5 pb-3">Unit Kerja</h5>
                            {{-- 2.1 Select Divisi --}}
                            <div class="form-control mb-5">
                                <label for="division" class="inline-block text-gray-200 font-medium">Divisi</label>
                                <select class="border-none w-full rounded-md focus:ring-blue-500 bg-slate-600 bg-opacity-60 text-white leading-tight text-sm"
                                        id="divisi" name="divisi">
                                        <option>SBU Produk Non Uang</option>
                                    </select>
                            </div>
                            {{-- 2.2 Select Seksi --}}
                            <div class="form-control mb-5">
                                <label for="division" class="inline-block text-gray-200 font-medium">Seksi</label>
                                <select class="border-none w-full rounded-md focus:ring-blue-500 bg-slate-600 bg-opacity-60 text-white leading-tight text-sm"
                                        id="seksi" name="seksi">
                                        @foreach ($listSeksi as $seksi)
                                            <option value="{{ $seksi->id }}">{{ $seksi->seksi }}</option>
                                        @endforeach
                                    </select>
                            </div>
                            {{-- 2.3 Select Unit --}}
                            <div class="form-control mb-5">
                                <label for="division" class="inline-block text-gray-200 font-medium">Unit</label>
                                <select class="border-none w-full rounded-md focus:ring-blue-500 bg-slate-600 bg-opacity-60 text-white leading-tight text-sm"
                                        id="unit" name="unit">
                                        @foreach ($listUnit as $unit)
                                            <option value="{{ $unit->id }}">{{ $unit->unit }}</option>
                                        @endforeach
                                    </select>
                            </div>
                            {{-- 2.4 Select Workstation --}}
                            <div class="form-control mb-5">
                                <label for="division" class="inline-block text-gray-200 font-medium">Workstation</label>
                                <select class="border-none w-full rounded-md focus:ring-blue-500 bg-slate-600 bg-opacity-60 text-white leading-tight text-sm"
                                        id="workstation" name="workstation">
                                        @foreach ($listWorkstation as $station)
                                            <option value="{{ $station->id }}">{{ $station->workstation }}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>
                        {{-- 3.0 Form Privillage --}}
                        <div class="rounded-2xl bg-slate-800 bg-opacity-70 backdrop-blur-sm backdrop-filter py-2 px-8">
                            <h5 class="text-white text-xl font-bold mb-6 border-b-2 pt-6 pb-3">Privillage</h5>
                            {{-- 3.1 Select Privillige/Role --}}
                            <div class="grid grid-rows-2 mb-6">
                                <label for="division" class="inline-block text-gray-200 font-medium">Privillage</label>
                                <select class="border-none w-full rounded-md focus:ring-blue-500 bg-slate-600 bg-opacity-60 text-white leading-tight text-sm"
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
                            <div class="grid grid-rows-2 mb-6">
                                <label for="division" class="inline-block text-gray-200 font-medium">Password</label>
                                <input type="password"
                                        class="border-none w-full rounded-md focus:ring-blue-500 bg-slate-600 bg-opacity-60 text-white leading-tight text-sm"
                                        id="password" name="password" required>
                            </div>
                            <div class="grid grid-rows-2">
                                <label for="division" class="inline-block text-gray-200 font-medium">Password</label>
                                <input type="password"
                                        class="border-none w-full rounded-md focus:ring-blue-500 bg-slate-600 bg-opacity-60 text-white leading-tight text-sm"
                                        id="passwordConfirmation" name="passwordConfirmation" required>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
