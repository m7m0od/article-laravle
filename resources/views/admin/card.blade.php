@extends('layouts/back')

@section('title')
    Card
@endsection

@section('content')
<div class="row">
    @foreach($cards as $card)       
    <div class="col-md-4">
    <div class="cardd" >
  <img src="{{asset($card->pic)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$card->title}}</h5>
    <h6 class="card-text">{{$card->description}}</h6>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{$card->text}}</li>
  </ul>
  <div class="card-body">
    <a href="{{url('/updateForm/'.$card->id)}}" class="card-link">update</a>
    <a href="{{url('/delete/'.$card->id)}}" class="card-link">delete</a>
  </div>
</div>
    </div>                        
    @endforeach
</div>
@endsection