<?php include("includes/iheader.php"); ?>
<h3>Luo projekti</h3>
<form class="profiili">
    Projektin nimi*: <br><input class="lomake" type="text" name="pr_nimi" required>
    <br><br>
    Kuvaus*: <br><textarea rows="4" cols="50" maxlength="500" name="pr_kuvaus" required></textarea>
    <br><br>
    Roolisi projektissa: <br><input class="lomake" name="pr_rooli" ></textarea>
    <br><br>
    Projektin kansikuva*: <br><input type="file" name="fileToUpload" id="fileToUpload" required>
    <br><br>
    <input type="submit" value="Luo projekti" name="luoprojekti">
    <br><br>
    <p>* Tähdellä merkityt alueet ovat pakollisia</p>
</form>
<?php include("includes/ifooter.php"); ?>
