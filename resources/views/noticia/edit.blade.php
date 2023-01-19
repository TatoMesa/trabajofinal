@include ("./partials/head")
@include ("./partials/header")

<h4 class="input-group mb-3"> Edite los campos necesarios </h4>
  <form class="form-Noticias" method="POST" action="{{url('/noticia/'. $noticia->id)}}" enctype="multipart/form-data">
    {{ method_field('PATCH')}}
    @include ('noticia.form',['accion'=>'Editar']);
   
  </form>
@include ("./partials/footer")