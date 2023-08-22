@extends('Plantilla.plantilla')

@section('titulo','show')

@section('contenido')

<style>
        .book-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .book-info {
            margin-bottom: 10px;
        }

        .book-info h6 {
            margin-top: 0;
            color: #00aaff; 
            text-align: center;
        }

        .book-info p {
            margin-bottom: 0;
            color: #666;
            text-align: center;
        }

        .book-info b {
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
<div class="book-container">
    <div class="book-info">
        <h6><b>ID</b></h6>
        <p>{{$libro->id}}</p>
    </div>

    <div class="book-info">
        <h6><b>TITULO</b></h6>
        <p>{{$libro->titulo}}</p>
    </div>

    <div class="book-info">
        <h6><b>AUTOR</b></h6>
        <p>{{$libro->autor}}</p>
    </div>

    <div class="book-info">
        <h6><b>EDITORIAL</b></h6>
        <p>{{$libro->editorial}}</p>
    </div>

    <div class="book-info">
        <h6><b>AÑO PUBLICACION</b></h6>
        <p>{{$libro->anio_publicacion}}</p>
    </div>

    <div class="book-info">
        <h6><b>CANTIDAD DISPONIBLE</b></h6>
        <p>{{$libro->cantidad_disponible}}</p>
    </div>
</div>



 <p class="text-center">
    <center>
      <span class="scroll-animated">|       ✦</span><br>
      <span class="scroll-animated">✿           |      ✦</span><br>
      <span class="scroll-animated">                                ✦ .         .     📚</span>
    </center>

@endsection()