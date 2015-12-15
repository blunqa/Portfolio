<div class="esittely">
        <div class="esittely-bg">
       <div class="esittely-text">
        <h1>Luo oma verkkoportfoliosi!</h1>
           <p>Lumnium on helppokäyttöinen julkaisupalvelu, johon käyttäjät voivat luoda oman yksityiskohtaisen profiilin sekä ladata omia tuotoksiaan muiden nähtäväksi. </br><b>Rekisteröidy jo tänään!</b></p>
        </div><div class="esittely-reg">
            <?php if($_SESSION['logged_in'] == 'yes'): ?>
            <div class="signedIn-text"><p>Tervetuloa <?php echo $_SESSION['username']; ?></p>
                    <form action="katso_profiili.php" class="profiili" method="post">
                        <input class="button_small" type='submit' action="katso_profiili.php" value='Omaan profiiliin' name='profiili'>
                    </form>
            </div>
            <?php else: ?>
        <form action="<?php echo SITE_ROOT?>/cprofiili.php" method="post"class="reg-form">
			    <input class="reg-field lomake" type="text" name="data[username]" placeholder="Käyttäjänimi" required>
                <input class="reg-field lomake" type="email" name="data[sposti]" placeholder="Email" required>
                <input class="reg-field lomake" type="password" name="data[salasana]" placeholder="Salasana" required>
            <input type="submit" value="Rekisteröidy" id="reg">
             <?php
	           endif;
	           ?>
        </form>
        
        </div>
    </div>
        </div>
