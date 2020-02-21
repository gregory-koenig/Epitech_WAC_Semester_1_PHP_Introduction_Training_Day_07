<?php
function my_pow($nb_a = NULL, $nb_b = NULL) {
	if (!is_int($nb_a) || !is_int($nb_b) || $nb_b < 0) {
		return NULL;
	} elseif ($nb_b == 0) {
		return 1;
	} else {
		$result = $nb_a;
		for ($i = 1; $i < $nb_b; $i++) {
			$result *= $nb_a;
		}
	}
	return $result;
}
?>
