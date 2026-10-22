<?php
include "Ch06-5-1.php";
include_once("Ch06-5-2.php");
$amount = 1000;
$rate = 28.1;
// 呼叫函數
$result = rateExchange($amount, $rate);
print "1000美金兌換新台幣=". $result ."元<br/>";
require ("Ch06-5-1.php"); 
$file = "Ch06-5-1.php";
require $file;
include "about_me.php";