<div class="flex justify-center">
    @include('components.modal.update-user')
    @include('components.modal.delete-user')
    <div
        class="w-full rounded-md bg-white/70 dark:bg-slate-800 dark:bg-opacity-60 dark:backdrop-blur-sm dark:backdrop-filter">
        {{-- Header --}}
        <div class="px-10 py-4">
            <h4 class="my-auto font-sans text-2xl font-semibold leading-tight text-slate-600 dark:text-slate-100">LIST
                USER SIRINE</h4>
        </div>
        <div class="px-4 pb-4">
            {{-- 1.0 Filter & Search Section --}}
            <div
                class="bg-inerhit border rounded-t border-slate-400 bg-opacity-30 px-4 py-2 text-sm dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
                <div class="flex justify-start">
                    <div class="relative">
                        <input type="text" wire:model="search"
                            class="rounded-lg border-t py-2 pl-10 pr-4 text-sm font-medium text-gray-600 shadow focus:border-gray-400 focus:outline-none focus:ring-0"
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
            {{-- Message CRUD --}}
            @if (session()->has('messageUpdate'))
                <div
                    class="border dark:border-slate-500 border-slate-400 bg-slate-700 bg-opacity-80 p-2 text-center font-bold leading-tight text-green-400">
                    <div class="border-green-400 border p-4 rounded">
                        {{ session('messageUpdate') }}
                        </div>
                </div>
            @elseif (session()->has('messageDelete'))
                <div
                    class="border border-red-500 bg-slate-700 bg-opacity-80 p-4 text-center font-bold leading-tight text-red-500">
                    {{ session('messageDelete') }}
                </div>
            @endif
            {{-- End Message CRUD --}}
            {{-- End Filter & Search --}}
            {{-- Body / Table --}}
            <div
                class="bg-inerhit overflow-hidden border-slate-400 bg-opacity-30 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full sm:px-4 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full">
                                    <thead
                                        class="border-b border-slate-400 text-base font-bold text-slate-500 dark:border-slate-500 dark:text-slate-400">
                                        <tr>
                                            <th class="border-x border-slate-400 px-4 py-2 text-center dark:border-slate-500"
                                                scope="col">
                                                No
                                            </th>
                                            <th class="border-r border-slate-400 px-4 py-2 text-center dark:border-slate-500"
                                                scope="col">
                                                NP
                                            </th>
                                            <th class="border-r border-slate-400 px-4 py-2 text-center dark:border-slate-500"
                                                scope="col">
                                                Nama
                                            </th>
                                            <th class="border-r border-slate-400 px-4 py-2 text-center dark:border-slate-500"
                                                scope="col">
                                                Role
                                            </th>
                                            <th class="border-r border-slate-400 px-4 py-2 text-center dark:border-slate-500"
                                                scope="col">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $datas)
                                            <tr
                                                class="transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10">
                                                <td
                                                    class="whitespace-nowrap border border-slate-400 px-4 py-2 text-center text-sm font-medium text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                    {{ $data->firstItem() + $loop->index }}
                                                </td>
                                                <td
                                                    class="whitespace-nowrap border border-slate-400 px-4 py-2 text-center text-sm text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                    {{ $datas->np }}
                                                </td>
                                                <td
                                                    class="whitespace-nowrap border border-slate-400 px-4 py-2 text-sm text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                    {{ \App\Models\UserDetails::where('np_user', $datas->np)->value('nama') }}
                                                </td>
                                                <td
                                                    class="whitespace-nowrap border border-slate-400 px-4 py-2 text-center text-sm text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                    {{ \App\Models\Privillage::where('level', $datas->level)->value('role') }}
                                                </td>
                                                <td
                                                    class="whitespace-nowrap border border-slate-400 px-4 py-2 text-center text-sm font-light text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                    <div class="flex justify-center space-x-2">
                                                        <button
                                                            class="inline-block rounded bg-green-500 px-3 py-2 text-sm font-semibold leading-tight text-slate-100 shadow-md transition duration-150 ease-in-out hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg"
                                                            data-bs-toggle="modal" data-bs-target="#modalUpdate"
                                                            data-mdb-ripple="true" data-mdb-ripple-color="light"
                                                            type="button" wire:click="edit({{ $datas->id }})">
                                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" fill="currentColor">
                                                                <path
                                                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </button>
                                                        <button
                                                            class="inline-block rounded bg-red-500 px-3 py-2 text-sm font-semibold leading-tight text-slate-100 shadow-md transition duration-150 ease-in-out hover:bg-red-600 hover:shadow-lg focus:bg-red-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-700 active:shadow-lg"
                                                            data-mdb-ripple="true" data-mdb-ripple-color="light"
                                                            data-bs-toggle="modal" data-bs-target="#modalDelete"
                                                            type="button" wire:click="delete({{ $datas->id }})">
                                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
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
                            <div
                                class="bg-inerhit overflow-hidden rounded-b border-b border-x border-slate-400 px-10 py-2 text-slate-800 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50 dark:text-slate-100">
                                {{ $data->links('vendor.livewire.tailwind') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Footer --}}
        </div>
    </div>
</div>
