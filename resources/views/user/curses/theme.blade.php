@extends('layouts.app')

@section('content')

<div class="container" style="margin-top: 40px;margin-bottom: 40px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            @if ( $content->video['mp4'] || $content->video['ogg'] || $content->video['webm'] )
                <video class="header__video" loop autoplay preload muted>
                    @if ( $content->video['mp4']  ) { <source src="'.$content->video['mp4'].'"  type="video/mp4"> @endif
                    @if ( $content->video['ogg']  ) { <source src="'.$content->video['ogg'].'"  type="video/ogg"> @endif
                    @if ( $content->video['webm'] ) { <source src="'.$content->video['webm'].'" type="video/webm"> @endif
                </video>
            @endif

            <div class="page-header">
                <h1>{{ $theme->label or '' }}</h1>
                <p>{{ $theme->description or '' }}</p>
            </div>

            <div class="row">
                <div class="col-md-12">
                    {{ $content->content }}
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
