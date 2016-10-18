<?php

$entries = [
	'Demo1',
	'Demo2'	
];

$key = array_rand($entries);

echo sprintf("Winner: %s", $entries[$key]) . PHP_EOL;
