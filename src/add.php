<?php
session_start();
$time = microtime(true);
if(is_numeric(str_replace(",",".",$_GET["X"]))){
    $x = (float)str_replace(",", ".", $_GET["X"]);
} else {
    $x = $_GET["X"];
}
if(is_numeric(str_replace(",",".",$_GET["textarea"]))){
    $y = (float)str_replace(",",".",$_GET["textarea"]);
} else {
    $y = $_GET["textarea"];
}
if(is_numeric(str_replace(",",".",$_GET["R"]))){
    $r = (float) str_replace(",",".",$_GET["R"]);
} else {
    $r = $_GET["R"];
}
if($x == (int) $x){
    $x = (int)$x;
}
if($r == (int) $r ){
    $r = (int) $r;
}
if(is_numeric($x) & is_numeric($y) & is_numeric($r) & is_int($x) & is_int($r)){
    if(($x>=5 || $x<=-5 )||($y>5 || $y<-5)||($r<1 || $r>5)){
        $result="data is out of range";
    } else {
        if ((($x <= $r / 2 && $y <= $r) && ($x >= 0 && $y >= 0)) || ($x * $x + $y * $y <= ($r / 2)
                * ($r / 2) && ($x >= 0 && $y <= 0)) || (($x + $y <= $r) && ($x <= 0 && $y <= 0))) {
            $result = "true";
        } else {
            $result = "false";
        }
    }
}else {
    $result = "invalid data";
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