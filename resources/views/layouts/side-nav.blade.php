<div class="mt-2 ml-4 hidden overflow-hidden md:block" x-data="{ showMenu: false }"
    :class="showMenu ? '' : 'w-64 min-h-full ml-0 mt-0 bg-gray-100 shadow-md drop-shadow-md overflow-y-auto'">
    <button @click.prevent="showMenu = !showMenu " class="flex justify-between px-2 py-4">
        <svg x-show="showMenu" class="mr-2 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
        <svg x-show="!showMenu" class="mr-2 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>
    <div x-show="!showMenu">
        <nav class="relative">
            <div class="fixed w-64" id="sideNav">
                <ul class="relative px-5 pt-2">
                    <li class="relative my-2">
                        <a class="{{ Route::is('dashboard') ? ' bg-blue-500 rounded-md shadow-md text-white' : 'text-gray-600  hover:bg-slate-300 hover:bg-opacity-50' }} flex items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-[6px] px-2 text-sm transition duration-300 ease-in-out hover:rounded-lg"
                            href="{{ route('dashboard') }}" data-mdb-ripple="true" data-mdb-ripple-color="primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            <span class="mt-1 ml-3 font-medium">Dashboard</span>
                        </a>
                    </li>
                    <li class="relative my-2">
                        <a class="{{ Route::is('profile.index') ? ' bg-blue-500 rounded-md shadow-md text-white' : 'text-gray-600  hover:bg-slate-300 hover:bg-opacity-50' }} flex h-auto items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-[6px] px-2 text-sm transition duration-300 ease-in-out hover:rounded-lg"
                            href="{{ route('profile.index') }}" data-mdb-ripple="true" data-mdb-ripple-color="primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span class="mt-1 ml-3 font-medium">Biodata</span>
                        </a>
                    </li>
                    {{-- Menu Super User --}}
                    <h6
                        class="text-ellipsis whitespace-nowrap px-3 py-3 text-base font-bold leading-tight text-gray-600 drop-shadow-lg">
                        Super User
                    </h6>
                    <li class="relative my-2">
                        <a class="{{ Route::is('users.create') ? ' bg-blue-500 rounded-md shadow-md text-white' : 'text-gray-600  hover:bg-slate-300 hover:bg-opacity-50' }} flex items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-[6px] px-2 text-sm transition duration-300 ease-in-out hover:rounded-lg"
                            href="{{ route('users.create') }}" data-mdb-ripple="true" data-mdb-ripple-color="primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                            </svg>
                            <span class="mt-1 ml-3 font-medium">Tambah User</span>
                        </a>
                    </li>
                    <li class="relative my-2">
                        <a class="{{ Route::is('users.index') ? ' bg-blue-500 rounded-md shadow-md text-white' : 'text-gray-600  hover:bg-slate-300 hover:bg-opacity-50' }} flex items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-[6px] px-2 text-sm transition duration-300 ease-in-out hover:rounded-lg"
                            href="{{ route('users.index') }}" data-mdb-ripple="true" data-mdb-ripple-color="primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            <span class="mt-1 ml-3 font-medium">List User</span>
                        </a>
                    </li>
                    <li class="relative my-2">
                        <a class="{{ Route::is('privillage.index') ? ' bg-blue-500 rounded-md shadow-md text-white' : 'text-gray-600  hover:bg-slate-300 hover:bg-opacity-50' }} flex h-auto items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-[6px] px-2 text-sm transition duration-300 ease-in-out hover:rounded-lg"
                            href="{{ route('privillage.index') }}" data-mdb-ripple="true"
                            data-mdb-ripple-color="primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span class="mt-1 ml-3 font-medium">Role & Privillage</span>
                        </a>
                    </li>
                    <li class="relative my-2">
                        <a class="{{ Route::is('updateOrder.index') ? ' bg-blue-500 rounded-md shadow-md text-white' : 'text-gray-600  hover:bg-slate-300 hover:bg-opacity-50' }} flex items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-[6px] px-2 text-sm transition duration-300 ease-in-out hover:rounded-lg"
                            href="{{ route('updateOrder.index') }}" data-mdb-ripple="true"
                            data-mdb-ripple-color="primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                            <span class="mt-1 ml-3 font-medium">Update Order</span>
                        </a>
                    </li>
                    <li class="relative my-2">
                        <a class="{{ Route::is('jamEfektif.index') ? ' bg-blue-500 rounded-md shadow-md text-white' : 'text-gray-600  hover:bg-slate-300 hover:bg-opacity-50' }} flex h-auto items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-[6px] px-2 text-sm transition duration-300 ease-in-out hover:rounded-lg"
                            href="{{ route('jamEfektif.index') }}" data-mdb-ripple="true"
                            data-mdb-ripple-color="primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="mt-1 ml-3 font-medium">Jam Efektif & Target</span>
                        </a>
                    </li>
                    {{-- End Menu Super User --}}
                    {{-- Menu Admin --}}
                    <h6
                        class="text-ellipsis whitespace-nowrap px-3 py-3 text-base font-bold leading-tight text-gray-600 drop-shadow-lg">
                        Admin
                    </h6>
                    {{-- Data Pegawai --}}
                    <li class="relative my-2">
                        <a class="{{ Route::is('dataPegawai.index') ? ' bg-blue-500 rounded-md shadow-md text-white' : 'text-gray-600  hover:bg-slate-300 hover:bg-opacity-50' }} flex items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-[6px] px-2 text-sm transition duration-300 ease-in-out hover:rounded-lg"
                            href="{{ route('dataPegawai.index') }}" data-mdb-ripple="true"
                            data-mdb-ripple-color="primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            <span class="mt-1 ml-3 font-medium">Data Pegawai</span>
                        </a>
                    </li>
                    {{-- Input Data --}}
                    <li class="relative my-2" id="inputData">
                        <a class="{{ Route::is('inputVerifikasi.index') || Route::is('inputRetur.index') || Route::is('inputEvaluasi.index') ? ' bg-blue-500 rounded-md shadow-md text-white' : 'text-gray-600  hover:bg-slate-300 hover:bg-opacity-50' }} flex cursor-pointer items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-[6px] px-2 text-sm transition duration-300 ease-in-out hover:rounded-lg"
                            data-mdb-ripple="true" data-mdb-ripple-color="primary" data-bs-toggle="collapse"
                            data-bs-target="#collapseInputData" aria-expanded="true"
                            aria-controls="collapseInputData">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                            <span class="mt-1 ml-3 font-medium">Input Data</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-auto h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                        <ul class="{{ Route::is('inputVerifikasi.index') || Route::is('inputRetur.index') || Route::is('inputEvaluasi.index') ? 'show' : '' }} accordion-collapse collapse relative"
                            id="collapseInputData" aria-labelledby="inputData" data-bs-parent="#sideNav">
                            <li class="relative my-2">
                                <a href="{{ route('inputVerifikasi.index') }}"
                                    class="{{ Route::is('inputVerifikasi.index') ? ' bg-blue-500 rounded-md shadow-md text-white' : 'text-gray-600  hover:bg-slate-300 hover:bg-opacity-50' }} flex items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2 text-xs transition duration-300 ease-in-out hover:rounded-lg"
                                    data-mdb-ripple="true" data-mdb-ripple-color="primary">
                                    <span class="ml-3">Data Verifikasi</span></a>
                            </li>
                            <li class="relative my-2">
                                <a href="{{ route('inputRetur.index') }}"
                                    class="{{ Route::is('inputRetur.index') ? ' bg-blue-500 rounded-md shadow-md text-white' : 'text-gray-600  hover:bg-slate-300 hover:bg-opacity-50' }} flex items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2 text-xs transition duration-300 ease-in-out hover:rounded-lg"
                                    data-mdb-ripple="true" data-mdb-ripple-color="primary"><span class="ml-3">Data
                                        Retur</span></a>
                            </li>
                            <li class="relative my-2">
                                <a href="{{ route('inputEvaluasi.index') }}"
                                    class="{{ Route::is('inputEvaluasi.index') ? ' bg-blue-500 rounded-md shadow-md text-white' : 'text-gray-600  hover:bg-slate-300 hover:bg-opacity-50' }} flex items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2 text-xs transition duration-300 ease-in-out hover:rounded-lg"
                                    data-mdb-ripple="true" data-mdb-ripple-color="primary"><span class="ml-3">Pesan
                                        Evaluasi</span></a>
                            </li>
                        </ul>
                    </li>
                    {{-- Rekap Data --}}
                    <li class="{{ Route::is('rekapVerif.index') || Route::is('rekapRetur.index') || Route::is('rekapEvaluasi.index') ? ' bg-gray-200 bg-opacity-75 rounded-md text-gray-600 p-1' : '' }} relative w-full rounded-lg"
                        id="rekapData">
                        <a class="flex cursor-pointer items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-[6px] px-2 text-sm text-gray-600 transition duration-300 ease-in-out hover:rounded-lg hover:bg-gray-300 hover:bg-opacity-60"
                            data-mdb-ripple="true" data-mdb-ripple-color="primary" data-bs-toggle="collapse"
                            data-bs-target="#collapseRekapData" aria-expanded="true"
                            aria-controls="collapseRekapData">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                            <span class="mt-1 ml-3 font-medium">Rekap Data</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-auto h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                        <ul class="{{ Route::is('rekapVerif.index') || Route::is('rekapRetur.index') || Route::is('rekapEvaluasi.index') ? 'show' : '' }} accordion-collapse collapse relative py-2 pl-5 pr-2"
                            id="collapseRekapData" aria-labelledby="rekapData" data-bs-parent="#sideNav">
                            <li class="relative my-2">
                                <a href="{{ route('rekapVerif.index') }}"
                                    class="{{ Route::is('rekapVerif.index') ? ' bg-blue-500 rounded-md shadow-md text-white ' : 'text-gray-600  hover:bg-gray-300 hover:bg-opacity-60' }} flex items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2 text-xs transition duration-300 ease-in-out hover:rounded-lg"
                                    data-mdb-ripple="true" data-mdb-ripple-color="primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                    <span class="ml-3">Data
                                        Verifikasi</span></a>
                            </li>
                            <li class="relative my-2">
                                <a href="{{ route('rekapRetur.index') }}"
                                    class="{{ Route::is('rekapRetur.index') ? ' bg-blue-500 rounded-md shadow-md text-white' : 'text-gray-600  hover:bg-gray-300 hover:bg-opacity-60' }} flex items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2 text-xs transition duration-300 ease-in-out hover:rounded-lg"
                                    data-mdb-ripple="true" data-mdb-ripple-color="primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                    </svg>
                                    <span class="ml-3">Data Retur</span></a>
                            </li>
                            <li class="relative my-2">
                                <a href="{{ route('rekapEvaluasi.index') }}"
                                    class="{{ Route::is('rekapEvaluasi.index') ? ' bg-blue-500 rounded-md shadow-md text-white' : 'text-gray-600  hover:bg-slate-300 hover:bg-opacity-50' }} flex items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2 text-xs transition duration-300 ease-in-out hover:rounded-lg"
                                    data-mdb-ripple="true" data-mdb-ripple-color="primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                    </svg>
                                    <span class="ml-3">Rekap
                                        Evaluasi</span></a>
                            </li>
                        </ul>
                    </li>
                    {{-- End Menu Admin --}}
                    {{-- Menu Performa Pegawai --}}
                    <h6
                        class="text-ellipsis whitespace-nowrap px-3 py-3 text-base font-bold leading-tight text-gray-600 drop-shadow-lg">
                        Performa Pegawai
                    </h6>
                    {{-- Performa Qty --}}
                    <li class="{{ Route::is('quantity.unit') || Route::is('quantity.individu') ? ' bg-gray-200 bg-opacity-75 rounded-md text-gray-600 p-1' : '' }} relative my-2 rounded-md text-gray-600"
                        id="perQty">
                        <a class="flex cursor-pointer items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-[6px] px-2 text-sm transition duration-300 ease-in-out hover:rounded-lg hover:bg-slate-300 hover:bg-opacity-50"
                            data-mdb-ripple="true" data-mdb-ripple-color="primary" data-bs-toggle="collapse"
                            data-bs-target="#collapsePerQty" aria-expanded="true" aria-controls="collapsePerQty">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                            </svg>
                            <span class="mt-1 ml-3 font-medium">Performa Quantity</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-auto h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                        <ul class="{{ Route::is('quantity.unit') || Route::is('quantity.individu') ? 'show' : '' }} accordion-collapse collapse relative"
                            id="collapsePerQty" aria-labelledby="perQty" data-bs-parent="#sideNav">
                            <li class="relative my-2">
                                <a href="{{ route('quantity.unit') }}"
                                    class="{{ Route::is('quantity.unit') ? ' bg-blue-500 rounded-md shadow-md text-white ' : 'text-gray-600  hover:bg-slate-300 hover:bg-opacity-50' }} flex items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2 text-xs transition duration-300 ease-in-out hover:rounded-lg"
                                    data-mdb-ripple="true" data-mdb-ripple-color="primary"><span
                                        class="ml-3">Unit</span></a>
                            </li>
                            <li class="relative my-2">
                                <a href="{{ route('quantity.individu') }}"
                                    class="{{ Route::is('quantity.individu') ? ' bg-blue-500 rounded-md shadow-md text-white ' : 'text-gray-600  hover:bg-slate-300 hover:bg-opacity-50' }} flex items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2 text-xs transition duration-300 ease-in-out hover:rounded-lg"
                                    data-mdb-ripple="true" data-mdb-ripple-color="primary">
                                    <span class="ml-3">Individu</span></a>
                            </li>
                        </ul>
                    </li>
                    {{-- Performa Quality --}}
                    <li class="{{ Route::is('quality.unit') || Route::is('quality.individu') ? ' bg-gray-200 bg-opacity-75 rounded-md text-gray-600 p-1' : '' }} relative my-2 rounded-md text-gray-600"
                        id="perQuality">
                        <a class="flex cursor-pointer items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-[6px] px-2 text-sm transition duration-300 ease-in-out hover:rounded-lg hover:bg-slate-300 hover:bg-opacity-50"
                            data-mdb-ripple="true" data-mdb-ripple-color="primary" data-bs-toggle="collapse"
                            data-bs-target="#collapsePerQuality" aria-expanded="true"
                            aria-controls="collapsePerQuality">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                            </svg><span class="mt-1 ml-3 font-medium">Performa Quality</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-auto h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                        <ul class="{{ Route::is('quality.unit') || Route::is('quality.individu') ? 'show' : '' }} accordion-collapse collapse relative"
                            id="collapsePerQuality" aria-labelledby="perQuality" data-bs-parent="#sideNav">
                            <li class="relative my-2">
                                <a href="{{ route('quality.unit') }}"
                                    class="{{ Route::is('quality.unit') ? ' bg-blue-500 rounded-md shadow-md text-white ' : 'text-gray-600  hover:bg-slate-300 hover:bg-opacity-50' }} flex items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2 text-xs transition duration-300 ease-in-out hover:rounded-lg"
                                    data-mdb-ripple="true" data-mdb-ripple-color="primary"><span
                                        class="ml-3">Unit</span></a>
                            </li>
                            <li class="relative my-2">
                                <a href="{{ route('quality.individu') }}"
                                    class="{{ Route::is('quality.individu') ? ' bg-blue-500 rounded-md shadow-md text-white ' : 'text-gray-600  hover:bg-slate-300 hover:bg-opacity-50' }} flex items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2 text-xs transition duration-300 ease-in-out hover:rounded-lg"
                                    data-mdb-ripple="true" data-mdb-ripple-color="primary">
                                    <span class="ml-3">Individu</span></a>
                            </li>
                        </ul>
                    </li>
                    {{-- Report Pegawai --}}
                    <li class="relative my-2">
                        <a class="{{ Route::is('report') ? ' bg-blue-500 rounded-md shadow-md text-white' : 'text-gray-600  hover:bg-slate-300 hover:bg-opacity-50' }} flex items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-[6px] px-2 text-sm transition duration-300 ease-in-out hover:rounded-lg"
                            href="{{ route('report') }}" data-mdb-ripple="true" data-mdb-ripple-color="primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            <span class="mt-1 ml-3 font-medium">Report</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
