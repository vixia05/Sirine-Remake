<div x-on:mouseenter="expandNavbar = true" x-on:mouseleave="expandNavbar = false"
    :class="expandNavbar ? 'w-64 ' : 'w-0 md:w-20'"
    class="fixed top-0 bottom-0 min-h-full pb-24 overflow-y-auto transition-all duration-300 ease-in-out shadow-md rounded-r-2xl bg-slate-50 bg-opacity-80 drop-shadow-md scrollbar-hide backdrop-blur backdrop-filter dark:bg-slate-900 dark:bg-opacity-80"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 scale-x-70 -translate-x-1/2"
    x-transition:enter-end="opacity-100 scale-x-100 -translate-x-0"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 scale-x-100 -translate-x-0"
    x-transition:leave-end="opacity-0 scale-x-70 -translate-x-1/2">
    <div :class="expandNavbar ? 'justify-center' : '' " class="top-0 flex items-center gap-3 p-4 duration-300 ease-in-out delay-300 sticky-top bg-slate-900">
            <img src="{{ asset('img/logo-only.png') }}"  class="flex-shrink-0 object-cover h-16">
            <span :class="expandNavbar ? 'opacity-100' : 'opacity-0'" class="font-mono text-3xl font-extrabold duration-300 ease-in-out text-slate-800 dark:text-white">SIRINE</h1>
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
    <div class="px-4 mt-4">
        <nav class="relative">
            <div id="sideNav">
                <ul class="relative">
                    {{-- 1. Global Menu --}}
                    {{-- 1.1 Dashboard --}}
                    <li class="relative my-1.5">
                        <a class="{{ Route::is('dashboard') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium' }} flex gap-3 items-center overflow-hidden whitespace-nowrap rounded-lg py-1.5 px-2.5 mx-1 text-sm transition duration-300 ease-in-out"
                            href="{{ route('dashboard') }}" data-mdb-ripple="true" data-mdb-ripple-color="light">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px] flex-shrink-0" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            <span class="tracking-wide duration-300 ease-in-out" :class="expandNavbar ? 'opacity-100' : 'opacity-0'">Dashboard</span>
                        </a>
                    </li>
                    {{-- 1.2 Profile --}}
                    <li class="relative my-1.5">
                        <a class="{{ Route::is('profile.index') ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-medium' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-medium' }} flex gap-3 items-center overflow-hidden whitespace-nowrap rounded-lg py-1.5 px-2.5 mx-1 text-sm transition duration-300 ease-in-out"
                            href="{{ route('profile.index') }}" data-mdb-ripple="true" data-mdb-ripple-color="light">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px] flex-shrink-0" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span class="tracking-wide duration-300 ease-in-out" :class="expandNavbar ? 'opacity-100' : 'opacity-0'">Biodata</span>
                        </a>
                    </li>
                    {{-- 2.0 Menu Super User --}}
                    @include('layouts.side-menu.super-user')
                    {{-- 3.0 Menu Admin --}}
                    @include('layouts.side-menu.admin-pikai')
                    {{-- 4.0 Menu Verifikasi Pita Cukai --}}
                    @include('layouts.side-menu.verifikasi-pikai')
                    {{-- 5.0 Menu Cetak Pita Cukai --}}
                    {{-- @include('layouts.side-menu.cetak-pikai') --}}
                    {{-- 6.0 Andon --}}
                    @include('layouts.side-menu.andon')
                    {{-- ***************** --}}
                </ul>
            </div>
        </nav>
    </div>
</div>
{{-- 3. Footer Side Bar --}}
<div
    x-on:mouseenter="expandNavbar = true" x-on:mouseleave="expandNavbar = false"
    :class="expandNavbar ? 'w-64' : 'w-20'"
    class="fixed inset-x-0 bottom-0 hidden px-6 py-4 text-3xl text-center transition-all duration-300 md:block rounded-r-2xl dark:bg-slate-900 dark:text-slate-200">
    <a data-bs-toggle="collapse" data-bs-target="#collapseUser" aria-expanded="true" aria-controls="collapseUser">
        <div class="flex justify-start space-x-4 cursor-pointer">
            <div class="w-10 h-10 rounded-full">
                <img class="transition duration-150 ease-in-out rounded-full hover:ring-2 hover:ring-slate-300"
                    src="{{ asset('img/Avatar/default.jpg') }}" alt="" />
            </div>
            <div
                x-show="expandNavbar"
                class="flex justify-between w-3/4 my-auto">
                <h6 class="text-sm font-medium">{{ Auth::user()->np }}</h6>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-[19px] w-[19px]">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </div>
        </div>
        <ul id="collapseUser" class="relative collapse accordion-collapse">
            {{-- 1. Logout --}}
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <li
                    class="relative mt-4 py-1.5 rounded-md cursor-pointer hover:bg-slate-800 hover:bg-opacity-80 hover:text-slate-50">
                    <a :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        <div class="flex justify-start pl-4 pr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-[19px] w-[19px]">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.636 5.636a9 9 0 1012.728 0M12 3v9" />
                            </svg>
                            <span class="ml-3 text-sm font-medium text-ellipsis" >Logout</span>
                        </div>
                    </a>
                </li>
            </form>
            {{-- 2. Biodata --}}
            <li class="relative my-1.5 py-1.5 rounded-md hover:bg-slate-800 hover:bg-opacity-80 hover:text-slate-50">
                <a href="{{ route('profile.index') }}">
                    <div class="flex justify-start pl-4 pr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="h-[19px] w-[19px]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="ml-3 text-sm font-medium text-ellipsis">Biodata</span>
                    </div>
                </a>
            </li>
        </ul>
    </a>
</div>
