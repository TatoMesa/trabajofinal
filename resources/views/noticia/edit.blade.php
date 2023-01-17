@include ("./partials/head")
@include ("./partials/header")

   
   <h3> Edicion de Noticia </h3>
   <form class="form-Noticias" method="POST" action="{{url('/noticia/'. $noticia->id)}}" enctype="multipart/form-data">
     {{ method_field('PATCH')}}
     @include ('noticia.form',['accion'=>'Editar']);
   
   </form>
   
   

@include ("./partials/footer")