@section('title', 'Update Order')
@extends('layouts.app')
@section('content')
    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1">
                <div class="rounded-2xl bg-white shadow-md drop-shadow-md overflow-hidden p-8">
                    <button type="button" type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
                        data-mdb-ripple-duration="2000ms"
                        class="mb-2 w-full inline-block px-6 py-2.5 bg-blue-400 text-white font-bold text-2xl leading-normal uppercase rounded shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-600 active:shadow-lg transition duration-150 ease-in-out">
                        Update PCHT
                    </button>
                    <button type="button" type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
                        data-mdb-ripple-duration="2000ms"
                        class="mb-2 w-full inline-block px-6 py-2.5 bg-yellow-400 text-gray-700 font-bold text-2xl leading-normal uppercase rounded shadow-md hover:bg-yellow-500 hover:shadow-lg focus:bg-yellow-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-600 active:shadow-lg transition duration-150 ease-in-out">
                        Update MMEA
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
