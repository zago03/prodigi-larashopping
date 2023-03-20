<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('categories.index') }}">Lara shooping</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('categories.index') }}">Home</a>
        </li>
        @foreach($categories as $index => $category)
        <li class="nav-item">
          <a class="nav-link">{{$category->name}}</a>
        </li>
        @endforeach
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Cerca" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Cerca</button>
      </form>
    </div>
  </div>
</nav>