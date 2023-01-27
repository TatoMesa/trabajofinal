@include ("./partials/head")

<body class="vista_noticia">
    
  <div class="noticia-ampliada">
    <h5>{{$noticia->Titulo}} </h5>
    <div class="imagen-fecha">
      <img src="{{asset('storage').'/'. $noticia->Foto }}" alt="...">
      <legend class="legenda">{{$noticia->created_at}}</legend>
      <legend class="legenda">Derechos reservados al autor " {{$noticia->Autor}} " </legend>
      <legend class="legenda">Visitas: {{$noticia->Visitas}}</legend>
      <hr>
    </div>
    <div>
      <h6>{{$noticia->Subtitulo}}  </h6>  
      <p>{{$noticia->Contenido}}</p>
    </div>
  </div>

</body>


