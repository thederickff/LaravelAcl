@extends('auth.template.template')

@section('content-form')
<form class="login form" role="form" method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
       
        <input id="name" placeholder="Seu nome" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
       
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
       
            <input id="email" placeholder="Seu Email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        
            <input id="password" placeholder="Sua senha" type="password" class="form-control" name="password" required>

            @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
     
    </div>

    <div class="form-group">
        
            <input id="password-confirm" placeholder="Confirmar senha" type="password" class="form-control" name="password_confirmation" required>
       
    </div>

    <div class="form-group">
        
            <button type="submit" class="btn btn-login">
                <i class="fa fa-btn fa-sign-in"></i> Registrar se
            </button>
        
    </div>
</form>
@endsection
