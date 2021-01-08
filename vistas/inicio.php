<?php
	session_start();

	if(isset($_SESSION['usuario'])){
		include "header.php";
?>


<h1> Bienvenido!!</h1>






<?php 
		include "footer.php";
	} else {
		header("location:../index.php");
	}
?>