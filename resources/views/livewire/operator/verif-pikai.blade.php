<div class="grid grid-cols-1">
    <div class="px-4 py-6 mx-auto lg:px-8">
        <div class="flex justify-center">
            <div
                class="p-4 font-semibold rounded-md bg-white/70 text-slate-800 backdrop-blur-sm backdrop-filter dark:bg-slate-800 dark:bg-opacity-70 dark:text-slate-100">
                <h6 class="pb-2 text-xl border-b-2 border-slate-600 dark:border-slate-100"> Input Verifikasi </h6>
                @if(session('success'))
                    <div
                        class="p-2 my-3 text-center text-green-100 bg-green-500 rounded shadow-lg brightness-110 shadow-green-500/50">
                        <h5 class="text-2xl">Nomor PO {{ session('success') }} Berhasil Di Simpan</h5>
                    </div>
                @endif
                <form>
                    @method('post')
                    @csrf
                    <div class="grid grid-cols-2 mt-4">
                        {{-- 1.3 Input Tanggal --}}
                        <div class="flex flex-col w-full mb-4">
                            <label for="tglCek"
                                class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Tanggal</label>
                            <input type="date" wire:model='tanggal'
                                class="w-full font-light leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40"
                                required>
                        </div>
                    </div>
                    <div class="grid grid-cols-2">
                        {{-- 1.3 Input PO --}}
                        <div class="flex flex-col w-full mb-4">
                            <label for="tglCek"
                                class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Nomor
                                PO</label>
                            <input type="number"
                                class="w-full font-light leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40"
                                wire:model='noPo' wire:change='getSpec' value="{{ old('noPo') }}" required>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        {{-- 1.1 Input NP --}}
                        <div class="flex flex-col mb-4">
                            <label for="np"
                                class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Petugas 1</label>
                            <select required
                                class="w-full font-light leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                wire:model='petugas1'>
                                @foreach ($listNp as $np)
                                    <option value="{{ $np->np_user }}">{{ $np->np_user }} - {{ $np->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- 1.1 Input NP --}}
                        <div class="flex flex-col mb-4">
                            <label for="np"
                                class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Petugas 2</label>
                            <select required
                                class="w-full font-light leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
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
                                class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Jenis</label>
                            <select required
                                class="w-full font-light leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                wire:model='jenis'>
                                    <option value="PCHT" selected>PCHT</option>
                                    <option value="MMEA">MMEA \ HPTL</option>
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <label for="evaluasi"
                                class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">OBC</label>
                            <input type="text" disabled wire:model='obc'
                                class="w-full font-light leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-100">
                        </div>
                        <div class="flex flex-col">
                            <label for="evaluasi"
                                class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Hasil Cetak</label>
                            <input type="text" disabled wire:model='terima'
                                class="w-full font-light leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-100">
                        </div>
                        <div class="flex flex-col">
                            <label for="evaluasi"
                                class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Kode
                                Pabrik</label>
                            <input type="text" disabled
                                class="w-full font-light leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-100">
                        </div>
                        <div class="flex flex-col">
                            <label for="evaluasi"
                                class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Seri</label>
                            <input type="text" disabled
                                class="w-full font-light leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-100">
                        </div>
                        <div class="flex flex-col">
                            <label for="evaluasi"
                                class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">HJE</label>
                            <input type="text" disabled
                                class="w-full font-light leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-100">
                        </div>
                        <div class="flex flex-col">
                            <label for="evaluasi"
                                class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">BPB</label>
                            <input type="text" disabled
                                class="w-full font-light leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-100">
                        </div>
                        <div class="flex flex-col">
                            <label for="evaluasi"
                                class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Warna</label>
                            <input type="text" disabled
                                class="w-full font-light leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-100">
                        </div>
                        <div class="flex flex-col">
                            <label for="evaluasi"
                                class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">JHT</label>
                            <input type="text" disabled
                                class="w-full font-light leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-100">
                        </div>
                    </div>
                    <div class="mt-6">
                        <h6 class="pb-2 mb-6 text-xl border-b-2 border-slate-600 dark:border-slate-100">Jenis Kerusakan ( Lembar )
                        </h6>
                        {{-- 2.2 Jenis Kelolosan Row 1 --}}
                        <div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-4">
                            {{-- 2.2.1 Kelolosan Blobor --}}
                            <div>
                                <label for="blobor"
                                    class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Blobor</label>
                                <input type="number" min="0" wire:model='blobor'
                                    class="w-full font-light leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                    >
                            </div>
                            {{-- 2.2. Kelolosan Plooi --}}
                            <div>
                                <label for="plooi"
                                    class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Plooi</label>
                                <input type="number" min="0" wire:model='plooi'
                                    class="w-full font-light leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                    >
                            </div>
                            {{-- 2.2. Kelolosan Blur --}}
                            <div>
                                <label for="blur"
                                    class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Blur</label>
                                <input type="number" min="0"
                                    class="w-full font-light leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                    wire:model='blur'>
                            </div>
                            {{-- 2.2. Kelolosan Hologram --}}
                            <div>
                                <label for="hologram"
                                    class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Hologram</label>
                                <input type="number" min="0"
                                    class="w-full font-light leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
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
                                    class="w-full font-light leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                    wire:model='noda'>
                            </div>
                            {{-- 2.2. Kelolosan Miss Reg --}}
                            <div>
                                <label for="missReg"
                                    class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Miss
                                    Register</label>
                                <input type="number" min="0"
                                    class="w-full font-light leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                    wire:model='miss'>
                            </div>
                            {{-- 2.2. Kelolosan Tipis--}}
                            <div>
                                <label for="tipis"
                                    class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Tipis</label>
                                <input type="number" min="0"
                                    class="w-full font-light leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                    wire:model='tipis'>
                            </div>
                            {{-- 2.2. Kelolosan Gradasi--}}
                            <div>
                                <label for="gradasi"
                                    class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Gradasi</label>
                                <input type="number" min="0"
                                    class="w-full font-light leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
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
                                    class="w-full font-light leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                    wire:model='sobek'>
                            </div>
                            {{-- 2.2. Kelolosan Terpotong --}}
                            <div>
                                <label for="terpotong"
                                    class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Terpotong</label>
                                <input type="number" min="0"
                                    class="w-full font-light leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                    wire:model='terpotong'>
                            </div>
                            {{-- 2.2. Kelolosan Tercampur --}}
                            <div>
                                <label for="tercampur"
                                    class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Tercampur</label>
                                <input type="number" min="0"
                                    class="w-full font-light leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                    wire:model='tercampur'>
                            </div>
                            {{-- 2.2. Kelolosan Botak \ Blanko--}}
                            <div>
                                <label for="botak"
                                    class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Botak</label>
                                <input type="number" min="0"
                                    class="w-full font-light leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                    wire:model='botak'>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-4">
                            {{-- 2.2.1 Kelolosan Sobek --}}
                            <div>
                                <label for="minyak"
                                    class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Minyak</label>
                                <input type="number" min="0"
                                    class="w-full font-light leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                    wire:model='minyak'>
                            </div>
                            {{-- 2.2. Kelolosan Terpotong --}}
                            <div>
                                <label for="blanko"
                                    class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Blanko</label>
                                <input type="number" min="0"
                                    class="w-full font-light leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                    wire:model='blanko'>
                            </div>
                            <div>
                                <label for="diecut"
                                    class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Diecut</label>
                                <input type="number" min="0"
                                    class="w-full font-light leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                    wire:model='diecut'>
                            </div>
                            <div>
                                <label for="diecut"
                                    class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">WIP / Sisa Baik</label>
                                <input type="number" min="0"
                                    class="w-full font-light leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                    wire:model='wip'>
                            </div>
                        </div>
                        <div class="mt-6">
                            <div class="flex flex-col col-span-2 md:col-span-4 lg:col-span-6">
                                <label for="evaluasi"
                                    class="inline-block pb-2 font-medium text-slate-800 dark:text-slate-100">Keterangan</label>
                                <textarea
                                    class="w-full font-light leading-tight transition duration-150 ease-in-out rounded-md border-slate-400/30 bg-slate-300 bg-opacity-60 drop-shadow-md focus:ring-blue-500 dark:border-none dark:bg-slate-600 dark:bg-opacity-40 dark:focus:bg-opacity-100"
                                    wire:model='keterangan' rows="4"></textarea>
                            </div>
                        </div>
                        {{-- Submit --}}
                        <div class="flex justify-end pt-8 space-x-2">
                            <button x-data
                                    @click.prevent="window.scrollTo({top: 0, behavior: 'smooth'})"
                                    type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" wire:click='save'
                                    class="inline-block rounded bg-blue-600 px-6 py-2.5 text-xs font-medium uppercase leading-tight text-blue-50 shadow-md transition duration-150 ease-in-out hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
