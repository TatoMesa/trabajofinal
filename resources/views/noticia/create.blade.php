
 @include ("./partials/head")
 @include ("./partials/header")

<body>
    <h3>Creacion de Noticias </h3>
    <form class="form-Noticias" action="">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Titulo</span>
        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Foto</span>
        <input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
      </div>

      <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupSelect01">Categorias</label>
        <select class="form-select" id="inputGroupSelect01">
          <option selected>...</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text">Contenido</span>
        <textarea class="form-control" aria-label="With textarea"></textarea>
      </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
@include ("./partials/footer")
</html>