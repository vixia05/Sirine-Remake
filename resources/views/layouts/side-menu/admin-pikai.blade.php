<h6 :class="expandNavbar ? 'opacity-100' : 'opacity-0'"
    class="absolute px-3 py-2 text-base font-bold leading-tight duration-300 ease-in-out text-ellipsis whitespace-nowrap drop-shadow-lg dark:text-gray-200">
    Admin
</h6>
<h6 :class="!expandNavbar ? 'opacity-100' : 'opacity-0'"
    class="absolute px-3 py-2 text-base font-bold leading-tight duration-300 ease-in-out text-ellipsis whitespace-nowrap drop-shadow-lg dark:text-gray-200">
    ADM
</h6>
{{-- 1 Data Pegawai --}}
<li class="relative mt-12 mb-1.5">
    <a class="{{ Route::is('dataPegawai.index') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-medium' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium' }} flex gap-3 items-center overflow-hidden whitespace-nowrap rounded-lg py-1.5 px-2.5 mx-1 text-sm transition duration-300 ease-in-out"
        href="{{ route('dataPegawai.index') }}" data-mdb-ripple="true" data-mdb-ripple-color="light">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px] flex-shrink-0" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
        </svg>
        <span class="tracking-wide duration-300 ease-in-out" :class="expandNavbar ? 'opacity-100' : 'opacity-0'">Data
            Pegawai</span>
    </a>
</li>
