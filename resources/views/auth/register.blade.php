@extends('layouts.app')

@section('content')
<div class="register-box">
    <div class="register-logo">
        <a href="javascript:void(0)"><b>Intra</b>siakad</a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Register a new Account</p>

        <form method="post" action="post">
            <div class="form-group has-feedback @if ($errors->has('name')) has-error @endif">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Full name">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                @if ($errors->has('name'))
                <span class="help-block"><i class="fa fa-times-circle-o"></i> {{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-group has-feedback @if ($errors->has('email')) has-error @endif">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                <span class="help-block"><i class="fa fa-times-circle-o"></i> {{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group has-feedback @if ($errors->has('password')) has-error @endif">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                <span class="help-block"><i class="fa fa-times-circle-o"></i> {{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Retype password">
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
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


        <a href="{{ route('login') }}" class="text-center">I already have a account</a>
    </div>
    <!-- /.form-box -->
</div>
<!-- /.register-box -->
@endsection
