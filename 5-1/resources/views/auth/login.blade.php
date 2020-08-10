@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="containerBox qqq">
        <div class="login-body">
            <h1>ツイッター風SNSにログイン</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label text-md-right color">{{ __('languages.E-Mail Address') }}</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} " name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right color">{{ __('languages.Password') }}</label>
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} " name="password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="center color">
                    <button type="submit" class="login-btn loginbtn">
                        {{ __('languages.Login') }}
                    </button>
                </div>

                <div class="center color">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('languages.Remember Me') }}
                        </label>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
@endsection


