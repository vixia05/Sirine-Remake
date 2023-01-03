<h6 :class="expandNavbar ? 'opacity-100' : 'opacity-0'"
    class="absolute px-3 py-2 text-base font-bold leading-tight duration-300 ease-in-out text-ellipsis whitespace-nowrap drop-shadow-lg dark:text-gray-200">
    Verifikasi Pita Cukai
</h6>
<h6 :class="!expandNavbar ? 'opacity-100' : 'opacity-0'"
    class="absolute px-3 py-2 text-base font-bold leading-tight duration-300 ease-in-out text-ellipsis whitespace-nowrap drop-shadow-lg dark:text-gray-200">
    VPC
</h6>
<div class="mt-12">@if (Helper::getRole() !== 0)
    {{-- 1 Input Data --}}
    <li class="{{
                  Route::is('operator.verif-pikai')
                  || Route::is('inputVerifikasi.index')
                  || Route::is('inputRetur.index')
                  || Route::is('inputEvaluasi.index') ? ' bg-slate-300 bg-opacity-30 dark:bg-opacity-10 rounded-md dark:text-gray-300' : ''
                }} relative mb-1.5" id="inputData">
        <a class="flex cursor-pointer justify-between gap-3 overflow-hidden whitespace-nowrap rounded-lg py-1.5 px-2.5 mx-1 text-xs text-slate-600 transition duration-300 ease-in-out hover:bg-slate-500 hover:bg-opacity-10 hover:font-semibold hover:text-slate-900 dark:text-slate-300 dark:hover:bg-slate-400/10 dark:hover:text-slate-50"
            data-mdb-ripple="true" data-mdb-ripple-color="light" data-bs-toggle="collapse"
            data-bs-target="#collapseInputData" aria-expanded="true" aria-controls="collapseInputData">
            <div class="flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px] flex-shrink-0" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
                <span class="tracking-wide font-medium duration-300 ease-in-out"
                    :class="expandNavbar ? 'opacity-100' : 'opacity-0'">Input Data</span>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" class="ml-auto h-[19px] w-[19px] flex-shrink-0" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </a>
        <ul class="{{
                        Route::is('operator.verif-pikai')
                        || Route::is('inputVerifikasi.index')
                        || Route::is('inputRetur.index')
                        || Route::is('inputEvaluasi.index') ? 'show' : ''
                    }} collapse accordion-collapse relative py-1" id="collapseInputData" aria-labelledby="inputData"
            data-bs-parent="#sideNav">
            {{-- 1.2 Input Checklist Verifikasi --}}
            <li class="relative my-1.5">
                <a href="{{ route('operator.verif-pikai') }}"
                    class="{{ Route::is('operator.verif-pikai') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-semibold' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-semibold' }} flex gap-3 items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2.5 mx-1 text-xs transition duration-300 ease-in-out"
                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-[19px] w-[19px] flex-shrink-0" :class="expandNavbar ? 'ml-2' : '' ">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12" />
                    </svg>
                    <span class="tracking-wide font-medium duration-300 ease-in-out"
                        :class="expandNavbar ? 'opacity-100' : 'opacity-0'">Checklist Verifikasi</span></a>
            </li>
            {{-- 1.2 Input Data Verifikasi --}}
            <li class="relative my-1.5">
                <a href="{{ route('inputVerifikasi.index') }}"
                    class="{{ Route::is('inputVerifikasi.index') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-semibold' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-semibold' }} flex gap-3 items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2.5 mx-1 text-xs transition duration-300 ease-in-out"
                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-[19px] w-[19px] flex-shrink-0" :class="expandNavbar ? 'ml-2' : '' ">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12" />
                    </svg>
                    <span class="tracking-wide font-medium duration-300 ease-in-out"
                        :class="expandNavbar ? 'opacity-100' : 'opacity-0'">Pendapatan Harian</span></a>
            </li>
            @if (Helper::getRole() > 1)
            {{-- 1.3 Input Data Retur --}}
            <li class="relative my-1.5">
                <a href="{{ route('inputRetur.index') }}"
                    class="{{ Route::is('inputRetur.index') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-semibold' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-semibold' }} flex gap-3 items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2.5 mx-1 text-xs transition duration-300 ease-in-out"
                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-[19px] w-[19px] flex-shrink-0" :class="expandNavbar ? 'ml-2' : '' ">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12" />
                    </svg>
                    <span class="">Input Kelolosan</span>
                </a>
            </li>
            {{-- 1.4 Input Data Evaluasi --}}
            <li class="relative my-1.5">
                <a href="{{ route('inputEvaluasi.index') }}"
                    class="{{ Route::is('inputEvaluasi.index') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-semibold' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-semibold' }} flex gap-3 items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2.5 mx-1 text-xs transition duration-300 ease-in-out"
                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-[19px] w-[19px] flex-shrink-0" :class="expandNavbar ? 'ml-2' : '' ">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12" />
                    </svg>
                    <span class="tracking-wide font-medium duration-300 ease-in-out"
                        :class="expandNavbar ? 'opacity-100' : 'opacity-0'">Pesan
                        Evaluasi
                    </span>
                </a>
            </li>
            @endif
        </ul>
    </li>
    <li class="{{
                    Route::is('operator.data-prod-verif')
                    || Route::is('rekapVerif.index')
                    || Route::is('rekapRetur.index')
                    || Route::is('rekapEvaluasi.index') ? ' bg-slate-300 bg-opacity-30 dark:bg-opacity-10 rounded-md dark:text-gray-300' : ''
                }} relative w-full rounded-lg" id="rekapData">
        <a class="flex cursor-pointer justify-between gap-3 overflow-hidden whitespace-nowrap rounded-lg py-1.5 px-2.5 mx-1 text-xs text-slate-600 transition duration-300 ease-in-out hover:bg-slate-500 hover:bg-opacity-10 hover:font-semibold hover:text-slate-900 dark:text-slate-300 dark:hover:bg-slate-400/10 dark:hover:text-slate-50"
            data-mdb-ripple="true" data-mdb-ripple-color="light" data-bs-toggle="collapse"
            data-bs-target="#collapseRekapData" aria-expanded="true" aria-controls="collapseRekapData">
            <div class="flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px] flex-shrink-0" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                </svg>
                <span class="tracking-wide font-medium duration-300 ease-in-out"
                    :class="expandNavbar ? 'opacity-100' : 'opacity-0'">Rekap Data</span>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" class="ml-auto h-[19px] w-[19px] flex-shrink-0" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </a>
        <ul class="{{ Route::is('rekapVerif.index') || Route::is('rekapRetur.index') || Route::is('rekapEvaluasi.index') ? 'show' : '' }} collapse accordion-collapse relative py-1"
            id="collapseRekapData" aria-labelledby="rekapData" data-bs-parent="#sideNav">
            {{-- 2.1 Laporan Produksi --}}
            <li class="relative my-1.5">
                <a href="{{ route('operator.data-prod-verif') }}"
                    class="{{ Route::is('operator.data-prod-verif') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-semibold ' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-semibold' }} flex items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2.5 mx-1 text-xs transition duration-300 ease-in-out"
                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                    <div class="flex items-center gap-3" :class="expandNavbar ? 'ml-2' : ''">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px] flex-shrink-0" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                        <span class="tracking-wide font-medium duration-300 ease-in-out"
                            :class="expandNavbar ? 'opacity-100' : 'opacity-0'">Produksi Verifikasi</span>
                    </div>
                </a>
            </li>
            @if (Helper::getRole() > 1)
            {{-- 2.2 Rekap Retur --}}
            <li class="relative my-1.5">
                <a href="{{ route('rekapRetur.index') }}"
                    class="{{ Route::is('rekapRetur.index') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-semibold' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-semibold' }} flex items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2.5 mx-1 text-xs transition duration-300 ease-in-out"
                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                    <div class="flex items-center gap-3" :class="expandNavbar ? 'ml-2' : ''">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px] flex-shrink-0" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                        </svg>
                        <span class="tracking-wide font-medium duration-300 ease-in-out"
                            :class="expandNavbar ? 'opacity-100' : 'opacity-0'">Data Retur</span>
                    </div>
                </a>
            </li>
            {{-- 2.3 Rekap Evaluasi --}}
            <li class="relative my-1.5">
                <a href="{{ route('rekapEvaluasi.index') }}"
                    class="{{ Route::is('rekapEvaluasi.index') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-semibold' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-semibold' }} flex items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2.5 mx-1 text-xs transition duration-300 ease-in-out"
                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                    <div class="flex items-center gap-3" :class="expandNavbar ? 'ml-2' : ''">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px] flex-shrink-0" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                        </svg>
                        <span class="tracking-wide font-medium duration-300 ease-in-out"
                            :class="expandNavbar ? 'opacity-100' : 'opacity-0'">Rekap
                            Evaluasi</span>
                    </div>
                </a>
            </li>
            @endif
            @if (Helper::getRole() > 0)
            {{-- 2.1 Rekap Verifikasi --}}
            <li class="relative my-1.5">
                <a href="{{ route('rekapVerif.index') }}"
                    class="{{ Route::is('rekapVerif.index') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-semibold ' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-semibold' }} flex items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2.5 mx-1 text-xs transition duration-300 ease-in-out"
                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                    <div class="flex items-center gap-3" :class="expandNavbar ? 'ml-2' : ''">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px] flex-shrink-0" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                        <span class="tracking-wide font-medium duration-300 ease-in-out"
                            :class="expandNavbar ? 'opacity-100' : 'opacity-0'">
                            Pendapatan Harian</span>
                    </div>
                </a>
            </li>
            @endif
        </ul>
    </li>
    @if (Helper::getRole() > 2 )
    {{-- 3 Performa Quantity --}}
    <li class="{{ Route::is('quantity.unit') || Route::is('quantity.individu') ? ' bg-slate-300 bg-opacity-30 dark:bg-opacity-10 rounded-md dark:text-gray-300' : '' }} relative py-1 rounded-md dark:text-gray-200"
        id="perQty">
        <a class="flex cursor-pointer items-center justify-between overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-[6px] px-2.5 mx-1 text-xs text-slate-600 transition duration-300 ease-in-out hover:bg-slate-500 hover:bg-opacity-10 hover:font-semibold hover:text-slate-900 dark:text-slate-300 dark:hover:bg-slate-400/10 dark:hover:text-slate-50"
            data-mdb-ripple="true" data-mdb-ripple-color="light" data-bs-toggle="collapse" data-bs-target="#collapsePerQty"
            aria-expanded="true" aria-controls="collapsePerQty">
            <div class="flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px] flex-shrink-0" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                </svg>
                <span class="tracking-wide font-medium duration-300 ease-in-out"
                    :class="expandNavbar ? 'opacity-100' : 'opacity-0'">Performa Quantity</span>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" class="ml-auto h-[19px] w-[19px] flex-shrink-0" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </a>
        <ul class="{{ Route::is('quantity.unit') || Route::is('quantity.individu') ? 'show' : '' }} collapse accordion-collapse relative"
            id="collapsePerQty" aria-labelledby="perQty" data-bs-parent="#sideNav">
            {{-- 3.1 Quantity Unit --}}
            <li class="relative my-1">
                <a href="{{ route('quantity.unit') }}"
                    class="{{ Route::is('quantity.unit') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-semibold ' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-semibold' }} flex gap-3 items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2.5 mx-1 text-xs transition duration-300 ease-in-out"
                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px] flex-shrink-0"
                        :class="expandNavbar ? 'ml-2' : '' " fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="tracking-wide font-medium duration-300 ease-in-out"
                        :class="expandNavbar ? 'opacity-100' : 'opacity-0'">Unit
                    </span>
                </a>
            </li>
            {{-- 3.2 Quantity Individu --}}
            <li class="relative my-1">
                <a href="{{ route('quantity.individu') }}"
                    class="{{ Route::is('quantity.individu') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-semibold ' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-semibold' }} flex gap-3 items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2.5 mx-1 text-xs transition duration-300 ease-in-out"
                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="h-[19px] w-[19px] flex-shrink-0" :class="expandNavbar ? 'ml-2' : '' ">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                    <span class="tracking-wide font-medium duration-300 ease-in-out"
                        :class="expandNavbar ? 'opacity-100' : 'opacity-0'">Individu</span>
                </a>
            </li>
        </ul>
    </li>
    {{-- 4 Performa Quality --}}
    <li class="{{ Route::is('quality.unit') || Route::is('quality.individu') ? ' bg-slate-300 bg-opacity-30 dark:bg-opacity-10 rounded-md dark:text-gray-300' : '' }} relative my-1.5 rounded-md dark:text-gray-200"
        id="perQuality">
        <a class="flex cursor-pointer items-center justify-between overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-[6px] px-2.5 mx-1 text-xs text-slate-600 transition duration-300 ease-in-out hover:bg-slate-500 hover:bg-opacity-10 hover:font-semibold hover:text-slate-900 dark:text-slate-300 dark:hover:bg-slate-400/10 dark:hover:text-slate-50"
            data-mdb-ripple="true" data-mdb-ripple-color="light" data-bs-toggle="collapse"
            data-bs-target="#collapsePerQuality" aria-expanded="true" aria-controls="collapsePerQuality">
            <div class="flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px] flex-shrink-0" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                </svg>
                <span class="tracking-wide font-medium duration-300 ease-in-out"
                    :class="expandNavbar ? 'opacity-100' : 'opacity-0'">Performa Quality</span>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" class="ml-auto h-[19px] w-[19px] flex-shrink-0" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </a>
        <ul class="{{ Route::is('quality.unit') || Route::is('quality.individu') ? 'show' : '' }} collapse accordion-collapse relative"
            id="collapsePerQuality" aria-labelledby="perQuality" data-bs-parent="#sideNav">
            {{-- 4.1 Quality Unit --}}
            <li class="relative my-1.5">
                <a href="{{ route('quality.unit') }}"
                    class="{{ Route::is('quality.unit') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-semibold ' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-semibold' }} flex gap-3 items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2.5 mx-1 text-xs transition duration-300 ease-in-out"
                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px] flex-shrink-0"
                        :class="expandNavbar ? 'ml-2' : '' " fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="tracking-wide font-medium duration-300 ease-in-out"
                        :class="expandNavbar ? 'opacity-100' : 'opacity-0'">Unit
                    </span>
                </a>
            </li>
            {{-- 4.1 Quality Individu --}}
            <li class="relative my-1.5">
                <a href="{{ route('quality.individu') }}"
                    class="{{ Route::is('quality.individu') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-semibold ' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-semibold' }} flex gap-3 items-center overflow-hidden text-ellipsis whitespace-nowrap rounded-lg py-1 px-2.5 mx-1 text-xs transition duration-300 ease-in-out"
                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="h-[19px] w-[19px] flex-shrink-0" :class="expandNavbar ? 'ml-2' : '' ">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                    <span class="tracking-wide font-medium duration-300 ease-in-out"
                        :class="expandNavbar ? 'opacity-100' : 'opacity-0'">Individu
                    </span>
                </a>
            </li>
        </ul>
    </li>
    {{-- 5 Report Pegawai --}}
    <li class="relative my-1.5">
        <a class="{{ Route::is('report') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-semibold' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-semibold' }} flex gap-3 items-center overflow-hidden whitespace-nowrap rounded-lg py-1.5 px-2.5 mx-1 text-xs transition duration-300 ease-in-out"
            href="{{ route('report') }}" data-mdb-ripple="true" data-mdb-ripple-color="light">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                class="h-[19px] w-[19px] flex-shrink-0">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
            </svg>
            <span class="tracking-wide font-medium duration-300 ease-in-out" :class="expandNavbar ? 'opacity-100' : 'opacity-0'">Report
                Pegawai</span>
        </a>
    </li>
    @endif
    @endif
    {{-- 2 Rekap Data --}}
    @if (Helper::getRole() < 2)
    {{-- Quantity Individu Jika Role User --}}
    <li class="relative my-1.5">
        <a class="{{ Route::is('quantity.individu') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-semibold' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-semibold' }} flex gap-3 items-center overflow-hidden whitespace-nowrap rounded-lg py-1.5 px-2.5 mx-1 text-xs transition duration-300 ease-in-out"
            href="{{ route('quantity.individu') }}" data-mdb-ripple="true" data-mdb-ripple-color="light">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                class="h-[19px] w-[19px] flex-shrink-0">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
            </svg>
            <span class="tracking-wide font-medium duration-300 ease-in-out" :class="expandNavbar ? 'opacity-100' : 'opacity-0'">My Performance</span>
        </a>
    </li>
    {{-- Quality Individu Jika Role User --}}
    <li class="relative my-1.5">
        <a class="{{ Route::is('quality.individu') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-semibold' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-semibold' }} flex gap-3 items-center overflow-hidden whitespace-nowrap rounded-lg py-1.5 px-2.5 mx-1 text-xs transition duration-300 ease-in-out"
            href="{{ route('quality.individu') }}" data-mdb-ripple="true" data-mdb-ripple-color="light">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                class="h-[19px] w-[19px] flex-shrink-0">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
            </svg>
            <span class="tracking-wide font-medium duration-300 ease-in-out" :class="expandNavbar ? 'opacity-100' : 'opacity-0'">My Quality</span>
        </a>
    </li>
    @endif


</div>
