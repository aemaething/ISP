<?php

function powerTwo(int $value) : int
{
	return $value * $value; 
}

$powerTwoCompare = function (int $value, int $compare) : string
{
	return powerTwo($value) == $compare
		? sprintf("%03d ist das Quadrat von %03d", $compare, $value)
		: sprintf("%03d ist NICHT das Quadrat von %03d", $compare, $value); 
};

$data1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$data2 = [1, 4, 9, 16, 25, 36, 49, 64, 81, 100];

$result1 = array_map("powerTwo", $data1);
print_r($result1);

$result2 = array_map($powerTwoCompare, $data1, $data2);
print_r($result2);


function manuallyPowerTwo(array $data) : array
{
	$result = [];
	foreach ($data as $element) {
		$result[] = $element * $element;
	}
	
	return $result;
}

$result3 = manuallyPowerTwo($data1);
print_r($result3);