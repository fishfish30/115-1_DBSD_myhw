<?php
function printHeader(){
    echo"<h3>SID:C113181135</h3> ";
    echo "<h3>Name:李芸瑄</h3>";
    echo "<h3>EX03</h3>";
}
printHeader();
function printFooter(){
    echo "<hr>";
}printFooter();
function volume($l, $w = 10, $h = 15)
{
    print $l . "x" . $w . "x" . $h . "=";
    return ($l * $w * $h);
}
$l = 10;
$w = 20;
$h = 30;
print "盒子體積: " . volume($l, $w, $h) . "<br/>";
print "盒子體積: " . volume($l, $w) ."<br/>";
print "盒子體積: " . volume($l) ."<br/>";