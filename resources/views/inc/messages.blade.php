@if(count($errors)>0)
    <center>
        <div class="alert-danger">
            @foreach($errors->all() as $error)
                <ul>
                    <li>{{$error}}</li>
                </ul>
            @endforeach
        </div>
    </center>
@endif

@if(session('success'))
    <center>
        <div class="alert-success">
            {{session('success')}}
        </div>
    </center>
@endif

@if(session('error'))
    <center>
        <div class="alert-danger">
            {{session('error')}}
        </div>
    </center>

@endif