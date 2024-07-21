@extends('layouts.app')

@section('main-content')
    <section class="container">
        <h1>Trains</h1>
        @foreach ($trains as $train)
            <article class="card" style="width: 18rem;">
                <div class="card-body">
                    <h2 class="card-title">{{ $train->company}}</h2>
                    <p class="card-text">Partenza: {{ $train->departure_station }}<br> Orario: {{ $train->departure_time }}</p>
                    <p class="card-text">Arrivo: {{ $train->arrival_station }}<br> Orario: {{ $train->arrival_time }}</p>
                    <p class="card-text">Codice treno: {{ $train->train_code }}<br> Numero carrozze: {{ $train->number_of_carriages }}</p>
                    <p class="card-text">
                        Ritardo:@if ($train->in_time == '0')
                            <span>Si</span>
                            @else
                            <span>No</span>
                        @endif
                        Cancellato:@if ($train->deleted == '1')
                            <span>Si</span>
                            @else
                            <span>No</span>
                        @endif
                    </p>
                </div>
            </article>
        @endforeach
    </section>
@endsection
