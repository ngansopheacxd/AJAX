<?php


//Check for GET variable in form type
if(isset($_GET['name'])){
	echo "GET: YOUR NAME IS " . $_GET['name']; 
} 

//Check for POST variable in form type
if(isset($_POST['name'])){
	echo "GET: YOUR NAME IS " . $_POST['name']; 
}

?>