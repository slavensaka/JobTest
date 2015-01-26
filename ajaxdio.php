<?php require 'connect.php'; 

$id = $_REQUEST['id'];
// $query = "DELETE FROM `zaposlenik` WHERE id='$id'";
$query ="DELETE zaposlenik,telefon FROM zaposlenik, telefon 
		WHERE zaposlenik.id = '$id' AND telefon.zaposlenik_id = '$id' ";
$qry_result =  $db->query($query) or die(mysql_error());

$query1 = "DELETE FROM `zaposlenik` WHERE id='$id'";
$qry_result =  $db->query($query1) or die(mysql_error());

$display_string = "<b><h2>Uredno izbrisan</h2></b>";

echo $display_string;


?>
