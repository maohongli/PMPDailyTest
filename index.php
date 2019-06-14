<?php
$m=10;
$n=11;
$str=range($m,$n);
$imp=implode($str);
$arr=substr_count($imp,1);
var_dump($arr);
