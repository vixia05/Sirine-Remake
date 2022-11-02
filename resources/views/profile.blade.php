@section('title', 'Profile')
@extends('layouts.app')
@section('content')
<div x-data="{passwordModal: false,editModal: false}"
    @keydown.escape="editModal = false,passwordModal = false"
    x-cloak>
    <div class="py-6">
        <div class="px-4 mx-auto lg:px-8">
            <div class="grid grid-cols-1">
                <div
                    class="p-8 overflow-hidden rounded-2xl bg-slate-200 bg-opacity-60 backdrop-blur-sm backdrop-filter dark:bg-slate-800 dark:bg-opacity-60">
                    <div class="grid grid-flow-row grid-cols-3 gap-4">
                        {{-- 1.0 Foto Profile --}}
                        <div class="flex justify-start col-span-3 md:col-span-1">
                            <div class="max-w-sm mx-auto border rounded-lg shadow-lg border-slate-100 dark:border-slate-600 bg-slate-200 dark:bg-slate-700">
                                <a href="#!">
                                    <img class="rounded-t-lg" src="{{ asset('img/Avatar/default.jpg') }}" alt="" />
                                </a>
                                <div class="p-6">
                                    <h5 class="mb-2 text-xl font-medium text-center text-slate-800 dark:text-slate-100">{{ $userData->nama }}
                                    </h5>
                                    <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="success"
                                        data-mdb-ripple-duration="1000ms"
                                        class="inline-block w-full px-6 py-2 mt-4 mb-2 text-xs font-bold text-green-400 uppercase transition duration-150 ease-in-out border-2 border-green-400 rounded leading-base hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0">Ubah
                                        Foto</button>
                                </div>
                            </div>
                        </div>
                        {{-- 2.0 Profile --}}
                        <div class="col-span-3 md:col-span-2">
                            <h5
                                class="pt-5 pb-3 mb-6 text-xl font-bold border-b-2 border-slate-800 text-slate-800 dark:border-slate-100 dark:text-slate-100">
                                Profile</h5>
                            <div class="grid grid-cols-6 pl-4 mb-4">
                                <div class="col-span-2 md:col-span-1"><span
                                        class="text-sm font-medium leading-tight text-slate-800 dark:text-slate-100">Nama</span>
                                </div>
                                <div class="col-span-4 md:col-span-2"><span
                                        class="text-sm font-normal leading-tight text-slate-600 dark:text-slate-300">{{ $userData->nama }}</span>
                                </div>
                                <div class="col-span-2 md:col-span-1"><span
                                        class="text-sm font-medium leading-tight text-slate-800 dark:text-slate-100">Divisi</span>
                                </div>
                                <div class="col-span-4 md:col-span-2"><span
                                        class="text-sm font-normal leading-tight text-slate-600 dark:text-slate-300">SBU
                                        Produk NonUang</span></div>
                            </div>
                            <div class="grid grid-cols-6 pl-4 mb-4">
                                <div class="col-span-2 md:col-span-1"><span
                                        class="text-sm font-medium leading-tight text-slate-800 dark:text-slate-100">NP</span>
                                </div>
                                <div class="col-span-4 md:col-span-2"><span
                                        class="text-sm font-normal leading-tight text-slate-600 dark:text-slate-300">{{ $userData->np_user }}</span>
                                </div>
                                <div class="col-span-2 md:col-span-1"><span
                                        class="text-sm font-medium leading-tight text-slate-800 dark:text-slate-100">Seksi</span>
                                </div>
                                <div class="col-span-4 md:col-span-2"><span
                                        class="text-sm font-normal leading-tight text-slate-600 dark:text-slate-300">{{ $seksi }}</span>
                                </div>
                            </div>
                            <div class="grid grid-cols-6 pl-4 mb-4">
                                <div class="col-span-2 md:col-span-1"><span
                                        class="text-sm font-medium leading-tight text-slate-800 dark:text-slate-100">E-mail</span>
                                </div>
                                <div class="col-span-4 md:col-span-2"><span
                                        class="text-sm font-medium leading-tight text-blue-600 underline dark:text-sky-300">{{ Auth::user()->email }}</span>
                                </div>
                                <div class="col-span-2 md:col-span-1"><span
                                        class="text-sm font-medium leading-tight text-slate-800 dark:text-slate-100">Unit
                                        Kerja</span>
                                </div>
                                <div class="col-span-4 md:col-span-2"><span
                                        class="text-sm font-normal leading-tight text-slate-600 dark:text-slate-300">{{ $unit }}</span>
                                </div>
                            </div>
                            <div class="grid grid-cols-6 pl-4 mb-4">
                                <div class="col-span-2 md:col-span-1"><span
                                        class="text-sm font-medium leading-tight text-slate-800 dark:text-slate-100">Contact</span>
                                </div>
                                <div class="col-span-4 md:col-span-2"><span
                                        class="text-sm font-normal leading-tight text-slate-600 dark:text-slate-300">0{{ Str::limit($userData->contact, 3, '-') }}{{ Str::limit(substr($userData->contact, 3), 4, '-') }}{{ Str::limit(substr($userData->contact, 7), 4, '') }}</span>
                                </div>
                                <div class="col-span-2 md:col-span-1"><span
                                        class="text-sm font-medium leading-tight text-slate-800 dark:text-slate-100">Alamat</span>
                                </div>
                                <div class="col-span-4 md:col-span-2">
                                    <span class="text-sm font-normal leading-tight text-slate-600 dark:text-slate-300">
                                        @if ($userData->alamat == !null)
                                            {{ $userData->alamat }}
                                        @else
                                            -
                                        @endif
                                    </span>
                                </div>
                            </div>
                            {{-- 2. Button Ubah Data --}}
                            <button @click.prevent="editModal = true" type="button" data-mdb-ripple="true" data-mdb-ripple-color="info"
                                data-mdb-ripple-duration="2000ms"
                                class="mb-2 mt-4 inline-block w-full rounded bg-blue-500 px-6 py-2.5 text-base font-extrabold uppercase leading-normal  shadow-md transition duration-150 ease-in-out hover:bg-blue-500 hover:shadow-lg focus:bg-blue-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-600 active:shadow-lg text-blue-100">Ubah
                                Biodata</button>
                            <button @click.prevent="passwordModal = true" type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
                                data-mdb-ripple-duration="2000ms"
                                class="my-2 inline-block w-full rounded bg-orange-400 px-6 py-2.5 text-base font-extrabold uppercase leading-normal shadow-md transition duration-150 ease-in-out hover:bg-orange-400 hover:shadow-lg focus:bg-orange-400 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-500 active:shadow-lg text-orange-100">Ubah
                                Password</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('components.modal.edit-profile')
        @include('components.modal.edit-password')
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
