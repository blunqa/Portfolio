  
<div class="profiili-bg">
    <?php if(($_SESSION['etunimi'])==NULL){ ?>
<h3>Kiitos rekisteröimisestä, <?php echo $_SESSION['username']; ?>!</h3>
    
    <?php } ?>
<section class="profiililomake">
  <h3>Luo profiilisi. Nämä tiedot näkyvät kaikille, jotka vierailevat sivullasi.</h3>
<form action="testprofile.php" class="profiili" method="post">
    <label>Etunimi*: </label><br><input class="lomake" type="text" name="data[etunimi]" <?php if ($_SESSION['etunimi']!=NULL){ ?> value=<?php echo $_SESSION['etunimi'];?><?php } ?> required><br><br>
    <label>Sukunimi*: </label><br><input class="lomake" type="text" name="data[sukunimi]" <?php if ($_SESSION['sukunimi']!=NULL){ ?> value=<?php echo $_SESSION['sukunimi'];?><?php } ?> required><br><br>
    <label>Syntymäaika*: </label><br><?php include('birth.php');?><br><br>
    <label>Katuosoite: </label><br><input class="lomake"type="text" name="data[osoite]" value=<?php echo $_SESSION['osoite'];?>><br><br>
    <label>Postinumero: </label><br><input class="lomake"type="number" name="data[postinumero]" value=<?php echo $_SESSION['postinumero'];?>><br><br>
    <label>Kaupunki: </label><br><input class="lomake"type="text" name="data[kaupunki]" value=<?php echo $_SESSION['kaupunki'];?>><br><br>
    <label>Puhelin: </label><br><input class="lomake" type="text" name="data[puh]" value=<?php echo $_SESSION['puh'];?>><br><br>
    <label>Sukupuoli: </label><br>
    <select name="data[sukupuoli]">
        <option value="0" <?php if($_SESSION['sukupuoli']==0 || $_SESSION['sukupuoli']==NULL){ echo 'selected';}?>>Valitse</option>
        <option value="Mies" <?php if ($_SESSION['sukupuoli']=="Mies"){ echo 'selected';}?>>Mies</option>
        <option value="Nainen" <?php if ($_SESSION['sukupuoli']=="Nainen"){ echo 'selected';}?>>Nainen</option>
    </select>
    <br>
    <br>
   <label>Koulutus: </label><br><textarea rows="4" cols="50" maxlength="100" name="data[koulutus]"></textarea><br><br>
   <label>Käyttämäsi ohjelmisto/välineistö: </label><br><textarea rows="4" cols="50" maxlength="100" name="data[ohj_val]"></textarea><br><br>
   <label>Olen lukenut olemattomat käyttäjäehdot* <input type="checkbox" required></label><br><br>
	<label>* Tähdellä merkityt alueet ovat pakollisia</label><br><br>
	<input class="button_small" type='submit' value='Tallenna profiili' name='profiili'>

</form>
</section>
</div>
