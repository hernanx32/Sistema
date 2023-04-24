	<?PHP
	session_start();
	
	
	

	$titulo='Ingresar';
	//include('Pantallas/encabezado.php');
	if(isset($_GET["scr"])){
		$usuario=$_POST["usuario"];
		$clave=$_POST["clave"];
		
		$conexion=new mysqli("localhost","dba","gestion","dba","3306");
		$conexion->set_charset("utf8");
		$sql=$conexion->query("SELECT * FROM `usuario` WHERE usuario='$usuario' AND clave='$clave' ");
			if ($sql->num_rows > 0) {
    			while($row = $sql->fetch_assoc()) {
					$_SESSION['id_usuario'] = $row["id_usuario"];
					$_SESSION['usuario'] = $row["usuario"];
					$_SESSION['id_categoria'] = $row["id_categoria"];
					}
    			/* liberar el conjunto de resultados */
    			$sql->close();
				/* cerrar la conexión */
				$conexion->close();
				header("location:principal.php");
				exit();
			}else{
				$mensaje='Error al Logearse';
			}
	$mensaje='<p style="color:red;">Datos Incorrectos!</p>';
	}else{
	$mensaje='Bienvenido';	
	}

	?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sistema de Gestion - <?PHP echo $titulo;?></title>
</head>
<body>

	<link href="css/bootstrap-4.3.1.css" rel="stylesheet" title="Bootstrap" type="text/css">
 
<P align="center" class="alert-light">Ingreso al Sistema</P>
<form id="login.form" name="login.form" method="post" action="/Sistema/acceso.php?scr=login"  >
	
<table width="200" border="0" align="center">
	<tr><td align="center"><?PHP echo $mensaje;?></td></tr>
	<tr><td align="center">
      <input name="usuario" type="text" autofocus="autofocus"  required="required" id="usuario" form="login.form" placeholder="Usuario" tabindex="1" title="Ingrese Usuario" autocomplete="off" size="20" maxlength="20" >
	</td></tr>
	
	<tr><td align="center">
       <input name="clave" type="password"  required="required" id="clave" form="login.form" placeholder="Clave" tabindex="2" title="Ingrese Clave" autocomplete="off" size="20" maxlength="20" >
    </td></tr>
        
	<tr><td colspan="2" align="center">
    <input name="submit" type="submit" id="submit" form="login.form" tabindex="3" value="Ingresar Al Sistema"></td></tr>
	
</table>
</form>
</body>
</html>