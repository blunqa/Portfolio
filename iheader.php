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
					<a href="#" class="open-modal kirjaudu" data-target="log-modal">Kirjaudu</a>
<!--                DROPDOWN MENU
                    <ul class="dropdown">
                        <li><a href="#">Oma profiili</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Kirjaudu ulos</a></li>
                    </ul>
-->
				</li>				
			</ul>
		</nav>

      </div>
  </header>
