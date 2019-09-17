<?php
session_start();
    $time = microtime(true);
//    $x = (int)$_GET['X'];
//    $y = (double)$_GET['textarea'];
//    $r = (int)$_GET['R'];
//    if(is_nan($x) || is_nan($y)|| is_nan($r)){
//        $result = "invalid data";
//    }else {
//        if(($x>=5 || $x<=-5 )&&($y>5 || $y<-5)&& ($r<1 || $r>5)){
//            $result="data is out of range";
//        } else {
//            if ((($x <= $r / 2 && $y <= $r) && ($x >= 0 && $y >= 0)) || ($x * $x + $y * $y <= ($r / 2)
//                    * ($r / 2) && ($x >= 0 && $y <= 0)) || (($x + $y <= $r) && ($x <= 0 && $y <= 0))) {
//                $result = "true";
//            } else {
//                $result = "false";
//            }
//        }
//    }
//    session_start();
////    ini_set('error_reporting', E_ALL);
////    ini_set('display_errors', 1);
////    ini_set('display_startup_errors', 1);
//    $array = array(
//        "x" => $x,
//        "y" => $y,
//        "r" => $r,
//        "result" => $result
//    );
//    if (isset($_SESSION["values"])) {
////        if(!(end($_SESSION["values"]) == $array)) {
//            array_push($_SESSION["values"], $array);
////        }
//    } else {
//        $_SESSION["values"] = array($array);
//    }
    echo "<html lang='ru'>";
    echo "<head><title>Результат</title>
    <style>
    body{
    font-family: Arial,sans-serif;
    }
    #table{
    width: 50%;
    margin-left: 25%;
    margin-right: 25%;
    }
    p{
    margin-left: 25%;
    margin-right: 25%;
    width: 50%;
    text-align: center;
    background-color: lightblue;
    border-radius: 5px;
    border: solid grey 1px;
    }
    table{
    align-self: center;
    background-color: azure;
    font-size: 20px;
    border: 1px solid grey;
    border-radius: 7px;
    column-gap: 2px;
    column-rule: 7px grey;
    }
    td, th{
    text-align: center;
    background-color: lightblue;
    width: 5%;
    }
    tr{
    background-color: lightyellow;
    }
    </style>
    </head>";
    echo "<body>";
    echo "<main>";
//    echo "<div>";
//    var_export($_SESSION);
//    echo "</div>";
    echo "<div id='table'>";
    echo "<table>";
    echo "<tr>";
    echo "<th>"."№"."</th>";
    echo "<th>"."X"."</th>";
    echo "<th>"."Y"."</th>";
    echo "<th>"."R"."</th>";
    echo "<th>"."Result"."</th>";
    echo "</tr>";
    $i = 1;
    $values = $_SESSION["values"];
    foreach ($values as $value) {
        echo "<tr>";
        if(!next($values)){
            echo "<td style='background-color: gold'>" .$i. "</td>";
            echo "<td style='background-color: gold'>" . $value["x"] . "</td>";
            echo "<td style='background-color: gold'>" . $value["y"] . "</td>";
            echo "<td style='background-color: gold'>" . $value["r"] . "</td>";
        } else {
            echo "<td>" .$i. "</td>";
            echo "<td>" . $value["x"] . "</td>";
            echo "<td>" . $value["y"] . "</td>";
            echo "<td>" . $value["r"] . "</td>";
        }
        if ($value["result"] == "true") {
            echo "<td style='background-color: lightgreen'>" . $value["result"] . "</td>";
        } else {
            echo "<td style='background-color: lightcoral'>" . $value["result"] . "</td>";
        }
        echo "</tr>";
        $i++;
    }
    echo "</table>";
    echo "</div>";
    echo "<div>";
    echo "<p>Current time: ".date("H:i")."</p>";
    $now = microtime(true);
    $delta = $now - $time;
    $resultTime = $delta+$_SESSION["time"];
    echo "<p>Script execute time: ".$resultTime." s</p>";
    echo "<p><a type='text/html' href='https://github.com/NotNaturalSelection/Web/' target='_blank'>Code on GitHub</a></p>";
    echo "</main>";
    echo "</body>";
    echo "</html>";

