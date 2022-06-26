<footer>
  <div class="footer-container">
    <div class="footer-menu">
      <ul class="menu-container">
        @foreach ($utility['footer_menu'] as $element)
        <li>
          <div class="icon">
            <img src={{ asset($element['icon']) }} alt={{ $element['text'] }} />
          </div>
          <a href="">{{ $element['text'] }}</a>
        </li>
        @endforeach
      </ul>
    </div>
    <div class="footer-links">
      <div class="link-col">
        <h3>Dc Comics</h3>
        <ul>
          <li><a href="">Characters</a></li>
          <li><a href="">Comics</a></li>
          <li><a href="">Movies</a></li>
          <li><a href="">Tv</a></li>
          <li><a href="">Games</a></li>
          <li><a href="">Videos</a></li>
          <li><a href="">News</a></li>
        </ul>
        <h3>Shop</h3>
        <ul>
          <li><a href="">Shop DC</a></li>
          <li><a href="">Shop DC Collectibles</a></li>
        </ul>
      </div>
      <div class="link-col">
        <h3>DC</h3>
        <ul>
          <li><a href="">Terms Of Use</a></li>
          <li><a href="">Privacy Policy (New)</a></li>
          <li><a href="">Ad CHoices</a></li>
          <li><a href="">Advertising</a></li>
          <li><a href="">Jobs</a></li>
          <li><a href="">Subscriptions</a></li>
          <li><a href="">Talent Workshop</a></li>
          <li><a href="">CPSC Certifications</a></li>
          <li><a href="">Ratings</a></li>
          <li><a href="">Shop Help</a></li>
          <li><a href="">Contact Us</a></li>
        </ul>
      </div>
      <div class="link-col-top">
        <h3>Sites</h3>
        <ul>
          <li><a href="">DC</a></li>
          <li><a href="">MAD Magazine</a></li>
          <li><a href="">DC Kids</a></li>
          <li><a href="">DC Universe</a></li>
          <li><a href="">DC Power Visa</a></li>
        </ul>
      </div>
    </div>
    <div class="img-container">
      <img src={{ asset('/images/dc-logo-bg.png') }} alt="" />
    </div>
    <div class="footer-bottom">
      <div class="footer-btm-container">
        <button class="btn">Sign-up now!</button>
        <div class="right-section">
          <h2>Follow us</h2>
          <ul>
            @foreach ($utility['icons'] as $icon)
            <li>
              <div class="icon-container">
                <img src={{ $icon['img'] }} alt={{ $icon['alt'] }} />
              </div>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>