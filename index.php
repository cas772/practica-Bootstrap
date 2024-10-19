<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maquetación con Bootstrap</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container-sm" >
    <div class="row">
    <div class="col-md-12">
    <header>
        <h1 class="text-center p-3">Lista de Estudiantes</h1>
    </header>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12">
    <div class="row">
      <div class="col-xl-6">
         <div class="row">
         <div class="col-xl-12"  style="background-color:white">
          <h2 class="text-center">Nuevo Estudiante</h2>
         </div>
         </div>
         <div class="row">
         <div class="col-xl-12">
            <form action="" method="post">
              <input class="form-control mt-2 border border-black" type="text" name="nombre" id="">
              <input class="form-control mt-2 border border-black" type="text" name="apellido" id="">
              <input class="form-control mt-2 border border-black" type="number" name="edad" id="">
              <input class="form-control mt-2 border border-black" type="email" name="correo" id="">
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <input class="btn btn-secondary m-2 me-md-2" type="submit" value="Cargar">
              </div>
            </form> 
        </div>
        </div>
      </div>
      <div class="col-xl-6"  style="background-color:#0f0">
      <div class="row">
         <div class="col-xl-12"  style="background-color:yellow">
          <p>buscar estudiante</p>
         </div>
         </div>
         <div class="row">
         <div class="col-xl-12"  style="background-color:white">
        <p>mostrar</p> 
        </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    <section></section>
    <footer></footer>
<script src="js/bootstrap.bundle.min.js"></script>
</div>
</body>
</html>