<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foro enp6</title>
    <link rel="icon" href="../../Statics/media/Escudo.png" type="image/png">
    <link rel="stylesheet" href="../../Statics/styles/foro.css">
    <link rel="stylesheet" href="../../../../../bootstrap/libs/bootstrap-5.3.0-dist/css/bootstrap.css">
    <script src="../../../../../bootstrap/libs/bootstrap-5.3.0-dist/js/bootstrap.bundle.js"></script>
    <script src="../JS/foro.js"></script>
  </head>
<body>
<!-- Barra de navegacion -->
<header class=barra>
        <nav class="navbar navbar-expand-lg" id="nav">
            <div class="container-fluid">
                <img src="../../Statics/media/Escudo.png" alt="ENP6" width="30" height="24" class="d-inline-block align-text-top text-light" id="escudo">
                <a class="navbar-brand text-light" href="https://www.prepa6.unam.mx/ENP6/_P6/">ENP6</a><br>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar en ENP6" aria-label="Search" id="search">
                        <button class="btn btn-outline-success text-light" id="btnBusc" type="submit">Buscar</button>
                </form>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" class="ayuda" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Explorar
                            </a>
                            <ul class="dropdown-menu" id="nav">
                            <li><a class="dropdown-item text-dark" href="Busquedas_principal.php">Objetos perdidos</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-dark" href="ventas.php">Ventas</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-dark" href="../../Templates/juego.html">Juegos</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-dark" href="menu.php">Menú principal</a></li>
                            </ul>       
                        </li>
                        <li class="nav-item"> 
                        <a class="nav-link active text-light" aria-current="page" href="../../index.html">inicia sesión</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-light" href="../../Templates/registro.html">registrate</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header> 
  <p class="titulo">Crea un foro para hablar con tus compañeros</p>
  <h1 class=comentario1>Recuerda que debes ser respetuoso y poder tener una relacion sana con todos tus compañeros.</h1>
        <form action="./subir_foro.php" method="POST" enctype="multipart/form-data" class="publicacion">
            <label>Título:<br>
              <input type="text" name="titulo" id="title" required></input></label>
            <label>Tema de interés:<br>
              <input type="text" name="tema" id="topic" required></input></label>
            <label>Descripción:<br>
              <input type="text" name="descripcion" id="describe" required></input></label>
            <label>Preguntas/Comentarios:<br>
              <input type="text" name="preguntas" id="question" required></input></label>
            <input type="file" name="imagen" id="imagen"  accept="image/*">
          <button type="submit" id="publicar">Publicar</button><br>
          <button type="reset" id="borrar">Borrar</button>
        </form>
</body>
</html>
