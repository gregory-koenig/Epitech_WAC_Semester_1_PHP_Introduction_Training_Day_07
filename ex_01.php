<?php
function my_facto($nbr = NULL) {
	if (!is_int($nbr) || $nbr < 0) {
		return NULL;
	} elseif ($nbr == 0) {
		return 1;
	} else {
		$result = $nbr;
		for ($i = $nbr - 1; $i > 0; $i--) {
			$result *= $i;
		}
	}
	return $result;
}
?>
