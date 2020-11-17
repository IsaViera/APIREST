<?php
	
	require_once("db.php");


	function TodosLosProductos() {

		$Query = "select * from productos";

		$Respuesta = ObtenerRegistros($Query);

		//print_r($Respuesta);
		return ConvertirUTF8 ($Respuesta);
	}


	function ProductoPorID($id) {

		$Query = "select * from productos where ProductoId = $id";

		$Respuesta = ObtenerRegistros($Query);

		//print_r($Respuesta);
		return ConvertirUTF8 ($Respuesta);
	}


	function CrearProducto($array) {
		$Codigo = $array[0]['Codigo'];
		$Nombre = $array[0]['Nombre'];
		$Presentacion = $array[0]['Presentacion'];

		$query = "insert into productos(Codigo,Nombre,Presentacion)values('Codigo','Nombre','Presentacion')";
		NonQuery($query);

		return true;
	}

?>