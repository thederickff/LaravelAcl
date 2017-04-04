@extends('auth.template.template')

@section('content-form')

<div class="col-md-12">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
</div>
<form class="login form" role="form" method="POST" action="{{ route('password.email') }}">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

        @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif

    </div>

    <div class="form-group">

        <button type="submit" class="btn btn-login">
            <i class="fa fa-btn fa-envelope"></i> Enviar link de recuperacao de senha!
        </button>

    </div>
</form>
@endsection
