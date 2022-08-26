<div class="grid grid-flow-row">
    {{-- Header --}}
    <div class="overflow-hidden rounded-t-xl bg-slate-700 px-10 py-4 shadow-md drop-shadow-sm">
        <h4 class="my-auto text-2xl font-semibold leading-tight text-white">Input Verifikasi</h4>
    </div>
    <div class="border-b bg-white py-6 px-4 shadow-md drop-shadow-sm">
        <div class="flex justify-center">
            <div class="rounded-l-md bg-green-400 px-2 py-2 text-sm font-bold text-white">
                Team
            </div>
            <select
                class="rounded-r-md border border-green-400 text-xs font-medium focus:border-green-500 focus:ring-2 focus:ring-green-300">
                <option>Verifikator Group A</option>
            </select>
            <div class="mx-auto flex">
                <div class="rounded-l-md bg-green-400 px-2 py-2 text-sm font-bold text-white">
                    Tanggal
                </div>
                <input type="date"
                    class="rounded-r-md border border-green-400 text-xs font-medium focus:border-green-500 focus:ring-2 focus:ring-green-300">
            </div>
            <div class="relative ml-auto self-end">
                <input type="search"
                    class="rounded-lg border-2 py-2 pl-10 pr-4 text-xs font-medium text-gray-600 shadow focus:border-gray-400 focus:outline-none focus:ring-0"
                    placeholder="Search...">
                <div class="absolute top-0 left-0 inline-flex items-center pt-2 pl-2 text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
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
                            <thead class="border-b bg-white text-base font-bold text-gray-900">
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
                                    <th scope="col" class="whitespace-nowrap px-6 py-4 text-center">
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
                                        class="border-b bg-white text-center transition duration-300 ease-in-out hover:bg-gray-100">
                                        <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-900">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4">
                                            <span class="text-sm font-medium text-gray-900">{{ $datas->np_user }}</span>
                                            <span
                                                class="block rounded-full bg-sky-400 px-2 py-1 text-xs font-extrabold text-white">{{ $datas->nama }}</span>
                                        </td>
                                        <td class="px-6 py-4 text-left text-sm font-light text-gray-900">
                                            <p class="line-clamp-2">
                                                {{ App\Models\Workstation::where('id', $datas->id_workstation)->value('workstation') }}
                                            </p>
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4 text-sm">
                                            <div
                                                class="rounded-md border-b-2 transition duration-200 focus-within:border-blue-500 focus-within:shadow-md hover:border-blue-500 hover:shadow-md">
                                                <input type="number" placeholder="Lembar"
                                                    class="w-full border-none text-xs font-medium focus:ring-0"
                                                    min="0">
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4 text-sm">
                                            <div
                                                class="rounded-md border-b-2 transition duration-150 focus-within:border-blue-500 focus-within:shadow-md hover:border-blue-500 hover:shadow-md">
                                                <input type="number" placeholder="Jumlah OBC"
                                                    class="w-full border-none text-xs font-medium focus:ring-0"
                                                    min="0">
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4 text-sm">
                                            <div
                                                class="rounded-md border-b-2 transition duration-150 focus-within:border-blue-500 focus-within:shadow-md hover:border-blue-500 hover:shadow-md">
                                                <input type="text" placeholder="Jika Tidak Memenuhi Target"
                                                    class="w-full border-none text-xs font-medium focus:ring-0">
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-2 text-sm font-light text-gray-900">
                                            <div class="flex justify-center">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label text-xs text-gray-800"
                                                        for="inlineCheckbox1">Awal</label>
                                                    <input
                                                        class="form-check-input float-left mr-3 mt-1 h-4 w-4 cursor-pointer appearance-none rounded-sm border border-gray-300 bg-white bg-contain bg-center bg-no-repeat align-top transition duration-200 checked:border-blue-600 checked:bg-blue-600 focus:outline-none"
                                                        type="checkbox" id="inlineCheckbox1" value="option1">
                                                </div>
                                                <div class="form-check form-check-inline ml-2">
                                                    <label class="form-check-label inline-block text-xs text-gray-800"
                                                        for="inlineCheckbox2">Akhir</label>
                                                    <input
                                                        class="form-check-input mr-3 mt-1 block h-4 w-4 cursor-pointer appearance-none rounded-sm border border-gray-300 bg-white bg-contain bg-center bg-no-repeat align-top transition duration-200 checked:border-blue-600 checked:bg-blue-600 focus:outline-none"
                                                        type="checkbox" id="inlineCheckbox2" value="option2">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="flex-nowrap whitespace-nowrap px-6 py-4 text-sm">
                                            <div
                                                class="rounded-md border-b-2 transition duration-150 focus-within:border-blue-500 focus-within:shadow-md hover:border-blue-500 hover:shadow-md">
                                                <select class="w-full border-none text-xs font-medium focus:ring-0">
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
    <div class="row-span-2 overflow-hidden rounded-b-xl bg-white px-10 py-4 shadow-md drop-shadow-sm">
        <div class="flex justify-end">
            <button type="submit" data-mdb-ripple="true" data-mdb-ripple-color="light"
                class="rounded-md bg-blue-400 px-2 py-1 text-white transition duration-150 hover:bg-blue-500">Simpan</button>
        </div>
    </div>
</div>
