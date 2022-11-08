@section('title', 'Update Order')
@extends('layouts.app')
@section('content')
    <div class="py-6" x-data="{updatePcht : false, updateMmea : false}">
        @include('components.modal.update-order')
        <div class="px-4 mx-auto lg:px-8">
            <div class="grid grid-cols-1">
                <div class="p-8 overflow-hidden shadow-md rounded-2xl bg-white/70 dark:bg-slate-800 dark:bg-opacity-60 drop-shadow-md dark:backdrop-blur-sm dark:backdrop-filter">
                    <button data-mdb-ripple="true" data-mdb-ripple-color="light" @click.prevent="updatePcht = true"
                        data-mdb-ripple-duration="2000ms"
                        class="inline-block w-full brightness-125 shadow-blue-500/40 px-6 py-2 mb-2 text-2xl font-bold leading-normal uppercase transition duration-150 ease-in-out bg-blue-600 rounded shadow-lg text-blue-50 hover:bg-blue-500 hover:shadow-lg focus:bg-blue-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-600 active:shadow-lg">
                        <span class="flex justify-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-9 h-9 my-auto">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                              </svg>
                              Update PCHT
                            </span>
                    </button>
                    <button type="button" type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
                        data-mdb-ripple-duration="2000ms" @click.prevent="updateMmea = true"
                        class="inline-block w-full px-6 py-2 mb-2 text-2xl font-bold leading-normal brightness-125 hover:shadow-yellow-400/40 shadow-yellow-300/40 text-yellow-900 uppercase transition duration-150 ease-in-out bg-yellow-400 rounded shadow-lg hover:bg-yellow-300 hover:shadow-lg focus:bg-yellow-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-600 active:shadow-lg">
                        <span class="flex justify-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-9 h-9 my-auto">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                              </svg>
                              Update MMEA
                            </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
