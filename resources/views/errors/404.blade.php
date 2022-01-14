@extends('layouts.front')

@section('title')
    Error Page
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <img src="{{asset('images/error.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-8 text-center">
            <a href="/" class="btn btn-danger btn-block align-items-center">Back To Home</a>
        </div>
    </div>
@endsection