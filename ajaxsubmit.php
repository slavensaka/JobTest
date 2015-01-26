<?php require 'connect.php'; 
// $id = $_REQUEST['ime'];

$ime=$_POST['ime'];
$prezime=$_POST['prezime'];
$adresa=$_POST['adresa'];
$grad=$_POST['grad'];
$email=$_POST['email'];
// $telefon=$_POST['telefon'];
$telefon = json_decode($_POST["telefon"]);












$query ="INSERT INTO telefon(telefon) VALUES ('$telefon[1]')";
$rezultat = $db->query($query) or die(mysql_error);

// $query1 ="INSERT INTO zaposlenik (ime, prezime, adresa,grad,email) 
// 	 	 VALUES ('$ime', '$prezime','$adresa','$grad','$email')";
// $rezultat1 = $db->query($query1) or die(mysql_error);
// <input id="1" type="text" name="telefon" class="required">
 echo "Form Submitted Succesfully";
