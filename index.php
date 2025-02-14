<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            color: red;
            font-size: 2.5rem;
        }

        h2 {
            color: purple;
            font-size: 2rem;

        }

        #span1 {
            color: red;
        }

        #span2 {
            color: blue;
        }
    </style>
</head>

<body>
    <h1>Array :</h1>
    <h2>Part 1 :</h2>
    <h3>fruits:</h3>
    <ul>

        <?php
        $colors = ['white', 'green', 'red'];

        foreach ($colors as $color) {

            echo "<li>  $color  </li>";
        } ?>
    </ul>

    <h2>Part 2 :</h2>
    <?php
    $cities = array(
        "Italy" => "Rome",
        "Luxembourg" => "Luxembourg",
        "Belgium" => "Brussels",
        "Denmark" => "Copenhagen",
        "Finland" => "Helsinki",
        "France" => "Paris",
        "Slovakia" => "Bratislava",
        "Slovenia" => "Ljubljana",
        "Germany" => "Berlin",
        "Greece" => "Athens",
        "Ireland" => "Dublin",
        "Netherlands" => "Amsterdam",
        "Portugal" => "Lisbon",
        "Spain" => "Madrid"
    );
    foreach ($cities as $k => $v) {
        echo "The capital of <span id='span1'>$k</span> is <span id='span2'>$v</span>  <br> ";
    }
    ?>
    <h2>Part 3 :</h2>
    <?php
    $color = array(4 => 'white', 6 => 'green', 11 => 'red');
    echo $color["4"];
    ?>
    <h2>Part 4 :</h2>
    <?php


    $array = [1, 2, 3, 4, 5];
    array_splice($array, 3, 0, "$");

    echo implode(' ', $array);
    ?>

    <h2>Part 4 :</h2>
    <?php
    $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
    asort($fruits);
    echo "<pre>";
    print_r($fruits);
    echo "</pre>";
    ?>
    <h2>Part 5 :</h2>
    <?php
    $temperatures  = [
        78,
        60,
        62,
        68,
        71,
        68,
        73,
        85,
        66,
        64,
        76,
        63,
        75,
        76,
        73,
        68,
        62,
        73,
        72,
        65,
        74,
        62,
        62,
        65,
        64,
        68,
        73,
        75,
        79,
        73
    ];

    $averageTemperature = array_sum($temperatures) / count($temperatures);
    echo "  $averageTemperature ..........";
    sort($temperatures);

    $lowestTemperatures = array_slice($temperatures, 0, 5);

    $highestTemperatures = array_slice($temperatures, -5);
    echo "Average Temperature is: " . number_format($averageTemperature, 1) . "<br>";
    echo "List of five lowest temperatures: " . implode(', ', $lowestTemperatures) . "<br>";
    echo "List of five highest temperatures: " . implode(', ', $highestTemperatures) . "<br>";
    ?>
    <h2>Part 6 :</h2>
    <?php
    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
    $array3 = array(...$array1, ...$array2);
    echo "<pre>";
    print_r($array3);

    echo "</pre>";
    ?>
    <h2>Part 8 :</h2>
    <?php
    $colors = array("red", "blue", "white", "yellow");
    $new = array();

    foreach ($colors as $color) {
        $new = [...$new, strtoupper($color)];
    }
    echo "<pre>";
    print_r($new);
    echo "</pre>";
    ?>
    <!--  -->
    <h1>Functions :</h1>
    <h2>Part 1 :</h2>
    <?php
    function isPrime($num)
    {
        if ($num < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }


    $number = 3;
    if (isPrime($number)) {
        echo "$number is a prime number.";
    } else {
        echo "$number is not a prime number.";
    }

    print "<br>";
    ?>
    <h2>Part 2 :</h2>

    <?php

    $str = "remove";
    echo strrev($str);
    echo "<br>";
    ?>
    <h2>Part 3 :</h2>

    <?php
    function swap(int $x, int $y)
    {
        $x = $x + $y;
        $y = $x - $y;
        $x = $x - $y;
        print $x . "......" . $y;
    }
    $x = 23;
    $y = 48;
    swap($x, $y);
    ?>
    <h2>Part 4 :</h2>
    <?php
    function isArmstrongNumber($number)
    {
        $numStr = (string)$number;
        $length = strlen($numStr);
        $sum = 0;

        for ($i = 0; $i < $length; $i++) {
            $digit = (int)$numStr[$i];
            $sum += pow($digit, $length);
        }

        return $sum === $number;
    }

    $number = 407;
    if (isArmstrongNumber($number)) {
        echo "$number is an Armstrong Number.<br>";
    } else {
        echo "$number is not an Armstrong Number.<br>";
    }
    ?>
    <h2>Part 5 :</h2>
    <?php
    function isPalindrome($str)
    {
        $cleanedStr = preg_replace('/[^a-zA-Z0-9]/', '', $str);
        $cleanedStr = strtolower($cleanedStr);

        $reversedStr = strrev($cleanedStr);

        return $cleanedStr === $reversedStr;
    }

    $input = "Eva, can I see bees in a cave?";
    if (isPalindrome($input)) {
        echo "Yes, it is a palindrome.\n";
    } else {
        echo "No, it is not a palindrome.\n";
    }
    ?>
    <h2>Part 6 :</h2>
    <?php
    function removeDuplicates($array)
    {
        $uniqueArray = array_unique($array);

        $uniqueArray = array_values($uniqueArray);

        return $uniqueArray;
    }

    $array1 = array(2, 4, 7, 4, 8, 4);

    $result = removeDuplicates($array1);

    echo "<pre>";
    print_r($result);
    echo "</pre>";
    ?>
    <h1>Logical Statements and Operators :</h1>
    <h2>Part 1 :</h2>
    <?php
    $firstInteger = 10;
    $secondInteger = 10;

    $sum = $firstInteger + $secondInteger;

    if ($sum == 30) {
        echo $sum;
    } else {
        echo 'false';
    }
    ?>
    <h2>Part 2 :</h2>
    <?php
    $number = 20;

    if ($number % 3 == 0) {
        echo 'true';
    } else {
        echo 'false';
    }
    ?>
    <h2>Part 3 :</h2>
    <?php
    $number = 50;

    if ($number >= 20 && $number <= 50) {
        echo 'true';
    } else {
        echo 'false';
    }
    ?>
    <h2>Part 4 :</h2>
    <?php
    $numbers = [1, 5, 9];

    $largest = max($numbers);

    echo   "The largest number is $largest";
    ?>
    <h2>Part 5 :</h2>
    <?php
    function calculateElectricityBill($units)
    {
        $totalBill = 0;

        if ($units <= 50) {
            $totalBill = $units * 2.50;
        } elseif ($units <= 150) {
            $totalBill = 50 * 2.50;
            $totalBill += ($units - 50) * 5.00;
        } elseif ($units <= 250) {
            $totalBill = 50 * 2.50;
            $totalBill += 100 * 5.00;
            $totalBill += ($units - 150) * 6.20;
        } else {
            $totalBill = 50 * 2.50;
            $totalBill += 100 * 5.00;
            $totalBill += 100 * 6.20;
            $totalBill += ($units - 250) * 7.50;
        }

        return $totalBill;
    }

    $units = 300;

    $bill = calculateElectricityBill($units);

    echo "Electricity Bill for $units units is: " . number_format($bill, 2) . " JOD";
    ?>
    <h2>PHP Calculator</h2>
    <h2>Part 6 :</h2>
    <form method="post" action="">
        <label for="num1">Number 1:</label>
        <input type="number" name="num1" id="num1" required>
        <br><br>

        <label for="num2">Number 2:</label>
        <input type="number" name="num2" id="num2" required>
        <br><br>

        <label for="operation">Operation:</label>
        <select name="operation" id="operation" required>
            <option value="addition">Addition (+)</option>
            <option value="subtraction">Subtraction (-)</option>
            <option value="multiplication">Multiplication (*)</option>
            <option value="division">Division (/)</option>
        </select>
        <br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        switch ($operation) {
            case 'addition':
                $result = $num1 + $num2;
                break;
            case 'subtraction':
                $result = $num1 - $num2;
                break;
            case 'multiplication':
                $result = $num1 * $num2;
                break;
            case 'division':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Error: Division by zero!";
                }
                break;
            default:
                $result = "Invalid operation!";
                break;
        }
    }
    if (isset($result)) {
        echo "<h2>Result: $result</h2>";
    }
    ?>
    <h2>Part 7 :</h2>
    <?php
    $age = 15;
    if ($age >= 18) {
        echo "is eligible to vote";
    } else {
        echo "is not eligible to vote";
    }
    ?>
    <h2>Part 8 :</h2>
    <?php
    $number = -60;

    if ($number > 0) {
        echo "Positive";
    } elseif ($number < 0) {
        echo "Negative";
    } else {
        echo "Zero";
    }
    ?>
    <h2>Part 9 :</h2>


    <?php
    $scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];

    $totalSubjects = count($scores);
    $totalScore = array_sum($scores);
    $average = $totalScore / $totalSubjects;

    if ($average >= 90) {
        $grade = 'A';
    } elseif ($average >= 80) {
        $grade = 'B';
    } elseif ($average >= 70) {
        $grade = 'C';
    } elseif ($average >= 60) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }
    echo "Average Score: " . number_format($average, 2) . "\n";
    echo "Grade: $grade";
    ?>

    <h1>Loops :</h1>
    <h2>Part 1 :</h2>
    <?php
    $result = '';

    for ($i = 1; $i <= 10; $i++) {
        $result .= $i;

        if ($i < 10) {
            $result .= '-';
        }
    }

    echo $result;
    ?>
    <h2>Part 2 :</h2>
    <?php
    $total = 0;

    for ($i = 0; $i <= 30; $i++) {
        $total += $i;
    }

    echo "The total is: " . $total;
    ?>
    <h2>Part 3 :</h2>
    <?php
    $rows = 5;

    for ($i = 0; $i < $rows; $i++) {

        for ($j = 0; $j < $rows; $j++) {

            if ($j < $rows - $i - 1) {
                echo "A ";
            } else {
                echo chr(65 + $i) . " ";
            }
        }
        echo "<br>";
    }
    ?>
    <h2>Part 4 :</h2>
    <?php
    $rows = 5;
    $num = 1;
    for ($i = 0; $i < $rows; $i++) {

        for ($j = 0; $j < $rows; $j++) {

            if ($j < $rows - $i - 1) {
                echo $num;
            } else {
                echo $num + $i . " ";
            }
        }
        echo "<br>";
    }
    ?>
    <h2>Part 5:</h2>
    <?php
    $rows = 5;
    $cols = 5;

    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $cols; $j++) {

            if ($i == $j) {
                echo $i . " ";
            } else {
                echo "0 ";
            }
        }
        echo "<br>";
    }
    ?>
    <h2>Part 6: </h2>
    <?php
    $number = 5;
    $factorial = 1;
    for ($i = 1; $i <= $number; $i++) {
        $factorial *= $i;
    }
    echo "Factorial of $number is: $factorial";
    ?>
    <h1>PHP String and String Functions</h1>
    <h2>Part 1:</h2>
    <?php
    $string = "hello world";
    echo "Uppercase: " . strtoupper($string) . "<br>";
    echo "Lowercase: " . strtolower($string) . "<br>";
    echo "First letter uppercase: " . ucfirst($string) . "<br>";
    echo "First letter of each word capitalized: " . ucwords($string) . "<br>";
    ?>

    <h2>Part 2: </h2>
    <?php
    $numericString = '085119';
    $time = substr($numericString, 0, 2) . ":" . substr($numericString, 2, 2) . ":" . substr($numericString, 4, 2);
    echo "Formatted Time: " . $time . "<br>";
    ?>

    <h2>Part 3:</h2>
    <?php
    $sentence = "I am a full stack developer at orange coding academy";
    $word = "Orange";

    if (stripos($sentence, $word) !== false) {
        echo "Word Found!<br>";
    } else {
        echo "Word Not Found!<br>";
    }
    ?>

    <h2>Part 4:</h2>
    <?php
    $url = 'www.orange.com/index.php';
    $fileName = basename($url);
    echo "File Name: " . $fileName . "<br>";
    ?>

    <h2>Part 5:</h2>
    <?php
    $email = 'info@orange.com';
    $username = strstr($email, '@', true);
    echo "Username: " . $username . "<br>";
    ?>

    <h2>Part 6:</h2>
    <?php
    $string = 'info@orange.com';
    $lastThree = substr($string, -3);
    echo "Last Three Characters: " . $lastThree . "<br>";
    ?>

    <h2>Part 7:</h2>
    <?php
    $chars = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    $password = substr(str_shuffle($chars), 0, 10);
    echo "Random Password: " . $password . "<br>";
    ?>
    <h2>Part 8:</h2>
    <?php
    $sentence = 'That new trainee is so genius.';
    $newWord = 'Our';

    $words = explode(' ', $sentence);
    $words[0] = $newWord;
    $newSentence = implode(' ', $words);

    echo $newSentence;
    ?>
</body>

</html>