<?php
function get_next_prime($nbr = NULL) {
echo "a\n";
	if (!is_int($nbr)) {
echo "b\n";
		return NULL;
	} elseif ($nbr <= 1) {
echo "c\n";
		return NULL;
	} else {
echo "d\n";
		$prime = $nbr;
		for ($i = $prime - 1; $i > 1; $i--) {
echo "e\n";
			if ($prime % $i == 0) {
echo "f\n";
				return $nbr;
			}
echo "g\n";
			for ($i = $nbr +1; $i > $nbr; $i++) {
echo "h\n";
				for ($j = $i - 1; $j > 1; $j--) {
echo "i\n";
					if ($i % $j == 0) {
echo "j\n";
						return $i;
echo "k\n";
					}
				}
			}
		}
	}
}
echo get_next_prime(7);
?>




