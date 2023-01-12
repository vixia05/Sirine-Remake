<h6 :class="expandNavbar ? 'opacity-100' : 'opacity-0'"
    class="absolute px-3 py-2 text-base font-bold leading-tight duration-300 ease-in-out text-ellipsis whitespace-nowrap drop-shadow-lg dark:text-gray-200">
    Admin
</h6>
<h6 :class="!expandNavbar ? 'opacity-100' : 'opacity-0'"
    class="absolute px-3 py-2 text-base font-bold leading-tight duration-300 ease-in-out text-ellipsis whitespace-nowrap drop-shadow-lg dark:text-gray-200">
    ADM
</h6>
{{-- 1 Data Pegawai --}}
<div class="mt-12">
</div>
<x-side-nav-link :route="'dataPegawai.index'">
    <x-slot name="svg">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-[19px] w-[19px] flex-shrink-0" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
        </svg>
    </x-slot>
    Data Pegawai
</x-side-nav-link>
{{-- 2 Laaporan Produksi --}}
<x-side-nav-link :route="'laporanProduksi'">
    <x-slot name="svg">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-[19px] w-[19px] flex-shrink-0">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
          </svg>
    </x-slot>
    Laporan Produksi
</x-side-nav-link>
