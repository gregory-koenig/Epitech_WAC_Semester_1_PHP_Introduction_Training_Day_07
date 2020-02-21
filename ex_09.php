<?php
function is_prime($nbr = NULL) {
	if (!is_int($nbr)) {
		return NULL;
	} elseif ($nbr <= 1) {
		return NULL;
	} else {
		for ($i = $nbr - 1; $i > 1; $i--) {
			if ($nbr % $i == 0) {
				return false;
			}
		}
		return true;
	}
}
?>
