@props(['href', 'route'])

<li class="relative mb-1.5">
    <a class="{{ Route::is($route) ? ' bg-blue-600 shadow-blue-600/50 dark:bg-blue-500 dark:shadow-blue-500/50 rounded-md shadow-lg brightness-125 text-slate-50 font-semibold' : 'text-slate-600 dark:text-slate-300 dark:hover:text-slate-50 hover:text-slate-900 dark:hover:bg-slate-400/10 hover:bg-slate-500 hover:bg-opacity-10 hover:font-semibold' }} flex gap-3 items-center overflow-hidden whitespace-nowrap rounded-lg py-1.5 px-2.5 mx-1 text-xs transition duration-300 ease-in-out"
        href="{{ isset($route) ? route($route) : $href }}" data-mdb-ripple="true" data-mdb-ripple-color="light">
        {{ $svg }}
        <span class="tracking-wide font-medium duration-300 ease-in-out" :class="expandNavbar ? 'opacity-100' : 'opacity-0'">{{ $slot }}</span>
    </a>
</li>
