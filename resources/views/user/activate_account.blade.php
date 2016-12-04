@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <br>

        <div class="col-md-4 col-md-offset-1 text-center" style="padding: 2em;">

            <img src="https://thecliparts.com/wp-content/uploads/2016/07/check-mark-clip-art-6.png" class="img-responsive" style="max-width: 260px;" alt="Responsive image">

        </div>

        <div class="col-md-6">

            @if (session('status'))
                <div class="alert alert-info" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            @if (isset($errors) && $errors->count() > 0)
                <div class="alert alert-warning" role="alert">
                    @foreach ($errors->all() as $error)
    					{{ $error }} <br>
    				@endforeach
                </div>
            @endif

            <div class="form-group">

                <h2>
                    Revisa tu correo electrónico! <br><br>
                    <small>Hemos enviado un correo a {{$user->email}}. Ábrelo y da click en el botón Activa tu cuenta, nosotros haremos los demás.</small>
                </h2>

                <form class="text-center" action="{{ route('client::register.resendActivateAccountMail', cltvoMailEncode($user->email)) }}" method="post">

                    {{ csrf_field() }}

                    <br><br><span>¿No te llegó el correo?</span><br>

                    <button type="submit" class="btn btn-link">
                        Reenviar correo
                    </button>

                </form>

            </div>

        </div>
    </div>
</div>
@endsection
