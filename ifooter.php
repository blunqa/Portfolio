  <footer><p>&#169; Lumnium 2015 | Usein Kysytyt Kysymykset | Ota yhteyttä | <a href="https://en.wikipedia.org/wiki/Steve_Jobs">Jobs</a> |
<?php include("fbShare.php"); ?></p></footer>
      
      <!-- kirjautuminen -->
<?php
//Jos ei kirjauduttu sisään modaali tulee esiin
if($_SESSION['logged_in'] != 'yes') {?>
<div class="user modal" id="log-modal" style="display: none;">
	    <a href="#" class="close-modal">×</a>
	    <div class="user-login">
	        Kirjaudu sisaan.
	        <br>
	        <form action="login.php" method="post">
	            <input class="lomake" type="text" placeholder="username" name="username" required>
	            <br><br>
	            <input class="lomake" type="password" placeholder="Password" name="salasana" required>
	            <br><br>
	            <input class="button_small" type="submit" value="Kirjaudu">
	        </form>
	    </div>
	
	    <div class="user-sign">
	        <br>
	        Eiko sinulla ole viela tunnuksia? <a href="./">Rekisteröidy.</a>
	    </div>
	</div>
<?php } ?>
	<!-- kirjautuminen päättyy -->
      </div>
    <script type="text/javascript" src="//form-serialize.googlecode.com/svn/trunk/serialize-0.2.min.js"></script>
	<script src="app.js"></script>
      
</body>
</html>


