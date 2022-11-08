@extends('components.modal.app-edit')
@section('edit-modal-content')
{{-- Row Nama --}}
<div class="mb-2 grid grid-rows-2 gap-4">
    {{-- 1. Evaluasi / Pesan Kasek --}}
    <div class="flex flex-col gap-2">
        <label class="mb-1 text-slate-800/90 dark:text-slate-100/90">Evaluasi Kasek</label>
        <input type="text" disabled wire:model='npKasek'
            class="appearance-none rounded border-none bg-zinc-400/60 py-1 px-2 text-center text-sm tracking-wide text-slate-600 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:bg-slate-500/20 dark:text-slate-400">
        <textarea rows="4" wire:model='evaKasek'
            class="appearance-none rounded border-slate-300 bg-zinc-300/60 py-1 px-4 text-sm tracking-wide text-slate-800 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:border-slate-600 dark:bg-slate-500/40 dark:text-slate-100"></textarea>
    </div>
    {{-- 2. Evaluasi / Pesan Kaun --}}
    <div class="flex flex-col gap-2">
        <label class="mb-1 text-slate-800/90 dark:text-slate-100/90">Evaluasi Kaun</label>
        <input type="text" disabled wire:model='npKaun'
            class="appearance-none rounded border-none bg-zinc-400/60 py-1 px-2 text-center text-sm tracking-wide text-slate-600 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:bg-slate-500/20 dark:text-slate-400">
        <textarea rows="4" wire:model='evaKaun'
            class="appearance-none rounded border-slate-300 bg-zinc-300/60 py-1 px-4 text-sm tracking-wide text-slate-800 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:border-slate-600 dark:bg-slate-500/40 dark:text-slate-100"></textarea>
    </div>
    {{-- 3. Respon Pegwai --}}
    <div class="flex flex-col gap-2">
        <label class="mb-1 text-slate-800/90 dark:text-slate-100/90">Respon Pegawai</label>
        <input type="text" disabled wire:model='npUser'
            class="appearance-none rounded border-none bg-zinc-400/60 py-1 px-2 text-center text-sm tracking-wide text-slate-600 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:bg-slate-500/20 dark:text-slate-400">
        <textarea rows="4" wire:model='resUser'
            class="appearance-none rounded border-slate-300 bg-zinc-300/60 py-1 px-4 text-sm tracking-wide text-slate-800 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:border-slate-600 dark:bg-slate-500/40 dark:text-slate-100"></textarea>
    </div>
</div>
@endsection
