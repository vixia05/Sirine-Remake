<div class="flex justify-center">
    <div class="w-full rounded-md bg-slate-100 bg-opacity-70 dark:bg-slate-800 dark:bg-opacity-60 backdrop-blur-sm backdrop-filter">
        {{-- Header --}}
        <div class="border-slate-500 px-10 py-4">
            <h4 class="my-auto font-sans text-2xl font-semibold leading-tight text-slate-800 dark:text-slate-100">Privillage & Role</h4>
        </div>
        <div class="px-4 pb-4">
            {{-- Body / Table --}}
            <div class="overflow-hidden border-t bg-inherit border-slate-400 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full sm:px-6 lg:px-8">
                            <table class="min-w-full">
                                <thead class="border-b border-slate-400 text-base font-bold text-slate-600 dark:text-slate-400">
                                    <tr>
                                        <th scope="col" class="border-x border-slate-400 px-4 py-3 text-center">
                                            No
                                        </th>
                                        <th scope="col" class="border-r border-slate-400 px-4 py-3 text-center">
                                            Level
                                        </th>
                                        <th scope="col" class="border-r border-slate-400 px-4 py-3 text-center">
                                            Role
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $datas)
                                        <tr
                                            class="transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10">
                                            <td
                                                class="whitespace-nowrap border border-slate-400 px-4 py-3 text-center text-sm font-medium text-slate-800 dark:text-slate-100">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td
                                                class="whitespace-nowrap border border-slate-400 px-4 py-3 text-center text-slate-800 dark:text-slate-100">
                                                {{ $datas->level }}
                                            </td>
                                            <td
                                                class="whitespace-nowrap border border-slate-400 px-4 py-3 text-center text-slate-800 dark:text-slate-100">
                                                {{ $datas->role }}
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
    </div>
</div>
