<div
    class="px-4 py-6 w-full rounded-md bg-gradient-to-br from-slate-50 dark:from-transparent dark:to-transparent via-slate-100 to-slate-50  dark:bg-slate-800 dark:bg-opacity-60 dark:backdrop-blur-sm dark:backdrop-filter">
    {{-- Header --}}
    <div>
        <h4 class="my-auto pb-6 font-sans text-lg font-semibold leading-tight text-slate-500 dark:text-slate-100">
            @isset($title)
                {{ $title }}
            @endisset
        </h4>
    </div>
    <div>
        {{ $slot }}
    </div>
</div>
