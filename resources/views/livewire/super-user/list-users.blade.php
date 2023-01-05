<div class="flex justify-center">
    @include('components.modal.update-user')
    @include('components.modal.delete-user')
    <div
        class="w-full rounded-md bg-gradient-to-br from-slate-50 via-slate-100 to-slate-50  dark:bg-slate-800 dark:bg-opacity-60 dark:backdrop-blur-sm dark:backdrop-filter">
        {{-- Header --}}
        <div class="pl-4 py-6">
            <h4 class="my-auto font-sans text-lg font-semibold leading-tight text-slate-500 dark:text-slate-100">LIST
                USER SIRINE</h4>
        </div>
        <div class="px-4 pb-4">
            {{-- 1.0 Filter & Search Section --}}
            <div
                class="p-4 text-sm border-y bg-inerhit border-slate-300 bg-opacity-30 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
                <div class="flex justify-between">
                    <button
                        class="border-2 font-medium text-blue-600 brightness-125 rounded border-blue-500 px-2 py-2 flex justify-between gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
                        </svg>
                        Filter
                    </button>
                    <div class="relative">
                        <input type="text" wire:model="search"
                            class="py-2 pl-10 pr-4 text-sm font-medium text-gray-600 border-t rounded border border-slate-400 shadow focus:shadow-md focus:shadow-blue-500/30 focus:border-blue-500 focus:ring-blue-600 focus:outline-none focus:ring-1 hover:border-blue-500 transition ease-out duration-150"
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
                </div>
            </div>
            {{-- Message CRUD --}}
            @if (session()->has('messageUpdate'))
            <div
                class="p-2 font-bold leading-tight text-center text-green-400 border border-slate-300 bg-slate-700 bg-opacity-80 dark:border-slate-500">
                <div class="p-4 border border-green-400 rounded">
                    {{ session('messageUpdate') }}
                </div>
            </div>
            @elseif (session()->has('messageDelete'))
            <div class="p-4 font-bold leading-tight text-center text-red-500 bordered-500 bg-slate-700 bg-opacity-80">
                {{ session('messageDelete') }}
            </div>
            @endif
            {{-- End Message CRUD --}}
            {{-- End Filter & Search --}}
            {{-- Body / Table --}}
            <div
                class="overflow-hidden border-t border-slate-400 bg-inherit dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full sm:px-4 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full">
                                    <thead
                                        class="text-sm font-bold border-b border-slate-300 text-slate-700 dark:border-slate-500 dark:text-slate-400">
                                        <tr>
                                            <th class="p-3 text-center border-slate-300 dark:border-slate-500"
                                                scope="col">
                                                NP
                                            </th>
                                            <th class="p-3 text-left border-slate-300 dark:border-slate-500"
                                                scope="col">
                                                Nama
                                            </th>
                                            <th class="p-3 text-center border-slate-300 dark:border-slate-500"
                                                scope="col">
                                                Role
                                            </th>
                                            <th class="p-3 text-center border-slate-300 dark:border-slate-500"
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
                                                class="p-3 text-sm text-center font-light border-b whitespace-nowrap border-slate-300 text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                {{ $datas->np_user }}
                                            </td>
                                            <td
                                                class="p-3 text-sm border-b whitespace-nowrap font-light  border-slate-300 text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                {{ $datas->userDetails->nama }}
                                            </td>
                                            <td
                                                class="p-3 text-sm text-center border-b whitespace-nowrap font-light  border-slate-300 text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                {{ $datas->level->role }}
                                            </td>
                                            <td
                                                class="p-3 text-sm font-light text-center border-b whitespace-nowrap border-slate-300 text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                <div class="flex justify-center space-x-2">
                                                    <button
                                                        class="inline-block px-3 py-2 text-sm font-semibold leading-tight transition duration-150 ease-in-out bg-green-500 rounded shadow-md text-slate-100 hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg"
                                                        data-bs-toggle="modal" data-bs-target="#modalUpdate"
                                                        data-mdb-ripple="true" data-mdb-ripple-color="light"
                                                        type="button" wire:click="edit({{ $datas->id }})">
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
                                                        class="inline-block px-3 py-2 text-sm font-semibold leading-tight transition duration-150 ease-in-out bg-red-500 rounded shadow-md text-slate-100 hover:bg-red-600 hover:shadow-lg focus:bg-red-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-700 active:shadow-lg"
                                                        data-mdb-ripple="true" data-mdb-ripple-color="light"
                                                        data-bs-toggle="modal" data-bs-target="#modalDelete"
                                                        type="button" wire:click="delete({{ $datas->id }})">
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
                            </div>
                            <div
                                class="px-10 py-2 overflow-hidden border-b rounded-b bg-inerhit border-slate-300 text-slate-700 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50 dark:text-slate-100">
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
