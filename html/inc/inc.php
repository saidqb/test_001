<?php

function get_data($key = ''){
	$set_data = include 'data.php';
	if(!empty($key)){
		return $set_data[$key];
	}
	return $set_data;
}

function count_data_grid($grid,$dataArr){
	$count = count($dataArr);
	$spart = $count/$grid;
	$arr = [];
	for ($i=0; $i < $count; $i++){
		if($i % $spart == 0){
			$arr[] = $i;
		}
	}

	return $arr;
}

function sq_price($sep, $number){
	return "<span>$sep</span>" . number_format($number,0,',','.');
}

function sq_price_discount($sep, $number){
	$num = number_format($number,0,',','.');
	$numArr = explode('.', $num);
	$rnum = [];
	foreach ($numArr as $v) {
		$rnum[] = "<span>$v</span>";
	}
	return "<span>$sep</span>" . implode('.', $rnum);
}