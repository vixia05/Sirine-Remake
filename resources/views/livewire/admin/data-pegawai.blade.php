<div class="flex justify-center container mx-auto">
    @include('components.modal.update-pegawai')
    <div class="w-full rounded-md bg-white/70 dark:bg-slate-800 dark:bg-opacity-60 dark:backdrop-blur-sm dark:backdrop-filter">
        {{-- Header --}}
        <div class="px-10 py-4">
            <h4 class="my-auto font-sans text-2xl font-semibold leading-tight dark:text-slate-100 text-slate-800">Data Pegawai</h4>
        </div>
        <div class="px-4 pb-4">
            {{-- 1.0 Filter & Search Section --}}
            <div class="rounded-t border bg-inerhit border-slate-400 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50 px-4 py-6">
                <div class="flex justify-start">
                    <div class="relative">
                        <input type="text" wire:model="search"
                            class="rounded-lg border-t py-2 pl-10 pr-4 text-xs font-medium text-gray-600 shadow focus:border-gray-400 focus:outline-none focus:ring-0"
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
            </div>
            {{-- End Filter & Search --}}
            {{-- 2.0 Body / Table --}}
            <div
                class="overflow-hidden border-x bg-inerhit border-slate-400 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full sm:px-4 lg:px-8">
                            <div class="overflow-x-auto">
                                <table class="min-w-full">
                                    <thead class="border-b border-slate-400 dark:border-slate-500 text-base font-bold text-slate-600 dark:text-slate-400">
                                        <tr>
                                            <th scope="col" class="border-r border-slate-400 dark:border-slate-500 px-4 py-2 text-center">
                                                No
                                            </th>
                                            <th scope="col" class="border-r border-slate-400 dark:border-slate-500 px-4 py-2 text-center">
                                                NP
                                            </th>
                                            <th scope="col" class="border-r border-slate-400 dark:border-slate-500 px-4 py-2 text-center">
                                                Nama
                                            </th>
                                            <th scope="col" class="border-r border-slate-400 dark:border-slate-500 px-4 py-2 text-center">
                                                Email
                                            </th>
                                            <th scope="col" class="border-r border-slate-400 dark:border-slate-500 px-4 py-2 text-center">
                                                Contact
                                            </th>
                                            <th scope="col"
                                                class="whitespace-nowrap border-r border-slate-400 dark:border-slate-500 px-4 py-2 text-center">
                                                Tanggal Lahir
                                            </th>
                                            <th scope="col" class="border-r border-slate-400 dark:border-slate-500 px-4 py-2 text-center">
                                                Alamat
                                            </th>
                                            <th scope="col" class="border-r border-slate-400 dark:border-slate-500 px-4 py-2 text-center">
                                                Unit
                                            </th>
                                            <th scope="col" class="border-slate-500 px-4 py-2 text-center">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $datas)
                                            <tr
                                                class="text-slate-800 dark:text-slate-100 transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10">
                                                <td
                                                    class="whitespace-nowrap border-r border-y border-slate-400 dark:border-slate-500 px-4 py-2 text-center text-sm font-medium">
                                                    {{ $data->firstItem() + $loop->index }}
                                                </td>
                                                <td
                                                    class="whitespace-nowrap border-y border-slate-400 dark:border-slate-500 px-4 py-2 text-center text-sm">
                                                    {{ $datas->np_user }}
                                                </td>
                                                <td
                                                    class="max-w-[11rem] text-ellipsis border border-slate-400 dark:border-slate-500 px-4 py-2 text-sm">
                                                    {{ $datas->nama }}
                                                </td>
                                                <td
                                                    class="whitespace-nowrap border border-slate-400 dark:border-slate-500 px-4 py-2 text-sm">
                                                    {{ \App\Models\User::where('np', $datas->np_user)->value('email') }}
                                                </td>
                                                <td
                                                    class="whitespace-nowrap border border-slate-400 dark:border-slate-500 px-4 py-2 text-center text-sm">
                                                    @if (substr($datas->contact, 0, 1) == '0')
                                                        {{ Str::limit($datas->contact, 4, '-') }}{{ Str::limit(substr($datas->contact, 4), 4, '-') }}{{ Str::limit(substr($datas->contact, 8), 4, '') }}
                                                    @else
                                                        0{{ Str::limit($datas->contact, 3, '-') }}{{ Str::limit(substr($datas->contact, 3), 4, '-') }}{{ Str::limit(substr($datas->contact, 7), 4, '') }}
                                                    @endif
                                                </td>
                                                <td
                                                    class="whitespace-nowrap border border-slate-400 dark:border-slate-500 px-4 py-2 text-center text-sm">
                                                    {{ date('d-m-Y', strtotime($datas->tgl_lahir)) }}
                                                </td>
                                                <td
                                                    class="max-w-sm border border-slate-400 dark:border-slate-500 px-4 py-2 text-left text-sm">
                                                    <span class="line-clamp-2">
                                                        {{ $datas->alamat }}
                                                    </span>
                                                </td>
                                                <td
                                                    class="max-w-sm border border-slate-400 dark:border-slate-500 px-4 py-2 text-center text-sm">
                                                    <span class="line-clamp-2">
                                                        {{ \App\Models\Unit::where('id', $datas->id_unit)->value('unit') }}
                                                    </span>
                                                </td>
                                                <td class="whitespace-nowrap border-y border-slate-400 dark:border-slate-500 px-4 py-2 text-slate-100">
                                                    <div class="flex justify-center space-x-2">
                                                        <button type="button" type="button" data-mdb-ripple="true"
                                                            data-mdb-ripple-color="light" data-bs-toggle="modal"
                                                            data-bs-target="#modalUpdate"
                                                            wire:click="edit({{ $datas->id }})"
                                                            class="inline-block rounded bg-green-500 px-3 py-2 text-sm font-semibold leading-tight shadow-md transition duration-150 ease-in-out hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg">
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
                class="overflow-hidden rounded-b border-b border-x bg-inerhit border-slate-400 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50 px-10 py-2">
                {{ $data->links('vendor.livewire.tailwind') }}
            </div>
        </div>
    </div>
</div>
