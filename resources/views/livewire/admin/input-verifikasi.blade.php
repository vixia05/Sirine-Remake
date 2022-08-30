<div class="grid grid-flow-row">
    {{-- Header --}}
    <div class="px-10 py-4 overflow-hidden shadow-md rounded-t-xl bg-slate-700 drop-shadow-sm">
        <h4 class="my-auto text-2xl font-semibold leading-tight text-white">Input Verifikasi</h4>
    </div>
    <div class="px-4 py-6 bg-white border-b shadow-md drop-shadow-sm">
        <div class="flex justify-center">
            <div class="px-2 py-2 text-sm font-bold text-white bg-green-400 rounded-l-md">
                Team
            </div>
            <select id="station" name="station" wire:model="workstation"
                class="text-xs font-medium border border-green-400 rounded-r-md focus:border-green-500 focus:ring-2 focus:ring-green-300">
                @foreach ($station as $stations)
                    <option value="{{ $stations->id }}"> {{ $stations->workstation }}</option>
                @endforeach
            </select>
            <div class="flex mx-auto">
                <div class="px-2 py-2 text-sm font-bold text-white bg-green-400 rounded-l-md">
                    Tanggal
                </div>
                <input type="date"
                    class="text-xs font-medium border border-green-400 rounded-r-md focus:border-green-500 focus:ring-2 focus:ring-green-300">
            </div>
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
                                        Workstation
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
                                            <span
                                                class="block px-2 py-1 text-xs font-extrabold text-white rounded-full bg-sky-400">{{ $datas->nama }}</span>
                                            <input type="hidden" id="npUser[]" name="npUser[]"
                                                value="{{ $datas->np_user }}" wire:model="npUser" />
                                        </td>
                                        <td class="px-6 py-4 text-sm font-light text-left text-gray-900">
                                            <p class="line-clamp-2">
                                                {{ App\Models\Workstation::where('id', $datas->id_workstation)->value('workstation') }}
                                            </p>
                                        </td>
                                        <td class="px-6 py-4 text-sm whitespace-nowrap">
                                            <div
                                                class="transition duration-200 border-b-2 rounded-md focus-within:border-blue-500 focus-within:shadow-md hover:border-blue-500 hover:shadow-md">
                                                <input type="number" placeholder="Lembar" id="verifikasi[]"
                                                    class="w-full text-xs font-medium border-none focus:ring-0"
                                                    min="0">
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm whitespace-nowrap">
                                            <div
                                                class="transition duration-150 border-b-2 rounded-md focus-within:border-blue-500 focus-within:shadow-md hover:border-blue-500 hover:shadow-md">
                                                <input type="number" placeholder="Jumlah OBC" id="obc[]"
                                                    class="w-full text-xs font-medium border-none focus:ring-0"
                                                    min="0">
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm whitespace-nowrap">
                                            <div
                                                class="transition duration-150 border-b-2 rounded-md focus-within:border-blue-500 focus-within:shadow-md hover:border-blue-500 hover:shadow-md">
                                                <input type="text" placeholder="-" id="keterangan[]"
                                                    class="w-full text-xs font-medium border-none focus:ring-0">
                                            </div>
                                        </td>
                                        <td class="px-6 py-2 text-sm font-light text-gray-900 whitespace-nowrap">
                                            <div class="flex justify-center">
                                                <div class="form-check form-check-inline">
                                                    <label class="text-xs text-gray-800 form-check-label"
                                                        for="inlineCheckbox1">Awal</label>
                                                    <input
                                                        class="float-left w-4 h-4 mx-auto mt-1 mr-3 align-top transition duration-200 bg-white bg-center bg-no-repeat bg-contain border border-gray-300 rounded-sm appearance-none cursor-pointer form-check-input checked:border-blue-600 checked:bg-blue-600 focus:outline-none"
                                                        type="checkbox" id="lemburAwal" value="0">
                                                </div>
                                                <div class="ml-2 form-check form-check-inline">
                                                    <label class="inline-block text-xs text-gray-800 form-check-label"
                                                        for="inlineCheckbox2">Akhir</label>
                                                    <input
                                                        class="block w-4 h-4 mt-1 mr-3 align-top transition duration-200 bg-white bg-center bg-no-repeat bg-contain border border-gray-300 rounded-sm appearance-none cursor-pointer form-check-input checked:border-blue-600 checked:bg-blue-600 focus:outline-none"
                                                        type="checkbox" id="lemburAkhir" value="0">
                                                </div>
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
                class="px-2 py-1 text-white transition duration-150 bg-blue-400 rounded-md hover:bg-blue-500">Simpan</button>
        </div>
    </div>
</div>
