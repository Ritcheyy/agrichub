@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        You are logged in!
                    </div>

                    <a class="waves-effect waves-light btn">button</a>
                    <a class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>button</a>
                    <a class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>button</a>

                </div>
            </div>
        </div>
    </div>
@endsection
