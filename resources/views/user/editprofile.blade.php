@extends('layouts.app')

@section('content')
    <div class="complete-profile">
        <div class="row">
            <h6>Edit Profile</h6>
            <form method="post" class="col l8 m12 s12 offset-l2" action="{{route('EditProfile')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                    <div class="col l4 m4 s12">
                        <center>
                            <div class="circle z-depth-2" id="profile-img"
                                 style="background-image: url('{{URL::to('storage/profile-img/default.jpg')}}')">
                                <input type="file" name="profile_pix" accept=".png, .jpg, .jpeg"
                                       onchange="previewImage(this)"
                                       required>
                            </div>
                        </center>
                    </div>

                    <div class="col l6 m6 s10 offset-s1">
                        <div class="input-field center">
                            <input type="text" class="validate circle" value="{{$user->firstname}}" required name="firstname">
                            <label>Firstname</label>
                        </div>


                        <div class="input-field">
                            <input type="text" class="validate" required name="lastname" value="{{$user->lastname}}">
                            <label>Lastname</label>
                        </div>

                        <div class="input-field">
                            <input type="number" class="validate" required name="phone" value="{{$user->phone_number}}"
                                   placeholder="With Country Code, E.g +234">
                            <label>Phone Number</label>
                        </div>

                        <div class="input-field">
                            <input type="text" class="validate" required name="country" value="{{$user->country}}">
                            <label>Country</label>
                        </div>

                        <div class="input-field">
                            <input type="text" class="validate" required name="state" value="{{$user->state}}">
                            <label>State</label>
                        </div>

                        <div class="input-field">
                            <input type="text" class="validate" required name="town" value="{{$user->town}}">
                            <label>Town</label>
                        </div>

                        <div class="input-field">
                <textarea class="materialize-textarea validate" required name="bio" maxlength="200">{{$user->bio}}</textarea>
                            <label>Bio</label>
                        </div>

                        <input type="hidden" name="_method" value="PUT">
                        <button type="submit" class="btn green waves-effect waves-light btn-large">Submit</button>
                    </div>
                </div>


            </form>
        </div>
    </div>

@endsection