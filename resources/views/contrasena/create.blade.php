

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>



<br>
<br> 

<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
                                <br>
                                <br>
                                <br>
								
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="http://phpoll.com/login/process" method="post" role="form" style="display: block;">
									<div class="form-group">
                                        <!------ usuario ---------->
										<font>Ingresa tu correo electrónico o número de celular para buscar tu cuenta.</font>
										
                                    <div class="form-group">
                                        <!------Correo electronico ---------->
										<input type="text" name="Correo electronico" id="Correo electronico" tabindex="1" class="form-control" placeholder="Correo electronico" value="">
									</div>
									
                                    <center>
                                        <button type="button" class="btn btn-outline-secondary">Enviar</button>
                                    </center>

									<center>
										<a href="http://127.0.0.1:8000/sesion" tabindex="5" class="forgot-password">Inicio Sesion</a>

									</center>
									
								</form>
								<form id="register-form" action="http://phpoll.com/register/process" method="post" role="form" style="display: none;">
                                    
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Correo electronico" value="">
									</div>
									
								
									
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

