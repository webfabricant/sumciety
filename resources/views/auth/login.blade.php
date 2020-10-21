@extends('layouts.app')

@section('content')

<div class="accountbg" style="background: url('https://images.unsplash.com/photo-1541079033018-63489731598f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');background-size: cover;"></div>
<div class="wrapper-page account-page-full">
    <div class="card">
        <div class="card-body">

            <h3 class="text-center m-0">
                <a href="index.html" class="logo logo-admin"><img src="{{asset('/backend/assets/images/logo.png')}}" height="30" alt="logo"></a>
            </h3>

            <div class="p-3">
                <h4 class="font-18 m-b-5 text-center">Welcome Back !</h4>
                <p class="text-muted text-center">Sign in to continue to Admiria.</p>

                <form class="form-horizontal m-t-30" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="username">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Enter Email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="userpassword">Password</label>
                        <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Enter password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group row m-t-20">
                        <div class="col-sm-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customControlInline">Remember me</label>
                            </div>
                        </div>
                        <div class="col-sm-6 text-right">
                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>

                    <div class="form-group m-t-10 mb-0 row">
                        <div class="col-12 m-t-20">

                            @if (Route::has('password.request'))
                                <a class="text-muted" href="{{ route('password.request') }}"><i class="mdi mdi-lock"></i>
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="m-t-40 text-center">
        <p class="">Don't have an account ? <a href="{{ route('register') }}" class="font-500 font-14 font-secondary"> Register </a> </p>
        <p class="">© 2017 - 2019 Admiria. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
    </div>



</div>


@endsection
