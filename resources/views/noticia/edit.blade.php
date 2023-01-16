@include ("./partials/head")
@include ("./partials/header")

   
   <h3> Edicion de Noticia </h3>
   <form class="form-Noticias" method="POST" action="{{url('/noticia')}}" enctype="multipart/form-data">
     {{ method_field('PATH')}}
     @include ('noticia/form');
   
   </form>
   
   

@include ("./partials/footer")