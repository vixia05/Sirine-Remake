@section('title', 'Input Verifikasi')
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
                    <div class="flex justify-center">
                        <div class=" bg-green-400 text-white rounded-l-md px-2 py-2 text-sm font-bold">
                            Team
                        </div>
                        <select
                            class="border rounded-r-md border-green-400 focus:ring-2 focus:border-green-500 focus:ring-green-300 font-medium text-xs">
                            <option>Verifikator Group A</option>
                        </select>
                        <div class="flex mx-auto">
                            <div class=" bg-green-400 text-white rounded-l-md px-2 py-2 text-sm font-bold">
                                Tanggal
                            </div>
                            <input type="date"
                                class="border rounded-r-md border-green-400 focus:ring-2 focus:border-green-500 focus:ring-green-300 font-medium text-xs">
                        </div>
                        <div class="ml-auto relative self-end">
                            <input type="search"
                                class="pl-10 pr-4 py-2 rounded-lg text-xs shadow focus:outline-none text-gray-600  font-medium border-2 focus:ring-0 focus:border-gray-400"
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
                    {{-- <div class="flex justify-between mt-7">
                        <div
                            class="flex justify-center bg-gray-400 focus-within:bg-gray-500 border border-gray-400 rounded-lg focus-within:border-gray-300 h-9">
                            <div class="my-auto rounded-l-md px-2">
                                <span class="font-bold text-sm text-white">Tampilkan</span>
                            </div>
                            <select class="border-none focus:ring-0 text-sm text-gray-700 text-center">
                                <option value="15">15</option>
                                <option value="30">30</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            <div class="my-auto px-2 rounded-r-md">
                                <span class="font-bold text-sm text-white">Data</span>
                            </div>
                        </div>
                    </div> --}}
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
                    <div class="flex justify-end">
                        <button type="submit" data-mdb-ripple="true" data-mdb-ripple-color="light"
                            class="
                        rounded-md
                        bg-blue-400
                        px-2
                        py-1
                        text-white
                        hover:bg-blue-500
                        transition
                        duration-150
                        ">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
