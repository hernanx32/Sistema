<?PHP
//LLama a el HTML BASICO LA VARIABLES DE LA BARRA DE MENU
//VARIABLES    $fechaCorta
function encabezado($titulo)
{
echo "<html>
		<head><meta charset='utf-8'>
		<title>" .$titulo. "</title>
		</head>
		<body> ";
	}

class Fecha {
   public $corta;
   public $larga;
}

//Insertar Valores de Fecha
function obtener_fecha() {
date_default_timezone_set("America/Santiago");	
   
$nombreMes=[
	"01"=>"Enero",
	"02"=>"Febrero",
	"03"=>"Marzo",
	"04"=>"Abril",
	"05"=>"Mayo",
	"06"=>"Junio",
	"07"=>"Julio",
	"08"=>"Agosto",
	"09"=>"Septiembre",
	"10"=>"Octubre",
	"11"=>"Noviembre",
	"12"=>"Diciembre"];
	
	
	
   $fecha = new Fecha();
   $fecha->corta = date('d\/m\/y');
   $fecha->larga = date('d')." de ".$nombreMes[date('m')]." del ".date('Y');
   return $fecha;
}


?>