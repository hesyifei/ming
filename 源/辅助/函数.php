<?php

declare(strict_types=1);

// https://stackoverflow.com/a/10473026/2603230
function startsWith(string $haystack, string $needle): bool
{
	return substr_compare($haystack, $needle, 0, strlen($needle)) === 0;
}
function endsWith(string $haystack, string $needle): bool
{
	return substr_compare($haystack, $needle, -strlen($needle)) === 0;
}
