@section('title', 'Profile')
@extends('layouts.app')
@section('content')
    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1">
                <div class="p-8 overflow-hidden bg-white shadow-md rounded-2xl backdrop-blur-sm bg-opacity-30 drop-shadow-md">
                    <div class="grid grid-flow-row grid-cols-3 gap-4">
                        {{-- 1.0 Foto Profile --}}
                        <div class="flex justify-start col-span-3 md:col-span-1">
                            <div class="max-w-sm mx-auto bg-white border rounded-lg shadow-lg">
                                <a href="#!">
                                    <img class="rounded-t-lg" src="{{ asset('img/Avatar/default.jpg') }}" alt="" />
                                </a>
                                <div class="p-6">
                                    <h5 class="mb-2 text-xl font-medium text-center text-gray-900">{{ $userData->nama }}
                                    </h5>
                                    <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="success"
                                        data-mdb-ripple-duration="1000ms"
                                        class="inline-block w-full px-6 py-2 mt-4 mb-2 text-xs font-medium leading-normal text-green-600 uppercase transition duration-150 ease-in-out border-2 border-green-400 rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0">Ubah
                                        Foto</button>
                                </div>
                            </div>
                        </div>
                        {{-- 2.0 Profile --}}
                        <div class="col-span-3 md:col-span-2">
                            <h5 class="pt-5 pb-3 mb-6 text-xl font-bold text-white border-b-2">Profile</h5>
                            <div class="grid grid-cols-6 pl-4 mb-4">
                                <div class="col-span-2 md:col-span-1"><span class="text-sm font-medium leading-tight text-white">Nama</span></div>
                                <div class="col-span-4 md:col-span-2"><span
                                        class="text-sm font-normal leading-tight text-gray-300">{{ $userData->nama }}</span>
                                </div>
                                <div class="col-span-2 md:col-span-1"><span class="text-sm font-medium leading-tight text-white">Divisi</span></div>
                                <div class="col-span-4 md:col-span-2"><span class="text-sm font-normal leading-tight text-gray-300">SBU
                                        Produk NonUang</span></div>
                            </div>
                            <div class="grid grid-cols-6 pl-4 mb-4">
                                <div class="col-span-2 md:col-span-1"><span class="text-sm font-medium leading-tight text-white">NP</span></div>
                                <div class="col-span-4 md:col-span-2"><span
                                        class="text-sm font-normal leading-tight text-gray-300">{{ $userData->np_user }}</span>
                                </div>
                                <div class="col-span-2 md:col-span-1"><span class="text-sm font-medium leading-tight text-white">Seksi</span></div>
                                <div class="col-span-4 md:col-span-2"><span
                                        class="text-sm font-normal leading-tight text-gray-300">{{ $seksi }}</span>
                                </div>
                            </div>
                            <div class="grid grid-cols-6 pl-4 mb-4">
                                <div class="col-span-2 md:col-span-1"><span class="text-sm font-medium leading-tight text-white">E-mail</span></div>
                                <div class="col-span-4 md:col-span-2"><span
                                        class="text-sm font-medium leading-tight underline text-sky-300">{{ Auth::user()->email }}</span>
                                </div>
                                <div class="col-span-2 md:col-span-1"><span class="text-sm font-medium leading-tight text-white">Unit Kerja</span>
                                </div>
                                <div class="col-span-4 md:col-span-2"><span
                                        class="text-sm font-normal leading-tight text-gray-300">{{ $unit }}</span>
                                </div>
                            </div>
                            <div class="grid grid-cols-6 pl-4 mb-4">
                                <div class="col-span-2 md:col-span-1"><span class="text-sm font-medium leading-tight text-white">Contact</span></div>
                                <div class="col-span-4 md:col-span-2"><span
                                        class="text-sm font-normal leading-tight text-gray-300">0{{ Str::limit($userData->contact, 3, '-') }}{{ Str::limit(substr($userData->contact, 3), 4, '-') }}{{ Str::limit(substr($userData->contact, 7), 4, '') }}</span>
                                </div>
                                <div class="col-span-2 md:col-span-1"><span class="text-sm font-medium leading-tight text-white">Alamat</span></div>
                                <div class="col-span-4 md:col-span-2">
                                    <span class="text-sm font-normal leading-tight text-gray-300">
                                        @if ($userData->alamat == !null)
                                            {{ $userData->alamat }}
                                        @else
                                            -
                                        @endif
                                    </span>
                                </div>
                            </div>
                            {{-- 2. Button Ubah Data --}}
                            <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="info"
                                data-mdb-ripple-duration="2000ms"
                                class="mb-2 mt-4 w-full inline-block px-6 py-2.5 bg-blue-500 text-white font-extrabold text-base leading-normal uppercase rounded shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-600 active:shadow-lg transition duration-150 ease-in-out">Ubah
                                Biodata</button>
                            <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
                                data-mdb-ripple-duration="2000ms"
                                class="my-2 w-full inline-block px-6 py-2.5 bg-orange-400 text-white font-extrabold text-base leading-normal uppercase rounded shadow-md hover:bg-orange-400 hover:shadow-lg focus:bg-orange-400 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-500 active:shadow-lg transition duration-150 ease-in-out">Ubah
                                Password</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- <div class="py-6">
    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1">
            <div class="px-8 py-4 overflow-hidden bg-white shadow-md rounded-2xl drop-shadow-md">

            </div>
        </div>
    </div>
</div> --}}
