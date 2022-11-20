@extends('layouts.layout')

@section('title')
Home
@endsection

@section('content')

<header id="Header">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container-fluid">
            <div class="first-content w-50">
                <a class="navbar-brand" href="{{url('/index')}}">
                    <ion-icon name="stats-chart-outline"></ion-icon> THE <span class="A4M">4AM</span> MINDEST
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="second-content collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li><a href="#packages">Packages</a></li>
                    <li class="active"><a href="#hotels">Hotels</a></li>
                    <li><a href="#contacts">Contacts</a></li>
                    <li><a href="#about">About</a></li>
                    <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">
                            <ion-icon name="person-outline"></ion-icon> Account <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="dropdown-content">
                            @guest
                            <a href="{{url('/signup')}}">
                                <ion-icon name="person-circle-outline"></ion-icon> SignUp
                            </a>
                            <a href="{{url('/login')}}">
                                <ion-icon name="log-in-outline"></ion-icon> Login
                            </a>
                            @endguest
                            @auth
                            <a href="{{url('/logout')}}">
                                <ion-icon name="log-out-outline"></ion-icon> LogOut
                            </a>
                            @endauth
                        </div>
                    </li>
                </ul>
                <div class="links">
                    <span class="icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </div>
            </div>
        </div>
    </nav>

    <section class="bground max-cont">

    </section>
    <footer class="row dom">
        <div class="divv col-md-4"></div>
        <div class="divvv col-md-4"></div>
        <div class="divvvv col-md-4"></div>
    </footer>
</header>

<section>
    <div class="qoute">
        <q class="lead mb-3">let foot be thy medicine and thy medicine by the food</q>
        <span>- Hippocrats</span>
    </div>
</section>

<section id="packages">

    <div class="row no-gutters">
        @foreach($cards as $c)
        <div class="one col-12 col-md-4">
            <div class="innerone">
                <img src="{{asset($c->pic)}}">
                <div class="caption">
                    <h3>{{$c->title}}</h3>
                    <p>{{$c->description}}</p>
                    <div><a href="{{url('/more',$c->id)}}">More Details</a></div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</section>

<section>
    <div class="row dom">
        <div class="divv col-md-4"></div>
        <div class="divvv col-md-4"></div>
        <div class="divvvv col-md-4"></div>
    </div>
</section>

<section>
    <div class="">
        <div class="card text-center">
            
            <div class="card-body">
                <h5 class="card-title">Sign up for our Newsletter</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="{{url('/signup')}}" class="mt-2 btn btn-info">Subscribe Now</a>
            </div>
            <div class="card-footer text-muted">
                <div class="d-flex justify-content-between">
                    <div class="contact">
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                    </div>
                    <p>Privacy Policy | Terms of Use</p>
                </div>
            </div>
        </div>

    </div>
</section>



@endsection