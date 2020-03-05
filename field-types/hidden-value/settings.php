<?php
	$value = empty($settings["hidden_value"]) ? "" : htmlspecialchars($settings["hidden_value"]);
?>
<fieldset>
	<label>Hidden Value</label>
	<input type="text" name="hidden_value" value="<?=$value?>" class="required" />
</fieldset>