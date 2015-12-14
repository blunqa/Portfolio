<select required name="data[day]">
	<option value=NULL> - Päivä - </option>
	<?php
        for ($i = 1; $i <= 9; $i++) {
        echo '<option value="'. "0" . $i . '">' . $i . '</option>';
        }
        for ($i = 10; $i <= 31; $i++) {
        echo '<option value="'. $i . '">' . $i . '</option>';
        }
        ?>
    
</select>
<select required name="data[month]">
	<option value=NULL> - Kuukausi - </option>
	<option value="01">Tammikuu</option>
	<option value="02">Helmikuu</option>
	<option value="03">Maaliskuu</option>
	<option value="04">Huhtikuu</option>
	<option value="05">Toukokuu</option>
	<option value="06">Kesäkuu</option>
	<option value="07">Heinäkuu</option>
	<option value="08">Elokuu</option>
	<option value="09">Syyskuu</option>
	<option value="10">Lokakuu</option>
	<option value="11">Marraskuu</option>
	<option value="12">Joulukuu</option>
</select>

<select name="data[year]"  required>
	<option value=NULL> - Vuosi - </option>
	<?php
        for ($i = 1940; $i <= 2015; $i++) {
        echo '<option value="'. $i . '">' . $i . '</option>';
        }
        ?>
	
</select>
