@section('title', 'List User')
@extends('layouts.app')
@section('content')
    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            @livewire('super-user.list-users')
        </div>
    </div>
@endsection
