<h6
    :class="expandNavbar ? 'opacity-100' : 'opacity-0'"
    class="absolute px-3 py-2 text-base font-bold leading-tight duration-300 ease-in-out text-ellipsis whitespace-nowrap drop-shadow-lg dark:text-gray-200">
    Andon
</h6>
<h6
    :class="!expandNavbar ? 'opacity-100' : 'opacity-0'"
    class="absolute px-3 py-2 text-base font-bold leading-tight duration-300 ease-in-out text-ellipsis whitespace-nowrap drop-shadow-lg dark:text-gray-200">
    Andon
</h6>
{{-- 1.0 Progress Pita Cukai --}}
<li class="relative mt-12 mb-1.5">
    <a class="{{ Route::is('andon.khazwalPikai') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium' }} flex gap-3 items-center overflow-hidden whitespace-nowrap rounded-lg py-1.5 px-2.5 mx-1 text-sm transition duration-300 ease-in-out"
        href="{{ route('andon.khazwalPikai') }}" data-mdb-ripple="true" data-mdb-ripple-color="light">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-[19px] w-[19px] flex-shrink-0">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
          </svg>
        <span class="tracking-wide" :class="expandNavbar ? 'opacity-100' : 'opacity-0'">Khazwal Pita Cukai</span>
    </a>
</li>
{{-- 1.0 Progress Pita Cukai --}}
<li class="relative my-1.5">
    <a class="{{ Route::is('andon.cetakPikai') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium' }} flex gap-3 items-center overflow-hidden whitespace-nowrap rounded-lg py-1.5 px-2.5 mx-1 text-sm transition duration-300 ease-in-out"
        href="{{ route('andon.cetakPikai') }}" data-mdb-ripple="true" data-mdb-ripple-color="light">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-[19px] w-[19px] flex-shrink-0">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
          </svg>
        <span class="tracking-wide" :class="expandNavbar ? 'opacity-100' : 'opacity-0'">Cetak Pita Cukai</span>
    </a>
</li>
{{-- 1.0 Progress Pita Cukai --}}
<li class="relative my-1.5">
    <a class="{{ Route::is('andon.verifPikai') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium' }} flex gap-3 items-center overflow-hidden whitespace-nowrap rounded-lg py-1.5 px-2.5 mx-1 text-sm transition duration-300 ease-in-out"
        href="{{ route('andon.verifPikai') }}" data-mdb-ripple="true" data-mdb-ripple-color="light">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-[19px] w-[19px] flex-shrink-0">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
          </svg>
        <span class="tracking-wide" :class="expandNavbar ? 'opacity-100' : 'opacity-0'">Verifikasi Pita Cukai</span>
    </a>
</li>
{{-- 1.0 Progress Pita Cukai --}}
<li class="relative my-1.5">
    <a class="{{ Route::is('andon.khazkhirPikai') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium' }} flex gap-3 items-center overflow-hidden whitespace-nowrap rounded-lg py-1.5 px-2.5 mx-1 text-sm transition duration-300 ease-in-out"
        href="{{ route('andon.khazkhirPikai') }}" data-mdb-ripple="true" data-mdb-ripple-color="light">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-[19px] w-[19px] flex-shrink-0">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
          </svg>
        <span class="tracking-wide" :class="expandNavbar ? 'opacity-100' : 'opacity-0'">Khazkhir Pita Cukai</span>
    </a>
</li>
