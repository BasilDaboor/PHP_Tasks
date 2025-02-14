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
    <h1>PHP String and String Functions</h1>

    <h2>Part 1: Put a String in an Array</h2>
    <?php
    $string = "Twinkle, twinkle, little star.";
    $array = explode(" ", $string);
    var_dump($array);
    ?>

    <h2>Part 2: Print the Next Letter</h2>
    <?php
    $char = 'a';
    $nextChar = ++$char;
    echo "Next character after 'a': " . $nextChar . "<br>";

    $char = 'z';
    $nextChar = ++$char;
    echo "Next character after 'z': " . $nextChar . "<br>";
    ?>

    <h2>Part 3: Insert a String at a Specified Position</h2>
    <?php
    $originalString = 'The brown fox';
    $insertString = 'quick';
    $position = 4;
    $newString = substr_replace($originalString, $insertString . ' ', $position, 0);
    echo "Original String: " . $originalString . "<br>";
    echo "Modified String: " . $newString . "<br>";
    ?>

    <h2>Part 4: Get the First Word of a Sentence</h2>
    <?php
    $sentence = 'The quick brown fox';
    $firstWord = strtok($sentence, ' ');
    echo "First word: " . $firstWord . "<br>";
    ?>

    <h2>Part 5: Remove Zeroes from a Number</h2>
    <?php
    $number = '0000657022.24';
    $cleanedNumber = ltrim($number, '0');
    echo "Original Number: " . $number . "<br>";
    echo "Cleaned Number: " . $cleanedNumber . "<br>";
    ?>

    <h2>Part 6: Remove Trailing Dashes from a String</h2>
    <?php
    $string = 'The quick brown fox jumps over the lazy dog---';
    $cleanedString = rtrim($string, '-');
    echo "Original String: " . $string . "<br>";
    echo "Cleaned String: " . $cleanedString . "<br>";
    ?>

    <h2>Part 7: Select First 5 Words from a String</h2>
    <?php
    $string = 'The quick brown fox jumps over the lazy dog';
    $words = explode(' ', $string, 6);
    $firstFiveWords = implode(' ', array_slice($words, 0, 5));
    echo "Original String: " . $string . "<br>";
    echo "First 5 Words: " . $firstFiveWords . "<br>";
    ?>
    <h2>Part 8: script to remove comma(s)</h2>
    <?php
    $numericString = '2,543.12';
    $cleanedString = str_replace(',', '', $numericString);
    echo "Original String: " . $numericString . "<br>";
    echo "Cleaned String: " . $cleanedString;
    ?>
    <h1>LOOP</h1>

    <h2>Part 1: Fibonacci Sequence</h2>
    <?php
    $n = 10;
    $first = 0;
    $second = 1;

    echo "Fibonacci Sequence: ";
    for ($i = 0; $i < $n; $i++) {
        if ($i <= 1) {
            $fib = $i;
        } else {
            $fib = $first + $second;
            $first = $second;
            $second = $fib;
        }
        echo $fib . " ";
    }
    ?>

    <h2>Part 2: Floyd's Triangle</h2>
    <?php
    $n = 5;
    $num = 1;

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $num . " ";
            $num++;
        }
        echo "<br>";
    }
    ?>

    <h2>Part 3: Alphabet Pattern</h2>
    <?php
    $n = 5;

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo chr(65 + $j) . " ";
        }
        echo "<br>";
    }

    for ($i = $n - 1; $i > 0; $i--) {
        for ($j = 0; $j < $i; $j++) {
            echo chr(65 + $j) . " ";
        }
        echo "<br>";
    }
    ?>
    <h1>Logical Statements and Operators </h1>
    <h2>1. Check if a Year is a Leap Year</h2>
    <?php
    $year = 2013;
    echo ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)
        ? "<p class='result'>$year is a leap year.</p>"
        : "<p class='result'>$year is not a leap year.</p>";
    ?>

    <h2>2. Determine the Season Based on Temperature</h2>
    <?php
    $temperature = 27;
    echo $temperature < 20
        ? "<p class='result'>It is winter.</p>"
        : "<p class='result'>It is summertime!</p>";
    ?>

    <h2>3. Sum of Two Integers (Triple if Equal)</h2>
    <?php
    $firstInteger = 2;
    $secondInteger = 2;
    $sum = ($firstInteger == $secondInteger) ? ($firstInteger + $secondInteger) * 3 : $firstInteger + $secondInteger;
    echo "<p class='result'>Sum: $sum</p>";
    ?>

    <h2>4. Numbers Between 200 and 250 Divisible by 4</h2>
    <?php
    for ($i = 200; $i <= 250; $i++) {
        if ($i % 4 == 0) {
            echo "<span class='result'>$i</span> ";
        }
    }
    ?>

    <h2>5. Generate 10 Unique Random Numbers (Range 11-20)</h2>
    <?php
    $numbers = range(11, 20);
    shuffle($numbers);
    echo "<p class='result'>" . implode(" ", array_slice($numbers, 0, 10)) . "</p>";
    ?>

</body>

</html>