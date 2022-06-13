@extends('layouts.base')
@section('mainContent')
<div class="container">
    <div class="jumbotron">
        <img src="../img/jumbotron.jpg" alt="">
    </div>

    <div class="content">
        <div class="title">
            <h1>Current Series</h1>
        </div>
        @foreach ($comic as $comics)
        <div class="card">
            <img src="{{$comics['thumb']}}" alt="{{$comics['type']}}">
            <h2>{{$comics['series']}}</h2>
        </div>
        @endforeach
        
        <div class="button">
            <a href="#">Load more</a>
        </div>
    </div>

    <div class="image-container">
        <ul>
            <li><img src="img/buy-comics-digital-comics.png" :alt=""></li>
            <li>digital comics</li>
        </ul>
        <ul>
            <li><img src="img/buy-comics-merchandise.png" :alt=""></li>
            <li>dc merchandise</li>
        </ul>
        <ul>
            <li><img src="img/buy-comics-subscriptions.png" :alt=""></li>
            <li>subscription</li>
        </ul>
        <ul>
            <li><img src="img/buy-comics-shop-locator.png" :alt=""></li>
            <li>comic shop locator</li>
        </ul>
        <ul>
            <li><img src="img/buy-dc-power-visa.svg" :alt=""></li>
            <li>dc power visa</li>
        </ul>
    </div>
</div>
@endsection