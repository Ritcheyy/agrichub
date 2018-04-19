@extends('layouts.app')

@section('content')
    <div class="container-fluid">
    <div class="container ad-view">
        <div class="row">
            <div class="col s12 l6">
                <div class="carousel carousel-slider center" data-indicators="true">
                    <div class="carousel-item" href="#one!"
                         style="background-image:url('{{URL::to('storage/img/g5.jpg')}}')">
                    </div>
                    <div class="carousel-item amber white-text" href="#two!"
                         style="background-image:url('{{URL::to('storage/img/g3.jpg')}}')">
                    </div>
                    <div class="carousel-item green white-text" href="#three!"
                         style="background-image:url('{{URL::to('storage/profile-img/default.jpg')}}')">
                    </div>
                </div>
            </div>

            <div class="col s12 l6">
                <div class="card farmer-card">
                    <div class="row">
                        <div class="col s3">
                            <div class="profile-img circle"
                                 style="background-image: url('{{URL::to('storage/profile-img/default.jpg')}}')">
                            </div>
                        </div>

                        <div class="col s9">
                            <h5>{{$owner->firstname." ".$owner->lastname}}</h5>
                            <a href="{{URL::to('/user/view/'.$owner->id)}}">View Farmer's Profile</a>
                        </div>
                    </div>
                </div>

                <div class="card product-details">
                    <span>Title</span>
                    <h4>{{$Ad->title}}</h4>
                    <span>Price</span>
                    <h4>{{$Ad->price}}</h4>
                    <span>Quantity</span>
                    <h4>{{$Ad->quantity}}</h4>
                    <span>Description</span>
                    <h4>
                        {{$Ad->description}}
                    </h4>

                    <a href="#modal1" class="btn green modal-trigger">Contact Farmer</a>

                    <!-- Modal Structure -->
                    <div id="modal1" class="modal">
                        <div class="modal-content">
                            <h4 class="green-text"><i class="material-icons left">phone</i>Contact Farmer</h4>
                            <br>
                            <p>Email: {{$owner->email}}</p>
                            <p>Phone: {{$owner->phone_number}}</p>
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="clearfix"></div>
@endsection