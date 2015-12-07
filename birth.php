<select name="DOBDay">
	<option> - Päivä - </option>
	<?php
        for ($i = 1; $i <= 31; $i++) {
        echo '<option value="'. $i . '">' . $i . '</option>';
        }
        ?>
</select>
<select name="DOBMonth">
	<option> - Kuukausi - </option>
	<option value="1">Tammikuu</option>
	<option value="2">Helmikuu</option>
	<option value="3">Maaliskuu</option>
	<option value="4">Huhtikuu</option>
	<option value="5">Toukokuu</option>
	<option value="6">Kesäkuu</option>
	<option value="7">Heinäkuu</option>
	<option value="8">Elokuu</option>
	<option value="9">Syyskuu</option>
	<option value="10">Lokakuu</option>
	<option value="11">Marraskuu</option>
	<option value="12">Joulukuu</option>
</select>

<select name="DOBYear">
	<option> - Vuosi - </option>
	<?php
        for ($i = 1940; $i <= 2015; $i++) {
        echo '<option value="'. $i . '">' . $i . '</option>';
        }
        ?>
	
</select>
