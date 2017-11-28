<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="/">Open-Review</a>

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
      <li class="nav-item active">
        <a class="nav-link" href="{{URL::to('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('/articles')}}">Articles</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="{{URL::to('/login')}}">Log in</a>
          <a class="dropdown-item" href="{{URL::to('/register')}}">Sign in</a>
          <a class="dropdown-item" href="#">Messages</a>
          <a class="dropdown-item" href="#">Settings</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
  </nav>
