<div class="grid grid-flow-row">
    {{-- Header --}}
    <div class="px-10 py-4 overflow-hidden shadow-md rounded-t-xl bg-slate-700 drop-shadow-sm">
        <h4 class="my-auto text-2xl font-semibold leading-tight text-white">Input Verifikasi</h4>
    </div>
    @include('components.modal.save-verifikasi')
    {{-- 1.0 Filter Section --}}
    <div class="px-4 py-6 bg-white border-b shadow-md drop-shadow-sm">
        <div class="flex justify-center">
            {{-- 1.1 Filter By Team --}}
            <div class="px-2 py-2 text-sm font-bold text-white bg-green-400 rounded-l-md">
                Team
            </div>
            <select id="station" name="station" wire:model="workstation"
                class="text-xs font-medium border border-green-400 rounded-r-md focus:border-green-500 focus:ring-2 focus:ring-green-300">
                @foreach ($station as $stations)
                    <option value="{{ $stations->id }}"> {{ $stations->workstation }}</option>
                @endforeach
            </select>
            {{-- 1.2 Date Input --}}
            <div class="flex mx-auto">
                <div class="px-2 py-2 text-sm font-bold text-white bg-green-400 rounded-l-md">
                    Tanggal
                </div>
                <input type="date" value="{{ today()->format('Y-m-d') }}" wire:model="tglVerif" required
                    class="text-xs font-medium border border-green-400 rounded-r-md focus:border-green-500 focus:ring-2 focus:ring-green-300">
            </div>
            {{-- 1.3 Search Section --}}
            <div class="relative self-end ml-auto">
                <input type="search"
                    class="py-2 pl-10 pr-4 text-xs font-medium text-gray-600 border-2 rounded-lg shadow focus:border-gray-400 focus:outline-none focus:ring-0"
                    placeholder="Search...">
                <div class="absolute top-0 left-0 inline-flex items-center pt-2 pl-2 text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
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
    <div class="row-span-3 overflow-hidden bg-white shadow-md drop-shadow-sm">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full">
                            <thead class="text-base font-bold text-gray-900 bg-white border-b">
                                <tr>
                                    <th scope="col" class="px-6 py-4 text-center">
                                        No
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center">
                                        NP / Nama
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center">
                                        Verifikasi (Lembar)
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center whitespace-nowrap">
                                        Jumlah OBC
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center">
                                        Keterangan
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center">
                                        Lembur
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center">
                                        Izin
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center">
                                        Workstation
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $datas)
                                    <tr
                                        class="text-center transition duration-300 ease-in-out bg-white border-b hover:bg-gray-100">
                                        <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-sm font-medium text-gray-900">{{ $datas->np_user }}</span>
                                            <h5
                                                class="px-2 py-1 text-xs font-extrabold text-white rounded-full bg-sky-400">
                                                {{ $datas->nama }}</h5>
                                        </td>
                                        <td class="px-6 py-4 text-sm whitespace-nowrap">
                                            <div
                                                class="transition duration-200 border-b-2 rounded-md focus-within:border-blue-500 focus-within:shadow-md hover:border-blue-500 hover:shadow-md">
                                                <input type="number" placeholder="Lembar" id="verifikasi[]"
                                                    wire:model="verifikasi.{{ $datas->np_user }}"
                                                    class="w-full text-xs font-medium border-none focus:ring-0"
                                                    min="0">
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm whitespace-nowrap">
                                            <div
                                                class="transition duration-150 border-b-2 rounded-md focus-within:border-blue-500 focus-within:shadow-md hover:border-blue-500 hover:shadow-md">
                                                <input type="number" placeholder="Jumlah OBC" id="obc[]"
                                                    wire:model="obc.{{ $datas->np_user }}"
                                                    class="w-full text-xs font-medium border-none focus:ring-0"
                                                    min="0">
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm whitespace-nowrap">
                                            <div
                                                class="transition duration-150 border-b-2 rounded-md focus-within:border-blue-500 focus-within:shadow-md hover:border-blue-500 hover:shadow-md">
                                                <input type="text" placeholder="-" id="keterangan[]"
                                                    wire:model="keterangan.{{ $datas->np_user }}"
                                                    class="w-full text-xs font-medium border-none focus:ring-0">
                                            </div>
                                        </td>
                                        <td class="px-6 py-2 text-sm font-light text-gray-900 whitespace-nowrap">
                                            <div
                                                class="transition duration-150 border-b-2 rounded-md focus-within:border-blue-500 focus-within:shadow-md hover:border-blue-500 hover:shadow-md">
                                                <select class="w-full text-xs font-medium border-none focus:ring-0"
                                                    wire:model="lembur.{{ $datas->np_user }}">
                                                    <option value="0" selected>-</option>
                                                    <option value="1">Awal</option>
                                                    <option value="2">Akhir</option>
                                                    <option value="3">Awal Akhir</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm flex-nowrap whitespace-nowrap">
                                            <div
                                                class="transition duration-150 border-b-2 rounded-md focus-within:border-blue-500 focus-within:shadow-md hover:border-blue-500 hover:shadow-md">
                                                <select class="w-full text-xs font-medium border-none focus:ring-0">
                                                    <option value="" selected>-</option>
                                                    <option value="Cuti">Cuti</option>
                                                    <option value="CD">CD</option>
                                                    <option value="Surat Merah">Surat Merah</option>
                                                    <option value="IDT">Datang Terlambat</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-xs font-light text-left text-gray-900">
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
    <div class="row-span-2 px-10 py-4 overflow-hidden bg-white shadow-md rounded-b-xl drop-shadow-sm">
        <div class="flex justify-end">
            <button type="btn" wire:click="store" data-mdb-ripple="true" data-mdb-ripple-color="light"
                class="px-2 py-1 text-white transition duration-150 bg-blue-400 rounded-md hover:bg-blue-500"
                data-bs-toggle="modal" data-bs-target="#modalVerifikasi">Simpan</button>
        </div>
    </div>
</div>
