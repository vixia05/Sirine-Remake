<div class="flex justify-center">
    <div class="w-full rounded-md bg-slate-800 bg-opacity-60 backdrop-blur-sm backdrop-filter">
        {{-- Header --}}
        <div class="border-slate-500 px-10 py-4">
            <h4 class="my-auto font-sans text-2xl font-semibold leading-tight text-white">Privillage & Role</h4>
        </div>
        <div class="px-4 pb-4">
            {{-- Body / Table --}}
            <div class="overflow-hidden border-t border-slate-500 bg-slate-700 bg-opacity-50">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full sm:px-6 lg:px-8">
                            <table class="min-w-full">
                                <thead class="border-b border-slate-500 text-base font-bold text-gray-400">
                                    <tr>
                                        <th scope="col" class="border-x border-slate-500 px-4 py-3 text-center">
                                            No
                                        </th>
                                        <th scope="col" class="border-r border-slate-500 px-4 py-3 text-center">
                                            Level
                                        </th>
                                        <th scope="col" class="border-r border-slate-500 px-4 py-3 text-center">
                                            Role
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $datas)
                                        <tr
                                            class="transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10">
                                            <td
                                                class="whitespace-nowrap border border-slate-500 px-4 py-3 text-center text-sm font-medium text-white">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td
                                                class="whitespace-nowrap border border-slate-500 px-4 py-3 text-center text-white">
                                                {{ $datas->level }}
                                            </td>
                                            <td
                                                class="whitespace-nowrap border border-slate-500 px-4 py-3 text-center text-white">
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
