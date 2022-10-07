<div class="flex justify-center">
    @include('components.modal.save-verifikasi')
    <div
        class="w-full rounded-md bg-slate-100 bg-opacity-70 backdrop-blur-sm backdrop-filter dark:bg-slate-800 dark:bg-opacity-60">
        {{-- Header --}}
        <div class="px-10 py-3">
            <h4
                class="my-auto font-sans text-2xl font-semibold leading-tight tracking-wider text-slate-600 dark:text-slate-100">
                Input
                Verifikasi</h4>
        </div>
        <div class="px-4 pb-4">
            {{-- 1.0 Filter Section --}}
            <div
                class="bg-inerhit rounded-t border border-slate-400 bg-opacity-30 px-4 py-6 dark:border-slate-600 dark:bg-slate-700 dark:bg-opacity-20">
                <div class="flex justify-between">
                    {{-- 1.1 Filter By Team --}}
                    <div
                        class="flex justify-center rounded-md text-blue-500 focus-within:border-blue-500 focus-within:text-blue-400 focus-within:ring-1 focus-within:ring-blue-400">
                        <div
                            class="flex justify-center space-x-2 rounded-l-md border border-blue-500 bg-slate-200 px-2 py-1 text-sm dark:bg-slate-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                            </svg>
                            <span class="my-auto">Team</span>
                        </div>
                        <select id="station" name="station" wire:model="workstation"
                            class="rounded-r-md border-y border-r border-blue-500 bg-slate-200 text-xs font-medium text-slate-700 outline-none focus-within:ring-blue-400 dark:bg-slate-700 dark:text-slate-200">
                            @foreach ($station as $stations)
                                <option value="{{ $stations->id }}"> {{ $stations->workstation }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- 1.2 Date Input --}}
                    <div
                        class="flex justify-center rounded-md text-blue-500 focus-within:border-blue-500 focus-within:text-blue-400 focus-within:ring-1 focus-within:ring-blue-400">
                        <div
                            class="flex justify-center space-x-2 rounded-l-md border border-blue-500 bg-slate-200 px-2 py-1 text-sm dark:bg-slate-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                            </svg>
                            <span class="my-auto">Tanggal</span>
                        </div>
                        <input type="date" value="{{ today()->format('Y-m-d') }}" wire:model="tglVerif" required
                            class="rounded-r-md border-y border-r border-blue-500 bg-slate-200 text-xs font-medium text-slate-700 outline-none focus-within:ring-blue-400 dark:bg-slate-700 dark:text-slate-200">
                    </div>
                    {{-- 1.3 Search Section --}}
                    <div class="relative">
                        <input type="search"
                            class="rounded-lg border-2 py-2 pl-10 pr-4 text-xs font-medium text-gray-600 shadow focus:border-gray-400 focus:outline-none focus:ring-0"
                            placeholder="Search...">
                        <div class="absolute top-0 left-0 inline-flex items-center pt-2 pl-2 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
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
                class="bg-inerhit row-span-3 overflow-hidden border-x border-slate-400 bg-opacity-30 dark:border-slate-600 dark:bg-slate-700 dark:bg-opacity-20">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="min-w-full">
                                <table class="min-w-full">
                                    <thead
                                        class="border-b border-slate-400 dark:border-slate-600 text-base font-bold text-slate-700 dark:text-slate-500">
                                        <tr>
                                            <th scope="col" class="border-r border-slate-400 dark:border-slate-600 px-4 py-3 text-center">
                                                No
                                            </th>
                                            <th scope="col" class="border-r border-slate-400 dark:border-slate-600 px-4 py-3 text-center">
                                                NP / Nama
                                            </th>
                                            <th scope="col" class="border-r border-slate-400 dark:border-slate-600 px-4 py-3 text-center">
                                                Verifikasi (Lembar)
                                            </th>
                                            <th scope="col"
                                                class="whitespace-nowrap border-r border-slate-400 dark:border-slate-600 px-4 py-3 text-center">
                                                Jumlah OBC
                                            </th>
                                            <th scope="col" class="border-r border-slate-400 dark:border-slate-600 px-4 py-3 text-center">
                                                Lembur
                                            </th>
                                            <th scope="col" class="border-r border-slate-400 dark:border-slate-600 px-4 py-3 text-center">
                                                Keterangan
                                            </th>
                                            <th scope="col" class="border-r border-slate-400 dark:border-slate-600 px-4 py-3 text-center">
                                                Izin
                                            </th>
                                            <th scope="col" class="border-r border-slate-400 dark:border-slate-600 px-4 py-3 text-center">
                                                Workstation
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $datas)
                                            <tr
                                                class="transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10">
                                                <td
                                                    class="whitespace-nowrap border-r border-y border-slate-400 dark:border-slate-600 px-4 py-3 text-center text-sm font-medium tracking-wider text-slate-800 dark:text-slate-100">
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td
                                                    class="whitespace-nowrap border-r border-y border-slate-400 dark:border-slate-600 px-4 py-3 text-center text-sm font-light tracking-wider text-slate-800 dark:text-slate-100">
                                                    {{ $datas->np_user }}
                                                    <h5
                                                        class="rounded-full bg-blue-600 px-2 py-1 text-xs font-semibold text-blue-50 brightness-125 contrast-150">
                                                        {{ $datas->nama }}</h5>
                                                </td>
                                                <td
                                                    class="max-w-sm whitespace-nowrap border border-slate-400 dark:border-slate-600 px-4 py-3 text-left font-light tracking-wider text-slate-800 dark:text-slate-100">
                                                    <input type="number" placeholder="Lembar" id="verifikasi[]"
                                                        wire:model="verifikasi.{{ $datas->np_user }}"
                                                        class="w-full appearance-none rounded-md border-slate-400 dark:border-slate-600 bg-slate-200 bg-opacity-10 text-sm leading-tight tracking-wider text-slate-800 dark:placeholder-white drop-shadow-md focus:outline-2 focus:ring-blue-400 dark:bg-slate-600 dark:bg-opacity-10 dark:text-slate-100"
                                                        min="0">
                                                </td>
                                                <td
                                                    class="max-w-sm whitespace-nowrap border border-slate-400 dark:border-slate-600 px-4 py-3 text-left text-sm font-light tracking-wider text-slate-800 dark:text-slate-100">
                                                    <input type="number" placeholder="Jumlah OBC" id="obc[]"
                                                        wire:model="obc.{{ $datas->np_user }}"
                                                        class="w-full rounded-md border-slate-400 dark:border-slate-600 bg-slate-200 bg-opacity-10 text-sm leading-tight tracking-wider text-slate-800 dark:placeholder-white drop-shadow-md focus:outline-2 focus:ring-blue-400 dark:bg-slate-600 dark:bg-opacity-10 dark:text-slate-100"
                                                        min="0">
                                                </td>
                                                <td
                                                    class="max-w-sm whitespace-nowrap border border-slate-400 dark:border-slate-600 px-4 py-3 text-left text-sm font-light tracking-wider text-slate-800 dark:text-slate-100">
                                                    <select
                                                        class="w-full rounded-md border-slate-400 dark:border-slate-600 bg-slate-200 bg-opacity-10 text-sm leading-tight tracking-wider text-slate-800 dark:placeholder-white drop-shadow-md focus:bg-opacity-100 focus:outline-2 focus:ring-blue-400 dark:bg-slate-600 dark:bg-opacity-10 dark:text-slate-100"
                                                        wire:model="lembur.{{ $datas->np_user }}">
                                                        <option value="0" selected>-</option>
                                                        <option value="1">Awal</option>
                                                        <option value="2">Akhir</option>
                                                        <option value="3">Awal Akhir</option>
                                                    </select>
                                                </td>
                                                <td
                                                    class="max-w-sm whitespace-nowrap border-l border-y border-slate-400 dark:border-slate-600 px-4 py-3">
                                                    <input type="text" placeholder="-" id="keterangan[]"
                                                        wire:model="keterangan.{{ $datas->np_user }}"
                                                        class="w-full appearance-none rounded-md border-slate-400 dark:border-slate-600 bg-slate-200 bg-opacity-10 text-sm leading-tight tracking-wider text-slate-800 dark:placeholder-white drop-shadow-md focus:outline-2 focus:ring-blue-400 dark:bg-slate-600 dark:bg-opacity-10 dark:text-slate-100">
                                                </td>
                                                <td
                                                    class="max-w-sm flex-nowrap whitespace-nowrap border border-slate-400 dark:border-slate-600 px-4 py-3">
                                                    <select
                                                        class="w-full rounded-md border-slate-400 dark:border-slate-600 bg-slate-200 bg-opacity-10 text-sm leading-tight tracking-wider text-slate-800 dark:placeholder-white drop-shadow-md focus:bg-opacity-100 focus:outline-2 focus:ring-blue-400 dark:bg-slate-600 dark:bg-opacity-10 dark:text-slate-100">
                                                        <option value="" selected>-</option>
                                                        <option value="Cuti">Cuti</option>
                                                        <option value="CD">CD</option>
                                                        <option value="Surat Merah">Surat Merah</option>
                                                        <option value="IDT">Datang Terlambat</option>
                                                    </select>
                                                </td>
                                                <td
                                                    class="max-w-sm border-y border-l border-slate-400 dark:border-slate-600 px-4 py-3 text-center text-xs font-light tracking-wider text-slate-800 dark:text-slate-100">
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
                class="bg-inerhit overflow-hidden rounded-b border-x border-b border-slate-400 bg-opacity-50 px-10 py-3 tracking-wider text-slate-800 dark:border-slate-600 dark:bg-slate-700 dark:bg-opacity-20 dark:text-slate-100">
                <div class="flex justify-end">
                    <button type="btn" wire:click="store" data-mdb-ripple="true" data-mdb-ripple-color="light"
                        class="rounded-md bg-blue-600 px-2 py-1 tracking-wider text-slate-100 transition duration-150 hover:bg-blue-500"
                        data-bs-toggle="modal" data-bs-target="#modalVerifikasi">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>
