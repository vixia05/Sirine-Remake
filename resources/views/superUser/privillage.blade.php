@section('title', 'Privillage')
@extends('layouts.app')
@section('content')
    <div class="py-6">
        <div class="px-4 mx-auto lg:px-8">
            @livewire('super-user.privillages')
        </div>
    </div>
@endsection
