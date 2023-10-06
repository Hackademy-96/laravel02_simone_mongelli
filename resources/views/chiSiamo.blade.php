<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> SpazioLove</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- My Css -->
     <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>

  <!-- Inizio Navbar! -->
  <nav class="navbar navbar-expand-lg  nav-color ">
  <div class="container-fluid">
    <a class="navbar-brand white" href="#">SpazioLove</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto my-auto ">
        <li class="nav-item">
          <a class="nav-link white " aria-current="page" href="{{route('welcome')}}">HomePage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link white active" href="{{route('chi_Siamo')}}">Chi siamo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link white" href="{{route('Servizi')}}">Servizi</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2 p-1" type="search" placeholder="Cerca qui" aria-label="Search">
        
      </form>
    </div>
  </div>
</nav>
  <!-- Fine  Navbar! -->
 {{-- !INIZIO CARDS  --}}
 <h1 class="text-center display-5 color-text">SCOPRI I NOSTRI CONTATTI </h1>
 <div class="container-fluid">
     <div class="row">
            {{-- @foreach ($ as $) --}}
                <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div> 
            </div>
            {{-- @endforeach --}}
        </div>
    </div>
    {{-- !FINE CARDS  --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>