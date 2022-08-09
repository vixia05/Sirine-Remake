@extends('layouts.app')
@section('content')
    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1">
                <div class="rounded-xl bg-white shadow-md drop-shadow-md overflow-hidden px-8 py-2 max-h-screen">
                    <div class="p-3 mb-6">
                        <h5 class="text-gray-900 text-xl font-bold py-2 mb-2">Input Hasil Verifikasi Pita Cukai</h5>
                        {{-- Nomor PO --}}
                        <div class="mb-4 ml-7">
                            <div
                                class="border-b-2 rounded-md hover:border-blue-500 transition duration-200 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md max-w-xs">
                                <label for="noPo" class="inline-block mb-2 text-gray-700">Nomor PO</label>
                                <input type="number" id="noPo" name="noPo" min="0"
                                    class="border-none focus:ring-0 text-base text-center font-medium w-full">
                            </div>
                        </div>
                        <h5 class="text-gray-900 text-xl font-bold py-2 mb-2">Spesifikasi</h5>
                        <div class="flex flex-auto space-x-1 mb-4 ml-7 text-center">
                            <div
                                class="border-b-2 rounded-md hover:border-blue-500 transition duration-200 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md w-32">
                                <label for="noPo" class="inline-block mb-2 text-gray-700">Nomor OBC</label>
                                <input type="text" id="noPo" name="noPo" min="0" value="PST010301"
                                    class="text-sm text-center border-none focus:ring-0 font-medium w-full bg-gray-200 rounded-md"
                                    disabled>
                            </div>
                            <div
                                class="border-b-2 rounded-md hover:border-blue-500 transition duration-200 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md max-w-xs">

                                <label for="noPo" class="inline-block mb-2 text-gray-700">Kode Pabrik</label>
                                <input type="text" id="noPo" name="noPo" min="0"
                                    value="KODE>>>PABRIK>>ROKO"
                                    class="text-sm text-center border-none focus:ring-0 font-medium w-full bg-gray-200 rounded-md"
                                    disabled>
                            </div>
                            <div
                                class="border-b-2 rounded-md hover:border-blue-500 transition duration-200 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md max-w-xs w-16">

                                <label for="noPo" class="inline-block mb-2 text-gray-700">Seri</label>
                                <input type="text" id="noPo" name="noPo" min="0" value="1"
                                    class="text-sm text-center border-none focus:ring-0 font-medium w-full bg-gray-200 rounded-md"
                                    disabled>
                            </div>
                            <div
                                class="border-b-2 rounded-md hover:border-blue-500 transition duration-200 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md max-w-xs w-28">

                                <label for="noPo" class="inline-block mb-2 text-gray-700">Warna</label>
                                <input type="text" id="noPo" name="noPo" min="0" value="Merah"
                                    class="text-sm text-center border-none focus:ring-0 font-medium w-full bg-gray-200 rounded-md"
                                    disabled>
                            </div>
                            <div
                                class="border-b-2 rounded-md hover:border-blue-500 transition duration-200 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md max-w-xs w-28">

                                <label for="noPo" class="inline-block mb-2 text-gray-700">HJE</label>
                                <input type="text" id="noPo" name="noPo" min="0" value="Merah"
                                    class="text-sm text-center border-none focus:ring-0 font-medium w-full bg-gray-200 rounded-md"
                                    disabled>
                            </div>
                            <div
                                class="border-b-2 rounded-md hover:border-blue-500 transition duration-200 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md max-w-xs w-28">

                                <label for="noPo" class="inline-block mb-2 text-gray-700">BPB</label>
                                <input type="text" id="noPo" name="noPo" min="0" value="Merah"
                                    class="text-sm text-center border-none focus:ring-0 font-medium w-full bg-gray-200 rounded-md"
                                    disabled>
                            </div>
                            <div
                                class="border-b-2 rounded-md hover:border-blue-500 transition duration-200 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md max-w-xs w-28">

                                <label for="noPo" class="inline-block mb-2 text-gray-700">JHT</label>
                                <input type="text" id="noPo" name="noPo" min="0" value="Merah"
                                    class="text-sm text-center border-none focus:ring-0 font-medium w-full bg-gray-200 rounded-md"
                                    disabled>
                            </div>
                            <div
                                class="border-b-2 rounded-md hover:border-blue-500 transition duration-200 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md max-w-xs w-28">

                                <label for="noPo" class="inline-block mb-2 text-gray-700">JT</label>
                                <input type="text" id="noPo" name="noPo" min="0" value="Merah"
                                    class="text-sm text-center border-none focus:ring-0 font-medium w-full bg-gray-200 rounded-md"
                                    disabled>
                            </div>
                            <div
                                class="border-b-2 rounded-md hover:border-blue-500 transition duration-200 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md max-w-xs w-28">

                                <label for="noPo" class="inline-block mb-2 text-gray-700">Jenis</label>
                                <input type="text" id="noPo" name="noPo" min="0" value="Merah"
                                    class="text-sm text-center border-none focus:ring-0 font-medium w-full bg-gray-200 rounded-md"
                                    disabled>
                            </div>
                            <div
                                class="border-b-2 rounded-md hover:border-blue-500 transition duration-200 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md max-w-xs w-28">

                                <label for="noPo" class="inline-block mb-2 text-gray-700">Rencet</label>
                                <input type="text" id="noPo" name="noPo" min="0" value="Merah"
                                    class="text-sm text-center border-none focus:ring-0 font-medium w-full bg-gray-200 rounded-md"
                                    disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
