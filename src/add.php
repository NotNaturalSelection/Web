<?php
session_start();
$time = microtime(true);
$x = (int)$_GET['X'];
$y = (double)$_GET['textarea'];
$r = (int)$_GET['R'];
if(is_nan($x) || is_nan($y)|| is_nan($r)){
    $result = "invalid data";
}else {
    if(($x>=5 || $x<=-5 )&&($y>5 || $y<-5)&& ($r<1 || $r>5)){
        $result="data is out of range";
    } else {
        if ((($x <= $r / 2 && $y <= $r) && ($x >= 0 && $y >= 0)) || ($x * $x + $y * $y <= ($r / 2)
                * ($r / 2) && ($x >= 0 && $y <= 0)) || (($x + $y <= $r) && ($x <= 0 && $y <= 0))) {
            $result = "true";
        } else {
            $result = "false";
        }
    }
}
$array = array(
    "x" => $x,
    "y" => $y,
    "r" => $r,
    "result" => $result
);
if (isset($_SESSION["values"])) {
//        if(!(end($_SESSION["values"]) == $array)) {
    array_push($_SESSION["values"], $array);
//        }
} else {
    $_SESSION["values"] = array($array);
}
$now = microtime(true);
$resultTime = $now - $time;
$_SESSION["time"] = $resultTime;
header("Location: https://se.ifmo.ru/~s265062/index.php");
exit;