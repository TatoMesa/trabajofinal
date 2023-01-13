
@include ("./partials/head")
@include ("./partials/header")
  <body>
      <section class= "noticias">
        @foreach ($noticias as $noticia)
          <div class="noticia" >
            <h2> {{$noticia->Titulo}} </h2>
            <img src= {{asset('/storage/'.'/', $noticia->Foto)}} alt="" >
            <div>
              <h4> {{$noticia->subTitulo}} </h4>
            </div>
            <div>
              {{$noticia->Contenido}}
            </div>
          </div>
        @endforeach  
      </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
  @include ("./partials/footer")
</html>
