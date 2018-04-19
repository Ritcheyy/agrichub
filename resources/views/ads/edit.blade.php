@extends('layouts.app')

@section('content')
    <br>
    <div class="create">
        <div class="row pea">
            <div class="col s12 m8 l6 offset-m2 offset-l3 pea2">
                @include('inc.backbtn')
                <form method="POST" action="{{route('ads.update', $Ad->id)}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="card white cardy">
                        <div class="card-content black-text">
                            <span class="card-title green-text">Edit Ad</span>
                            @include('inc.messages')
                            <br>
                            <div class="input-field col s12">
                                <select class="validate" required name="category">
                                    <option
                                    @if($Ad->category == 'Animal')
                                        {{__('selected')}}
                                            @endif
                                    >Animal
                                    </option>

                                    <option
                                    @if($Ad->category == 'Food')
                                        {{__('selected')}}
                                            @endif
                                    >Food
                                    </option>

                                    <option
                                    @if($Ad->category == 'Machinery')
                                        {{__('selected')}}
                                            @endif
                                    >Machinery
                                    </option>

                                    <option
                                    @if($Ad->category == 'Other Services')
                                        {{__('selected')}}
                                            @endif
                                    >Other Services
                                    </option>
                                </select>
                                <label>Select Category</label>
                            </div>

                            <div class="input-field col s12">
                                <input type="text" name="title" placeholder="Title for your item/service"
                                       class="validate" value="{{$Ad->title}}" required>
                                <label>Title</label>
                            </div>

                            <div class="input-field col s12">
                                <textarea name="description" class="materialize-textarea validate" id="text" cols="30"
                                          rows="10"
                                          placeholder="Provide a detailed description"
                                          required>{{$Ad->title}}</textarea>
                                <label>Description</label>
                            </div>
                            <div class="input-field col s12">
                                <input name="quantity" type="number" placeholder="Quantity of your product"
                                       class="validate" value="{{$Ad->quantity}}" required>
                                <label>Quantity</label>
                            </div>
                            <div class="input-field price col s12">
                                <input name="price" type="text" value="{{$Ad->price}}" class="validate" required
                                       placeholder="Item/service price (include currency)">
                                <label>Price</label>
                            </div>

                            <div class="col s12 m12 upload">
                                {{--Todo: Images--}}
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
                                            <input name="image1" type="file" onchange="previewUpload1(this)"
                                                   class="validate" required>
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

                            <input type="hidden" name="_method" value="PUT">

                            <div class="center">
                                <button class="btn green btn-large" type="submit">Update Ad</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection