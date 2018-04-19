@extends('layouts.app_no-nav')

@section('content')
    <div class="login">
        <div class="center">
            <a href="/"><img src="{{URL::to('storage/img/agrichub-black.png')}}" class="logo" height="55px"></a>
        </div>

        <div class="row">
            <div class="col s10 m8 l4 offset-l4 offset-m2 offset-s1 card">
                <div id="tabs">
                    <ul id="tabs-swipe-demo" class="tabs">
                        <li class="tab col s5 offset-s1"><a class="active" href="#signin">Login</a></li>
                        <li class="tab col s5"><a href="#signup">Register</a></li>
                    </ul>
                </div>

                <div class="auth-errors">
                    @if ($errors->has('email'))
                        <p class="invalid-feedback">
                            @if($errors->first('email') == "These credentials do not match our records.")
                                {{__('Invalid Email or Password.')}}
                            @else
                                {{ $errors->first('email') }}
                            @endif
                        </p>
                    @endif

                    @if ($errors->has('password'))
                        <p class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </p>
                    @endif


                </div>

                <div id="signin" class="col s12">
                    <div class="row">
                        <form class="col s12" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" name="email" type="email" class="validate"
                                           value="{{ old('email') }}" required>
                                    <label for="email">Email</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password" name="password" type="password" class="validate" required>
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field  col s12">
                                    <button class="btn waves-effect green left leave-btn" type="submit">Sign In</button>
                                </div>
                            </div>

                            <a href="#" class='forget left green-text'>Forgot password?</a>
                        </form>
                    </div>
                </div>

                <!-- Register Form-->

                <div id="signup" class="col s12">
                    <div class="row">
                        <form class="col s12" method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="input-field">
                                <input id="email" name="email" type="email" class="validate" value="{{ old('email') }}" required>
                                <label for="email">Email</label>
                            </div>

                            <div class="input-field">
                                <input id="password" name="password" type="password" class="validate" required>
                                <label for="password">Password</label>
                            </div>

                            <div class="input-field">
                                <input id="password" type="password" class="validate" name="password_confirmation"
                                       required>
                                <label for="password">Confirm Password</label>
                            </div>

                            <br>
                            <button class="btn waves-effect green left leave-btn">Sign Up</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
