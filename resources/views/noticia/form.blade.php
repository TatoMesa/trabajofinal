@csrf

@if (count($errors) > 0)
  <div class="alert alert-danger" role="alert">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
@endif

<div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1" for="Titulo"> Titulo: </span>
    <input type="text" class="form-control" name="Titulo" id="Titulo" value="{{isset($noticia->Titulo) ? $noticia->Titulo : ''}}">
</div>

<div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1" for="Foto">Foto: </span>
    @if (isset($noticia->Foto))
      <img src= "{{asset('storage').'/'. $noticia->Foto }}" alt="" width="80px">
    @endif
    <input type="file" class="form-control" name="Foto" id="Foto" >
</div>

<div class="input-group mb-3">
    <label class="input-group-text" for="Categorias">Categorias: </label>
    <select class="form-select" name="Categorias" id="Categorias" >
      <option selected> {{isset($noticia->Categorias) ? $noticia->Categorias : ''}} </option>
      <option value="Actualidad" > Actualidad </option>
      <option value="Economia" > Economia </option>
      <option value="Espectaculos" > Espectaculos </option>
      <option value="Deportes" > Deportes </option>
      <option value="Naturaleza" > Naturaleza </option>
      <option value="Politica" > Politica </option>
    </select>
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1" for="Subtitulo">Subtitulo: </span>
  <input type="text" class="form-control" name="Subtitulo" id="Subtitulo" value="{{isset($noticia->Subtitulo) ? $noticia->Subtitulo : ''}}">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" for="Contenido">Contenido: </span>
  <input type="text" class="form-control" name="Contenido" id="Contenido" value="{{isset($noticia->Contenido) ? $noticia->Contenido : ''}}">
</div>


<div class="input-group mb-3">
  <span class="input-group-text" for="Autor">Autor: </span>
  <input type="text" class="form-control" name="Autor" id="Autor" value="{{ isset($noticia->Autor) ? $noticia->Autor : Auth::user()->name  }}">
</div>


<div class="input-group mb-3 butongroup">
  <input class="btn btn-lg finalizar" type="submit" value="{{$accion}} Noticia">
  <a href="{{url('noticia')}}" class="btn btn-lg finalizar" > Finalizar </a>
</div>

