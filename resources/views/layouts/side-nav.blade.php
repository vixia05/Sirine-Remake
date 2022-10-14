<div x-show="!showSideBar"
    class="fixed top-0 bottom-0 min-h-full w-64 overflow-y-auto rounded-r-2xl bg-slate-50 bg-opacity-80 px-6 pt-4 pb-6 shadow-md drop-shadow-md backdrop-blur backdrop-filter scrollbar-hide dark:bg-slate-900 dark:bg-opacity-80 md:block"
    x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-x-0 -translate-x-1/2"
    x-transition:enter-end="opacity-100 scale-x-100 translate-x-0" x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 scale-x-100 translate-x-0"
    x-transition:leave-end="opacity-0 scale-x-0 -translate-x-1/2">
    <div class="sticky-top top-0 flex justify-center space-x-3">
        <div class="h-12 w-12 object-cover">
            <img src="{{ asset('img/logo-only.png') }}">
        </div>
        <div class="py-4">
            <h1 class="font-mono text-3xl font-extrabold text-slate-800 dark:text-white">SIRINE</h1>
        </div>
    </div>
    {{-- <button type="button"
    x-data="{
        toggle: () => {
            if (localStorage.theme === 'dark') {
                localStorage.theme = 'light';
                document.documentElement.classList.remove('dark');
            } else {
                localStorage.theme = 'dark';
                document.documentElement.classList.add('dark');
            }
        },
    }" @click="toggle">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
      </svg>
    </button> --}}
    <div class="mt-4">
        <nav class="relative">
            <div id="sideNav">
                <ul class="relative">
                    {{-- 1.0 Global Menu --}}
                    {{-- *************** --}}
                    {{-- 1.1 Dashboard --}}
                    <li class="relative my-1.5">
                        <a class="{{ Route::is('dashboard') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium' }} flex justify-start space-x-3 overflow-hidden whitespace-nowrap rounded-lg py-1.5 px-2 text-sm transition duration-300 ease-in-out"
                            href="{{ route('dashboard') }}" data-mdb-ripple="true" data-mdb-ripple-color="light">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px]" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            <span class="tracking-wide">Dashboard</span>
                        </a>
                    </li>
                    {{-- 1.2 Profile --}}
                    <li class="relative my-1.5">
                        <a class="{{ Route::is('profile.index') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-medium' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium' }} flex justify-start space-x-3 overflow-hidden whitespace-nowrap rounded-lg py-1.5 px-2 text-sm transition duration-300 ease-in-out"
                            href="{{ route('profile.index') }}" data-mdb-ripple="true" data-mdb-ripple-color="light">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px]" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span class="tracking-wide">Biodata</span>
                        </a>
                    </li>
                    {{-- 2.0 Menu Super User --}}
                    {{-- ******************* --}}
                    <h6
                        class="text-ellipsis whitespace-nowrap px-3 py-2 text-base font-bold leading-tight drop-shadow-lg dark:text-gray-200">
                        Super User
                    </h6>
                    {{-- 2.1 Tambah User --}}
                    <li class="relative my-1.5">
                        <a class="{{ Route::is('users.create') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-medium' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium' }} flex justify-start space-x-3 overflow-hidden whitespace-nowrap rounded-lg py-1.5 px-2 text-sm transition duration-300 ease-in-out"
                            href="{{ route('users.create') }}" data-mdb-ripple="true" data-mdb-ripple-color="light">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px]" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                            </svg>
                            <span class="tracking-wide">Tambah User</span>
                        </a>
                    </li>
                    {{-- 2.2 List User --}}
                    <li class="relative my-1.5">
                        <a class="{{ Route::is('users.index') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-medium' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium' }} flex justify-start space-x-3 overflow-hidden whitespace-nowrap rounded-lg py-1.5 px-2 text-sm transition duration-300 ease-in-out"
                            href="{{ route('users.index') }}" data-mdb-ripple="true" data-mdb-ripple-color="light">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px]" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            <span class="tracking-wide">List User</span>
                        </a>
                    </li>
                    {{-- 2.3 Role & Privillage --}}
                    <li class="relative my-1.5">
                        <a class="{{ Route::is('privillage.index') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-medium' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium' }} flex justify-start space-x-3 overflow-hidden whitespace-nowrap rounded-lg py-1.5 px-2 text-sm transition duration-300 ease-in-out"
                            href="{{ route('privillage.index') }}" data-mdb-ripple="true"
                            data-mdb-ripple-color="light">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px]" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span class="tracking-wide">Role & Privillage</span>
                        </a>
                    </li>
                    {{-- 2.4 Update Order --}}
                    <li class="relative my-1.5">
                        <a class="{{ Route::is('updateOrder.index') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-medium' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium' }} flex justify-start space-x-3 overflow-hidden whitespace-nowrap rounded-lg py-1.5 px-2 text-sm transition duration-300 ease-in-out"
                            href="{{ route('updateOrder.index') }}" data-mdb-ripple="true"
                            data-mdb-ripple-color="light">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px]" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                            <span class="tracking-wide">Update Order</span>
                        </a>
                    </li>
                    {{-- 2.5 Jam Efektif & Target --}}
                    <li class="relative my-1.5">
                        <a class="{{ Route::is('jamEfektif.index') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-medium' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium' }} flex justify-start space-x-3 overflow-hidden whitespace-nowrap rounded-lg py-1.5 px-2 text-sm transition duration-300 ease-in-out"
                            href="{{ route('jamEfektif.index') }}" data-mdb-ripple="true"
                            data-mdb-ripple-color="light">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px]" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="tracking-wide">Jam Efektif & Target</span>
                        </a>
                    </li>
                    {{-- 3.0 Menu Admin --}}
                    {{-- ************** --}}
                    <h6
                        class="text-ellipsis whitespace-nowrap px-3 py-2 text-base font-bold leading-tight drop-shadow-lg dark:text-gray-200">
                        Admin
                    </h6>
                    {{-- 3.1 Data Pegawai --}}
                    <li class="relative my-1.5">
                        <a class="{{ Route::is('dataPegawai.index') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-medium' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium' }} flex justify-start space-x-3 overflow-hidden whitespace-nowrap rounded-lg py-1.5 px-2 text-sm transition duration-300 ease-in-out"
                            href="{{ route('dataPegawai.index') }}" data-mdb-ripple="true"
                            data-mdb-ripple-color="light">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px]" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            <span class="tracking-wide">Data Pegawai</span>
                        </a>
                    </li>
                    {{-- 3.2 Input Data --}}
                    <li class="{{ Route::is('inputVerifikasi.index') || Route::is('inputRetur.index') || Route::is('inputEvaluasi.index') ? ' bg-slate-300 bg-opacity-30 dark:bg-opacity-10 rounded-md dark:text-gray-300 p-1' : '' }} relative my-1.5" id="inputData">
                        <a class="text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium flex cursor-pointer justify-between space-x-3 overflow-hidden whitespace-nowrap rounded-lg py-1.5 px-2 text-sm transition duration-300 ease-in-out"
                            data-mdb-ripple="true" data-mdb-ripple-color="light" data-bs-toggle="collapse"
                            data-bs-target="#collapseInputData" aria-expanded="true"
                            aria-controls="collapseInputData">
                            <div class="flex justify-start space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px]" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                                <span class="tracking-wide">Input Data</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-auto h-[19px] w-[19px]" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                        <ul class="{{ Route::is('inputVerifikasi.index') || Route::is('inputRetur.index') || Route::is('inputEvaluasi.index') ? 'show' : '' }} collapse accordion-collapse relative"
                            id="collapseInputData" aria-labelledby="inputData" data-bs-parent="#sideNav">
                            {{-- 3.2.1 Input Data Verifikasi --}}
                            <li class="relative my-1.5">
                                <a href="{{ route('inputVerifikasi.index') }}"
                                    class="{{ Route::is('inputVerifikasi.index') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-medium' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium' }} flex justify-start space-x-3 items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2 text-xs transition duration-300 ease-in-out"
                                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[19px] h-[19px] ml-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12" />
                                      </svg>
                                    <span class="tracking-wide">Input Verifikasi</span></a>
                            </li>
                            {{-- 3.2.2 Input Data Retur --}}
                            <li class="relative my-1.5">
                                <a href="{{ route('inputRetur.index') }}"
                                    class="{{ Route::is('inputRetur.index') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-medium' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium' }} flex justify-start space-x-3 items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2 text-xs transition duration-300 ease-in-out"
                                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[19px] h-[19px] ml-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12" />
                                      </svg>
                                    <span class="">Input Retur</span>
                                </a>
                            </li>
                            {{-- 3.2.3 Input Data Evaluasi --}}
                            <li class="relative my-1.5">
                                <a href="{{ route('inputEvaluasi.index') }}"
                                    class="{{ Route::is('inputEvaluasi.index') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-medium' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium' }} flex justify-start space-x-3 items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2 text-xs transition duration-300 ease-in-out"
                                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[19px] h-[19px] ml-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12" />
                                      </svg>
                                    <span
                                        class="tracking-wide">Pesan
                                        Evaluasi
                                    </span>
                                    </a>
                            </li>
                        </ul>
                    </li>
                    {{-- 3.3 Rekap Data --}}
                    <li class="{{ Route::is('rekapVerif.index') || Route::is('rekapRetur.index') || Route::is('rekapEvaluasi.index') ? ' bg-slate-300 bg-opacity-30 dark:bg-opacity-10 rounded-md dark:text-gray-300 p-1' : '' }} relative w-full rounded-lg"
                        id="rekapData">
                        <a class="flex cursor-pointer justify-between space-x-3 overflow-hidden whitespace-nowrap rounded-lg py-1.5 px-2 text-sm text-slate-600 transition duration-300 ease-in-out hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium hover:text-slate-900 dark:text-slate-300 dark:hover:bg-slate-400/10 dark:hover:text-slate-50"
                            data-mdb-ripple="true" data-mdb-ripple-color="light" data-bs-toggle="collapse"
                            data-bs-target="#collapseRekapData" aria-expanded="true"
                            aria-controls="collapseRekapData">
                            <div class="flex justify-start space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px]" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                </svg>
                                <span class="tracking-wide">Rekap Data</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-auto h-[19px] w-[19px]" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                        <ul class="{{ Route::is('rekapVerif.index') || Route::is('rekapRetur.index') || Route::is('rekapEvaluasi.index') ? 'show' : '' }} collapse accordion-collapse relative py-2 pl-5 pr-2"
                            id="collapseRekapData" aria-labelledby="rekapData" data-bs-parent="#sideNav">
                            {{-- 3.3.1 Rekap Verifikasi --}}
                            <li class="relative my-1.5">
                                <a href="{{ route('rekapVerif.index') }}"
                                    class="{{ Route::is('rekapVerif.index') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-medium ' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium' }} flex items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2 text-xs transition duration-300 ease-in-out"
                                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                                    <div class="flex justify-start space-x-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px]"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                        </svg>
                                        <span class="tracking-wide">Data
                                            Verifikasi</span>
                                    </div>
                                </a>
                            </li>
                            {{-- 3.3.1 Rekap Retur --}}
                            <li class="relative my-1.5">
                                <a href="{{ route('rekapRetur.index') }}"
                                    class="{{ Route::is('rekapRetur.index') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-medium' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium' }} flex items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2 text-xs transition duration-300 ease-in-out"
                                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                                    <div class="flex justify-start space-x-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px]"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                        </svg>
                                        <span class="ml-3">Data Retur</span>
                                    </div>
                                </a>
                            </li>
                            {{-- 3.3.1 Rekap Evaluasi --}}
                            <li class="relative my-1.5">
                                <a href="{{ route('rekapEvaluasi.index') }}"
                                    class="{{ Route::is('rekapEvaluasi.index') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-medium' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium' }} flex items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2 text-xs transition duration-300 ease-in-out"
                                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                                    <div class="flex justify-start space-x-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px]"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                        </svg>
                                        <span class="tracking-wide">Rekap
                                            Evaluasi</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-- 4.0 Menu Performa --}}
                    {{-- ***************** --}}
                    <h6
                        class="text-ellipsis whitespace-nowrap px-3 py-2 text-base font-bold leading-tight drop-shadow-lg dark:text-gray-200">
                        Performa Pegawai
                    </h6>
                    {{-- 4.1 Performa Qty --}}
                    <li class="{{ Route::is('quantity.unit') || Route::is('quantity.individu') ? ' bg-slate-300 bg-opacity-30 dark:bg-opacity-10 rounded-md dark:text-gray-300 p-1' : '' }} relative my-1.5 rounded-md dark:text-gray-200"
                        id="perQty">
                        <a class="flex justify-between cursor-pointer items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-[6px] px-2 text-sm text-slate-600 transition duration-300 ease-in-out hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium hover:text-slate-900 dark:text-slate-300 dark:hover:bg-slate-400/10 dark:hover:text-slate-50"
                            data-mdb-ripple="true" data-mdb-ripple-color="light" data-bs-toggle="collapse"
                            data-bs-target="#collapsePerQty" aria-expanded="true" aria-controls="collapsePerQty">
                            <div class="flex justify-start space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px]" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                                </svg>
                                <span class="tracking-wide">Performa Quantity</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-auto h-[19px] w-[19px]" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                        <ul class="{{ Route::is('quantity.unit') || Route::is('quantity.individu') ? 'show' : '' }} collapse accordion-collapse relative"
                            id="collapsePerQty" aria-labelledby="perQty" data-bs-parent="#sideNav">
                            <li class="relative my-1.5">
                                <a href="{{ route('quantity.unit') }}"
                                    class="{{ Route::is('quantity.unit') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-medium ' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium' }} flex justify-start space-x-3 items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2 text-xs transition duration-300 ease-in-out"
                                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px] ml-2" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    <span
                                        class="tracking-wide">Unit
                                    </span>
                                </a>
                            </li>
                            <li class="relative my-1.5">
                                <a href="{{ route('quantity.individu') }}"
                                    class="{{ Route::is('quantity.individu') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-medium ' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium' }} flex justify-start space-x-3 items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2 text-xs transition duration-300 ease-in-out"
                                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-[19px] w-[19px] ml-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                      </svg>
                                    <span class="tracking-wide">Individu</span></a>
                            </li>
                        </ul>
                    </li>
                    {{-- 4.2 Performa Quality --}}
                    <li class="{{ Route::is('quality.unit') || Route::is('quality.individu') ? ' bg-slate-300 bg-opacity-30 dark:bg-opacity-10 rounded-md dark:text-gray-300 p-1' : '' }} relative my-1.5 rounded-md dark:text-gray-200"
                        id="perQuality">
                        <a class="flex justify-between cursor-pointer items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-[6px] px-2 text-sm text-slate-600 transition duration-300 ease-in-out hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium hover:text-slate-900 dark:text-slate-300 dark:hover:bg-slate-400/10 dark:hover:text-slate-50"
                            data-mdb-ripple="true" data-mdb-ripple-color="light" data-bs-toggle="collapse"
                            data-bs-target="#collapsePerQuality" aria-expanded="true"
                            aria-controls="collapsePerQuality">
                            <div class="flex justify-start space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px]" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                                </svg>
                                <span class="tracking-wide">Performa Quality</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-auto h-[19px] w-[19px]" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                        <ul class="{{ Route::is('quality.unit') || Route::is('quality.individu') ? 'show' : '' }} collapse accordion-collapse relative"
                            id="collapsePerQuality" aria-labelledby="perQuality" data-bs-parent="#sideNav">
                            <li class="relative my-1.5">
                                <a href="{{ route('quality.unit') }}"
                                    class="{{ Route::is('quality.unit') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-medium ' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium' }} flex justify-start space-x-3 items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2 text-xs transition duration-300 ease-in-out"
                                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px] ml-2" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    <span
                                        class="tracking-wide">Unit
                                    </span>
                                    </a>
                            </li>
                            <li class="relative my-1.5">
                                <a href="{{ route('quality.individu') }}"
                                    class="{{ Route::is('quality.individu') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-medium ' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium' }} flex  justify-start space-x-3 items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2 text-xs transition duration-300 ease-in-out"
                                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-[19px] w-[19px] ml-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                      </svg>
                                    <span class="tracking-wide">Individu
                                        </span>
                                    </a>
                            </li>
                        </ul>
                    </li>
                    {{-- 4.3 Report Pegawai --}}
                    <li class="relative my-1.5">
                        <a class="{{ Route::is('report') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-medium' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium' }} flex justify-start space-x-3 overflow-hidden whitespace-nowrap rounded-lg py-1.5 px-2 text-sm transition duration-300 ease-in-out"
                            href="{{ route('report') }}" data-mdb-ripple="true" data-mdb-ripple-color="light">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-[19px] w-[19px]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                              </svg>
                            <span class="tracking-wide">Report</span>
                        </a>
                    </li>
                </ul>
                <button @click.prevent="showSideBar = !showSideBar " class="flex justify-between px-2 py-4">
                    <svg x-show="!showSideBar" class="mr-2 h-6 w-6" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </nav>
    </div>
