<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> Blog </title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo e(asset('assets/css/styles.css')); ?>" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.html"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"  href="http://127.0.0.1:8000/inicio">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/contactenos">Contactenos</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="http://127.0.0.1:8000/inicio">Cerrar Sesion</a></li>
                    </ul>
                    <form class="d-flex" role="search">
                      <a class="nav-link active" href="/sesion"></a>
                    <input class="form-control me-2" type="search" placeholder="Buscador" aria-label="Buscador">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                  </form>
                </div>
            </div>
        </nav>
		<br>
		<br>
    <br>
    <br>

<h1>Crear</h1>

<div class="mb-2 row">

  <form id="login-form" action="<?php echo e(route('publicar.store')); ?>" method="POST" role="form" style="display: block;">
    <?php echo csrf_field(); ?>

    <label for="inputPassword" class="col-sm-2 col-form-label">Titulo</label>
    <div class="col-sm-7">
      <input type="text" name="titulo" class="form-control" id="inputPassword">
    </div>
    <br>
    <br>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Informacion</label>
        <textarea name="informacion" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
      </div>
</div> 
      <br>
      <center>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-warning " type="submit">Publicar</button>
          </div>
      </center>
    </form>  


  <br>
  <br>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titulo</th>
        <th scope="col">Informacion</th>
        <th scope="col">#</th>
      </tr>
    </thead>
    <tbody>

      <?php $__currentLoopData = $publicar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <th scope="row"></th>
        <td><?php echo e($publi->titulo); ?></td>
        <td><?php echo e($publi->informacion); ?></td>
        <td>
          <form action="<?php echo e(route('publicar.destroy',$publi->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
        <button class="btn btn-danger" type="submit">Eliminar</button>
        </form>



        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modificapublicacion<?php echo e($publi->id); ?>">
          Modificar
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="modificapublicacion<?php echo e($publi->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <form id="login-form" action="<?php echo e(route('publicar.update',$publi->id)); ?>" method="POST" role="form" style="display: block;">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('PUT'); ?>
      
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="form-group">
                      <!------ usuario ---------->
                      <input type="text" name="titulo" id="" tabindex="1" class="form-control" placeholder="titulo" value="<?php echo e($publi->titulo); ?>">
                  </div>

                  <div class="form-group">
                    <!------ usuario ---------->
                    <input type="text" name="informacion" id="" tabindex="1" class="form-control" placeholder="informacion" value="<?php echo e($publi->informacion); ?>">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Modificar</button>
              </div>
            </div>
          </div>
        </div>
        </td>
        
      </tr>
    </tbody>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>
    </body>
</html>
  
      
    
 
 <?php /**PATH C:\xampp\htdocs\blog_laravel\resources\views/publicar/create.blade.php ENDPATH**/ ?>