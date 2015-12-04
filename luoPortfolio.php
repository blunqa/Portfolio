<html>
<head>
  <meta charset="UTF-8">	
  <title>portfoil</title>
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
					<a href="#" class="open-modal" id="kirjaudu">Kirjaudu</a>
				</li>				
			</ul>
		</nav>
		<form class="search-form">
			<input class="search-field" type="text" name="haku" placeholder="Haku">
			<button class="search-button" type="submit"><i class="fi-magnifying-glass large"></i></button>
		</form>
      </div>
  </header>
        
        <p>Upload</p>
            <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>    
                
        </div>
    </body>
</html>
