@csrf
<div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1" for="Titulo">Titulo: </span>
    <input type="text" class="form-control" name="Titulo" id="Titulo" value={{isset($noticia->Titulo) ? $noticia->Titulo : ''}}>
</div>

<div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1" for="Foto">Foto: </span>
    <input type="file" class="form-control" name="Foto" id="Foto" value={{isset($noticia->Foto) ? $noticia->Foto : ''}}>
</div>

<div class="input-group mb-3">
    <label class="input-group-text" for="Categorias">Categorias: </label>
    <select class="form-select" name="Categorias" id="Categorias" >
      <option selected> {{isset($noticia->Categorias) ? $noticia->Categorias : ''}} </option>
      <option value="Deportes" > Deportes </option>
      <option value="Politica" > Politica </option>
      <option value="Actualidad" > Actualidad </option>
      <option value="Naturaleza" > Naturaleza </option>
      <option value="Economia" > Economia </option>
      <option value="Espectaculos" > Espectaculos </option>
    </select>
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1" for="subTitulo">Sub Titulo: </span>
  <input type="text" class="form-control" name="subTitulo" id="subTitulo" value="{{isset($noticia->subTitulo) ? $noticia->subTitulo : ''}}">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" for="Contenido">Contenido: </span>
  <input type="text" class="form-control" name="Contenido" id="Contenido" value="{{isset($noticia->Contenido) ? $noticia->Contenido : ''}}">
</div>
<div class="input-group mb-3 butongroup">
  <input class="btn btn-lg finalizar" type="submit" value="Almacenar">
  <a href="{{url('noticia')}}" class="btn btn-lg finalizar" > Finalizar </a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>