@if (Auth::user())
<div class="col-md-5 col-sm-7 col-xs-12" style="position: fixed; top: 67px;right: 0;z-index: 2;">

    @if (!Auth::user()->test_finished && is_page('user::index'))
        <div class="alert alert-info" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            Vemos que no has hecho tu test para obtener contenido personalizado, da click <a href="{{ route('user::test.index', Auth::user()->slug ) }}">aquí</a> y realizalo!
        </div>
    @endif

    @if (session('status'))
        <div class="alert alert-info" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{ session('status') }}
        </div>
    @endif

    @if (isset($errors) && $errors->count() > 0)
        @foreach ($errors->all() as $error)
        <div class="alert alert-warning" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{ $error }}
        </div>
        @endforeach
    @endif
</div>
@endif
