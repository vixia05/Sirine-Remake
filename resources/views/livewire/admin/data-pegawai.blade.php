<div class="container flex justify-center mx-auto">
    @include('components.modal.update-pegawai')
    <div
        class="w-full rounded-md bg-white/70 dark:bg-slate-800 dark:bg-opacity-60 dark:backdrop-blur-sm dark:backdrop-filter">
        {{-- Header --}}
        <div class="px-10 py-4">
            <h4 class="my-auto font-sans text-2xl font-semibold leading-tight text-slate-800 dark:text-slate-100">Data
                Pegawai</h4>
        </div>
        <div class="px-4 pb-4">
            {{-- 1.0 Filter & Search Section --}}
            <div
                class="px-4 py-3 border rounded-t bg-inerhit border-slate-400 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
                <div class="flex justify-between">
                    {{-- Search Box --}}
                    <div class="relative">
                        <input type="text" wire:model="search"
                            class="py-2 pl-10 pr-4 text-xs font-medium text-gray-600 border-t rounded-lg shadow focus:border-gray-400 focus:outline-none focus:ring-0"
                            placeholder="Search...">
                        <div class="absolute top-0 left-0 inline-flex items-center pt-2 pl-2 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    {{-- Filter Unit --}}
                    <div class="flex gap-2 px-2 py-1 text-blue-500 border border-blue-500 rounded focus-within:brightness-125 focus-within:shadow-lg focus-within:shadow-blue-500/20">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5 my-auto">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                        </svg>
                        <select
                            class="-my-1 -mr-2 text-xs transition border-blue-500 border-none rounded-r appearance-none focus:ring-0 bg-slate-800 bg-opacity-10 focus:bg-opacity-100 text-slate-100">
                            <option class="text-center">-- Unit Kerja --</option>
                            <option>Verifikasi Pita Cukai</option>
                            <option>Verifikasi Pita Cukai</option>
                        </select>
                    </div>
                    {{-- Button Export --}}
                    <div>
                        <button action="{{ route('dataPegawai.export') }}"
                         class="flex gap-2 px-2 py-1 text-green-400 border-2 border-green-400 rounded-md brightness-110 hover:shadow-lg hover:shadow-green-400/30 hover:brightness-125">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                            <span>Excel</span>
                        </button>
                    </div>
                </div>
            </div>
            {{-- End Filter & Search --}}
            {{-- 2.0 Body / Table --}}
            <div
                class="overflow-hidden bg-inerhit border-x border-slate-400 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full sm:px-4 lg:px-8">
                            <div class="overflow-x-auto">
                                <table class="min-w-full">
                                    <thead
                                        class="text-base font-bold border-b border-slate-400 text-slate-600 dark:border-slate-500 dark:text-slate-400">
                                        <tr>
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-500">
                                                No
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-500">
                                                NP
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-500">
                                                Nama
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-500">
                                                Email
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-500">
                                                Contact
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r whitespace-nowrap border-slate-400 dark:border-slate-500">
                                                Tanggal Lahir
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-500">
                                                Alamat
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-500">
                                                Unit
                                            </th>
                                            <th scope="col" class="px-4 py-2 text-center border-slate-500">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $datas)
                                            <tr
                                                class="transition duration-300 ease-in-out text-slate-800 hover:bg-slate-400 hover:bg-opacity-10 dark:text-slate-100">
                                                <td
                                                    class="px-4 py-2 text-sm font-medium text-center border-r whitespace-nowrap border-y border-slate-400 dark:border-slate-500">
                                                    {{ $data->firstItem() + $loop->index }}
                                                </td>
                                                <td
                                                    class="px-4 py-2 text-sm text-center whitespace-nowrap border-y border-slate-400 dark:border-slate-500">
                                                    {{ $datas->np_user }}
                                                </td>
                                                <td
                                                    class="max-w-[11rem] text-ellipsis border border-slate-400 px-4 py-2 text-sm dark:border-slate-500">
                                                    {{ $datas->nama }}
                                                </td>
                                                <td
                                                    class="px-4 py-2 text-sm border whitespace-nowrap border-slate-400 dark:border-slate-500">
                                                    {{ \App\Models\User::where('np', $datas->np_user)->value('email') }}
                                                </td>
                                                <td
                                                    class="px-4 py-2 text-sm text-center border whitespace-nowrap border-slate-400 dark:border-slate-500">
                                                    @if (substr($datas->contact, 0, 1) == '0')
                                                        {{ Str::limit($datas->contact, 4, '-') }}{{ Str::limit(substr($datas->contact, 4), 4, '-') }}{{ Str::limit(substr($datas->contact, 8), 4, '') }}
                                                    @else
                                                        0{{ Str::limit($datas->contact, 3, '-') }}{{ Str::limit(substr($datas->contact, 3), 4, '-') }}{{ Str::limit(substr($datas->contact, 7), 4, '') }}
                                                    @endif
                                                </td>
                                                <td
                                                    class="px-4 py-2 text-sm text-center border whitespace-nowrap border-slate-400 dark:border-slate-500">
                                                    {{ date('d-m-Y', strtotime($datas->tgl_lahir)) }}
                                                </td>
                                                <td
                                                    class="max-w-sm px-4 py-2 text-sm text-left border border-slate-400 dark:border-slate-500">
                                                    <span class="line-clamp-2">
                                                        {{ $datas->alamat }}
                                                    </span>
                                                </td>
                                                <td
                                                    class="max-w-sm px-4 py-2 text-sm text-center border border-slate-400 dark:border-slate-500">
                                                    <span class="line-clamp-2">
                                                        {{ \App\Models\Unit::where('id', $datas->id_unit)->value('unit') }}
                                                    </span>
                                                </td>
                                                <td
                                                    class="px-4 py-2 whitespace-nowrap border-y border-slate-400 text-slate-100 dark:border-slate-500">
                                                    <div class="flex justify-center space-x-2">
                                                        <button type="button" type="button" data-mdb-ripple="true"
                                                            data-mdb-ripple-color="light" data-bs-toggle="modal"
                                                            data-bs-target="#modalUpdate"
                                                            wire:click="edit({{ $datas->id }})"
                                                            class="inline-block px-3 py-2 text-sm font-semibold leading-tight transition duration-150 ease-in-out bg-green-500 rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg">
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
            <div
                class="px-10 py-2 overflow-hidden border-b rounded-b bg-inerhit border-x border-slate-400 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
                {{ $data->links('vendor.livewire.tailwind') }}
            </div>
        </div>
    </div>
</div>
