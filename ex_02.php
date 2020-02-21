<?php
function my_facto_rec($nbr = NULL) {
	if (!is_int($nbr) || $nbr < 0) {
		return NULL;
	} elseif ($nbr == 0) {
		return 1;
	} else {
		$result = $nbr;
		return $result * my_facto_rec($nbr - 1);
	}
}
?>
