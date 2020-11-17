<? session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<?php require_once "scripts.php"; ?>
</head>
<body style="background-color: #1877">
<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="panel panel-primary">
				<div class="panel panel-heading">Login Tabla de Valores</div>
				<div class="panel panel-body">
					<div style="text-align: center;">
						<img src="img/photo.jpg" height="250">
					</div>
					<p></p>
					<label>Usuario</label>
					<input type="text" id="Usuario" class="form-control input-sm" name="">
					<label>Password</label>
					<input type="password" id="Clave" class="form-control input-sm" name="">
					<p></p>
					<span class="btn btn-primary" id="entrarSistema">Entrar</span>
					<str><a href="mosquitto_msg/sender.php" class="btn btn-danger">Enviar</a></str>
				</div>
			</div>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#entrarSistema').click(function(){
			if($('#Usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}else if($('#Clave').val()==""){
				alertify.alert("Debes agregar la clave");
				return false;
			}

			cadena="Usuario=" + $('#Usuario').val() + 
					"&Clave=" + $('#Clave').val();

					$.ajax({
						type:"POST",
						url:"php/login.php",
						data:cadena,
						success:function(r){
							var response = JSON.parse(r);
							if(response.conection){
							
								window.location="temp.php?user="+$('#Usuario').val();
							}else{
								alertify.alert(response.message);
							}
						}
					});
		});	
	});
</script>
<!-- {"conection":false,"message":"Usuario no existe :("}" -->