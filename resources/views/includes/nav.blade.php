<nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav mx-auto mt-2">
      @auth
        <li class="nav-item mx-2">
          <a class="btn btn-outline-primary" href="{{ url('/recipes') }}">List All Recipes</a>
        </li>
        <li class="nav-item dropdown mx-2">
          <a class="dropdown-toggle btn btn-outline-primary" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Recipe Categories
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="/recipes?tag=beef">Beef</a>
            <a class="dropdown-item" href="/recipes?tag=chicken">Chicken</a>
            <a class="dropdown-item" href="/recipes?tag=pork">Pork</a>
            <a class="dropdown-item" href="/recipes?tag=ham">Ham</a>
            <a class="dropdown-item" href="/recipes?tag=fish">Fish</a>
            <a class="dropdown-item" href="/recipes?tag=pasta">Pasta</a>
            <a class="dropdown-item" href="/recipes?tag=dessert">Dessert</a>
          </div>
        </li>
        <li class="nav-item mx-2">
          <a href="{{ url('/recipes/create') }}" class="btn btn-outline-primary">Add Recipe</a>
        </li>
        <li class="nav-item mx-2">
          <a href="{{ route('logout') }}" class="btn btn-outline-primary">Logout</a>
        </li>
      @else
        <li class="nav-item mx-2">
          <a href="{{ url('/') }}" class="btn btn-outline-primary">Welcome</a>
        </li>
        <li class="nav-item mx-2">
          <a href="{{ route('login') }}" class="btn btn-outline-primary">Login</a>
        </li>
      @endauth
    </ul>
  </div>
</nav>