

<?php 
	function conexion($db_host,$db_user,$db_password,$db_login_table)

	{
		return $conexion=mysqli_connect($db_host,$db_user,$db_password,$db_login_table);
	}

 ?>