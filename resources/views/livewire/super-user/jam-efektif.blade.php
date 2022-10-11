<div class="flex justify-center container mx-auto">
    @include('components.modal.update-target')
    <div
        class="w-full rounded-md bg-white/70 dark:bg-slate-800 dark:bg-opacity-60 dark:backdrop-blur-sm dark:backdrop-filter">
        {{-- Header --}}
        <div class="px-10 py-4">
            <h4 class="my-auto font-sans text-2xl font-semibold leading-tight text-slate-800 dark:text-slate-100">TARGET
                HARIAN & JAM EFEKTIF</h4>
        </div>
        {{-- Body / Table --}}
        <div class="p-4">
            <div
                class="bg-inerhit border-x border-t rounded-t overflow-hidden border-slate-400 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        @if (session()->has('messageUpdate'))
                            <div class="bg-green-500 bg-opacity-80 p-4 text-center font-bold leading-tight text-white">
                                {{ session('messageUpdate') }}
                            </div>
                        @endif
                        <div class="inline-block min-w-full sm:px-4 lg:px-8">
                            <div class="overflow-x-auto">
                                <table class="min-w-full">
                                    <thead
                                        class="border-b border-slate-400 text-base font-bold text-slate-600 dark:border-slate-500 dark:text-slate-400">
                                        <tr>
                                            <th scope="col"
                                                class="border-r border-slate-400 px-4 py-2 text-center dark:border-slate-500">
                                                Gilir
                                            </th>
                                            <th scope="col"
                                                class="border-r border-slate-400 px-4 py-2 text-center dark:border-slate-500">
                                                Jam Efektif
                                            </th>
                                            <th scope="col"
                                                class="border-r border-slate-400 px-4 py-2 text-center dark:border-slate-500">
                                                Target/Jam
                                            </th>
                                            <th scope="col"
                                                class="border-r border-slate-400 px-4 py-2 text-center dark:border-slate-500">
                                                Target/Hari
                                            </th>
                                            <th scope="col"
                                                class="border-b border-slate-400 px-4 py-2 text-center dark:border-slate-500">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $datas)
                                            <tr
                                                class="text-slate-800 transition duration-300 ease-in-out hover:bg-slate-400 hover:bg-opacity-10 dark:text-slate-100">
                                                <td
                                                    class="whitespace-nowrap border-r border-y border-slate-400 px-4 py-2 text-center text-sm dark:border-slate-500">
                                                    {{ $datas->gilir }}
                                                </td>
                                                <td
                                                    class="whitespace-nowrap border-r border-y border-slate-400 px-4 py-2 text-center text-sm dark:border-slate-500">
                                                    {{ $datas->jam_efektif }} Jam
                                                </td>
                                                <td
                                                    class="whitespace-nowrap border-r border-y border-slate-400 px-4 py-2 text-center text-sm dark:border-slate-500">
                                                    {{ number_format($datas->target_jam / 500, 0) }} Rim
                                                    ({{ number_format($datas->target_jam, 0) }} Lbr)
                                                    / Jam

                                                </td>
                                                <td
                                                    class="whitespace-nowrap border-r border-y border-slate-400 px-4 py-2 text-center text-sm dark:border-slate-500">
                                                    {{ number_format(($datas->target_jam * $datas->jam_efektif) / 500, 0) }}
                                                    Rim
                                                    (
                                                    {{ number_format($datas->target_jam * $datas->jam_efektif, 0) }}
                                                    Lbr ) / Hari
                                                </td>
                                                <td class="whitespace-nowrap border-y border-slate-400 px-4 py-2 text-center text-sm dark:border-slate-500">
                                                    <div class="flex justify-center space-x-2">
                                                        <button type="button" wire:click="edit({{ $datas->id }})"
                                                            data-mdb-ripple="true" data-mdb-ripple-color="light"
                                                            data-bs-toggle="modal" data-bs-target="#modalUpdate"
                                                            class="inline-block rounded bg-green-500 px-3 py-2 text-sm font-semibold leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                                viewBox="0 0 20 20" fill="currentColor">
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
            <div class="overflow-hidden rounded-b border-b border-x bg-inerhit border-slate-400 dark:border-slate-500 dark:bg-slate-700 dark:bg-opacity-50 px-10 py-2">
            </div>
        </div>
    </div>
</div>
