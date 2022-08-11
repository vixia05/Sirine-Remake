@extends('layouts.app')
@section('content')
    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-4">
                {{-- 1.0 Form Data Pegawai --}}
                <div class="rounded-2xl bg-white shadow-md drop-shadow-md overflow-hidden py-4 px-8">
                    <h5 class="text-gray-900 text-xl font-bold mb-6 border-b-2 pt-5 pb-3">Data Pegawai</h5>
                    <form>
                        @csrf
                        {{-- 1.1 Input Nomor Pegawai --}}
                        <div class="grid grid-rows-2 mb-6">
                            <label for="np" class="inline-block text-gray-600 font-medium py-1">Nomor Pegawai</label>
                            <div
                                class="border-b hover:border-blue-300 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md transition duration-150 rounded-md">
                                <input type="text" maxlength="4" class="border-none w-full focus:ring-0 leading-tight"
                                    id="np" name="np">
                            </div>
                        </div>
                        {{-- 1.2 Input Nama Pegawai --}}
                        <div class="grid grid-rows-2 mb-6">
                            <label for="name" class="inline-block text-gray-600 font-medium">Nama</label>
                            <div
                                class="border-b hover:border-blue-300 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md transition duration-150 rounded-md">
                                <input type="text" class="border-none w-full focus:ring-0 font-extralight leading-tight"
                                    id="name" name="name">
                            </div>
                        </div>
                        {{-- 1.3 Input E-mail Pegawai --}}
                        <div class="grid grid-rows-2 mb-6">
                            <label for="email" class="inline-block text-gray-600 font-medium">E-Mail</label>
                            <div
                                class="border-b hover:border-blue-300 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md transition duration-150 rounded-md">
                                <input type="email" class="border-none w-full focus:ring-0 font-extralight leading-tight"
                                    id="email" name="email">
                            </div>
                        </div>
                        {{-- 1.5 Input Contact Pegawai --}}
                        <div class="grid grid-rows-2 mb-6">
                            <label for="contact" class="inline-block text-gray-600 font-medium">Contact</label>
                            <div
                                class="border-b hover:border-blue-300 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md transition duration-150 rounded-md">
                                <input type="text" class="border-none w-full focus:ring-0 font-extralight leading-tight"
                                    id="contact" name="contact">
                            </div>
                        </div>
                        {{-- 1.6 Input Tanggal Lahir Pegawai --}}
                        <div class="grid grid-rows-2 mb-6">
                            <label for="birthDate" class="inline-block text-gray-600 font-medium">Tanggal Lahir</label>
                            <div
                                class="border-b hover:border-blue-300 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md transition duration-150 rounded-md">
                                <input type="date" class="border-none w-full focus:ring-0 font-extralight leading-tight"
                                    id="birthDate" name="birthDate">
                            </div>
                        </div>
                        {{-- 1.6 Input Alamat Pegawai --}}
                        <div class="form-control mb-6">
                            <label for="address" class="inline-block text-gray-600 font-medium">Alamat</label>
                            <div
                                class="border-b hover:border-blue-300 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md transition duration-150 rounded-md">
                                <textarea class="border-none w-full focus:ring-0 font-extralight leading-tight mt-1" id="address" name="address"></textarea>
                            </div>
                        </div>
                        {{-- Submit --}}
                        <div class="flex space-x-2 justify-end pt-4">
                            <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
                                class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="grid grid-rows-2 gap-4">
                    <div class="rounded-2xl bg-white shadow-md drop-shadow-md overflow-hidden py-2 px-8">
                        {{-- 2.0 Form Unit Kerja --}}
                        <form>
                            <h5 class="text-gray-900 text-xl font-bold mb-4 border-b-2 pt-5 pb-3">Unit Kerja</h5>
                            {{-- 2.1 Select Divisi --}}
                            <div class="form-control mb-5">
                                <label for="division" class="inline-block text-gray-600 font-medium">Divisi</label>
                                <div
                                    class="border-b hover:border-blue-300 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md transition duration-150 rounded-md">
                                    <select class="border-none w-full focus:ring-0 font-extralight leading-tight text-sm"
                                        id="divisi" name="divisi">
                                        <option>SBU Produk Non Uang</option>
                                    </select>
                                </div>
                            </div>
                            {{-- 2.2 Select Seksi --}}
                            <div class="form-control mb-5">
                                <label for="division" class="inline-block text-gray-600 font-medium">Seksi</label>
                                <div
                                    class="border-b hover:border-blue-300 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md transition duration-150 rounded-md">
                                    <select class="border-none w-full focus:ring-0 font-extralight leading-tight text-sm"
                                        id="seksi" name="seksi">
                                        <option>Khazanah & Verifikasi Pita Cukai</option>
                                    </select>
                                </div>
                            </div>
                            {{-- 2.3 Select Unit --}}
                            <div class="form-control mb-5">
                                <label for="division" class="inline-block text-gray-600 font-medium">Unit</label>
                                <div
                                    class="border-b hover:border-blue-300 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md transition duration-150 rounded-md">
                                    <select class="border-none w-full focus:ring-0 font-extralight leading-tight text-sm"
                                        id="unit" name="unit">
                                        <option>Verifikasi Pita Cukai</option>
                                    </select>
                                </div>
                            </div>
                            {{-- 2.4 Select Workstation --}}
                            <div class="form-control mb-5">
                                <label for="division" class="inline-block text-gray-600 font-medium">Workstation</label>
                                <div
                                    class="border-b hover:border-blue-300 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md transition duration-150 rounded-md">
                                    <select class="border-none w-full focus:ring-0 font-extralight leading-tight text-sm"
                                        id="workstation" name="workstation">
                                        <option>Verifikator Team A</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="rounded-2xl bg-white shadow-md drop-shadow-md overflow-hidden py-2 px-8">
                        {{-- 3.0 Form Privillage --}}
                        <form>
                            <h5 class="text-gray-900 text-xl font-bold mb-6 border-b-2 pt-6 pb-3">Privillage</h5>
                            {{-- 3.1 Select Privillige/Role --}}
                            <div class="grid grid-rows-2 mb-6">
                                <label for="division" class="inline-block text-gray-600 font-medium">Privillage</label>
                                <div
                                    class="border-b hover:border-blue-300 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md transition duration-150 rounded-md">
                                    <select class="border-none w-full focus:ring-0 font-extralight leading-tight text-sm"
                                        id="privillage" name="privillage">
                                        <option>Super User</option>
                                    </select>
                                </div>
                            </div>
                            {{-- 3.1 Select Privillige/Role --}}
                            <div class="grid grid-rows-2 mb-6">
                                <label for="division" class="inline-block text-gray-600 font-medium">Password</label>
                                <div
                                    class="border-b hover:border-blue-300 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md transition duration-150 rounded-md">
                                    <input type="password"
                                        class="border-none w-full focus:ring-0 font-extralight leading-tight text-sm"
                                        id="password" name="password">
                                </div>
                            </div>
                            <div class="grid grid-rows-2">
                                <label for="division" class="inline-block text-gray-600 font-medium">Password</label>
                                <div
                                    class="border-b hover:border-blue-300 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md transition duration-150 rounded-md">
                                    <input type="password"
                                        class="border-none w-full focus:ring-0 font-extralight leading-tight text-sm"
                                        id="passwordConfirmation" name="passwordConfirmation">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
