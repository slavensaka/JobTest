<?php require 'connect.php'; 
// $id = $_REQUEST['ime'];

$ime=$_POST['ime'];
$prezime=$_POST['prezime'];
$adresa=$_POST['adresa'];
$grad=$_POST['grad'];
$email=$_POST['email'];

$query ="INSERT INTO zaposlenik (ime, prezime, adresa,grad,email) 
 	 	 VALUES ('$ime', '$prezime','$adresa','$grad','$email')";

$rezultat = $db->query($query) or die(mysql_error);

echo "Form Submitted Succesfully";