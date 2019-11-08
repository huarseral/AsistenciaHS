
<?php 
	class modelCuentas
	{
		public $nick;
		public $clave;

		private $id;
		private $conexionDB;

		function __construct()
		{
			include "../setting/DB.php";
			$conexion=new DB();
			$this->conexionDB = $conexion->conexion;
		}

		function crear(){}//guardar o registrar nuevos usuarios
		function modifyPassword(){}//cambiar clave

		function verificarCampo(){}//verifica la existencia de un dato
		function verificarClave(){}//verifica la seguridad de la clave

		function iniciarsession(){}//verifica que el usuario y clave sean correctos

		private function campo(){}//limpiar y verificar el nombre de usuario
		
		function getID($user){}//
		function getUser($id){}//

	}
	
 ?>