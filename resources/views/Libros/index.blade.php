@extends('Plantilla.plantilla')

@section('titulo','index')

@section('contenido')

<style>


.btn {
    padding: 10px 20px;
    font-size: 14px;
    border-radius: 5px;
    cursor: pointer;
    transition: transform 0.3s ease-in-out;
  }

  .btn-primary:hover {
    animation: pulse 1s infinite;
  }

  .btn-danger:hover {
    animation: bounce 0.8s infinite;
  }

  @keyframes pulse {
    0%, 100% {
      transform: scale(1);
    }
    50% {
      transform: scale(1.1);
    }
  }

  @keyframes bounce {
    0%, 100% {
      transform: translateY(0);
    }
    50% {
      transform: translateY(-10px);
    }
  }
  @keyframes highlight {
    0%, 100% {
      color: #27ae60;
      transform: scale(1);
    }
    50% {
      color: #f39c12;
      transform: scale(1.1);
    }

    
  }

  .animated-title {
    font-style: italic;
    animation: highlight 3s infinite;
  }
</style>



<br>
<h1 class="text-center animated-title">. 　   · ✦Explora Nuestra Colección de Libros✦ ·   　  .</h1>

<br>
<!-- Barra de búsqueda -->
<div class="container-sm">
    <form action="{{ route('libros.buscar') }}" method="GET" class="d-flex">
        @csrf
        <input type="text" name="q" class="form-control me-2" placeholder="Buscar Libros..." value="{{ request()->input('q') }}">
        <button type="submit" class="btn btn-success">Buscar</button>
    </form>
</div>
<br>

<div class="container-sm">
<table class="table" class="pagination">
  <thead>
    <tr>
      <th >ID</th>
      <th >TITULO</th>
      <th >AUTOR</th>
      <th >EDITORIAL</th>
      <th >AÑO PUBLICACION</th>
      <th >CANTIDAD DISPONIBLE</th>
      <th colspan="2"><center>ACCIONES</center></th>


    </tr>
  </thead>
  <tbody>
    
  @forelse($libros as $libro)
    <tr>
    <td><a href="{{route('libro.show', ['id'=>$libro->id])}}" class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">{{$libro->id}}</a></td>
      <td>{{$libro->titulo}}</td>
      <td>{{$libro->autor}}</td>
      <td>{{$libro->editorial}}</td>
      <td>{{$libro->anio_publicacion}}</td>
      <td>{{$libro->cantidad_disponible}}</td>
      <td><a href="{{route('libros.editar', ['id'=>$libro->id])}}"><button type="button" class="btn btn-primary">Editar</button></a></td>
      <td><form method="post" action="{{route('libros.borrar', ['id'=>$libro->id])}}">@csrf @method('delete')<input type="submit" value="Eliminar" class="btn btn-danger"></form></td>

    </tr>
    @empty
        <tr>
            <td>No hay Libros disponibles en este momento</td>
        </tr>
        @endforelse
  </tbody>
</table>
</div>

<center><a href="{{route('libros.crear')}}"><button type="button" class="btn btn-success"> Nuevo Libro</button></a></h1></center>
<br>

<div class="container-sm">
{{ $libros->render('pagination::bootstrap-5') }}

</div>

@endsection()