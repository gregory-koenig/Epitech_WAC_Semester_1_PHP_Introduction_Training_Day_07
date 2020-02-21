<?php
function sum_it($nbr = NULL, $iteration = NULL) {
	if (!is_int($nbr) || !is_int($iteration)) {
		return NULL;
	} else {
		$result = $nbr + $iteration;
		if ($iteration > 0) {
			for ($i = $iteration; $i >= 0 ; $i--) {
				return $result = $result + $i;
			}
		} else {
			for ($i = $iteration; $i <= 0 ; $i++) {
				return $result = $result + $i;
			}
		}
	}
}
?>
