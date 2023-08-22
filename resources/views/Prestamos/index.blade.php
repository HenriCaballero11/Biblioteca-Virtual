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

  
  
</style>




<br>
<h1 class="text-center" style="font-style: italic; color:  #27ae60;" >Prestamos -> <a href="{{route('prestamos.crear')}}"><button type="button" class="btn btn-primary btn-lm"> Nuevo Prestamo</button></a></h1>

<br>

<!-- Barra de búsqueda -->
<div class="container-sm">
    <form action="{{ route('prestamos.buscar') }}" method="GET" class="d-flex">
        @csrf
        <input type="text" name="q" class="form-control me-2" placeholder="Buscar prestamos..." value="{{ request()->input('q') }}">
        <button type="submit" class="btn btn-success">Buscar</button>
    </form>
</div>

<br>

<div class="container-sm">
<table class="table" class="pagination">
  <thead>
    <tr>
      <th >ID</th>
      <th >FECHA SOLICITUD</th>
      <th >FECHA PRESTAMO</th>
      <th >FECHA DEVOLUCION</th>
      <th >LIBRO ID</th>
      <th >USUARIO ID</th>
      <th colspan="2"><center>ACCIONES</center></th>
    </tr>
  </thead>
  <tbody>
    
  @forelse($prestamos as $prestamo)
    <tr>
    <td><a href="{{route('prestamo.show', ['id'=>$prestamo->id])}}" class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">{{$prestamo->id}}</a></td>
      <td>{{$prestamo->fecha_solicitud}}</td>
      <td>{{$prestamo->fecha_prestamo}}</td>
      <td>{{$prestamo->fecha_devolucion}}</td>
      <td>{{$prestamo->libro_id}}</td>
      <td>{{$prestamo->usuario_id}}</td>
      <td><a href="{{route('prestamos.editar', ['id'=>$prestamo->id])}}"><button type="button" class="btn btn-primary">Editar</button></a></td>
      <td><form method="post" action="{{route('prestamos.borrar', ['id'=>$prestamo->id])}}">@csrf @method('delete')<input type="submit" value="Eliminar" class="btn btn-danger"></form></td>

      
    </tr>
    @empty
        <tr>
            <td>No hay Prestamos disponibles en este momento</td>
        </tr>
        @endforelse
  </tbody>
</table>
</div>

<br>

<div class="container-sm">
{{ $prestamos->render('pagination::bootstrap-5') }}
</div>

@endsection()