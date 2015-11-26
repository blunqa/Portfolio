<select name="DOBMonth">
	<option> - Month - </option>
	<option value="January">January</option>
	<option value="Febuary">Febuary</option>
	<option value="March">March</option>
	<option value="April">April</option>
	<option value="May">May</option>
	<option value="June">June</option>
	<option value="July">July</option>
	<option value="August">August</option>
	<option value="September">September</option>
	<option value="October">October</option>
	<option value="November">November</option>
	<option value="December">December</option>
</select>

<select name="DOBDay">
	<option> - Day - </option>
	<?php
        for ($i = 1; $i <= 31; $i++) {
        echo '<option value="'. $i . '">' . $i . '</option>';
        }
        ?>
</select>

<select name="DOBYear">
	<option> - Year - </option>
	<?php
        for ($i = 1940; $i <= 2015; $i++) {
        echo '<option value="'. $i . '">' . $i . '</option>';
        }
        ?>
	
</select>
                
