@extends('layouts.app_no-nav')

@section('content')
    <div class="adspage">
        <div class="section">
            <div class="navbar">
                <nav>
                    <div class="nav-wrapper">
                        <a href="#!" class="brand-logo left"><img src="{{URL::to('storage/img/agrichub-white.png')}}"
                                                                  height="56px"/></a>
                        <a href="#" data-activates="mobile-demo" class="button-collapse right"><i
                                    class="material-icons large">menu</i></a>
                        @if(Auth::guest())
                            <a href="/login" class="right hide-on-med-and-down">Login | Register</a>
                        @else
                            <a href="/user/profile" class="right hide-on-med-and-down">{{Auth::user()->firstname}}</a>
                        @endif
                    </div>
                </nav>

            </div>

            <ul class="side-nav" id="mobile-demo">
                @if(Auth::guest())
                    <li><a href="/login">Login</a></li>
                    <li><a href="/login#signup">Register</a></li>
                @else
                    <li><a href="/">Home</a></li>
                    <li><a href="/user/profile">My Profile</a></li>
                    <li><a href="/user/profile">Create Ad</a></li>
                    <li><a href="/search">Search</a></li>
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @endif
            </ul>

            <div class="wrapper_2 center grid-example col s12" id="top">
                <h1>Buy And Sell Farm Products</h1>
                <p>Services across AFRICA</p>
                <div class="nav-wrapper search">
                    <form>
                        <div class="input-field">
                            <input id="search" type="search" placeholder="What are you looking for?" required>
                            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                            <i class="material-icons close">close</i>
                        </div>
                    </form>
                </div>

                <h6>OR</h6>
                <a href="/ads/create" class="btn white green-text"><b>Create an Advert</b></a>
            </div>
        </div>

        <div class="container-fluid">
            <div class="the_ads">
                <h3>Lastest Adverts</h3>
                <div class="row view-ads">


                    @foreach($Ads as $Ad)
                        <div class="col s6 m4 l3">
                            <a href="{{URL::to('ads/'.$Ad->id)}}" class="">
                                <div class="card hoverable">
                                    <div class="card-image">
                                        {{--Todo: Image shit--}}
                                        <img src="{{URL::to('storage/img/img3.jpg')}}">
                                    </div>
                                    <div class="card-content">
                                        <div class="title">
                                            <b>
                                                {{$Ad->title}}
                                            </b>
                                        </div>

                                        <div class="price">
                                            {{$Ad->price}}
                                        </div>

                                        <div class="location">
                                            <i class="material-icons left">location_on</i>
                                            {{--Todo: Change to Country--}}
                                            {{$Ad->location}}
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    @endforeach


                    <div class="col s6 m4 l3">
                        <a href="" class="">
                            <div class="card hoverable">
                                <div class="card-image">
                                    <img src="{{URL::to('storage/img/img3.jpg')}}">
                                </div>
                                <div class="card-content">
                                    <div class="title">
                                        <b>
                                            Hello World!!!Hello World!!!Hello World!!!
                                        </b>
                                    </div>
                                    <div class="price">
                                        $1,500
                                    </div>
                                    <div class="location">
                                        <i class="material-icons left">location_on</i>
                                        Lagos
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col s6 m4 l3">
                        <a href="" class="">
                            <div class="card hoverable">
                                <div class="card-image">
                                    <img src="{{URL::to('storage/img/img3.jpg')}}">
                                </div>
                                <div class="card-content">
                                    <div class="title">
                                        <b>
                                            Hello World!!!Hello World!!!Hello World!!!
                                        </b>
                                    </div>
                                    <div class="price">
                                        $1,500
                                    </div>
                                    <div class="location">
                                        <i class="material-icons left">location_on</i>
                                        Lagos
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col s6 m4 l3">
                        <a href="" class="">
                            <div class="card hoverable">
                                <div class="card-image">
                                    <img src="{{URL::to('storage/img/img3.jpg')}}">
                                </div>
                                <div class="card-content">
                                    <div class="title">
                                        <b>
                                            Hello World!!!Hello World!!!Hello World!!!
                                        </b>
                                    </div>
                                    <div class="price">
                                        $1,500
                                    </div>
                                    <div class="location">
                                        <i class="material-icons left">location_on</i>
                                        Lagos
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col s6 m4 l3">
                        <a href="" class="">
                            <div class="card hoverable">
                                <div class="card-image">
                                    <img src="{{URL::to('storage/img/img3.jpg')}}">
                                </div>
                                <div class="card-content">
                                    <div class="title">
                                        <b>
                                            Hello World!!!Hello World!!!Hello World!!!
                                        </b>
                                    </div>
                                    <div class="price">
                                        $1,500
                                    </div>
                                    <div class="location">
                                        <i class="material-icons left">location_on</i>
                                        Lagos
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col s6 m4 l3">
                        <a href="" class="">
                            <div class="card hoverable">
                                <div class="card-image">
                                    <img src="{{URL::to('storage/img/img3.jpg')}}">
                                </div>
                                <div class="card-content">
                                    <div class="title">
                                        <b>
                                            Hello World!!!Hello World!!!Hello World!!!
                                        </b>
                                    </div>
                                    <div class="price">
                                        $1,500
                                    </div>
                                    <div class="location">
                                        <i class="material-icons left">location_on</i>
                                        Lagos
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
    <footer class="page-footer">
        <div class="footer-copyright">
            <div class="container">
                © 2018 Copyright
                <a class="grey-text text-lighten-4 right" href="#top"><i class="material-icons left">arrow_upward</i>Top</a>
            </div>
        </div>
    </footer>

@endsection