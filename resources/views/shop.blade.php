@extends('layouts.card')
@section('cardContent')
<div class="jumbotron">
    <img src="../img/jumbotron.jpg" alt="">
    <div class="image-hover">
        <img src="{{$comic[0]['thumb']}}" alt="{{$comic[0]['series']}}">
        <div class="comic-book">Comic book</div>
        <div class="view">View Gallery</div>
    </div>
</div>
<div class="line"></div>
<div class="main-up">
    <div class="center">
    <h2>{{$comic[0]['title']}}</h2>
    <div class="green-line">
        <div class="col-sx">
        <p>U.S. Price: <span class="price">{{$comic[0]['price']}}</span> <span class="available">AVAILABLE</span> <span class="vertical">|</span><span class="check">Check Availability 	
            &#9660;</span></p>
        </div>
    </div>
    <p>{{$comic[0]['description']}}</p>
    <div class="adv">
    <h4>Advertisement </h4>
    <img src="img/adv.jpg" alt="advertisement">
    </div>
    </div>
</div>
<div class="main-down">
    <div class="col-left">
        <h3>Talent</h3>
        <hr>
        <div class="list">
            <h6>Art by: 
                <span class="artist">
                    @foreach ($comic[0]['artists'] as $artist)
                        {{$artist}},
                    @endforeach
                </span>
            </h6>
            <hr>
            <h6>Written by:
                <span class="artist">
                    @foreach ($comic[0]['writers'] as $writer)
                        {{$writer}},
                    @endforeach
                </span>
            </h6>
            <hr>
        </div>
    </div>
    <div class="col-right">
        <h3>Specs</h3>
        <hr>
        <h6>Series: <span class="artist">{{$comic[0]['series']}}</span></h6>
        <hr>
        <h6>U.S. Price: <span class="sale">{{$comic[0]['price']}}</span></h6>
        <hr>
        <h6>On sale date: <span class="sale">{{$comic[0]['sale_date']}}</span></h6>
        <hr>
    </div>
    <div class="box">
        <div class="box-center">
            <img src="img/buy-comics-digital-comics.png" alt="">
        </div>
        <div class="box-center">
            <img src="img/buy-comics-merchandise.png" alt="">
        </div>
        <div class="box-center">
            <img src="img/buy-comics-shop-locator.png" alt="">
        </div>
        <div class="box-center">
            <img src="img/buy-comics-subscriptions.png" alt="">
        </div>
    </div>
</div>
@endsection