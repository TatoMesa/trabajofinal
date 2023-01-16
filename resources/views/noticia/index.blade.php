@include ("./partials/head")
@include ("./partials/header")


<section class="myTable">
  <a href="{{url('/noticia/create')}}" class="btn btn-lg finalizar" > Crear Noticia </a>
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
        <td>{{ $noticia->id }}</td>
        <td>{{ $noticia->Titulo }}</td>
        <td><img src= "{{asset('storage').'/'. $noticia->Foto }}" alt="" width="150px"></td>
        <td>{{ $noticia->subTitulo }}</td>
        <td>{{ $noticia->Contenido }}</td>
        <td>{{ $noticia->Categorias }}</td>
        <td Class="twoButons"> 
          <a class="btn-sm " href="{{url('/noticia/' . $noticia->id . '/edit')}}"> Editar </a>
          <form class="btn-sm " action="{{url('/noticia/' . $noticia->id)}}" method="POST">
            @csrf
            {{method_field('DELETE')}}
            <input type="submit" value="Borrar" onclick="return confirm('Quiere borrar la Noticia?')">
          </form> 
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
</section>

@include ("./partials/footer")
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>