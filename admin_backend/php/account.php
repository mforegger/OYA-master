<?php
/* Test Server */

//Hello this is a change   


	try{

	$link= new PDO('mysql:host=localhost;dbname=OYA','OYAadmin','Frodosauron4#');

	$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){

	echo $e->getMessage();

	die();

}

/* Test Server */
/*
	try{

	$link= new PDO('mysql:host=localhost;dbname=yoec_test_db','mritacco','sauron4');

	$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){

	echo $e->getMessage();

	die();

}
*/

?>