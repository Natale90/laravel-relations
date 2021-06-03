@extends('layout.main-layout')

@section('sectionHome')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>
                    Welcome Home
                </h3>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <ul>
                    @foreach ($cars as $car)
                        <li class="border">
                            Car Name: <strong> {{ $car -> name }} </strong> <br>
                            Car Model: {{ $car -> model }} <br>
                            Car Kw: {{ $car -> kw }} <br>

                            Car Brand: <strong> {{ $car -> brand -> name }} </strong>

                            <h5>Pilots</h5>
                            <ul>
                                @foreach ($car -> pilots as $pilot)

                                    <li>
                                        Name:
                                        <a href="{{ route( 'show', $pilot -> id) }}">
                                            {{ $pilot -> firstname }} {{ $pilot -> lastname }}
                                        </a>
                                    </li>

                                @endforeach
                            </ul>
                        </li>

                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
