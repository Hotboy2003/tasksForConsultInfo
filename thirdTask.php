<?php

$totalSum = 0;

for ($number=1; $number < 1000; $number++)
{
	if ($number%3===0 || $number%5===0)
	{
		$totalSum += $number;
	}
}

echo $totalSum;