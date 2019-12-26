@extends('admin.layouts.app')

@section('content')

<div id="wrapper">

    <form name="login-form" class="login-form" action="{{ route('adminlogin.success') }}" method="post">
        @csrf
        <div class="header">
        <h1>Admin Login </h1>
        
        </div>
    
        <div class="content">
        
        <input id="email" type="text" class="input username @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
         @error('email')
           <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
             </span>
        @enderror
        <div class="user-icon"></div>
        
        <input id="password" type="password" class="input password @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
            </span>
        @enderror
        <div class="pass-icon"></div>       
        </div>

        <div class="footer">
        <input type="submit" name="submit" value="Login" class="button" />
        
        </div>
    
    </form>

</div>
<div class="gradient"></div>

@endsection