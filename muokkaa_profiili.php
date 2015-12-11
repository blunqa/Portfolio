  
<h3>Kiitos rekisteröimisestä, <?php echo $_SESSION['username']; ?>!</h3>
<section class="profiililomake">
  <h3>Luo profiilisi. Nämä tiedot näkyvät kaikille, jotka vierailevat sivullasi.</h3>
<form action="testprofile.php" class="profiili" method="post">
    <label>Etunimi*: </label><br><input class="lomake" type="text" name="data[etunimi]" required><br><br>
    <label>Sukunimi*: </label><br><input class="lomake" type="text" name="data[sukunimi]" required><br><br>
    <label>Syntymäaika*: </label><br><?php include('birth.php');?><br><br>
    <label>Katuosoite: </label><br><input class="lomake"type="text" name="data[osoite]"><br><br>
    <label>Postinumero: </label><br><input class="lomake"type="number" name="data[postinumero]"><br><br>
    <label>Kaupunki: </label><br><input class="lomake"type="text" name="data[kaupunki]"><br><br>
    <label>Puhelin: </label><br><input class="lomake" type="text" name="data[puh]"><br><br>
    <label>Sukupuoli: </label><br><select name="data[sukupuoli]">
    		<option value="0" selected>Valitse</option>
            <option value="Mies">Mies</option>
            <option value="Nainen">Nainen</option>
            </select><br><br>
    
   <label>Koulutus: </label><br><textarea rows="4" cols="50" maxlength="100" name="data[koulutus]"></textarea><br><br>
   <label>Käyttämäsi ohjelmisto/välineistö: </label><br><textarea rows="4" cols="50" maxlength="100" name="data[ohj_val]"></textarea><br><br>
   <label>Olen lukenut olemattomat käyttäjäehdot* </label><input type="checkbox" required><br><br>
	<label>* Tähdellä merkityt alueet ovat pakollisia</label><br><br>
	<input class="button_small" type='submit' value='Tallenna profiili' name='profiili'>

</form>
</section>
