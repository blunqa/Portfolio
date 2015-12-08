<?php include("includes/iheader.php"); ?>
<section class="profiililomake">
  <h3>Luo profiilisi</h3>
<form class="profiili">
    Etunimi: <br><input class="lomake" type="text" name="etunimi"><br/>
    Sukunimi: <br><input class="lomake" type="text" name="sukunimi"><br/>
    Syntymäaika: <br><?php include('birth.php');?><br/>
    Katuosoite: <br><input class="lomake"type="text" name="katuosoite"><br/>
    Postinumero ja kaupunki: <br><input class="lomake"type="text" name="postcity"><br/>
    
    Sukupuoli: <br><select name="gender">
    		<option value="" disabled selected>Valitse</option>
            <option value="mies">Mies</option>
            <option value="nainen">Nainen</option>
            <option value="null">En kerro fug u</option>
            </select><br/>
    
    Koulutus: <br><input class="lomake"type="text" name="koulutus"><br/>
   Käyttämäsi ohjelmisto/välineistö: <br><input class="lomake"type="text" name="equipment"><br/>
	<br>
	<input class="button_small" type='submit' value='Luo profiili' name='profiili'>

</form>
</section>
<?php include("includes/ifooter.php"); ?>
