@extends('components.modal.app-edit')
@section('edit-modal-content')
{{-- Tanggal CK3 --}}
<div class="flex flex-col mb-2">
    <label class="mb-1 text-slate-800/90 dark:text-slate-100/90 text-center">Tanggal CK3</label>
    <input type="date" disabled id="tglCk33" name="tglCk3"
        class="appearance-none rounded border-none bg-zinc-400/60 py-1 px-2 text-center text-sm tracking-wide text-slate-600 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:bg-slate-500/20 dark:text-slate-400">
</div>
{{-- Row Nama --}}
<div class="mb-2 grid grid-cols-2 gap-4">
    {{-- 1. Nomor Pokok --}}
    <div class="flex flex-col">
        <label class="mb-1 text-slate-800/90 dark:text-slate-100/90">Nomor Pokok</label>
        <input type="text" disabled value="" id="npUser" name="npUser"
            class="appearance-none rounded border-none bg-zinc-400/60 py-1 px-2 text-center text-sm tracking-wide text-slate-600 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:bg-slate-500/20 dark:text-slate-400">
    </div>
    {{-- 2. Nama --}}
    <div class="flex flex-col">
        <label class="mb-1 text-slate-800/90 dark:text-slate-100/90">Nama</label>
        <input type="text" value="" id="namaUser" name="namaUser"
            class="appearance-none rounded border-slate-300 bg-zinc-300/60 py-1 px-2 text-sm tracking-wide text-slate-800 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:border-slate-600 dark:bg-slate-500/40 dark:text-slate-100">
        @if($errors->has('namaUser'))
        <div class="text-red-500 p-1 text-sm">{{ $errors->first('namaUser') }}</div>
        @endif
    </div>
</div>
{{-- Row Jenis Kerusakan --}}
<div class="my-3">
    <h3
        class="border-b-2 dark:border-slate-100/80 border-slate-800/60 text-center pb-2 text-3xl text-slate-900/60 dark:text-slate-50">
        Jenis Kelolosan</h3>
</div>
<div class="mb-2 grid grid-cols-4 gap-4">
    {{-- 1. Blobor--}}
    <div class="flex flex-col">
        <label class="mb-1 text-slate-800/90 dark:text-slate-100/90">Blobor</label>
        <input type="number" value="" id="Blobor" name="Blobor"
            class="appearance-none rounded border-slate-300 bg-zinc-300/60 py-1 px-2 text-sm tracking-wide text-slate-800 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:border-slate-600 dark:bg-slate-500/40 dark:text-slate-100">
    </div>
    {{-- 2.Plooi --}}
    <div class="flex flex-col">
        <label class="mb-1 text-slate-800/90 dark:text-slate-100/90">Plooi</label>
        <input type="number" value="" id="Plooi" name="Plooi"
            class="appearance-none rounded border-slate-300 bg-zinc-300/60 py-1 px-2 text-sm tracking-wide text-slate-800 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:border-slate-600 dark:bg-slate-500/40 dark:text-slate-100">
    </div>
    {{-- 3.Blur --}}
    <div class="flex flex-col">
        <label class="mb-1 text-slate-800/90 dark:text-slate-100/90">Blur</label>
        <input type="number" value="" id="Blur" name="Blur"
            class="appearance-none rounded border-slate-300 bg-zinc-300/60 py-1 px-2 text-sm tracking-wide text-slate-800 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:border-slate-600 dark:bg-slate-500/40 dark:text-slate-100">
    </div>
    {{-- 4.Hologram --}}
    <div class="flex flex-col">
        <label class="mb-1 text-slate-800/90 dark:text-slate-100/90">Hologram</label>
        <input type="number" value="" id="Hologram" name="Hologram"
            class="appearance-none rounded border-slate-300 bg-zinc-300/60 py-1 px-2 text-sm tracking-wide text-slate-800 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:border-slate-600 dark:bg-slate-500/40 dark:text-slate-100">
    </div>
