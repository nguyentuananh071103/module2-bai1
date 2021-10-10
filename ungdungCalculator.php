<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
<h2>Simple Calculator</h2>
<form method="post">
    <table>
        <tr>
            <td>First operand:</td>
            <td><input type="text"name="num1"></td>
        </tr>
        <tr>
            <td>Operator' </td>
            <td><select name="ope">
                    <option value="+">Addition</option>
                    <option value="-">Subtraction</option>
                    <option value="*">Multiplication</option>
                    <option value="/">Division</option>
                </select></td>
        </tr>
        <tr>
            <td>Second operand:</td>
            <td><input type="text"name="num2"></td>
        </tr>
        <tr><td><button type="submit">Calculator</button></td></tr>
    </table>
</form>
<h2>Result:</h2><br>

</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $ope = $_POST["ope"];
}
switch ($ope) {
    case '+': echo $num1.$ope.$num2.'='.($num1+$num2).'<br/>';break;
    case '-': echo $num1.$ope.$num2.'='.($num1-$num2).'<br/>';break;
    case '*': echo $num1.$ope.$num2.'='.($num1*$num2).'<br/>';break;
    case '/':
        if ($num2 !=0) {
            echo $num1.$ope.$num2.'='.($num1/$num2).'<br/>';break;
        } else {
            echo 'erro'.'<br/>';
        }
}

?>