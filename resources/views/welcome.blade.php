
@include ("./partials/head")
@include ("./partials/header")
    
  <body>
    @foreach ($noticias as $noticia)
      <section class= "noticias">
        <div class="noticia" >
          <h2>
            {{noticias->Titulo}}             
          </h2>
          <img src="{{asset('/images/Aurora.webp')}}" alt="foto">
          <div>
              <H4>
                     ¿Qué te espera?
              </H4>
          </div>
          <div>
                 ¿Alguna vez has querido ver una de esas asombrosas luces danzantes en el cielo, la famosa aurora boreal? Si viajas a Islandia, ¡asegúrate de ir en su búsqueda! Únete a esta excursión para emprender un viaje misterioso en una oscura noche de invierno.
          </div>
        </div>
         
      </section>
    @endforeach
           
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>

  @include ("./partials/footer")
    
</html>
