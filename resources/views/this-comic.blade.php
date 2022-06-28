@extends('layouts.app')

@section('title')
    DC Comics | {{$comic['title']}}
@endsection

@section('home')
<div class="main-container">
  <div class="banner">
  </div>
  <div class="line">
  </div>
  <div class="container">
    <div class="thumb-container">
      <div class="top-details">{{$comic['type']}}</div>
      <img src={{ $comic['thumb'] }} alt={{ $comic['series'] }}>
      <div class="btm-details">View Gallery</div>
    </div>
    <div class="info-container">
      <div class="info">
        <h1>{{ $comic['title'] }}</h1>
        <div class="available">
          <div class="left">
            <div>U.S. Price: <span>{{$comic['price']}}</span></div>
            <div>Available</div>
          </div>
          <div class="right">Check Availability &#9660;</div>
        </div> 
        <p class="description">{{$comic['description']}}</p>
      </div>
      <div class="ad">
        <h4 class="adv">Advertisement</h4>
        <img src="{{ asset('images/adv.jpg') }}" alt="Adv"/>
      </div>  
    </div>
    <div class="details">
      <div class="col">
        <h3>Talent</h3> 
        <div class="row">
          <h4>Art by:</h4>
          <p>
            @foreach($comic['artists'] as $artist)
            {{$artist}},
            @endforeach      
          </p>
        </div>
        <div class="row">
          <h4>Written by:</h4>
          <p>
            @foreach($comic['writers'] as $writer)
            {{$writer}},
            @endforeach
          </p>        
        </div>         
      </div>
      <div class="col ml-5">
        <h3>Specs</h3>
        <div class="row">
          <h4>Series:</h4>
          <p>Action Comics</p>
        </div>
        <div class="row">
          <h4>U.S. Price:</h4>
          <p class="color">{{$comic['price']}}</p>
        </div>
        <div class="row">
          <h4>On Sale Date:</h4>
          <p class="color">{{\Carbon\Carbon::parse($comic['sale_date'])->format('M d Y')}}</p>
        </div>
      </div>
  
    </div>
    </div>
  </div>
</div>
@endsection