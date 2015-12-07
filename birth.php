<select name="DOBMonth">
	<option> - Kuukausi - </option>
	<option value="Tammikuu">Tammikuu</option>
	<option value="Helmikuu">Helmikuu</option>
	<option value="Maaliskuu">Maaliskuu</option>
	<option value="Huhtikuu">Huhtikuu</option>
	<option value="Toukokuu">Toukokuu</option>
	<option value="Kesäkuu">Kesäkuu</option>
	<option value="Heinäkuu">Heinäkuu</option>
	<option value="Elokuu">Elokuu</option>
	<option value="Syyskuu">Syyskuu</option>
	<option value="Lokakuu">Lokakuu</option>
	<option value="Marraskuu">Marraskuu</option>
	<option value="Joulukuu">Joulukuu</option>
</select>

<select name="DOBDay">
	<option> - Päivä - </option>
	<?php
        for ($i = 1; $i <= 31; $i++) {
        echo '<option value="'. $i . '">' . $i . '</option>';
        }
        ?>
</select>

<select name="DOBYear">
	<option> - Vuosi - </option>
	<?php
        for ($i = 1940; $i <= 2015; $i++) {
        echo '<option value="'. $i . '">' . $i . '</option>';
        }
        ?>
	
</select>
