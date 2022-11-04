<div class="col-span-1 md:col-span-3">
    <div class="relative p-4 rounded-xl bg-white/70 dark:bg-slate-800/60 dark:backdrop-blur-sm dark:backdrop-filter">
        <div class="grid grid-rows-1 gap-3 lg:gap-0">
            <h6 class="w-full text-lg font-bold text-slate-800 dark:text-slate-100">Rekap Verifikasi</h6>
            {{-- 1.2 Filter Chart --}}
            <div class="flex flex-row flex-wrap justify-end my-auto">
                {{-- Filter By Team --}}
                <select wire:model="team" wire:change="listsNp"
                    class="w-fit py-2 pl-2 text-sm border-blue-400 rounded-l text-slate-700 focus:bg-opacity-100 dark:bg-slate-700 dark:bg-opacity-30 dark:text-slate-200">
                    <option selected>Team</option>
                    @foreach ($listTeam as $tm)
                        <option value="{{ $tm->id }}">{{ $tm->workstation }}</option>
                    @endforeach
                </select>
                {{-- Filter By NP / Nama --}}
                <select wire:model='npUser'
                    class="w-fit py-2 pl-2 text-sm border-blue-400 text-slate-700 focus:bg-opacity-100 dark:bg-slate-700 dark:bg-opacity-30 dark:text-slate-200">
                    <option selected>
                        -- NP / Nama --
                    </option>
                    @foreach ($listNp as $np)
                        <option value="{{ $np }}">
                            {{ \App\Models\UserDetails::where('np_user', $np)->value('nama') }}
                        </option>
                    @endforeach
                </select>
                {{-- Reset Filter --}}
                <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
                    class="inline-block px-3 py-2 text-sm font-semibold leading-tight text-white transition duration-150 ease-in-out bg-blue-500 rounded-r shadow-md hover:bg-blue-600 hover:shadow-lg focus:bg-blue-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg">Reset</button>
            </div>
        </div>
        {{-- D-1.Table --}}
        <div
            class="mt-4 overflow-hidden border rounded bg-inerhit border-x border-slate-400 bg-opacity-30 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full">
                                {{-- 1. Header Table --}}
                                <thead
                                    class="text-base font-bold border-b border-slate-400 text-slate-600 dark:border-slate-400 dark:text-slate-400">
                                    <tr>
                                        {{-- 1.1 Index --}}
                                        <th scope="col"
                                            class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-400">
                                            No
                                        </th>
                                        {{-- 1.2 Nomor Pokok --}}
                                        <th scope="col"
                                            class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-400">
                                            NP
                                        </th>
                                        {{-- 1.3 Nama --}}
                                        <th scope="col"
                                            class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-400">
                                            Nama
                                        </th>
                                        {{-- 1.4 Tanggal Verifikasi --}}
                                        <th scope="col"
                                            class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-400">
                                            Tgl Verif
                                        </th>
                                        {{-- 1.5 Pendapatan Lembar --}}
                                        <th scope="col"
                                            class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-400">
                                            Jumlah Lembar
                                        </th>
                                        {{-- 1.6 Pendapatan OBC --}}
                                        <th scope="col"
                                            class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-400">
                                            Jumlah OBC
                                        </th>
                                        {{-- 1.7 Target --}}
                                        <th scope="col"
                                            class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-400">
                                            Target
                                        </th>
                                        {{-- 1.8 Lembur --}}
                                        <th scope="col"
                                            class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-400">
                                            Lembur
                                        </th>
                                        {{-- 1.9 Keterangan --}}
                                        <th scope="col"
                                            class="px-4 py-2 text-center border-r border-slate-400 dark:border-slate-400">
                                            Keterangan
                                        </th>
                                    </tr>
                                </thead>
                                {{-- 2. Body Table --}}
                                <tbody>
                                    @foreach ($data as $table)
                                        <tr
                                            class="tracking-wide transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10">
                                            {{-- 2.1 Indexing --}}
                                            <td
                                                class="px-4 py-2 text-sm font-medium text-center whitespace-nowrap border-y border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                {{ $data->firstItem() + $loop->index }}</td>
                                                {{-- 2.2 Nomor Pokok --}}
                                            <td
                                                class="px-4 py-2 text-sm text-center border border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                {{ $table->np_user }}
                                            </td>
                                            {{-- 2.3 Nama --}}
                                            <td
                                                class="px-4 py-2 text-sm text-center border border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                {{ $table->nama_user }}
                                            </td>
                                            {{-- 2.4 Tanggal Verifikasi --}}
                                            <td
                                                class="px-4 py-2 text-sm text-center border border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                {{ $table->tgl_verif }}
                                            </td>
                                            {{-- 2.5 Pendapatan Lembar --}}
                                            <td
                                                class="px-4 py-2 text-sm text-center border border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                {{ number_format($table->jml_verif,0) }} Lbr
                                            </td>
                                            {{-- 2.6 Pendapatan OBC --}}
                                            <td
                                                class="px-4 py-2 text-sm text-center border border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                {{ $table->jml_obc }}
                                            </td>
                                            {{-- 2.7 Target --}}
                                            <td
                                                class="px-4 py-2 text-sm text-center border border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                {{ number_format($table->target * 500,0) }} Lbr
                                            </td>
                                            {{-- 2.8 Lembur --}}
                                            <td
                                                class="px-4 py-2 text-sm text-center border border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                @if($table->lembur == 0)
                                                    -
                                                @elseif ($table->lembur == 1)
                                                    Awal
                                                @elseif ($table->lembur == 2)
                                                    Akhir
                                                @elseif ($table->lembur == 3)
                                                    Awal Akhir
                                                @endif
                                            </td>
                                            {{-- 2.9 Keterangan --}}
                                            <td
                                                class="px-4 py-2 text-sm text-center border border-slate-400 text-slate-800 dark:border-slate-500 dark:text-slate-100">
                                                {{ $table->keterangan }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{-- 3.0 Footer --}}
            <div
                class="px-10 py-2 overflow-hidden rounded-b bg-inerhit border-slate-400 text-slate-800 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50 dark:text-slate-100">
                {{ $data->links('vendor.livewire.tailwind') }}
            </div>
        </div>
    </div>
</div>
