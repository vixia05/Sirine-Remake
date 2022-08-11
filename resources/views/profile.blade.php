@section('title', 'Profile')
@extends('layouts.app')
@section('content')
    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1">
                <div class="rounded-2xl bg-white shadow-md drop-shadow-md overflow-hidden p-8">
                    <div class="grid grid-cols-3">
                        {{-- 1.0 Foto Profile --}}
                        <div class="flex justify-start">
                            <div class="rounded-lg shadow-lg bg-white max-w-sm border mx-auto">
                                <a href="#!">
                                    <img class="rounded-t-lg" src="{{ asset('img/Avatar/default.jpg') }}" alt="" />
                                </a>
                                <div class="p-6">
                                    <h5 class="text-gray-900 text-xl font-medium mb-2 text-center">{{ $userData->nama }}
                                    </h5>
                                    <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="success"
                                        data-mdb-ripple-duration="1000ms"
                                        class="mt-4 mb-2 w-full inline-block px-6 py-2 border-2 border-green-400 text-green-600 font-medium text-xs leading-normal uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">Ubah
                                        Foto</button>
                                </div>
                            </div>
                        </div>
                        {{-- 2.0 Profile --}}
                        <div class="col-span-2">
                            <h5 class="text-gray-900 text-xl font-bold mb-6 border-b-2 pt-5 pb-3">Profile</h5>
                            <div class="grid grid-cols-6 mb-4 pl-4">
                                <div class="col-span-1"><span class="text-sm font-medium leading-tight">Nama</span></div>
                                <div class="col-span-2"><span
                                        class="text-sm font-medium leading-tight text-gray-600">{{ $userData->nama }}</span>
                                </div>
                                <div class="col-span-1"><span class="text-sm font-medium leading-tight">Divisi</span></div>
                                <div class="col-span-2"><span class="text-sm font-medium leading-tight text-gray-600">SBU
                                        Produk NonUang</span></div>
                            </div>
                            <div class="grid grid-cols-6 mb-4 pl-4">
                                <div class="col-span-1"><span class="text-sm font-medium leading-tight">NP</span></div>
                                <div class="col-span-2"><span
                                        class="text-sm font-medium leading-tight text-gray-600">{{ $userData->np_user }}</span>
                                </div>
                                <div class="col-span-1"><span class="text-sm font-medium leading-tight">Seksi</span></div>
                                <div class="col-span-2"><span
                                        class="text-sm font-medium leading-tight text-gray-600">{{ $seksi }}</span>
                                </div>
                            </div>
                            <div class="grid grid-cols-6 mb-4 pl-4">
                                <div class="col-span-1"><span class="text-sm font-medium leading-tight">E-mail</span></div>
                                <div class="col-span-2"><span
                                        class="text-sm font-medium leading-tight text-blue-500 underline">{{ Auth::user()->email }}</span>
                                </div>
                                <div class="col-span-1"><span class="text-sm font-medium leading-tight">Unit Kerja</span>
                                </div>
                                <div class="col-span-2"><span
                                        class="text-sm font-medium leading-tight text-gray-600">{{ $unit }}</span>
                                </div>
                            </div>
                            <div class="grid grid-cols-6 mb-4 pl-4">
                                <div class="col-span-1"><span class="text-sm font-medium leading-tight">Contact</span></div>
                                <div class="col-span-2"><span
                                        class="text-sm font-medium leading-tight text-gray-600">0{{ Str::limit($userData->contact, 3, '-') }}{{ Str::limit(substr($userData->contact, 3), 4, '-') }}{{ Str::limit(substr($userData->contact, 7), 4, '') }}</span>
                                </div>
                                <div class="col-span-1"><span class="text-sm font-medium leading-tight">Alamat</span></div>
                                <div class="col-span-2">
                                    <span class="text-sm font-medium leading-tight text-gray-600">
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
            <div class="rounded-2xl bg-white shadow-md drop-shadow-md overflow-hidden py-4 px-8">

            </div>
        </div>
    </div>
</div> --}}
