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
<title>Creación de Nuevo Libro</title>
</head>
<body>
  <div class="container">
    <h1>Creación de Nuevo Libro</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="post" action="{{route('libros.crear')}}">
      @csrf

      <div class="form-group">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" id="titulo" placeholder="Ingrese el titulo de el libro" value="{{ old('titulo') }}">
      </div>

      <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" name="autor" id="autor" placeholder="Ingrese el autor de el libro" value="{{ old('autor') }}">
      </div>

      <div class="form-group">
        <label for="editorial">Editorial</label>
        <input type="text" name="editorial" id="editorial" placeholder="Ingrese la casa editorial" value="{{ old('editorial') }}">
      </div>

      <div class="form-group">
        <label for="anio_publicacion">Año de Publicacion</label>
        <input type="number" name="anio_publicacion" id="anio_publicacion" placeholder="Ingrese año de publicacion" value="{{ old('anio_publicacion') }}">
      </div>

      <div class="form-group">
        <label for="cantidad_disponible">Cantidad Disponible</label>
        <input type="number" name="cantidad_disponible" id="cantidad_disponible" placeholder="Ingrese la cantidad disponible" value="{{ old('cantidad_disponible') }}">
      </div>

      <div class="form-group">
        <input type="submit" value="Guardar">
      </div>
    </form>
  </div>
</body>


@endsection()