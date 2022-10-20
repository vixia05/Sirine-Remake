<h6
    class="px-3 py-2 text-base font-bold leading-tight text-ellipsis whitespace-nowrap drop-shadow-lg dark:text-gray-200">
    Super User
</h6>
{{-- 2.1 Tambah User --}}
<li class="relative my-1.5">
    <a class="{{ Route::is('users.create') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-medium' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium' }} flex justify-start space-x-3 overflow-hidden whitespace-nowrap rounded-lg py-1.5 px-2 text-sm transition duration-300 ease-in-out"
        href="{{ route('users.create') }}" data-mdb-ripple="true" data-mdb-ripple-color="light">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px]" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
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
        <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px]" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
        </svg>
        <span class="tracking-wide">List User</span>
    </a>
</li>
{{-- 2.3 Role & Privillage --}}
<li class="relative my-1.5">
    <a class="{{ Route::is('privillage.index') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-medium' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium' }} flex justify-start space-x-3 overflow-hidden whitespace-nowrap rounded-lg py-1.5 px-2 text-sm transition duration-300 ease-in-out"
        href="{{ route('privillage.index') }}" data-mdb-ripple="true" data-mdb-ripple-color="light">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px]" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
        </svg>
        <span class="tracking-wide">Role & Privillage</span>
    </a>
</li>
{{-- 2.4 Update Order --}}
<li class="relative my-1.5">
    <a class="{{ Route::is('updateOrder.index') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-medium' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium' }} flex justify-start space-x-3 overflow-hidden whitespace-nowrap rounded-lg py-1.5 px-2 text-sm transition duration-300 ease-in-out"
        href="{{ route('updateOrder.index') }}" data-mdb-ripple="true" data-mdb-ripple-color="light">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px]" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
        </svg>
        <span class="tracking-wide">Update Order</span>
    </a>
</li>
{{-- 2.5 Jam Efektif & Target --}}
<li class="relative my-1.5">
    <a class="{{ Route::is('jamEfektif.index') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-medium' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium' }} flex justify-start space-x-3 overflow-hidden whitespace-nowrap rounded-lg py-1.5 px-2 text-sm transition duration-300 ease-in-out"
        href="{{ route('jamEfektif.index') }}" data-mdb-ripple="true" data-mdb-ripple-color="light">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px]" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span class="tracking-wide">Jam Efektif & Target</span>
    </a>
</li>
