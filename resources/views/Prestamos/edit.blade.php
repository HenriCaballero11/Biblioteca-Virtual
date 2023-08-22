@extends('Plantilla.plantilla')

@section('fecha_solicitud','create')

@section('contenido')

<style>
  body {
    font-family: Arial, sans-serif;
  }

  .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .container h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #2980b9;
  }

  .form-group {
    margin-bottom: 15px;
  }

  label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #333;
  }

  input[type="text"],
  input[type="number"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
  }

  input[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #27ae60;
    color: #fff;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
  }

  input[type="submit"]:hover {
    background-color: #219653;
  }
</style>

  <br>
  <br>
<title>Creación de Nuevo Prestamo</title>
</head>
<body>
  <div class="container">
    <h1>Creación de Nuevo Prestamo</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

          

    <form method="post" >
    @method('PUT')
      @csrf

      <div class="form-group">
        <label for="fecha_solicitud">Fecha de Solicitud</label>
        <input type="number" name="fecha_solicitud" id="fecha_solicitud" placeholder="Ingrese la fecha de solicitud de el libro" value="{{ old('fecha_solicitud') ?? $prestamo->fecha_solicitud }}">
      </div>

      <div class="form-group">
        <label for="fecha_prestamo">Fecha de Prestamo</label>
        <input type="number" name="fecha_prestamo" id="fecha_prestamo" placeholder="Ingrese la fecha de prestamo de el libro" value="{{ old('fecha_prestamo') ?? $prestamo->fecha_prestamo}}">
      </div>

      <div class="form-group">
        <label for="fecha_devolucion">Fecha de Devolucion</label>
        <input type="number" name="fecha_devolucion" id="fecha_devolucion" placeholder="Ingrese el fecha de devolucion de el libro" value="{{ old('fecha_devolucion') ?? $prestamo->fecha_devolucion}}">
      </div>

      <div class="form-group">
        <label for="libro_id">ID de Libro</label>
        <input type="number" name="libro_id" id="libro_id" placeholder="Ingrese el ID de el libro" value="{{ old('libro_id') ?? $prestamo->libro_id }}">
      </div>

      <div class="form-group">
        <label for="usuario_id">ID de Usuario</label>
        <input type="number" name="usuario_id" id="usuario_id" placeholder="Ingrese el ID de el usuario" value="{{ old('usuario_id') ?? $prestamo->usuario_id}}">
      </div>

      

      <div class="form-group">
        <input type="submit" value="Guardar">
      </div>
    </form>
  </div>
</body>


@endsection()