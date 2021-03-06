  <!-- From Official bootstrap: examples. -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="{{URL::to('/')}}">Open-Review</a>

  <button class="navbar-toggler"
  type="button"
  data-toggle="collapse"
  data-target="#navbarsDefault"
  aria-controls="navbarsDefault"
  aria-expanded="false"
  aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse"
  id="navbarsDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ Request::is('articles') || Request::is('/') ? "active" : ''}}">
        <a class="nav-link" href="{{URL::to('/articles')}}">Articles</a>
      </li>
      @if (Auth::check())
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="{{URL::to('/logout')}}">Log out</a>
            <a class="dropdown-item" href="{{URL::to('/myArticles')}}">My articles</a>
            <a class="dropdown-item" href="{{URL::to('/myReviews')}}">My reviews</a>
          </div>
        </li>
      @else
        <li class="nav-item {{ Request::is('login') ? "active" : ''}}">
          <a class="nav-link" href="{{URL::to('/login')}}">Log in</a>
        </li>
        <li class="nav-item {{ Request::is('register') ? "active" : ''}}">
          <a class="nav-link" href="{{URL::to('/register')}}">Sign in</a>
        </li>
      @endif
    </ul>
    <ul class="navbar-nav mr-auto ml-2">
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </ul>
  </div>
</nav>
