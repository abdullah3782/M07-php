{{-- @extends('layout.app')
@section('content')


@endsection --}}
{{-- @component('components.layout')

<h1>Hola DAW2</h1>

@endcomponent --}}


<x-layout.app>

    <x-slot name="title">

        HomeTitle
        <p>DAW2</p>
    </x-slot>
    <h1>Welcome DAW2</h1>

</x-layout.app>
