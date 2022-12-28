@extends('components.modal.app-edit')
@section('modal-title','Jumlah Kerusakan')
@section('edit-modal-content')
{{-- Tanggal CK3 --}}
<div class="flex flex-col mb-2">
    <label class="mb-1 text-slate-800/90 dark:text-slate-100/90 text-center">Tanggal Verifikasi</label>
    <input type="date" wire:model='tglVerif'
        class="appearance-none rounded border-slate-300 bg-zinc-300/60 py-1 px-2 text-sm tracking-wide text-slate-800 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:border-slate-600 dark:bg-slate-500/40 dark:text-slate-100">
</div>
{{-- Row Nama --}}
<div class="mb-2 grid grid-cols-2 gap-4">
    {{-- 1. Nomor Pokok --}}
    <div class="flex flex-col">
        <label class="mb-1 text-slate-800/90 dark:text-slate-100/90">Nomor PO</label>
        <input disabled type="text" wire:model='noPo'
            class="appearance-none rounded border-none bg-zinc-400/60 py-1 px-2 text-center text-sm tracking-wide text-slate-600 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:bg-slate-500/20 dark:text-slate-400">
    </div>
    {{-- 2. Nama --}}
    <div class="flex flex-col">
        <label class="mb-1 text-slate-800/90 dark:text-slate-100/90">Nomor OBC</label>
        <input disabled type="text" wire:model='obc'
            class="appearance-none rounded border-none bg-zinc-400/60 py-1 px-2 text-center text-sm tracking-wide text-slate-600 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:bg-slate-500/20 dark:text-slate-400">
    </div>
</div>
{{-- Row Jenis Kerusakan --}}
<div class="my-3">
    <h3
        class="border-b-2 dark:border-slate-100/80 border-slate-800/60 text-center pb-2 text-3xl text-slate-900/60 dark:text-slate-50">
        Jenis Kerusakan</h3>
</div>
{{-- 2.2 Jenis Kelolosan Row 1 --}}
<div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-4">
    {{-- 2.2.1 Kelolosan Blobor --}}
    <div>
        <label for="blobor"
            class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Blobor</label>
        <input type="number" min="0" wire:model='blobor'
            class="w-full font-light text-slate-800 dark:text-slate-300 leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
            >
    </div>
    {{-- 2.2. Kelolosan Plooi --}}
    <div>
        <label for="plooi"
            class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Plooi</label>
        <input type="number" min="0" wire:model='plooi'
            class="w-full font-light text-slate-800 dark:text-slate-300 leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
            >
    </div>
    {{-- 2.2. Kelolosan Blur --}}
    <div>
        <label for="blur"
            class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Blur</label>
        <input type="number" min="0"
            class="w-full font-light text-slate-800 dark:text-slate-300 leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
            wire:model='blur'>
    </div>
    {{-- 2.2. Kelolosan Hologram --}}
    <div>
        <label for="hologram"
            class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Hologram</label>
        <input type="number" min="0"
            class="w-full font-light text-slate-800 dark:text-slate-300 leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
            wire:model='holo'>
    </div>
</div>
{{-- 2.2 Jenis Kelolosan Row 1 --}}
<div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-4">
    {{-- 2.2.1 Kelolosan Blobor --}}
    <div>
        <label for="noda"
            class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Noda</label>
        <input type="number" min="0"
            class="w-full font-light text-slate-800 dark:text-slate-300 leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
            wire:model='noda'>
    </div>
    {{-- 2.2. Kelolosan Miss Reg --}}
    <div>
        <label for="missReg"
            class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Miss
            Register</label>
        <input type="number" min="0"
            class="w-full font-light text-slate-800 dark:text-slate-300 leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
            wire:model='miss'>
    </div>
    {{-- 2.2. Kelolosan Tipis--}}
    <div>
        <label for="tipis"
            class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Tipis</label>
        <input type="number" min="0"
            class="w-full font-light text-slate-800 dark:text-slate-300 leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
            wire:model='tipis'>
    </div>
    {{-- 2.2. Kelolosan Gradasi--}}
    <div>
        <label for="gradasi"
            class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Gradasi</label>
        <input type="number" min="0"
            class="w-full font-light text-slate-800 dark:text-slate-300 leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
            wire:model='gradasi'>
    </div>
</div>
{{-- 2.2 Jenis Kelolosan Row 1 --}}
<div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-4">
    {{-- 2.2.1 Kelolosan Sobek --}}
    <div>
        <label for="sobek"
            class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Sobek</label>
        <input type="number" min="0"
            class="w-full font-light text-slate-800 dark:text-slate-300 leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
            wire:model='sobek'>
    </div>
    {{-- 2.2. Kelolosan Terpotong --}}
    <div>
        <label for="terpotong"
            class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Terpotong</label>
        <input type="number" min="0"
            class="w-full font-light text-slate-800 dark:text-slate-300 leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
            wire:model='terpotong'>
    </div>
    {{-- 2.2. Kelolosan Tercampur --}}
    <div>
        <label for="tercampur"
            class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Tercampur</label>
        <input type="number" min="0"
            class="w-full font-light text-slate-800 dark:text-slate-300 leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
            wire:model='tercampur'>
    </div>
    {{-- 2.2. Kelolosan Botak \ Blanko--}}
    <div>
        <label for="botak"
            class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Botak</label>
        <input type="number" min="0"
            class="w-full font-light text-slate-800 dark:text-slate-300 leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
            wire:model='botak'>
    </div>
</div>
<div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-4">
    {{-- 2.2.1 Kelolosan Sobek --}}
    <div>
        <label for="minyak"
            class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Minyak</label>
        <input type="number" min="0"
            class="w-full font-light text-slate-800 dark:text-slate-300 leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
            wire:model='minyak'>
    </div>
    {{-- 2.2. Kelolosan Terpotong --}}
    <div>
        <label for="blanko"
            class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Blanko</label>
        <input type="number" min="0"
            class="w-full font-light text-slate-800 dark:text-slate-300 leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
            wire:model='blanko'>
    </div>
    <div>
        <label for="diecut"
            class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Diecut</label>
        <input type="number" min="0"
            class="w-full font-light text-slate-800 dark:text-slate-300 leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
            wire:model='diecut'>
    </div>
    <div>
        <label for="diecut"
            class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">WIP / Sisa Baik</label>
        <input type="number" min="0"
            class="w-full font-light text-slate-800 dark:text-slate-300 leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
            wire:model='wip'>
    </div>
</div>
<div class="mt-6">
    <div class="flex flex-col col-span-2 md:col-span-4 lg:col-span-6">
        <label for="evaluasi"
            class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Keterangan</label>
        <textarea
            class="w-full font-light text-slate-800 dark:text-slate-300 leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
            wire:model='keterangan' rows="4"></textarea>
    </div>
</div>
@endsection
