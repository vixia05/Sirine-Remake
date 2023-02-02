{{-- Header --}}
<div class="relative pb-10">
    <h6 :class="expandNavbar ? 'opacity-100' : 'opacity-0'"
        class="absolute px-3 py-2 text-base font-bold leading-tight duration-300 ease-in-out text-ellipsis whitespace-nowrap drop-shadow-lg dark:text-gray-200">
        Content Manage
    </h6>
    <h6 :class="!expandNavbar ? 'opacity-100' : 'opacity-0'"
        class="absolute px-3 py-2 text-base font-bold leading-tight duration-300 ease-in-out text-ellipsis whitespace-nowrap drop-shadow-lg dark:text-gray-200">
        CMS
    </h6>
</div>

{{-- CMS --}}
{{-- List Menu --}}
<li class="relative mb-1.5">
    <x-side-nav-link :route="'listMenu'">
        <x-slot name="svg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px] flex-shrink-0" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
            </svg>
        </x-slot>
        List Menu
    </x-side-nav-link>
</li>

{{-- Template Menu --}}
<li class="relative mb-1.5">
    <x-side-nav-link :route="'templateMenu'">
        <x-slot name="svg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px] flex-shrink-0" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
            </svg>
        </x-slot>
        Template Menu
    </x-side-nav-link>
</li>
