@extends('login::layouts.master')

@section('content')
<div class="register-box">
  <div class="register-logo">
    <a href="javascript::void(0)"><b>Intra</b>siakad</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new account</p>

    <form action="{{ route('authregister') }}" method="post">
      @csrf

      <div class="form-group has-feedback @if($errors->has('email')) has-error @endif">
        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if($errors->has('email')) <span class="help-block">{{ $errors->first('email') }}</span> @endif
      </div>
      <div class="form-group has-feedback @if($errors->has('password')) has-error @endif">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if($errors->has('password')) <span class="help-block">{{ $errors->first('password') }}</span> @endif
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <a href="{{ route('formLogin') }}" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->
@stop
