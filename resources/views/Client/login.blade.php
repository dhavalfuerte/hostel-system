@extends('Client.common.layout')
@section('cotent')
<div class="wrap">
    <div class="content">
        <div class="b-box">
            <h1>Login</h1>
            <div class="form">
                <form action="{{ route('login.success') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                            
                            <span><label for="name">{{ __('Email') }}</label></span>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                     <div class="form-group row">
                            <span><label for="name">{{ __('Password') }}</label></span>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                           <span><label for="remember">{{ __('Remember Me') }} <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}></label></span>
                        </div>

                        <div class="form-group row mb-0">
                            <div>
                                <button type="submit" class="btn btn-primary" value="login" name="login">
                                    {{ __('Login') }}
                                </button>
                                  <button type="submit" class="btn btn-primary" value="signup" name="signup">
                                    {{ __('SignUp') }}
                                </button>
                                
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                
                            </div>
                        </div>
               </form>
            </div>
        </div>
    </div>
</div>
@endsection
