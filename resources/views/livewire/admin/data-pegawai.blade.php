<div class="grid grid-flow-row">
    {{-- Header --}}
    <div class="rounded-t-xl bg-slate-700 shadow-md drop-shadow-sm overflow-hidden px-10 py-4">
        <h4 class="font-semibold leading-tight text-2xl my-auto text-white">Data Pegawai</h4>
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
                                    <th scope="col" class="px-6 py-4 text-left">
                                        Nama
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-left">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-left">
                                        Contact
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-left whitespace-nowrap">
                                        Tanggal Lahir
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-left">
                                        Alamat
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center">
                                        Unit
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $datas)
                                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-center">
                                            {{ $data->firstItem() + $loop->index }}
                                        </td>
                                        <td
                                            class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                                            {{ $datas->np_user }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4">
                                            {{ $datas->nama }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ \App\Models\User::where('np', $datas->np_user)->value('email') }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ Str::limit($datas->contact, 4, '-') }}{{ Str::limit(substr($datas->contact, 4), 4, '-') }}{{ Str::limit(substr($datas->contact, 8), 4, '') }}
                                        </td>
                                        <td
                                            class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                                            {{ $datas->tgl_lahir }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 text-left max-w-sm">
                                            <span class="line-clamp-2">
                                                {{ $datas->alamat }}
                                            </span>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 text-center max-w-sm">
                                            <span class="line-clamp-2">
                                                {{ \App\Models\Privillage::where('level', \App\Models\User::where('np', $datas->np_user)->value('level'))->value('role') }}
                                            </span>
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
                                                <button type="button" type="button" data-mdb-ripple="true"
                                                    data-mdb-ripple-color="light"
                                                    class="inline-block px-3 py-2 bg-red-500 text-white font-semibold text-sm leading-tight rounded shadow-md hover:bg-red-600 hover:shadow-lg focus:bg-red-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-700 active:shadow-lg transition duration-150 ease-in-out">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
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
