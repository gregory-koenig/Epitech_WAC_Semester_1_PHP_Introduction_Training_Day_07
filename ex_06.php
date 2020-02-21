<?php
function sum_rec($nbr = NULL, $iteration = NULL) {
	if (!is_int($nbr) || !is_int($iteration)) {
		return NULL;
	} elseif ($iteration == 0) {
		return $nbr;
	} else {
		$result = $nbr + $iteration;
		if ($iteration > 0) {
			return $result + sum_rec(0, $iteration - 1);
		} else  {
			return $result + sum_rec(0, $iteration + 1);
		}
	}
}
?>
