@extends('Plantilla.plantilla')

@section('titulo','show')

@section('contenido')

<style>
        .usuario-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .usuario-info {
            margin-bottom: 10px;
        }

        .usuario-info h6 {
            margin-top: 0;
            color: #00aaff;
            text-align: center;
        }

        .usuario-info p {
            margin-bottom: 0;
            color: #666;
            text-align: center;
        }

        .usuario-info b {
            color: #555;
        }


    @keyframes scrollAnimation {
    25% {
      transform: translateY(0);
      opacity: 0.3;
    }
    50% {
      transform: translateY(20px);
      opacity: 0.7;
    }
    100% {
      transform: translateY(0);
      opacity: 0.3;
    }
  }

  .scroll-animated {
    animation: scrollAnimation 5s infinite;
  }


    </style>
</head>
<body>

<br>
<br>
<div class="usuario-container">
    <div class="usuario-info">
        <h6><b>ID</b></h6>
        <p>{{$usuario->id}}</p>
    </div>

    <div class="usuario-info">
        <h6><b>NOMBRE</b></h6>
        <p>{{$usuario->nombre}}</p>
    </div>

    <div class="usuario-info">
        <h6><b>CORREO ELECTRONICO</b></h6>
        <p>{{$usuario->correo_electronico}}</p>
    </div>

    <div class="usuario-info">
        <h6><b>TELEFONO</b></h6>
        <p>{{$usuario->telefono}}</p>
    </div>

    <div class="usuario-info">
        <h6><b>DIRECCION</b></h6>
        <p>{{$usuario->direccion}}</p>
    </div>

</div>




 <p class="text-center">
    <center>
      <span class="scroll-animated">|       ✦</span><br>
      <span class="scroll-animated">✿           |      ✦</span><br>
      <span class="scroll-animated">                                ✦ .         .     👥</span>
    </center>

@endsection()