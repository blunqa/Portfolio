<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
  <title>portfoil</title>
    <link href="font/stylesheet.css" rel="stylesheet" type="text/css">
	<link href="app.css" rel="stylesheet" type="text/css">
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
  <header>
 <a href="index.php"><img src="img/logo.png" alt="Logo"></a>
  <div class="top-block">
		<nav class="top-nav">
			<ul>
				<li>
					<a href="selaa.php" class="selaa">Selaa</a>
				</li>
				<li>
					<a href="#" class="open-modal" data-target="log-modal">
                        <?php 
                        if($_SESSION['logged_in'] == 'yes') {
                            echo $_SESSION['username']; ?></a>
                    <ul class="dropdown">
                        <li><a href="<?php echo SITE_ROOT.'?username='.$_SESSION['username']; ?>">Oma profiili</a></li>
                        <li><a href="<?php echo SITE_ROOT.'?portfolio='.$_SESSION['username']; ?>">Portfolio</a></li>
                        <li><a href="luoProjekti.php">Luo projekti</a></li>
                        <li><a href="<?php echo SITE_ROOT;?>/logout.php">Kirjaudu ulos</a></li>
                    </ul>                
                        <?php } else { ?>
                        Kirjaudu </a>
                    <?php } ?>

				</li>				
			</ul>
		</nav>

      </div>
    <div style="display:none;">
		<?php
		//Mahdollinen kirjautumisvirhe?
		if(isset($_SESSION['loggausvirhe']) && $_SESSION['loggausvirhe']=='yes'){	
		   ?>
		 <script>
		    confirm("Väärä tunnus tai salasana - yritä uudelleen");
		 </script>
		  <?php  
			 unset($_SESSION['loggausvirhe']);
        }
		  ?>
	</div>
  </header>
