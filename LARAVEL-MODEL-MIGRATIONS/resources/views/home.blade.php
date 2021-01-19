@extends('layouts.main')

@section('content')
    <h1>automobile.it - La tua prossima auto</h1>

    <h2>Le nostre Auto</h2>

    <ul>
        @foreach ($cars as $car)
            <li>
                <h3> {{ $car->modello }} </h3>
                <div class="brand">{{ $car->marca }}</div>
                <div class="plate">{{ $car->targa }}</div>
                @if (! $loop->last)
                {{-- @if ($loop->first) --}}
                {{-- @if($loop->count) --}}
                {{-- @if($loop->iteration) --}}
                    <hr>
                @endif
            </li>
        @endforeach
    </ul>
@endsection
