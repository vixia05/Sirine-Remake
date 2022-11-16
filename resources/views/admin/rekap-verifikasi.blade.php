@section('title', 'Rekap Verifikasi')
@extends('layouts.app')
@section('content')
    <div class="py-6">
        <div class="mx-auto px-4 lg:px-8">
            @livewire('admin.rekap-verifikasi')
        </div>
    </div>
@endsection

@section('plugin-js')
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker.css') }}">
    <script src="{{ asset('plugins/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('plugins/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/daterangepicker.min.js') }}"></script>
@endsection
