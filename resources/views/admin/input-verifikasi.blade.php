@extends('layouts.app')
@section('content')
    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-flow-row">
                {{-- Header --}}
                <div class="rounded-t-xl bg-slate-700 shadow-md drop-shadow-sm overflow-hidden px-10 py-4">
                    <h4 class="font-semibold leading-tight text-2xl my-auto text-white">Input Verifikasi</h4>
                </div>
                <div class="border-b py-6 px-4 bg-white shadow-md drop-shadow-sm">
                    <div class="flex justify-end">
                        <div class=" bg-green-400 text-white rounded-l-md px-2 py-2 text-sm font-bold">
                            Tanggal
                        </div>
                        <input type="date"
                            class="border rounded-r-md border-green-400 focus:ring-2 focus:border-green-500 focus:ring-green-300 font-medium text-xs">
                        <div class=" bg-green-400 text-white rounded-l-md px-2 py-2 text-sm font-bold  ml-4">
                            Team
                        </div>
                        <select
                            class="border rounded-r-md border-green-400 focus:ring-2 focus:border-green-500 focus:ring-green-300 font-medium text-xs">
                            <option>Verifikator Group A</option>
                        </select>
                        <div class=" bg-green-400 text-white rounded-l-md px-2 py-2 text-sm font-bold  ml-4">
                            Search
                        </div>
                        <input type="text"
                            class="border rounded-r-md border-green-400 focus:ring-2 focus:border-green-500 focus:ring-green-300 font-medium text-xs">
                    </div>
                </div>
                {{-- Body / Table --}}
                <div class="row-span-3 bg-white shadow-md drop-shadow-sm overflow-hidden">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="min-w-full">
                                        <thead class="bg-white border-b text-gray-900 text-base font-bold">
                                            <tr>
                                                <th scope="col" class="px-6 py-4 text-center">
                                                    No
                                                </th>
                                                <th scope="col" class="px-6 py-4 text-center">
                                                    NP
                                                </th>
                                                <th scope="col" class="px-6 py-4 text-center">
                                                    Nama
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
                                            <tr
                                                class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100 text-center">
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    1
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    H109
                                                </td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4">
                                                    Karlina Ibrahim
                                                </td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 text-left">
                                                    <p class="line-clamp-2">Verifikasi Pita Cukai</p>
                                                </td>
                                                <td class="text-sm px-6 py-4 whitespace-nowrap">
                                                    <div
                                                        class="border-b-2 rounded-md hover:border-blue-500 transition duration-200 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md">
                                                        <input type="number" placeholder="Lembar"
                                                            class="border-none focus:ring-0 text-xs font-medium w-full"
                                                            min="0">
                                                    </div>
                                                </td>
                                                <td class="text-sm px-6 py-4 whitespace-nowrap">
                                                    <div
                                                        class="border-b-2 rounded-md hover:border-blue-500 transition duration-150 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md">
                                                        <input type="number" placeholder="Jumlah OBC"
                                                            class="border-none focus:ring-0 font-medium text-xs w-full"
                                                            min="0">
                                                    </div>
                                                </td>
                                                <td class="text-sm px-6 py-4 whitespace-nowrap">
                                                    <div
                                                        class="border-b-2 rounded-md hover:border-blue-500 transition duration-150 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md">
                                                        <input type="text" placeholder="Jika Tidak Memenuhi Target"
                                                            class="border-none focus:ring-0 font-medium text-xs w-full">
                                                    </div>
                                                </td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                                    <div class="flex justify-center">
                                                        <div class="form-check form-check-inline">
                                                            <input
                                                                class="form-check-input mr-3 appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left cursor-pointer"
                                                                type="checkbox" id="inlineCheckbox1" value="option1">
                                                            <label class="form-check-label text-gray-800 text-xs"
                                                                for="inlineCheckbox1">Awal</label>
                                                        </div>
                                                        <div class="form-check form-check-inline ml-2">
                                                            <input
                                                                class="form-check-input mr-3 appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left cursor-pointer"
                                                                type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label
                                                                class="form-check-label inline-block text-gray-800 text-xs"
                                                                for="inlineCheckbox2">Akhir</label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-sm px-6 py-4 whitespace-nowrap flex-nowrap">
                                                    <div
                                                        class="border-b-2 rounded-md hover:border-blue-500 transition duration-150 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md">
                                                        <select class="border-none focus:ring-0 font-medium text-xs w-full">
                                                            <option value="" selected>-</option>
                                                            <option value="Cuti">Cuti</option>
                                                            <option value="CD">CD</option>
                                                            <option value="Surat Merah">Surat Merah</option>
                                                            <option value="IDT">Datang Terlambat</option>
                                                        </select>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Footer --}}
                <div class="row-span-2 rounded-b-xl bg-white shadow-md drop-shadow-sm overflow-hidden px-10 py-4">
                    <div class="flex justify-center">
                        <nav aria-label="Page navigation example">
                            <ul class="flex list-style-none">
                                <li class="page-item disabled"><a
                                        class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-500 pointer-events-none focus:shadow-none"
                                        href="#" tabindex="-1" aria-disabled="true">Previous</a></li>
                                <li class="page-item"><a
                                        class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                                        href="#">1</a></li>
                                <li class="page-item active"><a
                                        class="page-link relative block py-1.5 px-3 border-0 bg-blue-600 outline-none transition-all duration-300 rounded-full text-white hover:text-white hover:bg-blue-600 shadow-md focus:shadow-md"
                                        href="#">2 <span class="visually-hidden">(current)</span></a></li>
                                <li class="page-item"><a
                                        class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                                        href="#">3</a></li>
                                <li class="page-item"><a
                                        class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                                        href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
