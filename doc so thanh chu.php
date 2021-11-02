<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    <input type="number" name="number">
    <button>Submit</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["number"])) {
        readNumber($_GET["number"]);
    }
}
//Xu ly logic
function readNumber($number)
{
    if ($number < 10) {
        echo numberOneDigit($number);
    } else if ($number < 100) {
        echo numberTwoDigit($number);
    } else if ($number < 1000) {
        echo numberThreeDigit($number);
    }
}

function numberOneDigit($number)
{
    $arr = ["zero", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine"];
    return $arr[$number];
}

function numberTwoDigit($number)
{
    $teen = [10 => "ten", 11 => "eleven", 12 => "twelve", 13 => "thirteen", 14 => "fourteen", 15 => "fifteen", 16 => "sixteen", 17 => "seventeen", 18 => "eighteen", 19 => "nineteen"];
    $ty = [2 => "twenty", 3 => "thirty", 4 => "forty", 5 => "fifty", 6 => "sixty", 7 => "seventy", 8 => "eighty", 9 => "ninety"];
    if ($number < 20) {
        return $teen[$number];
    } else {
        if ($number % 10 == 0)
            return $ty[$number[0]];
        else
            return $ty[$number[0]] . " " . numberOneDigit($number[1]);
    }
}

function numberThreeDigit($number)
{
    $arr = ["zero", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine"];
    if($number %100==0) {
        return $arr[$number[0]]."hundred";
    } else if ($number[1]==0) {
        return $arr[$number[0]]." hundred and ".numberOneDigit($number[2]);
    } else {
        $twoDigit = $number[1].$number[2];
        return $arr[$number[0]]." hudred ".numberTwoDigit($twoDigit);
    }

}