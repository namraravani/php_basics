<?php

// Arithmatic Operators
echo "1. Arithmatic Operators";
echo "<br>";

$a = 20;
$b = 40;
$x = 3;
$y = 2;

echo $a + $b;
echo "<br>";
echo $a - $b;
echo "<br>";
echo $a * $b;
echo "<br>";
echo $a / $b;
echo "<br>";
echo $a % $b;
echo "<br>";
echo $x ** $y;
echo "<br>";

// Assignment operators
echo "2. Assignment operators";
echo "<br>";

$x += $y; // Equivalent to $x = $x + $y
echo $x;
echo "<br>";

$x -= $y; // Equivalent to $x = $x - $y
echo $x;
echo "<br>";

$x *= $y; // Equivalent to $x = $x * $y
echo $x;
echo "<br>";

$x /= $y; // Equivalent to $x = $x / $y
echo $x;
echo "<br>";

$x %= $y; // Equivalent to $x = $x % $y
echo $x;
echo "<br>";

// Comparison operators
echo "3. Comparison operators";
echo "<br>";

var_dump($x == $y);
echo "<br>";

var_dump($x === $y);
echo "<br>";

var_dump($x != $y);
echo "<br>";

var_dump($x <> $y);
echo "<br>";

var_dump($x !== $y);
echo "<br>";

var_dump($x > $y);
echo "<br>";

var_dump($x < $y);
echo "<br>";

var_dump($x <= $y);
echo "<br>";

var_dump($x >= $y);
echo "<br>";

var_dump($x <=> $y);
echo "<br>";

// PHP Increment / Decrement Operators
echo "4. PHP Increment / Decrement Operators";
echo "<br>";

echo ++$x; // Pre-increment
echo "<br>";

echo $x++; // Post-increment
echo "<br>";

echo --$x; // Pre-decrement
echo "<br>";

echo $x--; // Post-decrement
echo "<br>";

// Conditional statements
$name = "Namra";

if ($name == "Namra") {
    echo "Entered name is correct";
} else {
    echo "Entered name is incorrect";
}

// Switch case
$favcolor = "red";
echo "<br>";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}

?>
