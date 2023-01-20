



@include ("./partials/head")
@include ("./partials/header")

<h4> Listado de Noticias </h4>
@if (Session::has('mensaje'))
      <h5 class="input-group mb-3">{{ Session::get('mensaje') }}</h5>
@endif

<section class="myTable table">
  <a href="{{url('/noticia/create')}}" class="btn finalizar" > Crear Noticia </a>
  <br>
  <table class="table ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titulo</th>
      <th scope="col">Foto</th>
      <th scope="col">Subtitulo</th>
      <th scope="col">Contenido</th>
      <th scope="col">Categoria</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($noticias as $noticia)
      <tr>
        <th>{{ $noticia->id }}</th>
        <th>{{ $noticia->Titulo }}</th>
        <th><img src= "{{asset('storage').'/'. $noticia->Foto }}" alt="" width="150px"></th>
        <th>{{ $noticia->Categorias }}</th>
        <th>{{ $noticia->subTitulo }}</th>
        <th>{{ $noticia->Contenido }}</th>
        <th> 
          <a class="btn-sm finalizar" href="{{url('/noticia/' . $noticia->id. '/edit')}}">
          Editar</a>
          
          <form class="btn-sm finalizar" action="{{url('/noticia/' . $noticia->id)}}" method="POST">
            @csrf
            {{method_field('DELETE')}}
            <input type="submit" value="Borrar" onclick="return confirm('Quiere borrar la Noticia?')">
          </form> 
        </th>
      </tr>
    @endforeach
  </tbody>
</table>
</section>

@include ("./partials/footer")
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