</div>
{{-- 3. Footer Side Bar --}}
<div div x-show="!showSideBar"
    class="fixed inset-x-0 bottom-0 w-64 px-6 py-6 text-center text-3xl backdrop-blur-2xl backdrop-filter dark:text-slate-200">
    <a data-bs-toggle="collapse" data-bs-target="#collapseUser" aria-expanded="true" aria-controls="collapseUser">
        <div class="flex cursor-pointer justify-start space-x-4">
            <div class="h-10rounded-full w-10">
                <img class="rounded-full transition duration-150 ease-in-out hover:ring-2 hover:ring-slate-300"
                    src="{{ asset('img/Avatar/default.jpg') }}" alt="" />
            </div>
            <div class="my-auto flex w-3/4 justify-between">
                <h6 class="text-sm font-medium">{{ Auth::user()->np }}</h6>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-[19px] w-[19px]">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </div>
        </div>
        <ul id="collapseUser" class="collapse accordion-collapse relative mt-6">
            {{-- 1. Logout --}}
            <li class="relative my-1.5 rounded-md py-2 hover:bg-slate-800 hover:bg-opacity-80 hover:text-slate-50">
                <a href="">
                    <div class="flex justify-start pl-4 pr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="h-[19px] w-[19px]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M5.636 5.636a9 9 0 1012.728 0M12 3v9" />
                        </svg>
                        <span class="ml-3 text-ellipsis text-sm font-medium">Logout</span>
                    </div>
                </a>
            </li>
            {{-- 2. Biodata --}}
            <li class="relative my-1.5 rounded-md py-2 hover:bg-slate-800 hover:bg-opacity-80 hover:text-slate-50">
                <a href="">
                    <div class="flex justify-start pl-4 pr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="h-[19px] w-[19px]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="ml-3 text-ellipsis text-sm font-medium">Biodata</span>
                    </div>
                </a>
            </li>
        </ul>
    </a>
</div>
