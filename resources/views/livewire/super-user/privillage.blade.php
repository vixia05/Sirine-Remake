<div class="flex justify-center">
    <div
        class="w-full rounded-md bg-white/70 dark:backdrop-blur-sm dark:backdrop-filter dark:bg-slate-800 dark:bg-opacity-60">
        {{-- Header --}}
        <div class="px-10 py-4 border-slate-500">
            <h4 class="my-auto font-sans text-2xl font-semibold leading-tight text-slate-800 dark:text-slate-100">
                PRIVILLAGE & ROLE</h4>
        </div>
        <div class="px-4 pb-4">
            {{-- Body / Table --}}
            <div
                class="overflow-hidden border-t border-slate-400 bg-inherit dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full sm:px-6 lg:px-8">
                            <table class="min-w-full">
                                <thead
                                    class="text-base font-bold border-b border-slate-400 text-slate-600 dark:text-slate-400">
                                    <tr>
                                        <th scope="col" class="px-4 py-2 text-center border-x border-slate-400">
                                            No
                                        </th>
                                        <th scope="col" class="px-4 py-2 text-center border-r border-slate-400">
                                            Level
                                        </th>
                                        <th scope="col" class="px-4 py-2 text-center border-r border-slate-400">
                                            Role
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $datas)
                                        <tr
                                            class="transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10">
                                            <td
                                                class="px-4 py-2 text-sm font-medium text-center border whitespace-nowrap border-slate-400 text-slate-800 dark:text-slate-100">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td
                                                class="px-4 py-2 text-center border whitespace-nowrap border-slate-400 text-slate-800 dark:text-slate-100">
                                                {{ $datas->level }}
                                            </td>
                                            <td
                                                class="px-4 py-2 text-left border whitespace-nowrap border-slate-400 text-slate-800 dark:text-slate-100">
                                                {{ $datas->role }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div
                    class="px-10 py-2 overflow-hidden border-b rounded-b bg-inerhit border-x border-slate-400 text-slate-800 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50 dark:text-slate-100">
                    {{ $data->links('vendor.livewire.tailwind') }}
                </div>
            </div>
        </div>
    </div>
</div>
