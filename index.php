<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maquetación con Bootstrap</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container" >
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
         <div class="col-md-5 border border-black">
            <div class="row">
              <div class="col-md-12"  style="background-color:white">
              <h2 class="text-center">Nuevo Estudiante</h2>
              </div>
            </div>
            <div class="row">
             <div class="col-md-12">
              <form action="" method="post">
                <input class="form-control mt-2 border border-black" type="text" name="nombre" placeholder="> Nombre">
                <input class="form-control mt-2 border border-black" type="text" name="apellido" placeholder="> Apellido">
                <input class="form-control mt-2 border border-black" type="number" name="edad" placeholder="> Edad">
                <input class="form-control mt-2 border border-black" type="email" name="correo" placeholder="> Correo electrónico">
                   <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                   <input class="btn btn-secondary m-2 me-md-2" type="submit" value="Cargar">
                   </div>
              </form> 
              </div>
            </div>
          </div>
      <div class="col-auto"></div>
      <div class="col-md-6 p-3 border border-black">
         <div class="row">
            <div class="col-md-9">
             <form action="" method="post">
            <input class="form-control m-2  border border-black" type="text" name="" placeholder="Buscar estudiante por nombre">
            </div>
            <div class="col-md-3">
            <input class="btn btn-secondary m-2" type="submit" value="Buscar">
            </form>
           </div>
            </div>
            <div class="row">
            <div class="col-md-12"  style="background-color:white">
           <h4 class="text-center m-3">Estudiantes Matriculados</h4>
           <div>
             <table class="table">
             <thead>
             <tr>
             <th scope="col"></th>
                 <th scope="col">Nombre</th>
                 <th scope="col">Apellido</th>
                 <th scope="col">Edad</th>
                 <th scope="col">Correo</th>
                 <th scope="col">#</th>
                </tr>
              </thead>  
             <tbody class="table-group-divider">
              <tr>
              <th scope="row"><i class="bi bi-person-fill"><img src="imagenes/person-fill.svg" alt="person"></i></th>
                 <td>Mark</td>
                 <td>Lopez</td>
                  <td>23</td>
                 <td>Lope22@gmail.com</td>
                 <td>X</td>
                </tr>
               <tr>
               <th scope="row"><i class="bi bi-person-fill"><img src="imagenes/person-fill.svg" alt="person"></i></th>
                 <td>Mark</td>
                 <td>Lopez</td>
                  <td>23</td>
                 <td>Lope22@gmail.com</td>
                 <td>X</td>
               </tr>
              <tr>
              <th scope="row"><i class="bi bi-person-fill"><img src="imagenes/person-fill.svg" alt="person"></i></th>
                 <td>Mark</td>
                 <td>Lopez</td>
                  <td>23</td>
                 <td>Lope22@gmail.com</td>
                 <td>X</td>
                </tr>
                <tr>
              <th scope="row"><i class="bi bi-person-fill"><img src="imagenes/person-fill.svg" alt="person"></i></th>
                 <td>Mark</td>
                 <td>Lopez</td>
                  <td>23</td>
                 <td>Lope22@gmail.com</td>
                 <td>X</td>
                </tr>
                <tr>
              <th scope="row"><i class="bi bi-person-fill"><img src="imagenes/person-fill.svg" alt="person"></i></th>
                 <td>Mark</td>
                 <td>Lopez</td>
                  <td>23</td>
                 <td>Lope22@gmail.com</td>
                 <td>X</td>
                </tr>
             </tbody>
             </table>
           </div> 
           </div>
           </div>
        </div>
        </div>
      </div>
    </div>
  </div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>