<?php
function db (){
		$hostname="localhost";
		$user="root";
		$password="";

		$connection = mysqli_connect($hostname,$user,$password);
		$db = mysqli_select_db($connection, "shop");
		return $connection;

}
	?>
