<form>
    Etunimi: <input type="text" name="etunimi"><br/>
    Sukunimi: <input type="text" name="sukunimi"><br/>
    Syntymäaika: <?php include('birth.php');?><br/>
    Katuosoite: <input type="text" name="katuosoite"><br/>
    Postinumero ja kaupunki: <input type="text" name="postcity"><br/>
    <hr/>
    Sukupuoli: <select name="gender">
    		<option value="" disabled selected>Select your option</option>
            <option value="mies">Mies</option>
            <option value="nainen">Nainen</option>
            <option value="null">En kerro fug u</option>
            </select><br/>
    
    Koulutus: <input type="text" name="koulutus"><br/>
    Käyttämäsi ohjelmisto/välineistö: <input type="text" name="equipment"><br/>
	<hr/>
	<input type='submit' value='Luo profiili' name='profiili'>

</form>
