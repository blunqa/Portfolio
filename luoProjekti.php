<?php 
include("config.php");
require_once("functions.php");
include("includes/iheader.php");
?>
<div id="luoProjekti-bg">
    <section class="profiililomake">
    <h3>Luo projekti</h3>
    <br>
        <form action="upload.php" class="projekti" method="post">
            Projektin nimi*: <br><input class="lomake" type="text" name="pr_nimi" required>
            <br><br>
            Kuvaus*: <br><textarea rows="4" cols="53"  name="pr_kuvaus" required></textarea>
            <br><br>
            Roolisi projektissa: <br><input class="lomake" name="pr_rooli" ></textarea>
            <br><br>
            Projektin kansikuva*: <br><input type="file" name="fileToUpload" id="fileToUpload" required>
            <br><br>
            <input class="button_small" type="submit" value="Luo projekti" name="luoprojekti">
            <br><br>
            <label>* Tähdellä merkityt alueet ovat pakollisia</label>
        </form>
    </section>
</div>

<?php include("includes/ifooter.php"); ?>
