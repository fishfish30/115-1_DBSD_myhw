<?php
require("about_me.php");
echo "ch08-5-2.php EX04<br>";
if (isset($_COOKIE["ItemName"])) {
$iteName = $_COOKIE["ItemName"];
$quantity = $_COOKIE["Quantity"];

echo "取得ItemName的Cookie值: " . $iteName . "<br/>";
echo "取得Quantity的Cookie值: " . $quantity . "<br/>";

setcookie("ItemName", "", time() - 3600);
setcookie("Quantity", "", time() - 3600);
}else{
    $itemName = "white iPone";
    $quantity = 10;

    $date = strtotime("+10 day", time());

    setcookie("ItemName", $itemName, $date);
    setcookie("Quantity", $quantity, $date);

    echo "新增名為ItemName的Cookie值: " . $itemName . "<br/>";
    echo "新增名為Quantity的Cookie值: " . $quantity . "<br/>";
    echo "Cookie期限:" . date("l F j Y h:i:s A", $date);
}
?>

<br/>
<a href="ch08-5-2.php">Receive Cookies</a>