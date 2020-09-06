<?php
// https://stackoverflow.com/a/10473026/2603230
function startsWith($haystack, $needle)
{
	return substr_compare($haystack, $needle, 0, strlen($needle)) === 0;
}
function endsWith($haystack, $needle)
{
	return substr_compare($haystack, $needle, -strlen($needle)) === 0;
}
