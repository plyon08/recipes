<header class='row'>
  <section class='col'>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="{{ url('/') }}">Recipes</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarToggler">
        <ul class="navbar-nav">
          @auth
            <li class="nav-item">
              <a class="btn btn-outline-primary" href="{{ url('/recipes') }}">List All Recipes</a>
            </li>
            <li class="nav-item dropdown">
              <a class="dropdown-toggle btn btn-outline-primary" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Recipe Categories
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ url('/recipes?tag=Beef') }}">Beef</a>
                <a class="dropdown-item" href="{{ url('/recipes?tag=Chicken') }}">Chicken</a>
                <a class="dropdown-item" href="{{ url('/recipes?tag=Pork') }}">Pork</a>
                <a class="dropdown-item" href="{{ url('/recipes?tag=Ham') }}">Ham</a>
                <a class="dropdown-item" href="{{ url('/recipes?tag=Fish') }}">Fish</a>
                <a class="dropdown-item" href="{{ url('/recipes?tag=Pasta') }}">Pasta</a>
                <a class="dropdown-item" href="{{ url('/recipes?tag=Dessert') }}">Dessert</a>
              </div>
            </li>
            <li class="nav-item">
              <a href="{{ url('/recipes/create') }}" class="btn btn-outline-primary">Add Recipe</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('logout') }}" class="btn btn-outline-primary">Logout</a>
            </li>
          @else
            <li class="nav-item">
              <a href="{{ route('login') }}" class="btn btn-outline-primary">Login</a>
            </li>
          @endauth
        </ul>
      </div>
    </nav>
  </section>
</header>
