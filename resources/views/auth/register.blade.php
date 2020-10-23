@extends('layouts.app')

@section('content')

    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Sign in Start -->
    <section class="sign-in-page" style="overflow: scroll;">
        <div id="container-inside">
            <div id="circle-small"></div>
            <div id="circle-medium"></div>
            <div id="circle-large"></div>
            <div id="circle-xlarge"></div>
            <div id="circle-xxlarge"></div>
        </div>
        <div class="container p-0">
            <div class="row no-gutters">
                <div class="col-md-6 text-center pt-5">
                    <div class="sign-in-detail text-white">
                        <a class="sign-in-logo mb-5" href="#"><img src="{{asset('frontend/images/logo-full.png')}}" class="img-fluid" alt="logo"></a>
                        <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                            <div class="item">
                                <img src="{{asset('frontend/images/login/1.png')}}" class="img-fluid mb-4" alt="logo">
                                <h4 class="mb-1 text-white">Find new friends</h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                            </div>
                            <div class="item">
                                <img src="{{asset('frontend/images/login/2.png')}}" class="img-fluid mb-4" alt="logo">
                                <h4 class="mb-1 text-white">Connect with the world</h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                            </div>
                            <div class="item">
                                <img src="{{asset('frontend/images/login/3.png')}}" class="img-fluid mb-4" alt="logo">
                                <h4 class="mb-1 text-white">Create new events</h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 bg-white pt-5" >
                    <div class="sign-in-from" >
                        <h1 class="mb-0">Sign Up</h1>
                        <p>Enter your email address and password to access admin panel.</p>
                        <form class="form-horizontal m-t-30" method="POST"  action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label for="sel1">Who are you?:</label>
                                <select name="role" class="form-control" id="selectForm">
                                    <option value="">-------Select--------</option>
                                    <option value="1">Traditional User</option>
                                    <option value="2">Artist</option>
                                    <option value="3">Organization</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group" id="firstname">
                                        <label for="username">First Name</label>
                                        <input  id="name" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required  placeholder="Enter username">
                                        @error('firstname')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6" id="lastname">
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
                            <div class="form-group" style="display: none"  id="organization">
                                <label for="username">Organization name</label>
                                <input type="text" class="form-control" name="org_name" required placeholder="Enter Organization Name">
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

                            <div class="form-group" style="display: none"  id="address">
                                <label for="username">Address</label>
                                <input type="text" class="form-control" name="address" required placeholder="Enter Address">
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
                            <div class="m-t-40 text-center">
                                <p class="">Already have an account ? <a href="{{ route('login') }}" class="font-500 font-14 font-secondary"> Login </a> </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection




