﻿@extends('layouts.app')

@section('title', 'Iniciar sesión')
@section('content')
                    <br><br>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" for="email">Correo electronico</label>

                            <div class="col-md-6">
                                <!-- Ingreso de correo de usuario-->
                                <input type="email" id="email" title="correo electronico" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" for="contraseña">Contraseña</label>

                            <div class="col-md-6">
                                <!-- Ingreso clave de usuario-->
                                <input type="password" id="contraseña" title="contraseña" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <input type="checkbox" name="remember" id="remember"> 
                                    <label for="remember">Recuérdame</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <!-- Boton para iniciar sesion-->
                                <button type="submit" class="btn btn-primary">
                                    <span class="fa fa-btn fa-sign-in"></span>Iniciar sesión    
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">¿Olvidaste tu contraseña?</a>                            </div>
                        </div>
                    </form>
@endsection
