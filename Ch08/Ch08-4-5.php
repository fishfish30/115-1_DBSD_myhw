<?php
require("about_me.php");
echo "ch08-4-5.php EX03<br>";
$error = "";
$msg = "";
$name = "";
$userName = "";
$showform = true;

if (isset($_GET["Reg"])) {
    // 取得 GET 參數（修正 UerName -> UserName）
    $name = isset($_GET["Name"]) ? $_GET["Name"] : "";
    $userName = isset($_GET["UserName"]) ? $_GET["UserName"] : "";
    $pass1 = isset($_GET["Pass1"]) ? $_GET["Pass1"] : "";
    $pass2 = isset($_GET["Pass2"]) ? $_GET["Pass2"] : "";

    // 進行表單驗證（統一使用 $userName）
    if (empty($userName)) {
        $error = "Your username is empty<br/>";
    } elseif (empty($pass1)) {
        $error = "Your password is empty<br/>";
    } elseif ($pass1 != $pass2) {
        $error = "Your password is not the same<br/>";
    } else {
        $showform = false;
        $msg = "Name: " . htmlspecialchars($name) . "<br/>";
        $msg = $msg . "UserName: " . htmlspecialchars($userName) . "<br/>";
        $msg = $msg . "Password: " . htmlspecialchars($pass1) . "<br/>";
    }
}
?>

<?php 
// 顯示錯誤訊息
if (!empty($error)) {
    echo "<p style='color:red;'>" . $error . "</p>";
}

if ($showform) { 
?>
    <form action="ch08-4-5.php" method="get">
        Name: <input type="text" name="Name" value="<?php echo htmlspecialchars($name); ?>" /><br />
        ID: <input type="text" name="UserName" value="<?php echo htmlspecialchars($userName); ?>" /><br />
        Password: <input type="password" name="Pass1" /><br />
        Password-again: <input type="password" name="Pass2" /><br />
        <input type="submit" name="Reg" value="Register User" />
    </form>
<?php
} else {
    echo $msg;  // 顯示表單處理結果
}
?>