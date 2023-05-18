

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>


<br>
<br> 
<center>
<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<h1>Registrarse</h1>
					<div class="panel-heading">
						<div class="row">
                             
								
						</div>
						<hr>
					</div>

					
						
					<div class="panel-body">
						<div class="row">

							<div class="col-lg-10">
								
								<form id="login-form" action="<?php echo e(route('registro.store')); ?>" method="POST" role="form" style="display: block;">
									<?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <!------ usuario ---------->
										<input type="text" name="nombres" id="" tabindex="1" class="form-control" placeholder="Nombres" value="">
									</div>
									<br>
                                    <div class="form-group">
                                        <!------ usuario ---------->
										<input type="text" name="apellidos" id="" tabindex="1" class="form-control" placeholder="Apellidos" value="">
									</div>
									<br>
                                    <div class="form-group">
                                        <!------ usuario ---------->
										<input type="text" name="usuario" id="" tabindex="1" class="form-control" placeholder="Usuario" value="">
									</div>
									<br>
                                    <div class="form-group">
                                        <!------Correo electronico ---------->
										<input type="text" name="correo" id="" tabindex="1" class="form-control" placeholder="Correo electronico" value="">
									</div>
									<br>
									<div class="form-group">
                                        <!------ contraseña ---------->
										<input type="password" name="contrasena" id="" tabindex="2" class="form-control" placeholder="Contraseña">
									</div>
									<br>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Recordarme</label>
									</div>
                                    <center>
										
                                        <button type="submit" class="btn btn-outline-secondary">Regístrate ahora</button>
                                    </center>
                                    <br>
                                    
                                    <center>
                                        <a href="http://127.0.0.1:8000/sesion" tabindex="5" class="forgot-password">Inicio Sesion</a>

                                    </center>
								
									
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="http://127.0.0.1:8000/contrasena" tabindex="5" class="forgot-password">¿Has olvidado tu contraseña?</a>
												</div>
											</div>
										</div>
									</div>
								</center>
								</form>
								
<br>
<br>
								
	<div class="container p6">
		<div class="row">
			
				<div class="card">
					<div class="card-body">
						<table class="table">
							<thead>
							  <tr>
								<th scope="col">id</th>
								<th scope="col">nombres</th>
								<th scope="col">apellidos</th>
								<th scope="col">usuario</th>
								<th scope="col">correo</th>
								<th scope="col">contraena</th>
								<th scope="col">#</th></th>
							  </tr>
							</thead>
							<tbody>
								<?php $__currentLoopData = $registros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $regis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									
							  <tr>
								<th scope="row"></th>
								<td><?php echo e($regis->nombres); ?></td>
								<td><?php echo e($regis->apellidos); ?></td>
								<td><?php echo e($regis->usuario); ?></td>
								<td><?php echo e($regis->correo); ?></td>
								<td><?php echo e($regis->contrasena); ?></td>
								<td>
									<form action="<?php echo e(route('registro.destroy',$regis->id)); ?>" method="POST">
										<?php echo csrf_field(); ?>
										<?php echo method_field('DELETE'); ?>
									<button class="btn btn-danger" type="submit">Eliminar</button>
									</form>
														<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modificaregistro<?php echo e($regis->id); ?> ">
						Modificar
					</button>
					
					<!-- Modal -->
					<div class="modal fade" id="modificaregistro<?php echo e($regis->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<form id="login-form" action="<?php echo e(route('registro.update',$regis->id)); ?>" method="POST" role="form" style="display: block;">
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
										<input type="text" name="nombres" id="" tabindex="1" class="form-control" placeholder="Nombres" value="<?php echo e($regis->nombres); ?>">
									</div>
									<br>
                                    <div class="form-group">
                                        <!------ usuario ---------->
										<input type="text" name="apellidos" id="" tabindex="1" class="form-control" placeholder="Apellidos" value="<?php echo e($regis->apellidos); ?>">
									</div>
									<br>
                                    <div class="form-group">
                                        <!------ usuario ---------->
										<input type="text" name="usuario" id="" tabindex="1" class="form-control" placeholder="Usuario" value="<?php echo e($regis->usuario); ?>">
									</div>
									<br>
                                    <div class="form-group">
                                        <!------Correo electronico ---------->
										<input type="text" name="correo" id="" tabindex="1" class="form-control" placeholder="Correo electronico" value="<?php echo e($regis->correo); ?>">
									</div>
									<br>
									<div class="form-group">
                                        <!------ contraseña ---------->
										<input type="password" name="contrasena" id="" tabindex="2" class="form-control" placeholder="Contraseña" value="<?php echo e($regis->contrasena); ?>">
									</div>
								
							</div>
							<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Modificar</button>
							</div>
						</div>
					</form>
						</div>
					</div>

									
								</td>
							  </tr>
							  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
					<?php /**PATH C:\xampp\htdocs\blog_laravel\resources\views/registro/create.blade.php ENDPATH**/ ?>