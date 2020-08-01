<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&display=swap" rel="stylesheet">
    <link href="https://bootswatch.com/4/sketchy/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8c1dacc4b5.js" crossorigin="anonymous"></script>
    <title>AUTOR |</title>
    <style>
  .grid-container {
    display: grid;
    align-content: center;
    grid-template-columns: auto auto auto;
    grid-gap: 10px;
    padding: 10px;
  }
</style>
  </head>
  <body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="welcome"><h1><i class="fab fa-angellist"></i>Book</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="welcome"><i class="fas fa-home"></i> Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="book"><i class="fas fa-book"></i> Libros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="genero"><i class="fas fa-venus-mars"></i> Genero</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="autor"><i class="fas fa-user-edit"></i> Autores</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Ejemplo@gmail.com">
      <button class="btn btn-secondary my-2 my-sm-0 btn-success" type="submit">Suscribete</button>
    </form>
  </div>
</nav>
</header>
<br>
<div class="container">
  <!-- Titulo -->
  <div class="jumbotron" style="border:2px solid green;">
    <h1 class="display-3">Autores</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  </div>
  <!-- Cuerpo1 -->
  <div class="grid-container">
    <div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
    <div class="card-header">Header</div>
    <div class="card-body">
      <h4 class="card-title">Danger card title</h4>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>
  <div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h4 class="card-title">Danger card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
<div class="card-header">Header</div>
<div class="card-body">
  <h4 class="card-title">Danger card title</h4>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
</div>
</div>
  </div>
  <!-- Cuerpo2 -->
  <div class="grid-container">
  <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
    <div class="card-header">Header</div>
    <div class="card-body">
      <h4 class="card-title">Success card title</h4>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>
  <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
    <div class="card-header">Header</div>
    <div class="card-body">
      <h4 class="card-title">Success card title</h4>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>
  <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
    <div class="card-header">Header</div>
    <div class="card-body">
      <h4 class="card-title">Success card title</h4>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>
  </div>
  <!-- Cuerpo3 -->
  <div class="grid-container">
    <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
      <div class="card-header">Header</div>
      <div class="card-body">
        <h4 class="card-title">Info card title</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
      <div class="card-header">Header</div>
      <div class="card-body">
        <h4 class="card-title">Info card title</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
      <div class="card-header">Header</div>
      <div class="card-body">
        <h4 class="card-title">Info card title</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  </div>

</div>
<footer>
  <div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left">Left</button>
  <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">Top</button>
  <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Bottom</button>
  <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">Right</button>
</div>
</footer>
  </body>
</html>
