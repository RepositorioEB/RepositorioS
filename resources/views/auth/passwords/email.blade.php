@extends('layouts.app')

<!-- Main Content -->

@section('title', 'Envío de Correo')
@section('content')
        <br><br><br>
        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo electrónico: </label>    

                            <div class="col-md-6">
                                <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}"><!--Campo de correo para la password del usuario-->

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <span class="fa fa-btn fa-envelope"></span>Enviar link al correo
                                </button>
                            </div>
                        </div>
                    </form>
              
@endsection
