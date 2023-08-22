@extends('Plantilla.plantilla')

@section('titulo','show')

@section('contenido')

<style>


        .prestamo-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .prestamo-info {
            margin-bottom: 10px;
        }

        .prestamo-info h6 {
            margin-top: 0;
            color: #00aaff;
            text-align: center;
        }

        .prestamo-info p {
            margin-bottom: 0;
            color: #666;
            text-align: center;
        }

        .prestamo-info b {
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
<div class="prestamo-container">
    <div class="prestamo-info">
        <h6><b>ID</b></h6>
        <p>{{$prestamo->id}}</p>
    </div>

    <div class="prestamo-info">
        <h6><b>FECHA SOLICITUD</b></h6>
        <p>{{$prestamo->fecha_solicitud}}</p>
    </div>

    <div class="prestamo-info">
        <h6><b>FECHA PRESTAMO</b></h6>
        <p>{{$prestamo->fecha_prestamo}}</p>
    </div>

    <div class="prestamo-info">
        <h6><b>FECHA DEVOLUCION</b></h6>
        <p>{{$prestamo->fecha_devolucion}}</p>
    </div>

    <div class="prestamo-info">
        <h6><b>LIBRO ID</b></h6>
        <p>{{$prestamo->libro_id}}</p>
    </div>

    <div class="prestamo-info">
        <h6><b>USUARIO ID</b></h6>
        <p>{{$prestamo->usuario_id}}</p>
    </div>
</div>




 <p class="text-center">
    <center>
      <span class="scroll-animated">|       ✦</span><br>
      <span class="scroll-animated">✿           |      ✦</span><br>
      <span class="scroll-animated">                                ✦ .         .     ⌛</span>
    </center>

@endsection()