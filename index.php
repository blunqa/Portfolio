<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
  <title>portfoil</title>
    <link href="font/stylesheet.css" rel="stylesheet" type="text/css">
	<link href="app.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="sivu">
  <header>
 <a href="index.php"><img src="img/logo.jpg" alt="Logo"></a>
  <div class="top-block">
		<nav class="top-nav">
			<ul>
				<li>
					<a href="#" class="selaa">Selaa</a>
				</li>
				<li>
					<a href="#" class="open-modal kirjaudu">Kirjaudu</a>
				</li>				
			</ul>
		</nav>

      </div>
  </header>
    <div class="esittely">
        <div class="esittely-bg">
       <div class="esittely-text">
        <h1>Esittelyy</h1>
           <p>Portfolio on helppokäyttöinen julkaisupalvelu, johon käyttäjät voivat luoda oman yksityiskohtaisen profiilin sekä ladata omia tuotoksiaan muiden nähtäväksi. </br><b>Rekisteröidy jo tänään!</b></p>
        </div><div class="esittely-reg">
        <form class="reg-form">
		<input class="reg-field lomake" type="text" name="user" placeholder="Username">
            	<input class="reg-field lomake" type="text" name="email" placeholder="Email">
            	<input class="reg-field lomake" type="password" name="pass" placeholder="Password">
        </form>
        <input type="submit" value="Rekisteröidy" id="reg">
        </div>
    </div>
        </div>
      <footer><p>(C) Kaikki oikeudet pidätetään Lumnium 2015 </p><p>| Usein Kysytyt Kysymykset | Ota yhteyttä | <a href="https://en.wikipedia.org/wiki/Steve_Jobs">Jobs</a> |</p></footer>
      <!-- kirjautuminen -->
	<div class="user modal" id="log-modal" style="display: block;">
	    <a href="#" class="close-modal">×</a>
	    <div class="user-login">
	        Kirjaudu sisaan.
	        <br>
	        <form action="#" method="post">
	            <input class="lomake" type="text" placeholder="username" name="username">
	            <br><br>
	            <input class="lomake" type="password" placeholder="Password" name="pwd">
	            <br><br>
	            <input type="submit" value="Kirjaudu">
	        </form>
	    </div>
	
	    <div class="user-sign">
	        <br>
	        Eiko sinulla ole viela tunnuksia? <a href="./">Rekisteröidy.</a>
	    </div>
	</div>
	<!-- kirjautuminen päättyy -->
      </div>
</body>
</html>
