<form>
    <x-modal.app-edit>
        <x-slot name="title">
            Target & Jam Efektif
        </x-slot>
        {{-- 2. Modal Content --}}
        <div class="flex flex-col gap-4 my-4">

           {{-- 2.1 Gilir --}}
           <div class="flex flex-col w-full gap-1">
               <label class="inline-block py-1 text-sm font-medium text-center text-slate-600 dark:text-slate-200"
                   for="gilir">Gilir</label>
               <select wire:model='gilir' id="gilir" disabled
                   class="w-full leading-tight transition duration-300 ease-in-out rounded-md border-slate-300 bg-slate-300 text-slate-600 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
                   <option value="1">Pagi</option>
                   <option value="2">Sore</option>
                   <option value="3">Malam</option>
               </select>
           </div>

           <div class="flex flex-row gap-4">
               {{-- 2.2 Seksi --}}
               <div class="flex flex-col w-full gap-1">
                   <label class="inline-block py-1 text-sm font-medium text-slate-600 dark:text-slate-200"
                       for="seksi">Seksi</label>
                   <select wire:model='seksi' id="seksi" disabled
                       class="w-full leading-tight transition duration-300 ease-in-out rounded-md border-slate-300 bg-slate-300 text-slate-600 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
                       <option value="0">-</option>
                       @foreach (\App\Models\Seksi::all()->sortBy('seksi') as $list)
                           <option value="{{ $list->id }}">{{ $list->seksi }}</option>
                       @endforeach
                   </select>
               </div>

               {{-- 2.3 Unit --}}
               <div class="flex flex-col w-full gap-1">
                   <label class="inline-block py-1 text-sm font-medium text-slate-600 dark:text-slate-200"
                       for="station">Workstation</label>
                   <select wire:model='station' id="station" disabled
                       class="w-full leading-tight transition duration-300 ease-in-out rounded-md border-slate-300 bg-slate-300 text-slate-600 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
                       <option value="0">-</option>
                       @foreach (\App\Models\Workstation::all()->sortBy('workstation') as $list)
                           <option value="{{ $list->id }}">{{ $list->workstation }}</option>
                       @endforeach
                   </select>
               </div>
           </div>
       </div>

       <div class="flex flex-row gap-4">
           {{-- 2.4 Jam Efektif --}}
           <div class="flex flex-col w-full gap-1">
               <label class="inline-block py-1 text-sm font-medium text-slate-600 dark:text-slate-200"
                   for="jamEfektif">Jam Efektif</label>
               <input type="number" min="0" wire:model='jamEfektif' id="jamEfektif"
                   class="w-full text-sm leading-tight transition duration-300 ease-in-out rounded-md border-slate-400/60 text-slate-600 hover:border-blue-500 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
           </div>

           {{-- 2.5 Target / Jam --}}
           <div class="flex flex-col w-full gap-1">
               <label class="inline-block py-1 text-sm font-medium text-slate-600 dark:text-slate-200"
                   for="targetJam">Target / Jam</label>
               <input type="number" min="0" wire:model='targetJam' id="targetJam"
                   class="w-full text-sm leading-tight transition duration-300 ease-in-out rounded-md border-slate-400/60 text-slate-600 hover:border-blue-500 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
           </div>

           {{-- 2.6 Satuan --}}
           <div class="flex flex-col w-full gap-1">
               <label class="inline-block py-1 text-sm font-medium text-slate-600 dark:text-slate-200"
                   for="satuan">Satuan</label>
               <input type="text" wire:model='satuan' id="satuan"
                   class="w-full text-sm leading-tight transition duration-300 ease-in-out rounded-md border-slate-400/60 text-slate-600 hover:border-blue-500 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
           </div>

           {{-- 2.7 Produk --}}
           <div class="flex flex-col w-full gap-1">
               <label class="inline-block py-1 text-sm font-medium text-slate-600 dark:text-slate-200"
                   for="produk">Produk</label>
               <input type="text" wire:model='produk' id="produk"
                   class="w-full text-sm leading-tight transition duration-300 ease-in-out rounded-md border-slate-400/60 text-slate-600 hover:border-blue-500 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
           </div>

       </div>
    </x-modal.app-edit>
</form>
