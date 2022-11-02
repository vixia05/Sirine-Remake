<div class="grid grid-cols-1">
    @include('components.modal.save-verifikasi')
    <div
        class="w-full rounded-md bg-white/70 dark:backdrop-blur-sm dark:backdrop-filter dark:bg-slate-800 dark:bg-opacity-60">
        {{-- Header --}}
        <div class="px-10 py-2">
            <h4
                class="my-auto font-sans text-2xl font-semibold leading-tight tracking-wider text-slate-600 dark:text-slate-100">
                INPUT HASIL VERIFIKASI</h4>
        </div>
        <div class="px-4 pb-4">
            {{-- 1.0 Filter Section --}}
            <div
                class="px-4 py-6 border rounded-t bg-inerhit border-slate-400 bg-opacity-30 dark:border-slate-600 dark:bg-slate-700 dark:bg-opacity-20">
                <div class="flex justify-between gap-3 flex-wrap">
                    {{-- 1.1 Filter By Team --}}
                    <div
                        class="flex justify-center text-blue-500 rounded-md focus-within:border-blue-500 focus-within:text-blue-400 focus-within:ring-1 focus-within:ring-blue-400">
                        <div
                            class="flex justify-center px-2 py-1 space-x-2 text-sm border border-blue-500 rounded-l-md bg-slate-200 dark:bg-slate-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                            </svg>
                            <span class="my-auto">Team</span>
                        </div>
                        <select id="station" name="station" wire:model="workstation"
                            class="text-xs font-medium border-r w-full border-blue-500 outline-none rounded-r-md border-y bg-slate-200 text-slate-700 focus-within:ring-blue-400 dark:bg-slate-700 dark:text-slate-200">
                            @foreach ($station as $stations)
                                <option value="{{ $stations->id }}"> {{ $stations->workstation }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- 1.2 Date Input --}}
                    <div
                        class="flex justify-center text-blue-500 rounded-md focus-within:border-blue-500 focus-within:text-blue-400 focus-within:ring-1 focus-within:ring-blue-400">
                        <div
                            class="flex justify-center px-2 py-1 space-x-2 text-sm border border-blue-500 rounded-l-md bg-slate-200 dark:bg-slate-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                            </svg>
                            <span class="my-auto">Tanggal</span>
                        </div>
                        <input type="date" wire:model="tglVerif" required
                            class="text-xs font-medium border-r border-blue-500 outline-none rounded-r-md border-y bg-slate-200 text-slate-700 focus-within:ring-blue-400 dark:bg-slate-700 dark:text-slate-200">
                    </div>
                    {{-- 1.3 Search Section --}}
                    <div class="relative">
                        <input type="search"
                            class="py-2 pl-10 pr-4 text-xs font-medium text-gray-600 border-2 rounded-lg shadow focus:border-gray-400 focus:outline-none focus:ring-0"
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
            </div>
            {{-- End Filter Section --}}
            {{-- Body / Table --}}
            <div
                class="row-span-3 overflow-hidden bg-inerhit border-x border-slate-400 bg-opacity-30 dark:border-slate-600 dark:bg-slate-700 dark:bg-opacity-20">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="min-w-full">
                                <table class="min-w-full">
                                    <thead
                                        class="text-base font-bold border-b border-slate-400 text-slate-700 dark:border-slate-600 dark:text-slate-500">
                                        <tr>
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-600">
                                                No
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-600">
                                                NP / Nama
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-600">
                                                Verifikasi (Lembar)
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r whitespace-nowrap border-slate-400 dark:border-slate-600">
                                                Jumlah OBC
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-600">
                                                Lembur
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-600">
                                                Keterangan
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-600">
                                                Izin
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-600">
                                                Workstation
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $datas)
                                            <tr
                                                class="transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10">
                                                <td
                                                    class="px-4 py-2 text-sm font-medium tracking-wider text-center border-r whitespace-nowrap border-y border-slate-400 text-slate-800 dark:border-slate-600 dark:text-slate-100">
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td
                                                    class="px-4 py-2 text-sm font-light tracking-wider text-center border-r whitespace-nowrap border-y border-slate-400 text-slate-800 dark:border-slate-600 dark:text-slate-100">
                                                    {{ $datas->np_user }}
                                                    <h5
                                                        class="px-2 py-1 text-xs font-semibold bg-blue-600 rounded-full text-blue-50 brightness-125 contrast-150">
                                                        {{ $datas->nama }}</h5>
                                                </td>
                                                <td
                                                    class="max-w-sm px-4 py-2 font-light tracking-wider text-left border whitespace-nowrap border-slate-400 text-slate-800 dark:border-slate-600 dark:text-slate-100">
                                                    <input type="number" placeholder="Lembar" id="verifikasi[]"
                                                        wire:model="verifikasi.{{ $datas->np_user }}"
                                                        class="w-full text-sm leading-tight tracking-wider rounded-md appearance-none border-slate-400 bg-slate-200 bg-opacity-10 text-slate-800 drop-shadow-md focus:outline-2 focus:ring-blue-400 dark:border-slate-600 dark:bg-slate-600 dark:bg-opacity-10 dark:text-slate-100 dark:placeholder-white"
                                                        min="0">
                                                </td>
                                                <td
                                                    class="max-w-sm px-4 py-2 text-sm font-light tracking-wider text-left border whitespace-nowrap border-slate-400 text-slate-800 dark:border-slate-600 dark:text-slate-100">
                                                    <input type="number" placeholder="Jumlah OBC" id="obc[]"
                                                        wire:model="obc.{{ $datas->np_user }}"
                                                        class="w-full text-sm leading-tight tracking-wider rounded-md border-slate-400 bg-slate-200 bg-opacity-10 text-slate-800 drop-shadow-md focus:outline-2 focus:ring-blue-400 dark:border-slate-600 dark:bg-slate-600 dark:bg-opacity-10 dark:text-slate-100 dark:placeholder-white"
                                                        min="0">
                                                </td>
                                                <td
                                                    class="max-w-sm px-4 py-2 text-sm font-light tracking-wider text-left border whitespace-nowrap border-slate-400 text-slate-800 dark:border-slate-600 dark:text-slate-100">
                                                    <select
                                                        class="w-full text-sm leading-tight tracking-wider rounded-md border-slate-400 bg-slate-200 bg-opacity-10 text-slate-800 drop-shadow-md focus:bg-opacity-100 focus:outline-2 focus:ring-blue-400 dark:border-slate-600 dark:bg-slate-600 dark:bg-opacity-10 dark:text-slate-100 dark:placeholder-white"
                                                        wire:model="lembur.{{ $datas->np_user }}">
                                                        <option value="0" selected>-</option>
                                                        <option value="1">Awal</option>
                                                        <option value="2">Akhir</option>
                                                        <option value="3">Awal Akhir</option>
                                                    </select>
                                                </td>
                                                <td
                                                    class="max-w-sm px-4 py-2 border-l whitespace-nowrap border-y border-slate-400 dark:border-slate-600">
                                                    <input type="text" placeholder="-" id="keterangan[]"
                                                        wire:model="keterangan.{{ $datas->np_user }}"
                                                        class="w-full text-sm leading-tight tracking-wider rounded-md appearance-none border-slate-400 bg-slate-200 bg-opacity-10 text-slate-800 drop-shadow-md focus:outline-2 focus:ring-blue-400 dark:border-slate-600 dark:bg-slate-600 dark:bg-opacity-10 dark:text-slate-100 dark:placeholder-white">
                                                </td>
                                                <td
                                                    class="max-w-sm px-4 py-2 border flex-nowrap whitespace-nowrap border-slate-400 dark:border-slate-600">
                                                    <select
                                                        class="w-full text-sm leading-tight tracking-wider rounded-md border-slate-400 bg-slate-200 bg-opacity-10 text-slate-800 drop-shadow-md focus:bg-opacity-100 focus:outline-2 focus:ring-blue-400 dark:border-slate-600 dark:bg-slate-600 dark:bg-opacity-10 dark:text-slate-100 dark:placeholder-white">
                                                        <option value="" selected>-</option>
                                                        <option value="Cuti">Cuti</option>
                                                        <option value="CD">CD</option>
                                                        <option value="Surat Merah">Surat Merah</option>
                                                        <option value="IDT">Datang Terlambat</option>
                                                    </select>
                                                </td>
                                                <td
                                                    class="max-w-sm px-4 py-2 text-xs font-light tracking-wider text-center border-l border-y border-slate-400 text-slate-800 dark:border-slate-600 dark:text-slate-100">
                                                    <p class="line-clamp-2">
                                                        {{ App\Models\Workstation::where('id', $datas->id_workstation)->value('workstation') }}
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
                class="px-10 py-2 overflow-hidden tracking-wider bg-opacity-50 border-b rounded-b bg-inerhit border-x border-slate-400 text-slate-800 dark:border-slate-600 dark:bg-slate-700 dark:bg-opacity-20 dark:text-slate-100">
                <div class="flex justify-end">
                    <button type="btn" wire:click="store" data-mdb-ripple="true" data-mdb-ripple-color="light"
                        class="px-2 py-1 tracking-wider transition duration-150 bg-blue-600 rounded-md text-slate-100 hover:bg-blue-500"
                        data-bs-toggle="modal" data-bs-target="#modalVerifikasi">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>
