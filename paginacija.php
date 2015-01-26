<?php
require 'connect.php';

$per_page = 5;
$page = $_REQUEST['page'];
$start = ($page-1)*5;
$sql_content1 = "select * from zaposlenik limit $start,$per_page";
if(!$result = $db->query($sql_content1)){
    die('Problem je nastao [' . $db->error . ']');
}
$cols = $result->num_rows;


$j=0;
while($row = $result->fetch_assoc()){
    echo "<p>Ime :{$row['ime']}  <br> ".
         "Prezime: {$row['prezime']} <br> ".
         "Adresa: {$row['adresa']} <br> ".
         "Email : {$row['email']} <br> ";
    echo "id:{$row['id']} <br> ";
    
    echo '<span class="action">';
    echo '<a href="#" id="'. $row["id"].'" class="brisi" title="Briši">Briši X</a></span><br>' ;
    
    
     echo  "--------------------------------<br>";       
 			      
}
$j++;
