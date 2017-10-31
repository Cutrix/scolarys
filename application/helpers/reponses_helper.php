<?php if (!defined('BASEPATH')) exit('No direct access allowed');

if (!function_exists('propositions')) {
	function propositions($name1, $name2, $name3, $optname1, $optvalue1, $optname2, $optvalue2, $optname3, $optvalue3) {
		return "<div class='field'>
		<label for='' class='field-label'>Proposition de reponse 1</label>
		<input type='text' class='field-input' name='$name1'>						
	</div>
		<input type='radio' name='$optname1' value='$optvalue1' checked> Vrai
	
	<div class='field'>
		<label for='' class='field-label'>Proposition de reponse 2</label>
		<input type='text' class='field-input' name='$name2'>		
	</div>
	<input type='radio' name='$optname2' value='$optvalue2'> Vrai
	
	<div class='field'>
		<label for='' class='field-label'>Proposition de reponse 3</label>
		<input type='text' class='field-input' name='$name3'>		
	</div>
	<input type='radio' name='$optname3' value='$optvalue3'> Vrai
	";
	}	
}

if (!function_exists('isTrue')) {
	function isTrue(string $val1, string $val2) {
		if ($val1 === $val2) return 1;
		return 0;
	}	
}



