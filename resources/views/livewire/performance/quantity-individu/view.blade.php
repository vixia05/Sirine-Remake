<div class="py-6">
    <div class="px-4 mx-auto lg:px-8">
        <div class="grid grid-cols-1 gap-0 space-y-3 md:grid-cols-3 md:gap-3">
            {{-- A. Card Hasil Verifikasi Individu --}}
            @include('livewire.performance.quantity-individu.partials.chrt-individu')
            {{-- End A. Card Hasil Verifikasi Individu --}}

            <div class="relative grid col-span-3 gap-3 md:grid-cols-2 lg:col-span-1 lg:grid-cols-1">
                {{-- B. Card Hasil Verifikasi Unit --}}
                @include('livewire.performance.quantity-individu.partials.chrt-unit')
                {{-- End B. Card Hasil Verifikasi Unit --}}

                {{-- C. Card Standar Verifikasi Individu --}}
                @include('livewire.performance.quantity-individu.partials.table-target')
                {{-- End C.Table Target Pita Cukai --}}
            </div>

            {{-- D. Table Rekap Evaluasi --}}
            <div class="col-span-1 md:col-span-3">
               @include('livewire.performance.quantity-individu.partials.table-evaluasi')
            </div>
        </div>
    </div>
</div>

@include('livewire.performance.quantity-individu.partials.javaScript')
