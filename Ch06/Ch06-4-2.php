<?php
function printHeader(){
    echo"<h3>SID:C113181135</h3> ";
    echo "<h3>Name:李芸瑄</h3>";
    echo "<h3>EX06</h3>";
}
printHeader();
function printFooter(){
    echo "<hr>";
}printFooter();
$weight = 75;
$bmi = function ($height) use ($weight)
{
    $height = $height / 100.0;
    return $weight / $height / $height;
};

$h = 175;
echo "bmi = " . $bmi($h) . "<br/>";