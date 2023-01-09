<x-modal.app-edit>
    <x-slot name="title">
        Jumlah Kelolosan
    </x-slot>

    {{-- Tanggal CK3 --}}
<div class="flex flex-col mb-2">
    <label class="text-center inline-block py-1 font-medium text-slate-600 dark:text-slate-200">Tanggal CK3</label>
    <input type="date" disabled wire:model='tglCk3'
        class="w-full leading-tight border-slate-300 rounded-md bg-slate-300 text-slate-600 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
</div>
{{-- Row Nama --}}
<div class="mb-2 grid grid-cols-2 gap-4">
    {{-- 1. Nomor Pokok --}}
    <div class="flex flex-col">
        <label class="inline-block py-1 font-medium text-slate-600 dark:text-slate-200">Nomor Pokok</label>
        <input type="text" disabled wire:model='npEdit'
            class="w-full leading-tight border-slate-300 rounded-md bg-slate-300 text-slate-600 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
    </div>
    {{-- 2. Nama --}}
    <div class="flex flex-col">
        <label class="inline-block py-1 font-medium text-slate-600 dark:text-slate-200">Nama</label>
        <input type="text" wire:model='namaUser'
            class="w-full leading-tight text-sm border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100 ">
        @if($errors->has('namaUser'))
        <div class="text-red-500 p-1 text-sm">{{ $errors->first('namaUser') }}</div>
        @endif
    </div>
</div>
{{-- Row Jenis Kerusakan --}}
<div class="my-3">
    <h3
        class="text-center pt-5 pb-3 mb-6 text-xl font-bold border-b-2 border-slate-600 text-slate-600 dark:border-slate-100 dark:text-slate-100">
        Jenis Kelolosan</h3>
</div>
{{-- 2.2 Jenis Kelolosan Row 1 --}}
<div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-4">
    {{-- 2.2.1 Kelolosan Blobor --}}
    <div>
        <label for="blobor" class="inline-block py-1 font-medium text-slate-600 text-sm dark:text-slate-200"
            for="blobor">Blobor</label>
        <input type="number" min="0" wire:model='blobor' id="blobor"
            class="w-full leading-tight text-sm border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
    </div>
    {{-- 2.2. Kelolosan Plooi --}}
    <div>
        <label for="plooi" class="inline-block py-1 font-medium text-slate-600 text-sm dark:text-slate-200"
            for="plooi">Plooi</label>
        <input type="number" min="0" wire:model='plooi' id="plooi"
            class="w-full leading-tight text-sm border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
    </div>
    {{-- 2.2. Kelolosan Blur --}}
    <div>
        <label for="blur" class="inline-block py-1 font-medium text-slate-600 text-sm dark:text-slate-200"
            for="blur">Blur</label>
        <input type="number" min="0" id="blur"
            class="w-full leading-tight text-sm border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
            wire:model='blur'>
    </div>
    {{-- 2.2. Kelolosan Hologram --}}
    <div>
        <label for="hologram" class="inline-block py-1 font-medium text-slate-600 text-sm dark:text-slate-200"
            for="holo">Hologram</label>
        <input type="number" min="0" id="holo"
            class="w-full leading-tight text-sm border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
            wire:model='holo'>
    </div>
</div>
{{-- 2.2 Jenis Kelolosan Row 1 --}}
<div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-4">
    {{-- 2.2.1 Kelolosan Blobor --}}
    <div>
        <label for="noda" class="inline-block py-1 font-medium text-slate-600 text-sm dark:text-slate-200"
            for="noda">Noda</label>
        <input type="number" min="0" id="noda"
            class="w-full leading-tight text-sm border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
            wire:model='noda'>
    </div>
    {{-- 2.2. Kelolosan Miss Reg --}}
    <div>
        <label for="missReg" class="inline-block py-1 font-medium text-slate-600 text-sm dark:text-slate-200"
            for="miss">Miss
            Register</label>
        <input type="number" min="0" id="miss"
            class="w-full leading-tight text-sm border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
            wire:model='miss'>
    </div>
    {{-- 2.2. Kelolosan Tipis--}}
    <div>
        <label for="tipis" class="inline-block py-1 font-medium text-slate-600 text-sm dark:text-slate-200"
            for="tipis">Tipis</label>
        <input type="number" min="0" id="tipis"
            class="w-full leading-tight text-sm border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
            wire:model='tipis'>
    </div>
    {{-- 2.2. Kelolosan Gradasi--}}
    <div>
        <label for="gradasi" class="inline-block py-1 font-medium text-slate-600 text-sm dark:text-slate-200"
            for="gradasi">Gradasi</label>
        <input type="number" min="0" id="gradasi"
            class="w-full leading-tight text-sm border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
            wire:model='gradasi'>
    </div>
</div>
{{-- 2.2 Jenis Kelolosan Row 1 --}}
<div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-4">
    {{-- 2.2.1 Kelolosan Sobek --}}
    <div>
        <label for="sobek" class="inline-block py-1 font-medium text-slate-600 text-sm dark:text-slate-200"
            for="sobek">Sobek</label>
        <input type="number" min="0" id="sobek"
            class="w-full leading-tight text-sm border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
            wire:model='sobek'>
    </div>
    {{-- 2.2. Kelolosan Terpotong --}}
    <div>
        <label for="terpotong" class="inline-block py-1 font-medium text-slate-600 text-sm dark:text-slate-200"
            for="terpotong">Terpotong</label>
        <input type="number" min="0" id="terpotong"
            class="w-full leading-tight text-sm border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
            wire:model='terpotong'>
    </div>
    {{-- 2.2. Kelolosan Tercampur --}}
    <div>
        <label for="tercampur" class="inline-block py-1 font-medium text-slate-600 text-sm dark:text-slate-200"
            for="tercampur">Tercampur</label>
        <input type="number" min="0"
            class="w-full leading-tight text-sm border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
            wire:model='tercampur' id="tercampur">
    </div>
    {{-- 2.2. Kelolosan Botak \ Blanko--}}
    <div>
        <label for="botak" class="inline-block py-1 font-medium text-slate-600 text-sm dark:text-slate-200"
            for="botak">Botak</label>
        <input type="number" min="0" id="botak"
            class="w-full leading-tight text-sm border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
            wire:model='botak'>
    </div>
</div>
<div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-4">
    {{-- 2.2.1 Kelolosan Sobek --}}
    <div>
        <label for="minyak" class="inline-block py-1 font-medium text-slate-600 text-sm dark:text-slate-200"
            for="minyak">Minyak</label>
        <input type="number" min="0" id="minyak"
            class="w-full leading-tight text-sm border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
            wire:model='minyak'>
    </div>
    {{-- 2.2. Kelolosan Terpotong --}}
    <div>
        <label for="blanko" class="inline-block py-1 font-medium text-slate-600 text-sm dark:text-slate-200"
            for="blanko">Blanko</label>
        <input type="number" min="0" id="blanko"
            class="w-full leading-tight text-sm border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
            wire:model='blanko'>
    </div>
    <div>
        <label for="diecut" class="inline-block py-1 font-medium text-slate-600 text-sm dark:text-slate-200"
            for="diecut">Diecut</label>
        <input type="number" min="0" id="diecut"
            class="w-full leading-tight text-sm border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
            wire:model='diecut'>
    </div>
</div>
</x-modal.app-edit>
