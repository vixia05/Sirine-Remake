<x-card-scale>
    <div class="grid grid-rows-1 gap-3 lg:gap-0">
        <h6 class="w-full text-lg font-bold text-slate-800 dark:text-slate-100">Rekap Verifikasi
        </h6>
    </div>
    {{-- Sub Total --}}
    <div class="flex flex-wrap gap-3 my-3">
        <div class="flex flex-col items-center gap-1 text-sm font-medium text-slate-500">
            <span class="text-center">Rata - Rata PCHT</span>
            <span class="w-fit rounded-md bg-emerald-400 px-8 py-1.5 text-emerald-50 brightness-110 drop-shadow">
                {{ $this->subTotal()['avgPcht'] }} Lbr
            </span>
        </div>
        <div class="flex flex-col items-center gap-1 text-sm font-medium text-slate-500">
            <span class="text-center">Total Verif PCHT</span>
            <span class="w-fit rounded-md bg-emerald-400 px-8 py-1.5 text-emerald-50 brightness-110 drop-shadow">
                {{ $this->subTotal()['sumVerifPcht'] }} Lbr
            </span>
        </div>
        <div class="flex flex-col items-center gap-1 text-sm font-medium text-slate-500">
            <span class="text-center">Total Verif MMEA</span>
            <span class="w-fit rounded-md bg-emerald-400 px-8 py-1.5 text-emerald-50 brightness-110 drop-shadow">
                {{ $this->subTotal()['sumVerifMmea'] }} Lbr
            </span>
        </div>
        <div class="flex flex-col items-center gap-1 text-sm font-medium text-slate-500">
            <span class="text-center">Pencapaian (Total)</span>
            <span class="w-fit rounded-md bg-emerald-400 px-8 py-1.5 text-emerald-50 brightness-110 drop-shadow">
                -
            </span>
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
                                class="text-sm font-bold border-b-2 border-slate-300 text-slate-700 dark:border-slate-500 dark:text-slate-400">
                                <tr>
                                    {{-- 1.4 Tanggal Verifikasi --}}
                                    <th scope="col" rowspan="2"
                                        class="p-3 text-center border-r-2 border-slate-300 dark:border-slate-500">
                                        Tgl Verif
                                    </th>
                                    {{-- 1.2 Nomor Pokok --}}
                                    <th scope="col" rowspan="2"
                                        class="p-3 text-center border-r-2 border-slate-300 dark:border-slate-500">
                                        NP / Nama
                                    </th>
                                    {{-- 1.5 Pendapatan Lembar --}}
                                    <th scope="col" colspan="2"
                                        class="p-3 text-center border-r-2 border-slate-300 dark:border-slate-500">
                                        Hasil Verifikasi
                                    </th>
                                    {{-- 1.6 Pendapatan OBC --}}
                                    <th scope="col" colspan="2"
                                        class="p-3 text-center border-r-2 w-fit border-slate-300 dark:border-slate-500">
                                        Jumlah OBC
                                    </th>
                                    {{-- 1.7 Target --}}
                                    <th scope="col" colspan="2"
                                        class="p-3 text-center border-r-2 border-slate-300 dark:border-slate-500">
                                        Target Harian
                                    </th>
                                    {{-- 1.7 Target --}}
                                    <th scope="col" rowspan="2"
                                        class="p-3 text-center border-r-2 border-slate-300 dark:border-slate-500">
                                        Pencapaian
                                    </th>
                                    {{-- 1.8 Lembur --}}
                                    <th scope="col" rowspan="2"
                                        class="p-3 text-center border-r-2 border-slate-300 dark:border-slate-500">
                                        Lembur
                                    </th>
                                    {{-- 1.9 Keterangan --}}
                                    <th scope="col" rowspan="2"
                                        class="p-3 text-center border-slate-300 dark:border-slate-500">
                                        Keterangan
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="col"
                                        class="p-3 text-center border-t-2 border-r-2 border-slate-300 dark:border-slate-500">
                                        PCHT
                                    </th>
                                    <th scope="col"
                                        class="p-3 text-center border-t-2 border-r-2 border-slate-300 dark:border-slate-500">
                                        MMEA
                                    </th>
                                    <th scope="col"
                                        class="p-3 text-center border-t-2 border-r-2 border-slate-300 dark:border-slate-500">
                                        PCHT
                                    </th>
                                    <th scope="col"
                                        class="p-3 text-center border-t-2 border-r-2 border-slate-300 dark:border-slate-500">
                                        MMEA
                                    </th>
                                    <th scope="col"
                                        class="p-3 text-center border-t-2 border-r-2 border-slate-300 dark:border-slate-500">
                                        PCHT
                                    </th>
                                    <th scope="col"
                                        class="p-3 text-center border-t-2 border-r-2 border-slate-300 dark:border-slate-500">
                                        MMEA
                                    </th>
                                </tr>
                            </thead>
                            {{-- 2. Body Table --}}
                            <tbody class="relative">
                                <x-flip-loading></x-flip-loading>
                                @foreach ($this->data->unique('tgl_verif') as $data)
                                    <tr
                                        class="transition duration-300 ease-in-out border-b border-slate-300 text-slate-800 hover:bg-slate-400/10 dark:text-slate-100">
                                        {{-- 2.4 Tanggal Verifikasi --}}
                                        <td
                                            class="px-3 py-2 text-sm font-light leading-tight text-center border-r-2 whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                            {{ $data->tgl_verif }}
                                        </td>
                                        {{-- 2.2 Nomor Pokok --}}
                                        <td
                                            class="px-3 py-2 text-sm font-light leading-tight border-r-2 whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                            <div class="flex flex-col gap-1">
                                                <span class="font-bold">{{ $data->np_user }}</span>
                                                <span>{{ $data->userDetails->nama }}</span>
                                            </div>
                                        </td>

                                        {{-- 2.5 Pendapatan Lembar PCHT --}}
                                        <td
                                            class="px-3 py-2 text-sm leading-tight text-right border-r-2 whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                            <div class="flex justify-end">
                                                @if ($data->jml_verif > 0 && $data->jenis == 'PCHT')
                                                    <div class="flex flex-col gap-1">
                                                        <span
                                                            class="font-medium">{{ number_format($data->jml_verif / 500, 0) }}
                                                            Rim</span>
                                                        <span>{{ number_format($data->jml_verif, 0) }}
                                                            Lbr</span>
                                                    </div>
                                                @else
                                                    -
                                                @endif
                                            </div>
                                        </td>

                                        {{-- 2.5 Pendapatan Lembar MMEA --}}
                                        <td
                                            class="px-3 py-2 text-sm leading-tight text-right border-r-2 whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                            <div class="flex justify-between">
                                                @if ($this->dataMmea($data->tgl_verif)['jml_verif'] > 0)
                                                    <div class="flex flex-col gap-1">
                                                        <span
                                                            class="font-medium">{{ number_format($this->dataMmea($data->tgl_verif)['jml_verif'] / 500, 0) }}
                                                            Rim</span>
                                                        <span>{{ number_format($this->dataMmea($data->tgl_verif)['jml_verif'], 0) }}
                                                            Lbr</span>
                                                    </div>
                                                @else
                                                    -
                                                @endif
                                            </div>
                                        </td>

                                        {{-- 2.6 Pendapatan OBC PCHT --}}
                                        <td
                                            class="px-3 py-2 text-sm font-medium leading-tight text-right border-r-2 whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                            <div class="flex flex-col items-end justify-center gap-1">
                                                @if ($data->jml_verif > 0 && $data->jenis == 'PCHT')
                                                    {{ $data->jml_obc }} OBC
                                                @else
                                                    -
                                                @endif
                                            </div>
                                        </td>

                                        {{-- 2.6 Pendapatan OBC MMEA --}}
                                        <td
                                            class="px-3 py-2 text-sm font-medium leading-tight text-right border-r-2 whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                            <div class="flex flex-col items-end justify-center gap-1">
                                                @if ($this->dataMmea($data->tgl_verif)['jml_obc'] > 0)
                                                    {{ number_format($this->dataMmea($data->tgl_verif)['jml_obc'], 0) }}
                                                    OBC
                                                @else
                                                    -
                                                @endif
                                            </div>
                                        </td>

                                        {{-- 2.7 Target PCHT --}}
                                        <td
                                            class="px-3 py-2 text-sm font-light leading-tight text-right border-r-2 whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                            <div class="flex flex-col gap-1">
                                                @if ($data->jml_verif > 0 && $data->jenis == 'PCHT')
                                                    <span class="font-medium">
                                                        {{ number_format($data->target / 500, 0) }}
                                                        Rim
                                                    </span>
                                                    <span>
                                                        {{ number_format($data->target, 0) }}
                                                        Lbr
                                                    </span>
                                                @else
                                                    -
                                                @endif
                                            </div>
                                        </td>

                                        {{-- 2.7 Target MMEA --}}
                                        <td
                                            class="px-3 py-2 text-sm font-light leading-tight text-right border-r-2 whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                            <div class="flex flex-col gap-1">
                                                @if ($this->dataMmea($data->tgl_verif)['jml_obc'] > 0)
                                                    <span class="font-medium">
                                                        {{ number_format(
                                                            $this->dataMmea($data->tgl_verif)['target'] > 0 ? $this->dataMmea($data->tgl_verif)['target'] / 500 : 0,
                                                            0,
                                                        ) }}
                                                        Rim
                                                    </span>

                                                    <span>
                                                        {{ number_format($this->dataMmea($data->tgl_verif)['target'], 0) }}
                                                        Lbr
                                                    </span>
                                                @else
                                                    -
                                                @endif
                                            </div>
                                        </td>

                                        {{-- 2.7 Pencapaian --}}
                                        <td
                                            class="p-3 font-sans text-sm font-light border-r-2 whitespace-nowrap text-end text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                            <div class="flex flex-col items-center justify-center gap-1 flex-nowrap">

                                                {{-- By Jumlah Verif PCHT --}}
                                                @if ($this->pencapaian($data->tgl_verif)['endTarget'] >= 100)
                                                    <div
                                                        class="my-auto flex h-fit w-1/2 min-w-fit flex-col gap-2 rounded-lg bg-green-500 px-4 py-0.5 text-xs font-medium text-green-100 shadow-md shadow-green-500/30 brightness-110 drop-shadow">
                                                        <span>{{ number_format($this->pencapaian($data->tgl_verif)['exceedLbrPcht']) }}
                                                            Lbr /
                                                            {{ number_format($this->pencapaian($data->tgl_verif)['exceedObcPcht']) }}
                                                            OBC (PCHT)</span>

                                                        @if ($this->pencapaian($data->tgl_verif)['exceedLbrMmea'] >= 0)
                                                        @else
                                                            <span>{{ number_format($this->pencapaian($data->tgl_verif)['exceedLbrMmea']) }}
                                                                Lbr (MMEA)</span>
                                                        @endif

                                                        {{-- Persentase Pencapaian Berdasarkan Persentase Target --}}
                                                        @if (divnum($this->pencapaian($data->tgl_verif)['dailyTarget'], 15000) * 100 < 75)
                                                            <span>100 %</span>
                                                        @else
                                                            <span>{{ number_format($this->pencapaian($data->tgl_verif)['endTarget'], 2) }}
                                                                %</span>
                                                        @endif
                                                    </div>
                                                @elseif($this->pencapaian($data->tgl_verif)['endTarget'] > 80 && $this->pencapaian($data->tgl_verif)['endTarget'] < 100)
                                                    <div
                                                        class="shadow-green-yellow/30 my-auto flex h-fit w-1/2 min-w-fit flex-col gap-2 rounded-lg bg-yellow-300 px-4 py-0.5 text-xs font-medium text-yellow-700 shadow-md brightness-105 drop-shadow">
                                                        <span>{{ number_format($this->pencapaian($data->tgl_verif)['exceedLbrPcht']) }}
                                                            Lbr /
                                                            {{ number_format($this->pencapaian($data->tgl_verif)['exceedObcPcht']) }}
                                                            OBC (PCHT)</span>

                                                        @if ($this->pencapaian($data->tgl_verif)['exceedLbrMmea'] >= 0)
                                                        @else
                                                            <span>{{ number_format($this->pencapaian($data->tgl_verif)['exceedLbrMmea']) }}
                                                                Lbr (MMEA)</span>
                                                        @endif

                                                        <span>{{ number_format($this->pencapaian($data->tgl_verif)['endTarget'], 2) }}
                                                            %</span>
                                                    </div>
                                                @else
                                                    <div
                                                        class="my-auto flex h-fit w-1/2 min-w-fit flex-col gap-2 rounded-lg bg-red-500 px-4 py-0.5 text-xs font-medium text-green-100 shadow-md shadow-red-500/30 brightness-110 drop-shadow">
                                                        <span>{{ number_format($this->pencapaian($data->tgl_verif)['exceedLbrPcht']) }}
                                                            Lbr /
                                                            {{ number_format($this->pencapaian($data->tgl_verif)['exceedObcPcht']) }}
                                                            OBC (PCHT)</span>

                                                        @if ($this->pencapaian($data->tgl_verif)['exceedLbrMmea'] <= 0)
                                                        @else
                                                            <span>
                                                                {{ number_format($this->pencapaian($data->tgl_verif)['exceedLbrMmea']) }}
                                                                Lbr (MMEA)</span>
                                                        @endif

                                                        <span>{{ number_format($this->pencapaian($data->tgl_verif)['endTarget'], 2) }}
                                                            %</span>
                                                    </div>
                                                @endif

                                            </div>
                                        </td>

                                        {{-- 2.8 Lembur --}}
                                        <td
                                            class="px-3 py-2 text-sm font-light leading-tight border-r-2 whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                            @if ($data['lembur'] == 0)
                                                -
                                            @elseif ($data['lembur'] == 1)
                                                Awal
                                            @elseif ($data['lembur'] == 2)
                                                Akhir
                                            @elseif ($data['lembur'] == 3)
                                                Awal Akhir
                                            @endif
                                        </td>

                                        {{-- 2.9 Keterangan --}}
                                        <td
                                            class="px-3 py-2 text-sm font-light leading-tight whitespace-nowrap text-slate-700 dark:border-slate-500 dark:text-slate-100">
                                            {{ $data->keterangan }}
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
            {{ $this->data->links('vendor.livewire.tailwind') }}
        </div>
    </div>
</x-card-scale>
