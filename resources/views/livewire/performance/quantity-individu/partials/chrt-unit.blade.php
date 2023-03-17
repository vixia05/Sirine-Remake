<div class="relative w-full p-4 px-6 overflow-hidden bg-white rounded-2xl drop-shadow-sm dark:bg-slate-800 dark:bg-opacity-60 dark:backdrop-blur-sm dark:backdrop-filter"
    x-show='mainContent' x-transition:enter.duration.700ms x-transition:leave.duration.700ms>
    <div class="pb-3 border-b-2 border-slate-600/70 dark:border-slate-300">
        <div class="flex flex-col">
            <h6 class="w-full text-lg font-bold text-slate-800 dark:text-slate-100">Verifikasi Pita
                Cukai</h6>
            <span class="text-xs text-slate-500 dark:text-slate-400">2022</span>
        </div>
    </div>
    <div class="relative object-cover w-full pt-6 h-fit md:h-5/6">
        <x-flip-loading></x-flip-loading>
        <canvas wire:ignore id="qtyIndividuYear" name="qtyIndividuYear"></canvas>
    </div>
</div>
