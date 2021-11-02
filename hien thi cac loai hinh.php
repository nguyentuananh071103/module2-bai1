<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print</title>
</head>
<body>
<form method="post">
    <select name="print">
        <option value="rectangle">Print the rectangle</option>
        <option value="square_triangle">Print the square triangle</option>
        <option value="isosceles_triangle">Print the isosceles triangle</option>
    </select>
    <button type="submit" id="submit">Print</button>

</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $print = $_POST["print"];

    if ($print == "rectangle") {
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 7; $j++) {
                echo '*';
            }
            echo '<br/>';
        }
    }
    if ($print == "square_triangle") {
        for ($i = 0; $i < 6; $i++) {
            for ($j = 0; $j < $i; $j++) {
                echo '*';
            }
            echo '<br/>';
        }
    }
    if ($print == "isosceles_triangle") {
        for ($i = 5; $i >=1; $i--) {
            for ($j = 1; $j <=$i; $j++) {
                echo '*';
            }
            echo '<br/>';
        }echo "<br>";
//        for ($i = 1; $i <= 5; $i++) {
//            for ($j = $i; $j <= 5; $j++) {
//                echo "*";
//            }
//            echo "<br>";
//        }
//        echo "<br>";
        for ($i = 0; $i <= 5; $i++) {
            for ($j = 4; $j >= $i; $j--) {
                echo '&ensp;';
            }
            for ($j = 1; $j <= $i; $j++) {
                echo '*';
            }
            echo '<br>';
        }
        echo "<br>";

        for ($i = 1; $i <= 5; $i++) {
            for ($j = 1; $j < $i; $j++) {
                echo '&ensp;';
            }
            for ($j = 5; $j >= $i; $j--) {
                echo '*';
            }
            echo "<br>";
        }
    }
};
?>