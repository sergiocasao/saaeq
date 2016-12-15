@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">

                <div class="panel-heading">Editar perfil</div>

                <div class="panel-body">

                    <h4>Información personal:</h4> <br>

                    <div class="col-xs-10 col-xs-offset-1">

                        {!! Form::open([
                            'method'                => 'PATCH',
                            'route'                 => ['user::email.update', Auth::user()->slug ],
                            'role'                  => 'form' ,
                            'id'                    => 'update_email_form',
                            'class'                 => '',
                        ]) !!}

                            <div class="form-group">
                                <div class="form-group">
                                    <span><strong>Correo electrónico: </strong></span>
                                    <span>{{ Auth::user()->email }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::text('name', Auth::user()->name, [
                                    'class'         => 'form-control',
                                    'placeholder'   => 'Nombre',
                                    'required'      => 'required',
                                    'form'          => 'update_email_form',
                                    'disabled'      => 'disabled'
                                ]) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::email('email', null, [
                                    'class'         => 'form-control',
                                    'placeholder'   => 'Nuevo correo electrónico',
                                    'required'      => 'required',
                                    'form'          => 'update_email_form',
                                ]) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::password('password', [
                                    'class'         => 'form-control',
                                    'placeholder'   => 'Contraseña',
                                    'required'      => 'required',
                                    'form'          => 'update_email_form'
                                ]) !!}
                            </div>
                            <div class="users__submit-container">
                                {!! Form::submit('Guardar cambios', [
                                    'class' => 'btn btn-primary',
                                    'form'  => 'update_email_form'

                                ]) !!}
                            </div>
                        {!!Form::close()!!}

                        <hr>

                        {!! Form::open([
                            'method'                => 'PATCH',
                            'route'                 => ['user::password.update',Auth::user()->slug],
                            'role'                  => 'form' ,
                            'id'                    => 'update_password_form',
                            'class'                 => '',
                        ]) !!}

                            <div class="form-group">
                                <span><strong>Contraseña:</strong></span>
                                <span>**********</span>
                            </div>
                            <div class="form-group">
                                {!! Form::password('password', [
                                    'class'         => 'form-control',
                                    'placeholder'   => 'Nueva contraseña',
                                    'required'      => 'required',
                                    'form'          => 'update_password_form'
                                ]) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::password('password_confirmation', [
                                    'class'         => 'form-control',
                                    'placeholder'   => 'Confirmar nueva contraseña',
                                    'required'      => 'required',
                                    'form'          => 'update_password_form'
                                ]) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::password('old_password', [
                                    'class'         => 'form-control',
                                    'placeholder'   => 'Contraseña actual',
                                    'required'      => 'required',
                                    'form'          => 'update_password_form'
                                ]) !!}
                            </div>

                            <div class="users__submit-container">
                                {!! Form::submit('Guardar cambios', [
                                    'class' => 'btn btn-primary',
                                    'form'  => 'update_password_form'

                                ]) !!}
                            </div>

                        {!!Form::close()!!}

                        <br>

                        <hr>

                        <br>

                        {!! Form::open([
                            'method'                => 'PATCH',
                            'route'                 => ['user::profile.delete',Auth::user()->slug],
                            'role'                  => 'form' ,
                            'id'                    => 'delete_account_form',
                            'class'                 => '',
                        ]) !!}

                            <div class="form-group">
                                {!! Form::password('password', [
                                    'class'         => 'form-control',
                                    'placeholder'   => 'Contraseña actual',
                                    'required'      => 'required',
                                    'form'          => 'delete_account_form'
                                ]) !!}
                            </div>

                            <div class="users__submit-container">
                                {!! Form::submit('Desactiva tu cuenta', [
                                    'class' => 'btn btn-danger',
                                    'form'  => 'delete_account_form'
                                ]) !!}
                            </div>

                        {!!Form::close()!!}

                        <br>

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
