<?php 

spl_autoload_register(function($className){

	$dir = "Class";
	$fileName = $dir.DIRECTORY_SEPARATOR.$className.".php";
	if(file_exists($fileName)){

		require_once($fileName);

	}


});

 ?>