</div>
<div class="mb-2 grid grid-cols-4 gap-4">
    {{-- 5.Noda --}}
    <div class="flex flex-col">
        <label class="mb-1 text-slate-800/90 dark:text-slate-100/90">Noda</label>
        <input type="number" value="" id="Noda" name="Noda"
            class="appearance-none rounded border-slate-300 bg-zinc-300/60 py-1 px-2 text-sm tracking-wide text-slate-800 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:border-slate-600 dark:bg-slate-500/40 dark:text-slate-100">
    </div>
    {{-- 6.Miss Register --}}
    <div class="flex flex-col">
        <label class="mb-1 text-slate-800/90 dark:text-slate-100/90">Miss Register</label>
        <input type="number" value="" id="missReg" name="missReg"
            class="appearance-none rounded border-slate-300 bg-zinc-300/60 py-1 px-2 text-sm tracking-wide text-slate-800 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:border-slate-600 dark:bg-slate-500/40 dark:text-slate-100">
    </div>
    {{-- 7.Tipis --}}
    <div class="flex flex-col">
        <label class="mb-1 text-slate-800/90 dark:text-slate-100/90">Tipis</label>
        <input type="number" value="" id="Tipis" name="Tipis"
            class="appearance-none rounded border-slate-300 bg-zinc-300/60 py-1 px-2 text-sm tracking-wide text-slate-800 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:border-slate-600 dark:bg-slate-500/40 dark:text-slate-100">
    </div>
    {{-- 8.Gradasi --}}
    <div class="flex flex-col">
        <label class="mb-1 text-slate-800/90 dark:text-slate-100/90">Gradasi</label>
        <input type="number" value="" id="Gradasi" name="Gradasi"
            class="appearance-none rounded border-slate-300 bg-zinc-300/60 py-1 px-2 text-sm tracking-wide text-slate-800 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:border-slate-600 dark:bg-slate-500/40 dark:text-slate-100">
    </div>
</div>
<div class="mb-2 grid grid-cols-4 gap-4">
    {{-- 9.Sobek --}}
    <div class="flex flex-col">
        <label class="mb-1 text-slate-800/90 dark:text-slate-100/90">Sobek</label>
        <input type="number" value="" id="Sobek" name="Sobek"
            class="appearance-none rounded border-slate-300 bg-zinc-300/60 py-1 px-2 text-sm tracking-wide text-slate-800 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:border-slate-600 dark:bg-slate-500/40 dark:text-slate-100">
    </div>
    {{-- 10.Terpotong --}}
    <div class="flex flex-col">
        <label class="mb-1 text-slate-800/90 dark:text-slate-100/90">Terpotong</label>
        <input type="number" value="" id="Terpotong" name="Terpotong"
            class="appearance-none rounded border-slate-300 bg-zinc-300/60 py-1 px-2 text-sm tracking-wide text-slate-800 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:border-slate-600 dark:bg-slate-500/40 dark:text-slate-100">
    </div>
    {{-- 11.Tercampur --}}
    <div class="flex flex-col">
        <label class="mb-1 text-slate-800/90 dark:text-slate-100/90">Tercampur</label>
        <input type="number" value="" id="Tercampur" name="Tercampur"
            class="appearance-none rounded border-slate-300 bg-zinc-300/60 py-1 px-2 text-sm tracking-wide text-slate-800 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:border-slate-600 dark:bg-slate-500/40 dark:text-slate-100">
    </div>
    {{-- 12.Botak/Blanko --}}
    <div class="flex flex-col">
        <label class="mb-1 text-slate-800/90 dark:text-slate-100/90">Botak / Blanko</label>
        <input type="number" value="" id="Botak" name="Botak"
            class="appearance-none rounded border-slate-300 bg-zinc-300/60 py-1 px-2 text-sm tracking-wide text-slate-800 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:border-slate-600 dark:bg-slate-500/40 dark:text-slate-100">
    </div>
</div>
@endsection
