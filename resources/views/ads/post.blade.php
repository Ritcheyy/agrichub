@extends('layouts.app')

@section('content')
    <br>
    <div class="create">
        <div class="row pea">
            <div class="col s12 m8 l6 offset-m2 offset-l3 pea2">
                @include('inc.backbtn')
                <form method="POST" action="{{route('ads.store')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="card white cardy">
                        <div class="card-content black-text">
                            <span class="card-title green-text">Create Ad</span>
                            @include('inc.messages')
                            <br>
                            <div class="input-field col s12">
                                <select class="validate" required name="category">
                                    <option>Animal</option>
                                    <option>Food</option>
                                    <option>Machinery</option>
                                    <option>Other Services</option>
                                </select>
                                <label>Select Category</label>
                            </div>

                            <div class="input-field col s12">
                                <input type="text" name="title" placeholder="Title for your item/service" class="validate" required>
                                <label>Title</label>
                            </div>

                            <div class="input-field col s12">
                                <textarea name="description" class="materialize-textarea validate" id="text" cols="30" rows="10"
                                          placeholder="Provide a detailed description" required></textarea>
                                <label>Description</label>
                            </div>
                            <div class="input-field col s12">
                                <input name="quantity" type="number" placeholder="Quantity of your product" class="validate" required>
                                <label>Quantity</label>
                            </div>
                            <div class="input-field price col s12">
                                <input name="price" type="text" class="validate" required
                                       placeholder="Item/service price (include currency)">
                                <label>Price</label>
                            </div>

                            <div class="col s12 m12 upload">
                                <label class="active">Upload Images</label>
                                <br>
                                <p class="grey-text">
                                    Upload at least 1 image of your product/service. Accepted formats are .jpg, .gif and
                                    .png.
                                    Max
                                    allowed size for uploaded files is 1 MB.
                                </p>
                                <br>

                                <center>
                                <div class="col s12 m6 l4">
                                    <div class="image" id="upload1"
                                         style="background-image: url('{{URL::to('storage/img/upload_placeholder.jpg')}}')">
                                        <input name="image1" type="file" onchange="previewUpload1(this)" class="validate" required>
                                    </div>
                                </div>

                                <div class="col s12 m6 l4">
                                    <div class="image" id="upload2"
                                         style="background-image: url('{{URL::to('storage/img/upload_placeholder.jpg')}}')">
                                        <input name="image2" type="file" onchange="previewUpload2(this)">
                                    </div>
                                </div>

                                <div class="col s12 m6 l4">
                                    <div class="image" id="upload3"
                                         style="background-image: url('{{URL::to('storage/img/upload_placeholder.jpg')}}')">
                                        <input name="image3" type="file" onchange="previewUpload3(this)">
                                    </div>
                                </div>
                                </center>
                            </div>

                            <div class="center">
                                <button class="btn green btn-large" type="submit">Create Ad</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection