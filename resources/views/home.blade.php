@extends('layouts.app')

@section('title')
    DC Comics | Homepage
@endsection

@section('home')
<div class="main-container">
    <div class="banner">
      <h3 class="box">Current Series</h3>
    </div>
    <div class="comics-list">
      @foreach ($comics as $comic)
        <div class="card-container">
          <a href={{ route('this-comic', $loop->index) }}>
            <img src={{ $comic['thumb'] }} alt={{ $comic['series'] }} />
          </a>
          <h4>{{ $comic['series'] }}</h4>
        </div>
      @endforeach
    </div>
    <div class="btn-container">
      <button class="btn">Load more</button>
    </div>
</div>

@endsection
