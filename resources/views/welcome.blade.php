@extends('layouts.app')

@section('content')
    @livewire('header')

    @livewire('productos')

    <div class="bg-[#dadada]">
        @livewire('quienes-somos')
        <hr class="mx-10 my-8 border border-[#FF6600]">
        @livewire('contactanos')
    </div>

@endsection
