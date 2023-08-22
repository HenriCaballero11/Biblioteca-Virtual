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
<h1 class="text-center" style="font-style: italic; color: #e67e22;">Usuarios -> <a href="{{route('usuarios.crear')}}"><button type="button" class="btn btn-primary btn-lg"> Nuevo Usuario</button></a></h1>


<br>

<!-- Barra de búsqueda -->
<div class="container-sm">
    <form action="{{ route('usuarios.buscar') }}" method="GET" class="d-flex">
        @csrf
        <input type="text" name="q" class="form-control me-2" placeholder="Buscar usuarios..." value="{{ request()->input('q') }}">
        <button type="submit" class="btn btn-success">Buscar</button>
    </form>
</div>

<br>

<div class="container-sm">
<table class="table" class="pagination">
  <thead>
    <tr>
      <th >ID</th>
      <th >NOMBRE</th>
      <th >CORREO ELECTRONICO</th>
      <th >TELEFONO</th>
      <th >DIRECCION</th>
      <th colspan="2"><center>ACCIONES</center></th>
      
    </tr>
  </thead>
  <tbody>
    
  @forelse($usuarios as $usuario)
    <tr>
    <td><a href="{{route('usuario.show', ['id'=>$usuario->id])}}" class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">{{$usuario->id}}</a></td>
      <td>{{$usuario->nombre}}</td>
      <td>{{$usuario->correo_electronico}}</td>
      <td>{{$usuario->telefono}}</td>
      <td>{{$usuario->direccion}}</td>
      <td><a href="{{route('usuarios.editar', ['id'=>$usuario->id])}}"><button type="button" class="btn btn-primary">Editar</button></a></td>
      


      <td><form method="post" action="{{route('usuarios.borrar', ['id'=>$usuario->id])}}">@csrf @method('delete')<input type="submit" value="Eliminar" class="btn btn-danger"></form></td>



    </tr>
    @empty
        <tr>
            <td>No hay Usuarios disponibles en este momento</td>
        </tr>
        @endforelse
  </tbody>
</table>
</div>

<br>

<div class="container-sm">
{{ $usuarios->render('pagination::bootstrap-5') }}
</div>

@endsection()