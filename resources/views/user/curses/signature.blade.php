@extends('layouts.app')

@section('content')

<div style="padding: 100px 0;background-image: url('{{asset('images/wallpaper.jpg')}}'); color: white;background-size: cover;position: relative;min-height: 350px;margin-top: -40px;">
    <div class="row" style="margin: 0;">
        <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1" style="z-index: 2;">
            <h1>{{ $signature->label }}</h1>
            <p>{{ $signature->description }}</p>
        </div>
    </div>
    <div style="height: 100%;width: 100%;background-color: rgba(0,0,0,0.6);position: absolute;top: 0;"></div>
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

            <div class="page-header">
                <h1>Temario</h1>
            </div>

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
