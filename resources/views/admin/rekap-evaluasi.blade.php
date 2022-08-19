@section('title', 'Rekap Evaluasi')
@extends('layouts.app')
@section('content')
    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-flow-row">
                {{-- Header --}}
                <div class="rounded-t-xl bg-slate-700 shadow-md drop-shadow-sm overflow-hidden px-10 py-4">
                    <h4 class="font-semibold leading-tight text-2xl my-auto text-white">Pesan Evaluasi</h4>
                </div>
                {{-- Body / Table --}}
                <div class="row-span-3 bg-white shadow-md drop-shadow-sm overflow-hidden">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden mx-5 border rounded-md">
                                    <table class="min-w-full">
                                        <thead
                                            class="bg-white border-b-2 drop-shadow-md text-gray-900 text-sm font-semibold">
                                            <tr>
                                                <th scope="col" class="px-3 py-4 text-center">
                                                    No
                                                </th>
                                                <th scope="col" class="px-3 py-4 text-center">
                                                    NP Pegawai
                                                </th>
                                                <th scope="col" class="px-3 py-4 text-center">
                                                    NP Kepala Seksi
                                                </th>
                                                <th scope="col" class="px-3 py-4 text-center">
                                                    NP Kepala Unit
                                                </th>
                                                <th scope="col" class="px-3 py-4 text-center">
                                                    Evaluasi Kepala Seksi
                                                </th>
                                                <th scope="col" class="px-3 py-4 text-center">
                                                    Evaluasi Kepala Unit
                                                </th>
                                                <th scope="col" class="px-3 py-4 text-center">
                                                    Tanggapan Pegawai
                                                </th>
                                                <th scope="col" class="px-3 py-4 text-center">
                                                    Tanggal Evaluasi
                                                </th>
                                                <th scope="col" class="px-3 py-4 text-center">
                                                    Status
                                                </th>
                                                <th scope="col" class="px-3 py-4 text-center">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $datas)
                                                <tr
                                                    class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                                    <td
                                                        class="px-3 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-center">
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td class="text-sm text-gray-900 font-light px-3 py-4 text-center">
                                                        {{ $datas->np_user }}<br>
                                                        <span
                                                            class="text-xs inline-block py-1 px-3.5 leading-none text-center align-baseline font-bold bg-blue-400 text-white rounded-full">
                                                            {{ \App\Models\UserDetails::where('np_user', $datas->np_user)->value('nama') }}
                                                        </span>
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-light px-3 py-4 whitespace-nowrap text-center">
                                                        {{ $datas->np_kasek }}
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-light px-3 py-4 whitespace-nowrap text-center">
                                                        {{ $datas->np_kaun }}
                                                    </td>
                                                    <td class="w-1/6">
                                                        <div class="text-sm text-gray-900 font-light px-3 py-4 text-left">
                                                            <span class="line-clamp-2">{{ $datas->eva_kasek }}</span>
                                                        </div>
                                                    </td>
                                                    <td class="w-1/6">
                                                        <div class="text-sm text-gray-900 font-light px-3 py-4 text-left">
                                                            <span class="line-clamp-2"> {{ $datas->eva_kaun }}</span>
                                                        </div>
                                                    </td>
                                                    <td class="w-1/6">
                                                        <div class="text-sm text-gray-900 font-light px-3 py-4 text-left">
                                                            <span class="line-clamp-2">{{ $datas->response }}</span>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-light px-3 py-4 whitespace-nowrap text-right">
                                                        {{ $datas->post_date }}
                                                    </td>
                                                    <td>
                                                        <div class="flex justify-center space-x-2">
                                                            @if ($datas->response != null)
                                                                <span
                                                                    class="text-xs inline-block py-1 px-3.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-green-600 text-white rounded-full">
                                                                    Responded
                                                                </span>
                                                            @else
                                                                <span
                                                                    class="text-xs inline-block py-1 px-3.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded-full">
                                                                    Not Read
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td class="px-3 py-4 whitespace-nowrap">
                                                        <div class="flex justify-center space-x-2">
                                                            <button type="button" type="button" data-mdb-ripple="true"
                                                                data-mdb-ripple-color="light"
                                                                class="inline-block px-3 py-2 bg-blue-500 text-white font-semibold text-sm leading-tight rounded shadow-md hover:bg-blue-600 hover:shadow-lg focus:bg-blue-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg transition duration-150 ease-in-out">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3"
                                                                    viewBox="0 0 20 20" fill="currentColor">
                                                                    <path fill-rule="evenodd"
                                                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                                        clip-rule="evenodd" />
                                                                </svg>
                                                            </button>
                                                            <button type="button" type="button" data-mdb-ripple="true"
                                                                data-mdb-ripple-color="light"
                                                                class="inline-block px-3 py-2 bg-green-500 text-white font-semibold text-sm leading-tight rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3"
                                                                    viewBox="0 0 20 20" fill="currentColor">
                                                                    <path
                                                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                                    <path fill-rule="evenodd"
                                                                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                                        clip-rule="evenodd" />
                                                                </svg>
                                                            </button>
                                                            <button type="button" type="button" data-mdb-ripple="true"
                                                                data-mdb-ripple-color="light"
                                                                class="inline-block px-3 py-2 bg-red-500 text-white font-semibold text-sm leading-tight rounded shadow-md hover:bg-red-600 hover:shadow-lg focus:bg-red-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-700 active:shadow-lg transition duration-150 ease-in-out">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3"
                                                                    viewBox="0 0 20 20" fill="currentColor">
                                                                    <path fill-rule="evenodd"
                                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                        clip-rule="evenodd" />
                                                                </svg>
                                                            </button>
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
                <div class="row-span-2 rounded-b-xl bg-white shadow-md drop-shadow-sm overflow-hidden px-10 py-4">
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
