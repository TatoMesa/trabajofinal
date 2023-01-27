



@include ("./partials/head")
@include ("./partials/header")

<h4> Listado de Noticias </h4>
@if (Session::has('mensaje'))
      <h5 class="input-group mb-3">{{ Session::get('mensaje') }}</h5>
@endif

<section class="myTable table table-responsive">
  <a href="{{url('/noticia/create')}}" class="btn finalizar" > Crear Noticia </a>
  <br>
  <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titulo</th>
      <th scope="col">Foto</th>
      <th scope="col">Categoria</th>
      <th scope="col">Subtitulo</th>
      <th scope="col">Contenido</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>



    @foreach ($noticias as $noticia)

      
      
      @if ((Auth::user()->name == $noticia->Autor) or (Auth::user()->name == "admin"))
        <tr>
          <td>{{ $noticia->id }}</td>
          <td><div class="contenido">{{ $noticia->Titulo }}</div></td>
          <td><img src= "{{asset('storage').'/'. $noticia->Foto }}" alt="" width="150px"></td>
          <td>{{ $noticia->Categorias }}</td>
          <td><div class="contenido">{{ $noticia->Subtitulo }}</div></td>
          <td><div class="contenido">{{ $noticia->Contenido }}</div></td>
          <td class="twoButons"> 
            <a class="btn-sm finalizar" href="{{url('/noticia/' . $noticia->id. '/edit')}}">
            Editar</a>
          
            <form class="btn-sm finalizar" action="{{url('/noticia/' . $noticia->id)}}" method="POST">
              @csrf
              {{method_field('DELETE')}}
              <input type="submit" value="Borrar" onclick="return confirm('Quiere borrar la Noticia?')">
            </form></td>
        </tr>
      @endif
    
    
    @endforeach
  </tbody>
</table>
</section>

@include ("./partials/footer")



