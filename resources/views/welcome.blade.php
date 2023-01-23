
@include ("./partials/head")
@include ("./partials/header")
  <body>

    


    
      <section class= "noticias">
        @foreach ($noticias as $noticia)
          
          @switch($noticia->Categorias)
            @case("Actualidad")
              @php $colorFondo = "#FFDAB9"; @endphp
              @break
     
            @case("Economia")
              @php $colorFondo = "#AFEEEE"; @endphp
              @break

            @case("Espectaculos")
              @php $colorFondo = "#FFFACD"; @endphp
              @break

            @case("Deportes")
              @php $colorFondo = "#F5F5DC"; @endphp
              @break

            @case("Naturaleza")
              @php $colorFondo = "#66CDAA"; @endphp
              @break

            @case("Politica")
              @php $colorFondo = "#FFDEAD"; @endphp
              @break
     
            @default
              @php $colorFondo = "#48D1CC"; @endphp
          @endswitch
         
          <a href="{{url('noticia/'. $noticia->id. 'show/')}}" target="_blank"><div class="noticia" style= "background-color: {{$colorFondo}}">
            <h2> {{$noticia->Titulo}} </h2>
            <div class="imagen" style="aspect-ratio: 16 / 9; background-size: contain;">
                <img src= "{{asset('storage').'/'. $noticia->Foto }}" alt="" >
            </div>
            <h3> {{$noticia->subTitulo}} </h3>
            <div class= "bajada">
              {{$noticia->Contenido}}
            </div>
          </div></a>
        @endforeach  
      </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
  @include ("./partials/footer")
</html>
