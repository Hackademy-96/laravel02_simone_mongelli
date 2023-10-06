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
 
   <div class="container">
    <div class="row">
        <div class="col-6">
            <h1>{{$annunci['name']}}</h1>
            {{-- <p>{{$annunci['description']}}</p> --}}
        </div>
        <div class="col-6"></div>
    </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>