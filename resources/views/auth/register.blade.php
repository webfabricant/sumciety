@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">

            <h3 class="text-center m-0">
                <a href="index.html" class="logo logo-admin"><img src="{{asset('backend/assets/images/logo.png')}}" height="30" alt="logo"></a>
            </h3>

            <div class="p-3">
              {{--  <h4 class="font-18 m-b-5 text-center">Free Register</h4>
                <p class="text-muted text-center">Get your free Admiria account now.</p>--}}

                <form class="form-horizontal m-t-30" method="POST"  action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="sel1">Who are you?:</label>
                        <select name="role" class="form-control" id="sel1">
                            <option value="1">Traditional User</option>
                            <option value="2">Artist</option>
                            <option value="3">Organization</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="username">First Name</label>
                                <input  id="name" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required  placeholder="Enter username">
                                @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="username">Last Name</label>
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" placeholder="Enter username">
                                @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="useremail">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="username">Phone</label>
                        <input type="number" class="form-control" id="username" name="phone" required placeholder="Enter Phone Number">
                    </div>
                    <div class="form-group">
                        <label for="useremail">City</label>
                        <input type="text" class="form-control" id="useremail" name="city" required placeholder="Enter Your City">
                    </div>
                    <div class="form-group">
                        <label for="userpassword">Country</label>
                        <input type="text" class="form-control" name="country" id="userpassword" required placeholder="Enter Your Country">
                    </div>
                    <div class="form-group">
                        <label for="userpassword">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="userpassword">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Enter password">
                    </div>
                    <div class="form-group row m-t-20">
                        <div class="col-12 text-right">
                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Register</button>
                        </div>
                    </div>

                 {{--   <div class="form-group m-t-10 mb-0 row">
                        <div class="col-12 m-t-20">
                            <p class="font-14 text-muted mb-0">By registering you agree to the Admiria <a href="#">Terms of Use</a></p>
                        </div>
                    </div>--}}
                </form>
            </div>

        </div>
    </div>
    <div class="m-t-40 text-center">
        <p class="">Already have an account ? <a href="{{ route('login') }}" class="font-500 font-14 font-secondary"> Login </a> </p>
        <p class="">© 2017 - 2019 Admiria. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
    </div>
{{--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>--}}
@endsection
