@section('title', 'List User')
@extends('layouts.app')
@section('content')
    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-flow-row">
                {{-- Header --}}
                <div class="rounded-t-xl bg-slate-700 shadow-md drop-shadow-sm overflow-hidden px-10 py-4">
                    <h4 class="font-semibold leading-tight text-2xl my-auto text-white">List User Sirine</h4>
                </div>
                {{-- Body / Table --}}
                @include('livewire.modal.update-user')
                @livewire('super-user.list-users')
            </div>
        </div>
    </div>
@endsection
