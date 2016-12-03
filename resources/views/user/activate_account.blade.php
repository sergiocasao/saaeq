@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Activa tu cuenta</div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('client::activateAccount', cltvoMailEncode($user->email)) }}">

                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} text-center">

                            <h3>
                                Código para activar tu cuenta <br>
                                <small>Mandamos un código a tu correo ({{$user->email}}), ingresalo aquí para activar tu cuenta</small>
                            </h3>

                            <br>

                            <div class="col-md-6 col-md-offset-3">
                                <input id="code" type="text" class="form-control text-center" name="code" value="{{ $activation_code or '' }}" required autofocus>

                                @if ($errors->has('code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">

                                <br>

                                <button type="submit" class="btn btn-primary center-block">
                                    Activar cuenta
                                </button>

                            </div>
                        </div>

                    </form>

                    <form class="text-center" action="{{ route('client::resendActivateAccountCode', cltvoMailEncode($user->email)) }}" method="post">

                        {{ csrf_field() }}

                        <br> <span>¿No te llegó el código?</span> <br>
                        <button type="submit" class="btn btn-link">
                            Reenviar nuevo código
                        </button>

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
