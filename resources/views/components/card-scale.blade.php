<div
    class="px-4 py-4 md:py-6 w-full bg-white drop-shadow-sm rounded-2xl dark:bg-slate-800 dark:bg-opacity-60 dark:backdrop-blur-sm dark:backdrop-filter"
    x-show='mainContent'
    x-transition.scale.origin.top
    x-transition:enter.duration.700ms
    x-transition:leave.duration.700ms>
    {{-- Header --}}
    @isset($title)
        <div>
            <h4 class="my-auto pb-6 font-sans text-lg font-semibold leading-tight text-slate-500 dark:text-slate-100">
                {{ $title }}
            </h4>
        </div>
    @endisset
    <div>
        {{ $slot }}
    </div>
</div>
