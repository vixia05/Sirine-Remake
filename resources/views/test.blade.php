@extends('layouts.app')
@section('content')
    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1">
                <div class="max-h-screen px-8 py-2 overflow-hidden bg-white shadow-md rounded-xl drop-shadow-md">
                    <div class="p-3 mb-6">
                        <h5 class="py-2 mb-2 text-xl font-bold text-gray-900">Input Hasil Verifikasi Pita Cukai</h5>
                        {{-- Nomor PO --}}
                        <div class="mb-4 ml-7">
                            <div
                                class="max-w-xs transition duration-200 border-b-2 rounded-md hover:border-blue-500 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md">
                                <label for="noPo" class="inline-block mb-2 text-gray-700">Nomor PO</label>
                                <input type="number" id="noPo" name="noPo" min="0"
                                    class="w-full text-base font-medium text-center border-none focus:ring-0">
                            </div>
                        </div>
                        <h5 class="py-2 mb-2 text-xl font-bold text-gray-900">Spesifikasi</h5>
                        <div class="flex flex-auto mb-4 space-x-1 text-center ml-7">
                            <div
                                class="w-32 transition duration-200 border-b-2 rounded-md hover:border-blue-500 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md">
                                <label for="noPo" class="inline-block mb-2 text-gray-700">Nomor OBC</label>
                                <input type="text" id="noPo" name="noPo" min="0" value="PST010301"
                                    class="w-full text-sm font-medium text-center bg-gray-200 border-none rounded-md focus:ring-0"
                                    disabled>
                            </div>
                            <div
                                class="max-w-xs transition duration-200 border-b-2 rounded-md hover:border-blue-500 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md">

                                <label for="noPo" class="inline-block mb-2 text-gray-700">Kode Pabrik</label>
                                <input type="text" id="noPo" name="noPo" min="0"
                                    value="KODE>>>PABRIK>>ROKO"
                                    class="w-full text-sm font-medium text-center bg-gray-200 border-none rounded-md focus:ring-0"
                                    disabled>
                            </div>
                            <div
                                class="w-16 max-w-xs transition duration-200 border-b-2 rounded-md hover:border-blue-500 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md">

                                <label for="noPo" class="inline-block mb-2 text-gray-700">Seri</label>
                                <input type="text" id="noPo" name="noPo" min="0" value="1"
                                    class="w-full text-sm font-medium text-center bg-gray-200 border-none rounded-md focus:ring-0"
                                    disabled>
                            </div>
                            <div
                                class="max-w-xs transition duration-200 border-b-2 rounded-md hover:border-blue-500 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md w-28">

                                <label for="noPo" class="inline-block mb-2 text-gray-700">Warna</label>
                                <input type="text" id="noPo" name="noPo" min="0" value="Merah"
                                    class="w-full text-sm font-medium text-center bg-gray-200 border-none rounded-md focus:ring-0"
                                    disabled>
                            </div>
                            <div
                                class="max-w-xs transition duration-200 border-b-2 rounded-md hover:border-blue-500 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md w-28">

                                <label for="noPo" class="inline-block mb-2 text-gray-700">HJE</label>
                                <input type="text" id="noPo" name="noPo" min="0" value="Merah"
                                    class="w-full text-sm font-medium text-center bg-gray-200 border-none rounded-md focus:ring-0"
                                    disabled>
                            </div>
                            <div
                                class="max-w-xs transition duration-200 border-b-2 rounded-md hover:border-blue-500 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md w-28">

                                <label for="noPo" class="inline-block mb-2 text-gray-700">BPB</label>
                                <input type="text" id="noPo" name="noPo" min="0" value="Merah"
                                    class="w-full text-sm font-medium text-center bg-gray-200 border-none rounded-md focus:ring-0"
                                    disabled>
                            </div>
                            <div
                                class="max-w-xs transition duration-200 border-b-2 rounded-md hover:border-blue-500 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md w-28">

                                <label for="noPo" class="inline-block mb-2 text-gray-700">JHT</label>
                                <input type="text" id="noPo" name="noPo" min="0" value="Merah"
                                    class="w-full text-sm font-medium text-center bg-gray-200 border-none rounded-md focus:ring-0"
                                    disabled>
                            </div>
                            <div
                                class="max-w-xs transition duration-200 border-b-2 rounded-md hover:border-blue-500 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md w-28">

                                <label for="noPo" class="inline-block mb-2 text-gray-700">JT</label>
                                <input type="text" id="noPo" name="noPo" min="0" value="Merah"
                                    class="w-full text-sm font-medium text-center bg-gray-200 border-none rounded-md focus:ring-0"
                                    disabled>
                            </div>
                            <div
                                class="max-w-xs transition duration-200 border-b-2 rounded-md hover:border-blue-500 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md w-28">

                                <label for="noPo" class="inline-block mb-2 text-gray-700">Jenis</label>
                                <input type="text" id="noPo" name="noPo" min="0" value="Merah"
                                    class="w-full text-sm font-medium text-center bg-gray-200 border-none rounded-md focus:ring-0"
                                    disabled>
                            </div>
                            <div
                                class="max-w-xs transition duration-200 border-b-2 rounded-md hover:border-blue-500 hover:shadow-md focus-within:border-blue-500 focus-within:shadow-md w-28">

                                <label for="noPo" class="inline-block mb-2 text-gray-700">Rencet</label>
                                <input type="text" id="noPo" name="noPo" min="0" value="Merah"
                                    class="w-full text-sm font-medium text-center bg-gray-200 border-none rounded-md focus:ring-0"
                                    disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
