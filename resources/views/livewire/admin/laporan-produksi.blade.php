<div class="container mx-auto py-10">
    <x-card>
        {{-- Header --}}
        <x-slot name="title">
            <h4
                class="my-auto font-sans text-lg font-semibold leading-tight text-slate-900 dark:text-slate-100 text-center">
                Monitoring Produksi Pita Cukai</h4>
        </x-slot>
        {{-- Filter --}}
        <div class="flex justify-between p-4">
            <x-date-range>
                <x-slot name="lable">
                    Periode
                </x-slot>
            </x-date-range>
            <div class="flex flex-col text-center">
                <span class="text-slate-700 font-medium text-sm">
                    <a href="mailto:aris.hudin@peruri.co.id">Aris Hudin</a> / <a href="mailto:mafut.jahrodin@peruri.co.id">Mafut Jahrodin</a>
                </span>
                <span class="text-slate-700 font-medium text-sm">
                    Ext. 3647
                </span>
            </div>
        </div>
        {{-- Table Order PCHT --}}
        @include('components.table.laporan-produksi-pcht')
        {{-- End Table Produksi PCHT --}}
        {{-- Table Order MMEA --}}
        @include('components.table.laporan-produksi-mmea')
        {{-- End Table Produksi MMEA --}}
    </x-card>
</div>
