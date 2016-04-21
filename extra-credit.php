<?php
function add(int $one, int $two)
{
	echo $one + $two;
}

try {
	$total = add('foo', 'bar');
} catch (TypeError $test) {
	echo $test->getMessage();
}