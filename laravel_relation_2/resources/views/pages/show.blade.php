@extends('layout.main-layout')

@section('sectionShow')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4>
                    {{ $pilot -> firstname }} {{ $pilot -> lastname }}
                </h4>

                <p>
                    <b>Nationality:</b> {{ $pilot -> nationality }} <br>
                    <b>date of birth:</b> {{ $pilot -> date_of_birth }}
                </p>

                <h5>
                    Cars:
                </h5>
                <ul>
                    @foreach ($pilot -> cars as $car)
                        <li>
                            {{ $car -> name }}
                        </li>
                    @endforeach
                </ul>
                <a class="btn btn-primary" href="{{ route('home') }}">Back Home</a>
            </div>

        </div>
    </div>
@endsection
