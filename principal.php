<!doctype html>
<?PHP session_start();
//VALIDAMOS EL INGRESO 
require_once("fns/encabezado.php");
require_once("../Sistema/Pantallas/menu.php");
$titulo='INICIOS';
encabezado($titulo);
$fecha=obtener_fecha();
?> 


<!--Encabezado -->
	<table width="785" border="1" align="center">
    	<tr>
        	<td width="162" rowspan="2" align="center" valign="middle" bgcolor="#11549F"><a href="../Sistema/principal.php"><img src="../Sistema/img/LogoAPA.png" width="150" height="81" alt=""/></a></td>
        	<td width="470" height="73" valign="top" bgcolor="#11549F"><strong>Formosa: <?PHP echo $fecha->larga;?></strong></td>
        	<td width="131" rowspan="2" align="center" bgcolor="#11549F"><a href="../Sistema/acceso.php?scr=desconectar"><img src="img/usuarioNeg.png" alt="" width="75" height="77"/></a></td>
      </tr>
      <tr>
        <td height="37" align="right">Usuario:<?PHP echo $_SESSION['nombre'];?></td>
      </tr>
	</table>

<!--Menus -->

<?PHP 
$Menu = new ClassMenu();
$Menu->Menu();
	//echo $_SESSION['id_categoria'];
?>
</body>
</html>