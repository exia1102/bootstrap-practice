<?php

$sum1=["1","2","2","1"];
$sum2=["2","2"];
$sum3=[];
foreach ($sum1 as $value){
		if(in_array($value,$sum1)&&(!in_array($value,$sum3))){
			$sum3[]=$a;
		}
}
var_dump($sum3);