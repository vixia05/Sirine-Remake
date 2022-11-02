@section('title', 'Update Order')
@extends('layouts.app')
@section('content')
    <div class="py-6">
        <div class="px-4 mx-auto lg:px-8">
            <div class="grid grid-cols-1">
                <div class="p-8 overflow-hidden shadow-md rounded-2xl bg-white/70 dark:bg-slate-800 dark:bg-opacity-60 drop-shadow-md dark:backdrop-blur-sm dark:backdrop-filter">
                    <button type="button" type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
                        data-mdb-ripple-duration="2000ms"
                        class="inline-block w-full px-6 py-2 mb-2 text-2xl font-bold leading-normal uppercase transition duration-150 ease-in-out bg-blue-600 rounded shadow-md text-blue-50 hover:bg-blue-500 hover:shadow-lg focus:bg-blue-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-600 active:shadow-lg">
                        UPDATE PCHT
                    </button>
                    <button type="button" type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
                        data-mdb-ripple-duration="2000ms"
                        class="inline-block w-full px-6 py-2 mb-2 text-2xl font-bold leading-normal text-yellow-800 uppercase transition duration-150 ease-in-out bg-yellow-400 rounded shadow-md hover:bg-yellow-300 hover:shadow-lg focus:bg-yellow-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-600 active:shadow-lg">
                        UPDATE MMEA
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
