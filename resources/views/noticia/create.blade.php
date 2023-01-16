
 @include ("./partials/head")
 @include ("./partials/header")

    
    <h3>Creacion de Noticias </h3>
    <form class="form-Noticias" method="POST" action="{{url('/noticia')}}" enctype="multipart/form-data">
      
      @include ('noticia/form');
    
    </form>
    
    

@include ("./partials/footer")
