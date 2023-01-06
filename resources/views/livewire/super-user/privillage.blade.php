<div class="flex justify-center">
    <div
        class="w-full rounded-md bg-gradient-to-br from-slate-50 via-slate-100 to-slate-50  dark:bg-slate-800 dark:from-transparent dark:to-transparent dark:bg-opacity-60 dark:backdrop-blur-sm dark:backdrop-filter">
        {{-- Header --}}
        <div class="pl-4 py-6">
            <h4 class="my-auto font-sans text-lg font-semibold leading-tight text-slate-500 dark:text-slate-100">
                PRIVILLAGE & ROLE</h4>
        </div>
        <div class="px-4 pb-4">
            {{-- Body / Table --}}
            <div
                class="overflow-hidden border-slate-400 bg-inherit dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full sm:px-6 lg:px-8">
                            <table class="min-w-full">
                                <thead
                                    class="text-sm font-bold border-b border-slate-300 text-slate-700 dark:border-slate-500 dark:text-slate-400">
                                    <tr>
                                        <th scope="col" class="p-3 text-center w-4 border-slate-300 dark:border-slate-500">
                                            Level
                                        </th>
                                        <th scope="col" class="p-3 text-left border-slate-300 dark:border-slate-500">
                                            Role
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $datas)
                                        <tr
                                            class="transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10">
                                            <td
                                                class="p-3 text-sm text-center font-light border-b whitespace-nowrap border-slate-300 text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                {{ $datas->level }}
                                            </td>
                                            <td
                                                class="p-3 text-sm font-light border-b whitespace-nowrap border-slate-300 text-slate-700 dark:border-slate-500 dark:text-slate-100">
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
