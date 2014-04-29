<?php


include('../repo/connect.php');
if(isset($_POST['name'], $_POST['address'], $_POST['age']) && !empty($_POST['name']) && !empty($_POST['address']) && !empty($_POST['age']))
{
$name = $_POST['name'];
$age = $_POST['age'];
$address = $_POST['address'];	
$q_insert = "insert into users(name,address,age) value ('$name','$address','$age')";
$q = mysql_query($q_insert) or die ("ERROR" . mysql_error());


if($q){
	 
	echo "DATA IS INSERTED <br> <br> <a href ='form.php'> GO BACK TO FORM </a>"; 
	
	}
	else{echo'ERROR';}

	
	}

?>