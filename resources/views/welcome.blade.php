<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SpazioLove</title>
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
          <a class="nav-link active white " aria-current="page" href="{{route('welcome')}}">HomePage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link white" href="{{route('chi_Siamo')}}">Chi siamo</a>
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
  {{-- !inizio header  --}}
  <div id="carouselExampleSlidesOnly" class="carousel slide carousel-wrap" data-bs-ride="carousel">
    <div class="carousel-inner carousel-wrap">
      <div class="carousel-item active">
        <img src="/images/gioco1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/images/gioco2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/images/gioco3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
  {{-- !fine header  --}}
    <h1 class="text-center display-5 color-text">SCOPRI I NOSTRI ANNUNCI </h1>
    <div class="container-fluid">
        <div class="row justify-content-center">
            @foreach ($articoli as $articolo)
                <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{$articolo['img']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$articolo['name']}}</h5>
                      <p class="card-text">{{$articolo['description']}}</p>
                      <h5 class="card-title">{{$articolo['price']}}</h5>
                      <p class="card-text"><small class="text-body-secondary">{{$articolo['seller']}}</small></p>
                      <a href="{{route('giocattoli_detail', ['article'=> $articolo['name']])}}" class="btn btn-primary">Visualizza dettagli</a>
                    </div>
                </div> 
            </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>