#!/usr/bin/php
<?php
if($argc==1){
	echo $argv[0]." 0.1 by Kittirak M.";
	echo "\nUsage ".$argv[0]." [d/m/Y]";
} else {
	$d=explode('/',$argv[1]);
	echo "ตายวันที่ ". $argv[1];
	$jd = GregorianToJD($d[1],$d[0],$d[2]);
	echo "\nครบ   7 วัน วันที่ ", date_format(date_create(JDToGregorian($jd+7)),'D d/m/Y');
	echo "\nครบ  50 วัน วันที่ ", date_format(date_create(JDToGregorian($jd+50)),'D d/m/Y');
	echo "\nครบ 100 วัน วันที่ ". date_format(date_create(JDToGregorian($jd+100)),'D d/m/Y');
}
?>

