<header class="nav-container">
  <div class="nav">
    <div class="logo-container">
      <img src={{ asset('images/dc-logo.png') }} alt="DCLogo" />
    </div>
    <ul class="nav-ul">
      @foreach ($utility['nav'] as $element)
      <li class="nav-li">
        <a href={{ $element['url'] }}>{{ $element['text'] }}</a>
      </li>
      @endforeach
    </ul>
  </div>
</header>