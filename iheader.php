<!DOCTYPE html>
<html lang="fi">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Verkkokauppa.net</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
	<link href="./assets/css/fonts/foundation-icons.css" rel="stylesheet" type="text/css">
	<link href="./assets/css/app.css" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/fi_FI/sdk.js#xfbml=1&version=v2.5";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div id="sivu">
  <header class="tummansininen">
    <figure class="title punainen">
		<a href="index.php"><img src="./assets/img/logo.png" alt="Logo"></a>
    </figure>
      
    <div class="top-block">
		<nav class="top-nav">
			<ul>
				<li>
					<a href="#" id="cart-button" class="open-modal" data-target="cart-modal">
						<div id="cart-num" class="punainen">0</div>
						<i class="fi-shopping-cart large"></i>
					</a>
				</li>
				<li>
					<a href="#" class="open-modal" data-target="log-modal">
						<?php //Loggauduttu?
                                //Sininen ikoni ja rasti viereen
                               if($_SESSION['kirjautunut'] == 'jep'){ ?>
                                  <div id="check" class="sininen">
                                    <i class="fi-check large"></i>
                                  </div>
                            <?php 
                               }?>

						<i class="fi-torso large"></i>
					</a>
				</li>				
			</ul>
		</nav>
		<form class="search-form">
			<input class="search-field" type="text" name="haku" placeholder="Haku">
			<button class="search-button sininen" type="submit"><i class="fi-magnifying-glass large"></i></button>
		</form>
    </div>
<div style="display:none;">
		<?php
		//Mahdollinen kirjautumisvirhe?
		if(isset($_SESSION['loggausvirhe']) && $_SESSION['loggausvirhe']=='jep'){	
		   ?>
		 <script>
		    alert("Väärä tunnus tai salasana - yritä uudelleen");
		 </script>
		  <?php  
			 unset($_SESSION['loggausvirhe']);
        }
		  ?>
	</div>
  </header>
