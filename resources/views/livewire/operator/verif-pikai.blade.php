<div class="grid grid-cols-1">
    <div class="px-4 py-6 mx-auto lg:px-8" x-data x-init="$refs.noPo.focus()">
        <div class="flex justify-center">
            <x-card-scale>
                <h6
                        class="pt-5 pb-3 mb-6 text-xl font-bold border-b-2 border-slate-400 text-slate-500 dark:border-slate-100 dark:text-slate-100">
                        Checklist Harian </h6>
                    <form>
                        @method('post')
                        @csrf
                        <div class="flex flex-col">
                            {{-- Table Warning --}}
                            {{-- @include('components.table.warning-jt') --}}

                            @if(session('success'))
                            <div
                                class="p-2 my-3 text-center text-green-100 bg-green-500 rounded shadow-lg brightness-110 shadow-green-500/50">
                                <h5 class="text-2xl">Nomor PO {{ session('success') }} Berhasil Di Simpan</h5>
                            </div>
                            @endif

                            <div class="grid grid-rows-2">
                                {{-- 1.3 Input Tanggal --}}
                                <div class="grid grid-cols-2 mt-4">
                                    <div class="flex flex-col w-full mb-4">
                                        <label for="tglCek"
                                            class="inline-block py-1 font-medium text-sm text-slate-600 dark:text-slate-200">Tanggal</label>
                                        <input type="date" wire:model='tanggal' id="tglCek"
                                            class="w-full leading-tight text-sm transition duration-300 ease-in-out rounded-md border-slate-400/60 text-slate-600 hover:border-blue-500 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                            required>
                                    </div>
                                </div>

                                {{-- 1.3 Input PO --}}
                                <div class="grid grid-cols-2">
                                    <div class="flex flex-col w-full mb-4">
                                        <label for="noPo"
                                            class="inline-block py-1 font-medium text-sm text-slate-600 dark:text-slate-200">Nomor
                                            PO</label>
                                        <input type="number" id="noPo"
                                            class="w-full leading-tight text-sm transition duration-300 ease-in-out rounded-md border-slate-400/60 text-slate-600 hover:border-blue-500 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                            wire:model.lazy='noPo' x-ref='noPo' wire:change='getSpec'
                                            value="{{ old('noPo') }}" required autofocus>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- 1.1 Input NP1 --}}
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex flex-col mb-4">
                                <label for="petugas1"
                                    class="inline-block py-1 font-medium text-sm text-slate-600 dark:text-slate-200">Petugas
                                    1</label>
                                <select required id="petugas1"
                                    class="w-full leading-tight text-sm transition duration-300 ease-in-out rounded-md border-slate-400/60 text-slate-600 hover:border-blue-500 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100 dark:focus:bg-opacity-100"
                                    wire:model='petugas1'>
                                    @foreach ($listNp as $np)
                                    <option value="{{ $np->np_user }}">{{ $np->np_user }} - {{ $np->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- 1.1 Input NP2 --}}
                            <div class="flex flex-col mb-4">
                                <label for="petugas2"
                                    class="inline-block py-1 font-medium text-sm text-slate-600 dark:text-slate-200">Petugas
                                    2</label>
                                <select required id="petugas2"
                                    class="w-full leading-tight text-sm transition duration-300 ease-in-out rounded-md border-slate-400/60 text-slate-600 hover:border-blue-500 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100 dark:focus:bg-opacity-100"
                                    wire:model='petugas2'>
                                    <option value="-" selected>-</option>
                                    @foreach ($listNp as $np)
                                    <option value="{{ $np->np_user }}">{{ $np->np_user }} - {{ $np->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- Spesifikasi --}}
                        <div class="grid grid-cols-2 gap-4 mt-6 text-center md:grid-cols-4 lg:grid-cols-6">
                            <div class="flex flex-col mb-4">
                                <label for="jenis"
                                    class="inline-block py-1 font-medium text-sm text-slate-600 dark:text-slate-200">Jenis</label>
                                <select required id="jenis"
                                    class="w-full leading-tight text-sm transition duration-300 ease-in-out rounded-md border-slate-400/60 text-slate-600 hover:border-blue-500 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100 dark:focus:bg-opacity-100"
                                    wire:model='jenis'>
                                    <option value="PCHT" selected>PCHT</option>
                                    <option value="MMEA">MMEA \ HPTL</option>
                                </select>
                            </div>
                            <div class="flex flex-col">
                                <label for="evaluasi"
                                    class="inline-block py-1 font-medium text-sm text-slate-600 dark:text-slate-200">OBC</label>
                                <input type="text" disabled wire:model='obc'
                                    class="w-full leading-tight border-slate-300/70 bg-slate-300/70 rounded-md text-slate-600 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
                            </div>
                            <div class="flex flex-col">
                                <label for="evaluasi"
                                    class="inline-block py-1 font-medium text-sm text-slate-600 dark:text-slate-200">Hasil
                                    Cetak</label>
                                <input type="text" disabled wire:model='terima'
                                    class="w-full leading-tight border-slate-300/70 bg-slate-300/70 rounded-md text-slate-600 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
                            </div>
                            <div class="flex flex-col">
                                <label for="evaluasi"
                                    class="inline-block py-1 font-medium text-sm text-slate-600 dark:text-slate-200">Kode
                                    Pabrik</label>
                                <input type="text" disabled
                                    class="w-full leading-tight border-slate-300/70 bg-slate-300/70 rounded-md text-slate-600 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
                            </div>
                            <div class="flex flex-col">
                                <label for="evaluasi"
                                    class="inline-block py-1 font-medium text-sm text-slate-600 dark:text-slate-200">Seri</label>
                                <input type="text" disabled
                                    class="w-full leading-tight border-slate-300/70 bg-slate-300/70 rounded-md text-slate-600 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
                            </div>
                            <div class="flex flex-col">
                                <label for="evaluasi"
                                    class="inline-block py-1 font-medium text-sm text-slate-600 dark:text-slate-200">HJE</label>
                                <input type="text" disabled
                                    class="w-full leading-tight border-slate-300/70 bg-slate-300/70 rounded-md text-slate-600 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
                            </div>
                            <div class="flex flex-col">
                                <label for="evaluasi"
                                    class="inline-block py-1 font-medium text-sm text-slate-600 dark:text-slate-200">BPB</label>
                                <input type="text" disabled
                                    class="w-full leading-tight border-slate-300/70 bg-slate-300/70 rounded-md text-slate-600 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
                            </div>
                            <div class="flex flex-col">
                                <label for="evaluasi"
                                    class="inline-block py-1 font-medium text-sm text-slate-600 dark:text-slate-200">Warna</label>
                                <input type="text" disabled
                                    class="w-full leading-tight border-slate-300/70 bg-slate-300/70 rounded-md text-slate-600 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
                            </div>
                            <div class="flex flex-col">
                                <label for="evaluasi"
                                    class="inline-block py-1 font-medium text-sm text-slate-600 dark:text-slate-200">JHT</label>
                                <input type="text" disabled
                                    class="w-full leading-tight border-slate-300/70 bg-slate-300/70 rounded-md text-slate-600 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
                            </div>
                        </div>
                        <div class="mt-6">
                            <h6 class="pb-2 mb-6 text-xl border-b-2 border-slate-600 dark:border-slate-100">Jenis
                                Kerusakan ( Lembar )
                            </h6>
                            {{-- 2.2 Jenis Kelolosan Row 1 --}}
                            <div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-4">
                                {{-- 2.2.1 Kelolosan Blobor --}}
                                <div>
                                    <label for="blobor"
                                        class="inline-block py-1 font-medium text-sm text-slate-600 dark:text-slate-200">Blobor</label>
                                    <input type="number" min="0" wire:model='blobor' id="blobor"
                                        class="w-full leading-tight text-sm transition duration-300 ease-in-out rounded-md border-slate-400/60 text-slate-600 hover:border-blue-500 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100 dark:focus:bg-opacity-100">
                                </div>
                                {{-- 2.2. Kelolosan Plooi --}}
                                <div>
                                    <label for="plooi"
                                        class="inline-block py-1 font-medium text-sm text-slate-600 dark:text-slate-200">Plooi</label>
                                    <input type="number" min="0" wire:model='plooi' id="plooi"
                                        class="w-full leading-tight text-sm transition duration-300 ease-in-out rounded-md border-slate-400/60 text-slate-600 hover:border-blue-500 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100 dark:focus:bg-opacity-100">
                                </div>
                                {{-- 2.2. Kelolosan Blur --}}
                                <div>
                                    <label for="blur"
                                        class="inline-block py-1 font-medium text-sm text-slate-600 dark:text-slate-200">Blur</label>
                                    <input type="number" min="0" id="blur"
                                        class="w-full leading-tight text-sm transition duration-300 ease-in-out rounded-md border-slate-400/60 text-slate-600 hover:border-blue-500 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100 dark:focus:bg-opacity-100"
                                        wire:model='blur'>
                                </div>
                                {{-- 2.2. Kelolosan Hologram --}}
                                <div>
                                    <label for="holo"
                                        class="inline-block py-1 font-medium text-sm text-slate-600 dark:text-slate-200">Hologram</label>
                                    <input type="number" min="0" id="holo"
                                        class="w-full leading-tight text-sm transition duration-300 ease-in-out rounded-md border-slate-400/60 text-slate-600 hover:border-blue-500 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100 dark:focus:bg-opacity-100"
                                        wire:model='holo'>
                                </div>
                            </div>
                            {{-- 2.2 Jenis Kelolosan Row 1 --}}
                            <div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-4">
                                {{-- 2.2.1 Kelolosan Blobor --}}
                                <div>
                                    <label for="noda"
                                        class="inline-block py-1 font-medium text-sm text-slate-600 dark:text-slate-200">Noda</label>
                                    <input type="number" min="0" id="noda"
                                        class="w-full leading-tight text-sm transition duration-300 ease-in-out rounded-md border-slate-400/60 text-slate-600 hover:border-blue-500 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100 dark:focus:bg-opacity-100"
                                        wire:model='noda'>
                                </div>
                                {{-- 2.2. Kelolosan Miss Reg --}}
                                <div>
                                    <label for="miss"
                                        class="inline-block py-1 font-medium text-sm text-slate-600 dark:text-slate-200">Miss
                                        Register</label>
                                    <input type="number" min="0" id="miss"
                                        class="w-full leading-tight text-sm transition duration-300 ease-in-out rounded-md border-slate-400/60 text-slate-600 hover:border-blue-500 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100 dark:focus:bg-opacity-100"
                                        wire:model='miss'>
                                </div>
                                {{-- 2.2. Kelolosan Tipis--}}
                                <div>
                                    <label for="tipis"
                                        class="inline-block py-1 font-medium text-sm text-slate-600 dark:text-slate-200">Tipis</label>
                                    <input type="number" min="0" id="tipis"
                                        class="w-full leading-tight text-sm transition duration-300 ease-in-out rounded-md border-slate-400/60 text-slate-600 hover:border-blue-500 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100 dark:focus:bg-opacity-100"
                                        wire:model='tipis'>
                                </div>
                                {{-- 2.2. Kelolosan Gradasi--}}
                                <div>
                                    <label for="gradasi"
                                        class="inline-block py-1 font-medium text-sm text-slate-600 dark:text-slate-200">Gradasi</label>
                                    <input type="number" min="0" id="gradasi"
                                        class="w-full leading-tight text-sm transition duration-300 ease-in-out rounded-md border-slate-400/60 text-slate-600 hover:border-blue-500 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100 dark:focus:bg-opacity-100"
                                        wire:model='gradasi'>
                                </div>
                            </div>
                            {{-- 2.2 Jenis Kelolosan Row 1 --}}
                            <div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-4">
                                {{-- 2.2.1 Kelolosan Sobek --}}
                                <div>
                                    <label for="sobek"
                                        class="inline-block py-1 font-medium text-sm text-slate-600 dark:text-slate-200">Sobek</label>
                                    <input type="number" min="0" id="sobek"
                                        class="w-full leading-tight text-sm transition duration-300 ease-in-out rounded-md border-slate-400/60 text-slate-600 hover:border-blue-500 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100 dark:focus:bg-opacity-100"
                                        wire:model='sobek'>
                                </div>
                                {{-- 2.2. Kelolosan Terpotong --}}
                                <div>
                                    <label for="terpotong"
                                        class="inline-block py-1 font-medium text-sm text-slate-600 dark:text-slate-200">Terpotong</label>
                                    <input type="number" min="0" id="terpotong"
                                        class="w-full leading-tight text-sm transition duration-300 ease-in-out rounded-md border-slate-400/60 text-slate-600 hover:border-blue-500 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100 dark:focus:bg-opacity-100"
                                        wire:model='terpotong'>
                                </div>
                                {{-- 2.2. Kelolosan Tercampur --}}
                                <div>
                                    <label for="tercampur"
                                        class="inline-block py-1 font-medium text-sm text-slate-600 dark:text-slate-200">Tercampur</label>
                                    <input type="number" min="0" id="tercampur"
                                        class="w-full leading-tight text-sm transition duration-300 ease-in-out rounded-md border-slate-400/60 text-slate-600 hover:border-blue-500 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100 dark:focus:bg-opacity-100"
                                        wire:model='tercampur'>
                                </div>
                                {{-- 2.2. Kelolosan Botak \ Blanko--}}
                                <div>
                                    <label for="botak"
                                        class="inline-block py-1 font-medium text-sm text-slate-600 dark:text-slate-200">Botak</label>
                                    <input type="number" min="0" id="botak"
                                        class="w-full leading-tight text-sm transition duration-300 ease-in-out rounded-md border-slate-400/60 text-slate-600 hover:border-blue-500 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100 dark:focus:bg-opacity-100"
                                        wire:model='botak'>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-4">
                                {{-- 2.2.1 Kelolosan Sobek --}}
                                <div>
                                    <label for="minyak"
                                        class="inline-block py-1 font-medium text-sm text-slate-600 dark:text-slate-200">Minyak</label>
                                    <input type="number" min="0" id="minyak"
                                        class="w-full leading-tight text-sm transition duration-300 ease-in-out rounded-md border-slate-400/60 text-slate-600 hover:border-blue-500 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100 dark:focus:bg-opacity-100"
                                        wire:model='minyak'>
                                </div>
                                {{-- 2.2. Kelolosan Terpotong --}}
                                <div>
                                    <label for="blanko"
                                        class="inline-block py-1 font-medium text-sm text-slate-600 dark:text-slate-200">Blanko</label>
                                    <input type="number" min="0" id="blanko"
                                        class="w-full leading-tight text-sm transition duration-300 ease-in-out rounded-md border-slate-400/60 text-slate-600 hover:border-blue-500 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100 dark:focus:bg-opacity-100"
                                        wire:model='blanko'>
                                </div>
                                <div>
                                    <label for="diecut"
                                        class="inline-block py-1 font-medium text-sm text-slate-600 dark:text-slate-200">Diecut</label>
                                    <input type="number" min="0" id="diecut"
                                        class="w-full leading-tight text-sm transition duration-300 ease-in-out rounded-md border-slate-400/60 text-slate-600 hover:border-blue-500 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100 dark:focus:bg-opacity-100"
                                        wire:model='diecut'>
                                </div>
                                <div>
                                    <label for="wip"
                                        class="inline-block py-1 font-medium text-sm text-slate-600 dark:text-slate-200">WIP /
                                        Sisa Baik</label>
                                    <input type="number" min="0" id="wip"
                                        class="w-full leading-tight text-sm transition duration-300 ease-in-out rounded-md border-slate-400/60 text-slate-600 hover:border-blue-500 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100 dark:focus:bg-opacity-100"
                                        wire:model='wip'>
                                </div>
                            </div>
                            <div class="mt-6">
                                <div class="flex flex-col col-span-2 md:col-span-4 lg:col-span-6">
                                    <label for="keterangan"
                                        class="inline-block py-1 font-medium text-sm text-slate-600 dark:text-slate-200">Keterangan</label>
                                    <textarea id="keterangan"
                                        class="w-full leading-tight text-sm transition duration-300 ease-in-out rounded-md border-slate-400/60 text-slate-600 hover:border-blue-500 focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100 dark:focus:bg-opacity-100"
                                        wire:model='keterangan' rows="4"></textarea>
                                </div>
                            </div>
                            {{-- Submit --}}
                            <div class="flex justify-end pt-8 space-x-2">
                                <button x-data @click.prevent="window.scrollTo({top: 0, behavior: 'smooth'})" type="button"
                                    data-mdb-ripple="true" data-mdb-ripple-color="light" wire:click='save'
                                    class="inline-block rounded bg-blue-600 px-6 py-2.5 text-xs font-medium uppercase leading-tight text-blue-50 shadow-md transition duration-150 ease-in-out hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg">Simpan</button>
                            </div>
                        </div>
                    </form>
            </x-card-scale>
        </div>
    </div>
</div>
@push('js')
<script>
    window.addEventListener('livewire:load', () => {
        @this.on('noPo', () => {
            document.querySelector('input').focus()
        })
    })
</script>
@endpush
