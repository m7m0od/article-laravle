@extends('layouts.layout')

@section('title')
More
@endsection

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{asset($card->pic)}}" class="card-img-top" class="w-100" alt="...">
            </div>
        </div>
        <div class="col-md-8">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$card->title}}</h5>
                    <p class="card-text">{{$card->description}}</p>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{url('/index')}}" class="btn btn-primary">Go back</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection