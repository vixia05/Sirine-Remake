@extends('layouts.app')
@section('content')
    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-rows-5">
                {{-- Header --}}
                <div class="rounded-t-xl bg-slate-700 shadow-md drop-shadow-sm overflow-hidden px-10 py-4">
                    <h4 class="font-semibold leading-tight text-2xl my-auto text-white">Jam Efektif & Target Harian</h4>
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
                                                    Gilir
                                                </th>
                                                <th scope="col" class="px-6 py-4 text-center">
                                                    Jam Efektif
                                                </th>
                                                <th scope="col" class="px-6 py-4 text-center">
                                                    Target/Jam
                                                </th>
                                                <th scope="col" class="px-6 py-4 text-center">
                                                    Target/Hari
                                                </th>
                                                <th scope="col" class="px-6 py-4 text-center">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr
                                                class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100 text-center">
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                                                    1
                                                </td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    6 Jam
                                                </td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    5 Rim / 2.500 Lbr
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                                                    30 Rim / 15.000 Lbr
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex justify-center space-x-2">
                                                        <button type="button" type="button" data-mdb-ripple="true"
                                                            data-mdb-ripple-color="light"
                                                            class="inline-block px-3 py-2 bg-green-500 text-white font-semibold text-sm leading-tight rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                                viewBox="0 0 20 20" fill="currentColor">
                                                                <path
                                                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr
                                                class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100 text-center">
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                                                    2
                                                </td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    6 Jam
                                                </td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    5 Rim / 2.500 Lbr
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                                                    30 Rim / 15.000 Lbr
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex justify-center space-x-2">
                                                        <button type="button" type="button" data-mdb-ripple="true"
                                                            data-mdb-ripple-color="light"
                                                            class="inline-block px-3 py-2 bg-green-500 text-white font-semibold text-sm leading-tight rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                                viewBox="0 0 20 20" fill="currentColor">
                                                                <path
                                                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr
                                                class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100 text-center">
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                                                    3
                                                </td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    6 Jam
                                                </td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    5 Rim / 2.500 Lbr
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                                                    30 Rim / 15.000 Lbr
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex justify-center space-x-2">
                                                        <button type="button" type="button" data-mdb-ripple="true"
                                                            data-mdb-ripple-color="light"
                                                            class="inline-block px-3 py-2 bg-green-500 text-white font-semibold text-sm leading-tight rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                                viewBox="0 0 20 20" fill="currentColor">
                                                                <path
                                                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </button>
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
