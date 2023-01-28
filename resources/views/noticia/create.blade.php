
@include ("./partials/head")
@include ("./partials/header")

<h4 class="input-group mb-3"> Ingrese las partes del Post a publicar </h4>
    @if (Session::has('mensaje'))
      <h5>{{ Session::get('mensaje') }}</h5>
    @endif
    <form class="form-Noticias" method="POST" action="{{url('/noticia')}}" enctype="multipart/form-data">
      @include ('noticia.form',['accion' => 'Crear'])
    </form>
@include ("./partials/footer")
