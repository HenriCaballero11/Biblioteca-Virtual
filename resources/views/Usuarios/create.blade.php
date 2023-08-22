@extends('Plantilla.plantilla')

@section('titulo','create')

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
<title>Creación de Usuario</title>
</head>
<body>
  <div class="container">
    <h1>Creación de Usuario</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="post" action="{{route('usuarios.crear')}}">
      @csrf

      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre" value="{{ old('nombre') }}">
      </div>

      <div class="form-group">
        <label for="correo_electronico">Correo Electrónico</label>
        <input type="text" name="correo_electronico" id="correo_electronico" placeholder="Ingrese su Correo Electrónico" value="{{ old('correo_electronico') }}">
      </div>

      <div class="form-group">
        <label for="telefono">Teléfono</label>
        <input type="number" name="telefono" id="telefono" placeholder="Ingrese su Teléfono" value="{{ old('telefono') }}">
      </div>

      <div class="form-group">
        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" id="direccion" placeholder="Ingrese su Dirección" value="{{ old('direccion') }}">
      </div>

      <div class="form-group">
        <input type="submit" value="Guardar">
      </div>
    </form>
  </div>
</body>


@endsection()