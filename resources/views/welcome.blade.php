
@include ("./partials/head")
@include ("./partials/header")
  <body>
    <section id="cotizaciones"> </section>
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
        <a href="{{url('noticia/'. $noticia->id. 'show/')}}" target="_blank"> 
          <div class="noticia" style= "background-color: {{$colorFondo}}">
            <div class="imagen" style="aspect-ratio: 16 / 9; background-size: contain;">
              <img src= "{{asset('storage').'/'. $noticia->Foto }}" alt="" >
            </div>
            <h2> {{$noticia->Titulo}} </h2>
            <div class= "bajada">
              {{$noticia->Contenido}}
            </div>
          </div>
        </a>
        @endforeach  
    </section>
  </body>
  @include ("./partials/footer")
  <script src="{{asset('app.js')}}" type="module"></script>
</html>
