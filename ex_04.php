<?php
function my_pow_rec($nbr = NULL, $power = NULL) {
	if (!is_int($nbr) || !is_int($power) || $power < 0) {
		return NULL;
	} elseif ($power == 0) {
		return 1;
	} else {
		$result = $nbr;
		return $result * my_pow_rec($nbr, $power - 1);
	}
}
?>
