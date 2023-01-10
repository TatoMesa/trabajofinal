
 @include ("./partials/head")
 @include ("./partials/header")


    <h3>Creacion de Noticias </h3>
    <form class="form-Noticias" method="POST" action="{{url('noticia')}}" enctype="multipart/form-data">
      @csrf
      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1" for="Titulo">Titulo: </span>
          <input type="text" class="form-control" name="Titulo" id="Titulo">
      </div>

      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1" for="Foto">Foto: </span>
          <input type="file" class="form-control" name="Foto" id="Foto">
      </div>

      <div class="input-group mb-3">
          <label class="input-group-text" for="Categorias">Categorias: </label>
          <select class="form-select" name="Categorias" id="Categorias">
            <option selected>...</option>
            
                                     
            @for ($i = 0; $i < ; $i++)
              <option value="$i"> $categroias[$i] </option>
            @endfor
          </select>
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1" for="subTitulo">Sub Titulo: </span>
        <input type="text" class="form-control" name="subTitulo" id="subTitulo">
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text" for="Contenido">Contenido: </span>
        <input type="text" class="form-control" name="Contenido" id="Contenido">
      </div>

      <input class="btn btn-lg finalizar" type="submit" value="Finalizar">
    
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

@include ("./partials/footer")
