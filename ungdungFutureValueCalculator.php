<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Future Value Calculator</title>
</head>
<body>
<form method="get" action="">
    <table>
        <tr>
            <td>Inventment Amount:</td>
            <td><input type="text" name="money" value="<?php echo isset($_GET["money"])?$_GET["money"]:0?>" placeholder="Enter inventment amount"></td> //isset: ktra xem co ton tai hay k
        </tr>
        <tr>
            <td>Yearly Interest Rate:</td>
            <td><input type="text" name="rate" placeholder="Enter yearly interest rate"></td>
        </tr>
        <tr>
            <td>Number of Years:</td>
            <td><input type="text" name="years" placeholder="Enter number of years"></td>
        </tr>
        <tr>
            <td>
                <button type="submit">Calculate</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
<?php

if ($_SERVER['REQUEST_METHOD']=='GET') {
    $money = $_POST["money"];
    $rate = $_POST["rate"];
    $years = $_POST["years"];
    $futureValue = $money;
    for ($i=0; $i<$years;$i++) {
        $futureValue += ($money * $rate / 100);
        $money = $money + ($money * $rate / 100);
    }
    echo "Future Value is ".(int)$futureValue."<br>";
}
?>