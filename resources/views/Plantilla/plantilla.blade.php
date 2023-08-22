<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-primary" >
  <div class="container-fluid">
    <a class="navbar-brand"><FONT COLOR="white">Biblioteca Virtual</FONT></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active"   href="{{route ('libro.index')}}"  aria-current="page" ><FONT COLOR="white">Libros</FONT></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('prestamo.index')}}"><FONT COLOR="white">Prestamos</FONT></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route ('usuario.index')}}" ><FONT COLOR="white">Usuarios</FONT></a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>


<div>
    @yield('contenido')
    
</div>



  </body>
</html>