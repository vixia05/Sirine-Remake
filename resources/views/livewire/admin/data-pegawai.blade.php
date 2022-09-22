@include('components.modal.update-pegawai')
<div class="flex justify-center">
    <div class="w-full bg-white rounded-md bg-opacity-20 backdrop-blur-sm backdrop-filter">
        {{-- Header --}}
        <div class="px-10 py-4">
            <h4 class="my-auto font-sans text-2xl font-semibold leading-tight text-white">Data Pegawai</h4>
        </div>
        {{-- 1.0 Filter & Search Section --}}
        <div class="px-4 py-6 bg-white border-b shadow-md drop-shadow-sm">
            <div class="flex justify-start">
                <div class="relative">
                    <input type="text" wire:model="search"
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
        {{-- End Filter & Search --}}
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
                                            NP
                                        </th>
                                        <th scope="col" class="px-6 py-4 text-center">
                                            Nama
                                        </th>
                                        <th scope="col" class="px-6 py-4 text-center">
                                            Email
                                        </th>
                                        <th scope="col" class="px-6 py-4 text-center">
                                            Contact
                                        </th>
                                        <th scope="col" class="px-6 py-4 text-center whitespace-nowrap">
                                            Tanggal Lahir
                                        </th>
                                        <th scope="col" class="px-6 py-4 text-center">
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
                                        <tr
                                            class="transition duration-300 ease-in-out bg-white border-b hover:bg-gray-100">
                                            <td
                                                class="px-6 py-4 text-sm font-medium text-center text-gray-900 whitespace-nowrap">
                                                {{ $data->firstItem() + $loop->index }}
                                            </td>
                                            <td
                                                class="px-6 py-4 text-sm font-light text-center text-gray-900 whitespace-nowrap">
                                                {{ $datas->np_user }}
                                            </td>
                                            <td
                                                class="max-w-[11rem] text-ellipsis px-6 py-4 text-sm font-light text-gray-900">
                                                {{ $datas->nama }}
                                            </td>
                                            <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">
                                                {{ \App\Models\User::where('np', $datas->np_user)->value('email') }}
                                            </td>
                                            <td
                                                class="px-6 py-4 text-sm font-light text-center text-gray-900 whitespace-nowrap">
                                                {{ Str::limit($datas->contact, 4, '-') }}{{ Str::limit(substr($datas->contact, 4), 4, '-') }}{{ Str::limit(substr($datas->contact, 8), 4, '') }}
                                            </td>
                                            <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">
                                                {{ date('d - F - Y', strtotime($datas->tgl_lahir)) }}
                                            </td>
                                            <td class="max-w-sm px-6 py-4 text-sm font-light text-left text-gray-900">
                                                <span class="line-clamp-2">
                                                    {{ $datas->alamat }}
                                                </span>
                                            </td>
                                            <td class="max-w-sm px-6 py-4 text-sm font-light text-center text-gray-900">
                                                <span class="line-clamp-2">
                                                    {{ \App\Models\Unit::where('id', $datas->id_unit)->value('unit') }}
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex justify-center space-x-2">
                                                    <button type="button" type="button" data-mdb-ripple="true"
                                                        data-mdb-ripple-color="light" data-bs-toggle="modal"
                                                        data-bs-target="#modalUpdate"
                                                        wire:click="edit({{ $datas->id }})"
                                                        class="inline-block px-3 py-2 text-sm font-semibold leading-tight text-white transition duration-150 ease-in-out bg-green-500 rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
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
            {{ $data->links() }}
        </div>
    </div>
</div>
