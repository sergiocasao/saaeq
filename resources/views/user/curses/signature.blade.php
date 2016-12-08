@extends('layouts.app')

@section('content')

<div style="padding: 100px 0;background-image: url('{{asset('images/dna.jpg')}}'); color: white;background-size: cover;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
            <h1>{{ $signature->label }}</h1>
            <p>{{ $signature->description }}</p>
            {{-- <p>
                <a class="btn btn-primary" href="{{ url('/register') }}" role="button">Regístrate</a>
                <a class="btn btn-primary" href="{{ url('/login') }}" role="button">Inicia sesión</a>
            </p> --}}
        </div>
    </div>
</div>

<div class="container" style="margin-top: 40px;margin-bottom: 40px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <style media="screen">
                .theme {
                    border-bottom: 1px solid #ccc;
                }

                .theme__link {
                    display: block;
                    padding: 20px;
                }

                .theme__link strong{
                    font-size: 18px;
                    color: #777;
                }

                .theme__link:hover {
                    background-color: #eee;
                    text-decoration: none;
                }
            </style>

            @php $i = 1 @endphp
            @foreach ($signature->themes as $theme)
                <div class="theme">
                    <a class="theme__link" href="{{ route('client::curse.signature.theme.show', ['curse' => $curse->slug, 'signature' => $signature->slug, 'theme' => $theme->slug ]) }}">
                        <strong>{{ $i }}. {{ $theme->label }}</strong> <br>
                        {{ $theme->description }}
                    </a>
                </div>
                @php $i++ @endphp
            @endforeach

        </div>
    </div>
</div>
@endsection
