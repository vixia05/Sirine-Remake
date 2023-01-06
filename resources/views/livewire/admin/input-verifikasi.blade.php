<div class="grid grid-cols-1">
    <div
        class="w-full rounded-md bg-gradient-to-br from-slate-50 via-slate-100 to-slate-50  dark:bg-slate-800 dark:from-transparent dark:to-transparent dark:bg-opacity-60 dark:backdrop-blur-sm dark:backdrop-filter">
        {{-- Header --}}
        <div class="pl-4 py-5">
            <h4 class="my-auto font-sans text-lg font-semibold leading-tight text-slate-500 dark:text-slate-100">
                INPUT HASIL VERIFIKASI</h4>
        </div>
        <div class="px-4 pb-4">
            {{-- 1.0 Filter Section --}}
            <div
                class="p-4 text-sm border-y bg-inerhit border-slate-300 bg-opacity-30 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
                <div class="flex justify-between gap-3 flex-wrap">
                    {{-- 1.1 Filter By Team --}}
                    <div
                        class="flex gap-2 px-2 py-1 focus-within:ring-1 text-blue-600 border-blue-600 dark:text-blue-500 border dark:border-blue-500 rounded dark:focus-within:brightness-125 focus-within:shadow-lg focus-within:shadow-blue-500/20">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 my-auto">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                        </svg>
                        <span class="my-auto border-r border-blue-600 dark:border-blue-400 pr-3">Team</span>
                        <select id="station" name="station" wire:model="workstation"
                            class="-my-1 -mr-2 text-xs text-slate-700 transition duration-150 dark:border-blue-500 border-none rounded-r appearance-none focus:ring-0 dark:bg-slate-800 dark:from-transparent dark:to-transparent dark:bg-opacity-10 focus:bg-opacity-100 dark:text-slate-100">
                            @foreach ($station as $stations)
                            <option value="{{ $stations->id }}"> {{ $stations->workstation }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- 1.2 Date Input --}}
                    <div
                        class="flex gap-2 px-2 py-1 focus-within:ring-1 text-blue-600 border-blue-600 dark:text-blue-500 border dark:border-blue-500 rounded dark:focus-within:brightness-125 focus-within:shadow-lg focus-within:shadow-blue-500/20">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                        </svg>
                        <span class="my-auto">Tanggal</span>
                        <input type="date" wire:model="tglVerif" required id="tglVerif" name="tglVerif"
                            class="-my-1 -mr-2 text-xs text-slate-700 transition duration-150 dark:border-blue-500 border-none rounded-r appearance-none focus:ring-0 dark:bg-slate-800 dark:from-transparent dark:to-transparent dark:bg-opacity-10 focus:bg-opacity-100 dark:text-slate-100">
                    </div>
                    {{-- 1.3 Search Section --}}
                    <div class="relative">
                        <input type="text" wire:model="search"
                            class="py-2 pl-10 pr-4 text-xs font-medium text-gray-600 border-t rounded border border-slate-400 shadow focus:shadow-md focus:shadow-blue-500/30 focus:border-blue-500 focus:ring-blue-600 focus:outline-none focus:ring-1 hover:border-blue-500 transition ease-out duration-150"
                            placeholder="Search...">
                        <div class="absolute top-0 left-0 inline-flex items-center pt-2 pl-2 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>
                @if(session('success'))
                <div
                    class="p-2 mt-5 text-center text-green-100 bg-green-500 rounded shadow-lg brightness-110 shadow-green-500/50">
                    <h5 class="text-2xl">{{ session('success') }}</h5>
                </div>
                @endif
            </div>
            {{-- End Filter Section --}}
            {{-- Body / Table --}}
            <div
                class="overflow-hidden border-t border-slate-400 bg-inherit dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="min-w-full">
                                <table class="min-w-full">
                                    <thead
                                        class="text-sm font-bold border-b-2 border-slate-300 text-slate-700 dark:border-slate-500 dark:text-slate-400">
                                        <tr>
                                            <th scope="col"
                                                class="p-3 text-center border-slate-300 dark:border-slate-500">
                                                No
                                            </th>
                                            <th scope="col"
                                                class="p-3 text-left border-slate-300 dark:border-slate-500">
                                                NP / Nama
                                            </th>
                                            <th scope="col"
                                                class="p-3 text-center border-slate-300 dark:border-slate-500">
                                                Verifikasi (Lembar)
                                            </th>
                                            <th scope="col"
                                                class="p-3 text-center border-slate-300 dark:border-slate-500">
                                                Jumlah OBC
                                            </th>
                                            <th scope="col"
                                                class="p-3 text-center border-slate-300 dark:border-slate-500">
                                                Lembur
                                            </th>
                                            <th scope="col"
                                                class="p-3 text-center border-slate-300 dark:border-slate-500">
                                                Keterangan
                                            </th>
                                            <th scope="col"
                                                class="p-3 text-center border-slate-300 dark:border-slate-500">
                                                Izin
                                            </th>
                                            <th scope="col"
                                                class="p-3 text-left border-slate-300 dark:border-slate-500">
                                                Workstation
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $datas)
                                        <tr
                                            class="transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10">
                                            <td
                                                class="p-3 text-sm text-center font-light border-b whitespace-nowrap border-slate-300 text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td
                                                class="p-3 text-sm font-light border-b border-slate-300 text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                <div class="flex flex-col">
                                                    <span class="font-medium">{{ $datas->np_user }}</span>
                                                    {{ $datas->nama }}
                                                </div>
                                            </td>
                                            <td
                                                class="max-w-sm p-3 text-sm font-light border-b border-slate-300 text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                <input type="number" placeholder="Lembar" id="verifikasi[]"
                                                    wire:model="verifikasi.{{ $datas->np_user }}"
                                                    class="w-full text-right leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                                    min="0">
                                            </td>
                                            <td
                                                class="max-w-sm p-3 text-sm font-light border-b border-slate-300 text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                <input type="number" placeholder="Jumlah OBC" id="obc[]"
                                                    wire:model="obc.{{ $datas->np_user }}"
                                                    class="w-full text-right leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                                    min="0">
                                            </td>
                                            <td
                                                class="max-w-sm p-3 text-sm font-light border-b border-slate-300 text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                <select
                                                    class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                                                    wire:model="lembur.{{ $datas->np_user }}">
                                                    <option value="0" selected>-</option>
                                                    <option value="1">Awal</option>
                                                    <option value="2">Akhir</option>
                                                    <option value="3">Awal Akhir</option>
                                                </select>
                                            </td>
                                            <td
                                                class="max-w-sm p-3 text-sm font-light border-b border-slate-300 text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                <input type="text" placeholder="-" id="keterangan[]"
                                                    wire:model="keterangan.{{ $datas->np_user }}"
                                                    class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
                                            </td>
                                            <td
                                                class="max-w-sm p-3 text-sm font-light border-b border-slate-300 text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                <select wire:model="izin.{{ $datas->np_user }}"
                                                    class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
                                                    <option value="-" selected>-</option>
                                                    <option value="1">Cuti</option>
                                                    <option value="2">CD</option>
                                                    <option value="3">Surat Merah</option>
                                                    <option value="4">Surat Kuning</option>
                                                </select>
                                            </td>
                                            <td
                                                class="max-w-sm p-3 text-sm font-light border-b border-slate-300 text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                <p class="line-clamp-2">
                                                    {{ App\Models\Workstation::where('id',
                                                    $datas->id_workstation)->value('workstation') }}
                                                </p>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Footer --}}
            <div
                class="px-10 pt-2 pb-3 overflow-hidden border-b rounded-b bg-inerhit border-slate-300 text-slate-700 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50 dark:text-slate-100">
                <div class="flex justify-end">
                    <button type="btn" wire:click="store" data-mdb-ripple="true" data-mdb-ripple-color="light"
                        class="px-2 py-1 tracking-wider transition duration-150 bg-blue-600 rounded-md text-slate-100 hover:bg-blue-500">
                        Simpan
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
