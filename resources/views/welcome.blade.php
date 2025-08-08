@extends('layouts.app')

@section('content')
    @livewire('header')

    <div>
    </div>

    <div class="md:mx-auto md:py-10 md:w-10/12">
        @livewire('productos')
        <div class="md:flex md:flex-row md:justify-center md:items-center bg-[#dadada] pt-10 rounded-2xl">
            @livewire('quienes-somos')
            @livewire('contactanos')
        </div>
    </div>
@endsection
