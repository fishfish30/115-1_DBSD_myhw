<?php
function printHeader(){
    echo"<h3>SID:C113181135</h3>";
    echo"<h3>Name:李芸瑄</h3>";
    echo"<h3> EX02</h3>";
}


function rateExchange($amout, $rate)
{
    $result= $amout * $rate;
    return $result;
}

$rate =rateExchange(1000, 32.5);

printHeader();
echo "Money: " . $rate;
?>