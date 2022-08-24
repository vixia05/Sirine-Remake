<div class="grid grid-flow-row">
    {{-- Header --}}
    <div class="px-10 py-4 overflow-hidden shadow-md rounded-t-xl bg-slate-700 drop-shadow-sm">
        <h4 class="my-auto text-2xl font-semibold leading-tight text-white">List User Sirine</h4>
    </div>
    @include('components.modal.update-user')
    {{-- Body / Table --}}
    <div class="overflow-hidden bg-white shadow-md drop-shadow-sm">
        <div class="flex flex-col">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full">
                            <thead class="text-base font-bold text-gray-900 bg-white border-b">
                                <tr>
                                    <th class="px-6 py-4 text-center" scope="col">
                                        No
                                    </th>
                                    <th class="px-6 py-4 text-center" scope="col">
                                        NP
                                    </th>
                                    <th class="px-6 py-4 text-left" scope="col">
                                        Nama
                                    </th>
                                    <th class="px-6 py-4 text-center" scope="col">
                                        Role
                                    </th>
                                    <th class="px-6 py-4 text-center" scope="col">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $datas)
                                    <tr class="transition duration-300 ease-in-out bg-white border-b hover:bg-gray-100">
                                        <td
                                            class="px-6 py-4 text-sm font-medium text-center text-gray-900 whitespace-nowrap">
                                            {{ $data->firstItem() + $loop->index }}
                                        </td>
                                        <td
                                            class="px-6 py-4 text-sm font-light text-center text-gray-900 whitespace-nowrap">
                                            {{ $datas->np }}
                                        </td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">
                                            {{ \App\Models\UserDetails::where('np_user', $datas->np)->value('nama') }}
                                        </td>
                                        <td
                                            class="px-6 py-4 text-sm font-light text-center text-gray-900 whitespace-nowrap">
                                            {{ \App\Models\Privillage::where('level', $datas->level)->value('role') }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex justify-center space-x-2">
                                                <button
                                                    class="inline-block px-3 py-2 text-sm font-semibold leading-tight text-white transition duration-150 ease-in-out bg-green-500 rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg"
                                                    data-bs-toggle="modal" data-bs-target="#modalUpdate"
                                                    data-mdb-ripple="true" data-mdb-ripple-color="light" type="button"
                                                    wire:click="edit({{ $datas->id }})">
                                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path
                                                            d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                        <path fill-rule="evenodd"
                                                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                                <button
                                                    class="inline-block px-3 py-2 text-sm font-semibold leading-tight text-white transition duration-150 ease-in-out bg-red-500 rounded shadow-md hover:bg-red-600 hover:shadow-lg focus:bg-red-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-700 active:shadow-lg"
                                                    data-mdb-ripple="true" data-mdb-ripple-color="light" type="button"
                                                    wire:click="delete({{ $datas->id }})">
                                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
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
                        <div
                            class="row-span-2 px-10 py-4 overflow-hidden bg-white shadow-md rounded-b-xl drop-shadow-sm">
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Footer --}}
</div>
