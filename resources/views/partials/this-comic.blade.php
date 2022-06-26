<div class="main-container">
  <div class="banner">
    <div class="line">

    </div>
  </div>
  <div class="comics-list">
    @foreach ($comics as $comic)
    <a href="">
      <div class="card-container">
        <img src={{ $comic['thumb'] }} alt={{ $comic['series'] }} />
        <h4>{{ $comic['series'] }}</h4>
      </div>
    </a>
    @endforeach
  </div>
  <div class="btn-container">
    <button class="btn">Load more</button>
  </div>
</div>