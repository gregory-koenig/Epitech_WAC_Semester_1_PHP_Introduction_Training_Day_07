<?php
function str_beautifuler($str) {
	$str1 = ltrim($str);
	$str2 = trim($str1);
	$str3 = strtolower($str2);
	return $str4 = preg_replace("#\s+#", " ", $str3);
}
?>
