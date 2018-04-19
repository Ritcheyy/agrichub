@extends('layouts.app')

@section('content')
    <div class="profile">
        <div class="row">
            <div class="hide-on-med-and-up green overlay-box"></div>

            <div class="profile-details col l3 m4 s12 white ">
                <center>
                    <div class="profile-img white circle z-depth-1"
                         style="background-image: url('{{URL::to('storage/profile-img/default.jpg')}}')">
                    </div>
                </center>

                <span class="label">Name</span>
                <h6>{{$user->firstname." ".$user->lastname}}</h6>

                <span class="label">Email</span>
                <h6>{{$user->email}}</h6>

                <span class="label">Phone No</span>
                <h6>{{$user->phone_number}}</h6>

                <span class="label">Country</span>
                <h6>{{$user->country}}</h6>

                <span class="label">State</span>
                <h6>{{$user->state}}</h6>

                <span class="label">Town</span>
                <h6>{{$user->town}}</h6>
                <br>
                <a href="/user/editprofile" class="btn green waves-effect waves-light">Edit Profile</a>
            </div>

            <center>



                <div class="col s12 m8 l9 mbox">
                    @include('inc.messages')
                    <div class="mbox-content">
                        <div class="header white-text green">My Bio</div>
                        <div class="body white">
                            {{$user->bio}}
                        </div>
                    </div>
                </div>


                <div class="col s12 m8 l9 mbox">
                    <div class="mbox-content">
                        <div class="header white-text green">My Ads <span class="right">
                                <a class="white-text" href="/ads/create"><i class="material-icons">add</i>
                                </a>
                            </span>
                        </div>
                        <div class="body white">
                            <ul class="collection">

                                @foreach($UserAds as $UserAd)

                                    <li class="collection-item avatar">
                                        <a href="#">
                                            {{--Todo: Ads Image--}}
                                            <i class="material-icons circle">folder</i>
                                            <span class="title">{{$UserAd->title}}</span>
                                            <p>{{$UserAd->category}}</p>
                                            <a href="#" class="secondary-content dropdown-button" data-activates='dropdown{{$UserAd->id}}'>
                                                <i class="material-icons">more_vert</i></a>

                                            <ul id='dropdown{{$UserAd->id}}' class='dropdown-content'>
                                                <li><a href="/ads/{{$UserAd->id}}/edit">Edit</a></li>

                                                <form action="{{route('ads.destroy', $UserAd->id)}}" method="post">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <li><button type="submit">Delete</button></li>
                                                </form>
                                            </ul>
                                        </a>
                                    </li>

                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </div>

@endsection