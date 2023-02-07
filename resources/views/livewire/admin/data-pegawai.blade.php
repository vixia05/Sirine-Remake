<div class="container mx-auto">
    @include('components.modal.update-pegawai')
    <x-card-scale>
        {{-- Header --}}
        <x-slot name='title'>
            Data Pegawai
        </x-slot>

        {{-- 1.0 Filter & Search Section --}}
        <div class="px-4 pb-4">
            <div
                class="p-4 text-sm border-y bg-inerhit border-slate-300 bg-opacity-30 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
                <div class="flex flex-wrap justify-between gap-3">
                    {{-- Filter Unit --}}
                    <div
                        class="flex gap-2 px-2 py-1 focus-within:ring-1 text-blue-600 border-blue-600 dark:text-blue-500 border dark:border-blue-500 rounded dark:focus-within:brightness-125 focus-within:shadow-lg focus-within:shadow-blue-500/20">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                        </svg>
                        <select wire:model="unit"
                            class="-my-1 -mr-2 text-xs text-slate-700 transition duration-150 dark:border-blue-500 border-none rounded-r appearance-none focus:ring-0 dark:bg-slate-800 dark:from-transparent dark:to-transparent dark:bg-opacity-10 focus:bg-opacity-100 dark:text-slate-100">
                            <option class="text-center">-- Unit Kerja --</option>
                            @foreach ($listUnit as $unit)
                            <option value="{{ $unit->id }}">{{ $unit->unit }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        {{-- Search Box --}}
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
                        {{-- Button Export --}}
                        <div>
                            <button action="{{ route('dataPegawai.export') }}"
                                class="flex gap-2 px-2 py-1 text-green-600 border-green-500 dark:text-green-400 border-2 dark:border-green-400 rounded-md brightness-110 hover:shadow-lg hover:shadow-green-400/30 hover:brightness-125">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                </svg>
                                <span>Excel</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Filter & Search --}}
            {{-- 2.0 Body / Table --}}
            <div
                class="overflow-hidden border-t border-slate-400 bg-inherit dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full sm:px-4 lg:px-8">
                            <div class="overflow-x-auto">
                                <table class="min-w-full">
                                    <thead
                                        class="text-sm font-bold border-b-2 border-slate-300 text-slate-700 dark:border-slate-500 dark:text-slate-400">
                                        <tr>
                                            <th scope="col"
                                                class="p-3 text-center border-slate-300 dark:border-slate-500">
                                                No
                                            </th>
                                            <th scope="col"
                                                class="p-3 text-left border-slate-300 dark:border-slate-500">
                                                NP/Nama
                                            </th>
                                            <th scope="col"
                                                class="p-3 text-left border-slate-300 dark:border-slate-500">
                                                Email
                                            </th>
                                            <th scope="col"
                                                class="p-3 text-center border-slate-300 dark:border-slate-500">
                                                Contact
                                            </th>
                                            <th scope="col"
                                                class="p-3 text-center border-slate-300 dark:border-slate-500">
                                                Tanggal Lahir
                                            </th>
                                            <th scope="col"
                                                class="p-3 text-center border-slate-300 dark:border-slate-500">
                                                Alamat
                                            </th>
                                            <th scope="col"
                                                class="p-3 text-center border-slate-300 dark:border-slate-500">
                                                Unit
                                            </th>
                                            <th scope="col"
                                                class="p-3 text-center border-slate-300 dark:border-slate-500">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $datas)
                                        <tr
                                            class="transition duration-300 ease-in-out text-slate-800 hover:bg-slate-400 hover:bg-opacity-10 dark:text-slate-100">
                                            <td
                                                class="p-3 text-sm text-center font-light border-b whitespace-nowrap border-slate-300 text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                {{ $data->firstItem() + $loop->index }}
                                            </td>
                                            <td
                                                class="p-3 text-sm font-light border-b border-slate-300 text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                <div class="flex flex-col">
                                                    <span class="font-medium">{{ $datas->np_user }}</span>
                                                    {{ $datas->nama }}
                                                </div>
                                            </td>
                                            <td
                                                class="p-3 text-sm font-light border-b border-slate-300 text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                {{ $datas->email }}
                                            </td>
                                            <td
                                                class="p-3 text-sm text-right font-light border-b whitespace-nowrap border-slate-300 text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                @if (substr($datas->contact, 0, 1) == '0')
                                                {{ Str::limit($datas->contact, 4, '-') }}{{
                                                Str::limit(substr($datas->contact, 4), 4, '-') }}{{
                                                Str::limit(substr($datas->contact, 8), 4, '') }}
                                                @else
                                                0{{ Str::limit($datas->contact, 3, '-') }}{{
                                                Str::limit(substr($datas->contact, 3), 4, '-') }}{{
                                                Str::limit(substr($datas->contact, 7), 4, '') }}
                                                @endif
                                            </td>
                                            <td
                                                class="p-3 text-sm text-center font-light border-b whitespace-nowrap border-slate-300 text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                {{ date('d-m-Y', strtotime($datas->tgl_lahir)) }}
                                            </td>
                                            <td
                                                class="p-3 text-sm font-light border-b border-slate-300 text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                <span class="line-clamp-2">
                                                    {{ $datas->alamat }}
                                                </span>
                                            </td>
                                            <td
                                                class="p-3 text-sm font-light border-b border-slate-300 text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                <span class="line-clamp-2">
                                                    {{ $datas->unit->unit }}
                                                    {{-- {{ \App\Models\Unit::where('id',
                                                    $datas->id_unit)->value('unit') }} --}}
                                                </span>
                                            </td>
                                            <td
                                                class="p-3 text-sm font-light border-b border-slate-300 text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                                <div class="flex justify-center space-x-2">
                                                    <button type="button" type="button" data-mdb-ripple="true"
                                                        data-mdb-ripple-color="light" data-bs-toggle="modal"
                                                        data-bs-target="#modalUpdate"
                                                        wire:click="edit({{ $datas->id }})"
                                                        class="inline-block px-3 py-2 text-sm font-semibold leading-tight transition duration-150 ease-in-out bg-green-500 rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-5 h-5 text-white" viewBox="0 0 20 20"
                                                            fill="currentColor">
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
                class="px-10 pt-2 pb-3 overflow-hidden border-b rounded-b bg-inerhit border-slate-300 text-slate-700 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50 dark:text-slate-100">
                {{ $data->links('vendor.livewire.tailwind') }}
            </div>
        </div>
    </x-card-scale>
</div>
