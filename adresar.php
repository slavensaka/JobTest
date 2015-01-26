<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
	<title>Arnet Digital</title>
	<link rel="stylesheet" type="text/css" href="./css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="./css/main.css"/>
	<link rel="stylesheet" type="text/css" href="./css/960_12_col.css"/>
	<script src="./vendor/frameworks/jquery/jquery.js"></script> 
</head>
<body>

<?php require 'connect.php'; ?>
 <!-- Header i nav dijeovi samo za strukturu -->
<div class="container_12">
<header id="logo" class="logo">
		<h1><a href="#">Arnet Digital</a></h1>
</header><!-- /header -->
<br class="clear" />
<div class="nav">
	<nav class="navigacija">
		<ul>
		    <li><a id="zaposlenik" href="#">Zaposlenici</a></li>
		    <li><a id="dodaj" href="#">Dodaj zaposlenika</a></li>   
		</ul>
	</nav>	
</div><!-- /nav -->


<div class="main" id="main">
</div><!-- /divmain -->
	

	<script type="text/javascript">
	/* ==========================================================================
    Paginacija dio. Osnovno izvedeno.
   ========================================================================== */

   		
		$(document).ready(function(){	
			$("#zaposlenik").click(function(){			
				$("#content").load("paginacija.php?page=" + 1);		
				$("li.brojevi").show();	
			});


		    $("li.brojevi").hide();
			$("#paging_button li").click(function(){
				
				$(this).css({'border-color':'blue',
						     'background-color' : 'red',
						     'color' : 'red',
						     'background':'#fff'

						 });
				
				$("#content").load("paginacija.php?page=" + this.id);	
			});


				$("#registracija").hide();
				$('#dodaj').click(function(){
					if($("#registracija").is(":visible")){
						$("#registracija").hide();
					} else {
						$("#registracija").show();
					}
					return false;

				});
			
		});
	</script>


<?php

$sql = "SELECT * FROM zaposlenik";
$result = $db->query($sql);
while ($row2 = $result->fetch_row()) 
{
   $total=$row2[0];
}
$pages = ceil($total/5);






?>

<div class="forma" id="forma">
	<form id="registracija" action="reg.php" method="post">
    <div id="response"></div>
    <div class="input">
      <label>Ime</label>
      <input name="ime" type="text" class="required" id="ime" size="30"/>
    </div>

    <div class="input">
    	<label>Prezime</label>
    	<input name="prezime" type="text" class="required" id="prezime" size="30"/>
    </div>

    <div class="input">
   	 <label>Adresa</label>
   	 <input name="adresa" type="text" class="required" id="adresa" size="30"/>
    </div>

    <div class="input">
   		 <label>Grad</label>
    	<input name="grad" type="text" class="required" id="grad" size="30"/>
    </div>

    <div class="input">
    	<label>Email</label>
    	<input name="email" type="text" class="required" id="email" size="30"/>
    </div>

    <div class="input">
    	<label>Telefon</label>
    	<input name="telefon" type="text" class="telefon" id="0" size="30"/>
		
    </div>
	 <div id="novi_telefon">+</div>
    <div class="button">
    <input type="button" name="send" id="send" value="Send"/>


    </div>

    <!-- <div class="input">
    <input type="hidden" name="honeypot" id="honeypot" value="http://"/>
    <input type="hidden" name="humancheck" id="humancheck" class="clear" value=""/>
    </div> -->
</form>

</div>
<div align="center" id='content1'>
		<div id='ajax'></div>
		<div id="content"></div>
		<table id="paging_button"><tr><td><ul>
		<?php
		/* ==========================================================================
		   Prikaz paginacija brojeva. 
		   ========================================================================== */
		for($i=1; $i<=$pages; $i++) {
			echo '<h2><li class="brojevi" id="'.$i.'">'.$i.'</li></h2>';
		}
		?>
		</ul></td></tr></table>
</div>




<script type="text/javascript">
	/* ==========================================================================
		Ajax poziv   
   	========================================================================== */

$("#content").on("click", "a", function() {
    $('.brisi').on("click", function() {
        //console.log($(this).attr('id'));

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4) {
                var ajaxdiv = document.getElementById('ajax');
                ajaxdiv.innerHTML = xhr.responseText;
            }
        }
        var id = $('.brisi').attr('id');
        // console.log(id);
        // var query  ="?id="+ id;
        xhr.open("POST", "ajaxdio.php" + "?id=" + id, true);
        xhr.send(null);



        $("#content").load("paginacija.php?page=" + 1);

    });
});

$("#send").click(function() {
	// var ime = $("#ime").val();
	// var prezime = $("#prezime").val();
	// var adresa = $("#adresa").val();
	// var grad = $("#grad").val();
	// var email = $("#email").val();
	var telefon = [];
	for ( j = 0; j < i; j++ ){

		// telefon[j] = $("#"+j).val();
		// telefon[i] = "123"+i;
    telefon.push($("#"+j).val());

	// telefon.push(i);
		
	}
	// telefon.push($(".telefon").val());
	// var telefon = $("#telefon");
	var dataString = 'ime='+ ime + '&prezime='+ prezime + 
				     '&adresa='+ adresa + '&grad='+ grad+ 
				     '&email='+ email+ '&telefon='+ telefon;

	$.ajax({
		type:"POST",
		url:"ajaxsubmit.php",
		data: {
				ime: $("#ime").val(),
                prezime: $("#prezime").val(),
                adresa: $("#adresa").val(),
                grad: $("#grad").val(),
                email: $("#email").val(),





		       "telefon":JSON.stringify(telefon)
		   },

		 // data: {"telefon":JSON.stringify(telefon)},
	 // data: dataString,
		cache: false,
		success: function(result) {
			 alert(result);
		}
	});


	return false;
});
			
/* ==========================================================================
   Napravit novi unos telefona u formi
   ========================================================================== */
  var i = 1;
   $('#novi_telefon').click(function(e) {
   		// <input name="telefon" type="text" class="required" id="telefon" size="30"/>

       var $e = $("<input>", 
       	{id: i ,type:"text", name: 'telefon', class: "telefon",size:"30"});
        $('#novi_telefon').before($e);
   i++
      
      return i;


	});
	</script>





<!-- Footer dio osnovni -->
<footer>
	<ul>
		<br class="clear" />
		<li class="foot"><a href="#">Made by: Slaven Sakačić</a></li>
	</ul>	
</footer><!-- /footer -->
</div><!-- /container -->
</body>
</html>