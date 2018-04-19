@extends('layouts.app')

@section('content')
    <div class="complete-profile">
        <div class="row">
            <h6>Complete Your Profile</h6>
            @include('inc.messages')
            <form method="post" action="{{route('completeprofile')}}" class="col l8 m12 s12 offset-l2"
                  enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="row">
                    <div class="col l4 m4 s12">
                        <center>
                            <div class="circle z-depth-2" id="profile-img"
                                 style="background-image: url('{{URL::to('storage/img/upload-icon.png')}}')">
                                <input type="file" name="profile_pix" accept=".png, .jpg, .jpeg"
                                       onchange="previewImage(this)"
                                       required>
                                {{--Todo: validate file extension or accept type--}}
                            </div>
                        </center>
                    </div>


                    <div class="col l6 m6 s10 offset-s1">
                        <div class="input-field center">
                            <input type="text" class="validate circle" required name="firstname">
                            <label>Firstname</label>
                        </div>


                        <div class="input-field">
                            <input type="text" class="validate" required name="lastname">
                            <label>Lastname</label>
                        </div>

                        <div class="input-field">
                            <input type="number" class="validate" required name="phone"
                                   placeholder="With Country Code, E.g +234">
                            <label>Phone Number</label>
                        </div>

                        <div class="input-field">
                            <input type="text" class="validate" required name="country">
                            <label>Country</label>
                        </div>

                        <div class="input-field">
                            <input type="text" class="validate" required name="state">
                            <label>State</label>
                        </div>

                        <div class="input-field">
                            <input type="text" class="validate" required name="town">
                            <label>Town</label>
                        </div>

                        <div class="input-field">
                <textarea class="materialize-textarea validate" required name="bio" maxlength="200">
                </textarea>
                            <label>Bio</label>
                        </div>

                        <center>
                            <button type="submit" class="btn green waves-effect waves-light btn-large">Submit</button>
                        </center>
                    </div>
                </div>


            </form>
        </div>
    </div>

@endsection