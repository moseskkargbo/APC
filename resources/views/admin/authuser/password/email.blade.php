@extends('admin.authlayout')
@section('title')
Reset Password
@stop
@section('content')
<div class="login-box-body">
    <p class="login-box-msg">Reset Password</p>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form  method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}
      <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}"  >
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

        @if ($errors->has('email'))
            <span class="glyphicon glyphicon-envelope form-control-feedback">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </div>
      <div class="row">
        <div class="col-xs-4">
        </div>
        <!-- /.col -->
        <div class="col-xs-8">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Send Password Reset Link</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <a class="btn btn-link" href="{{ route('auth.login') }}">Sign In</a><br>
    <!-- <a href="register.html" class="text-center">Register a new membership</a> -->

  </div>

@stop
