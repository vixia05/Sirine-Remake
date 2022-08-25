<div class="grid grid-flow-row">
    {{-- Header --}}
    <div class="rounded-t-xl bg-slate-700 shadow-md drop-shadow-sm overflow-hidden px-10 py-4">
        <h4 class="font-semibold leading-tight text-2xl my-auto text-white">Privillage & Role</h4>
    </div>
    {{-- Body / Table --}}
    <div class="bg-white shadow-md drop-shadow-sm overflow-hidden">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full">
                            <thead class="bg-white border-b text-gray-900 text-base font-bold">
                                <tr>
                                    <th scope="col" class="px-6 py-4 text-center">
                                        No
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center">
                                        Level
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center">
                                        Role
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $datas)
                                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-center">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td
                                            class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                                            {{ $datas->level }}
                                        </td>
                                        <td
                                            class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
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
    {{-- Footer --}}
    <div class="row-span-2 rounded-b-xl bg-white shadow-md drop-shadow-sm overflow-hidden px-10 py-4">
    </div>
</div>
