<?php
//1. Write a PHP script to calculate the area and perimeter of a Rectangle, and display the result. Hints: The area of a Rectangle = length × width, perimeter = 2 × (length + width)

echo "<h3>1. Area and Perimeter:</h3> <br> <br>";

$length = 10;
$width = 5;

$area = $length * $width;
$perimeter = 2 * ($length + $width);
echo "Area : $area.<br>";
echo "Perimerter: $perimeter.<br>";

echo "<br>";
echo "<br>";
echo "<br>";


//2. Write a PHP script to calculate the VAT (Value Added Tax) over an amount Hints: VAT = 15% of the amount

echo "<h3>2. Vat:</h3>  <br><br>";

$amount = 5000;
$vat = 0.15;

$total = ($amount * $vat) + $amount;
echo "Total Amount: $total<br>";
echo "<br>";
echo "<br>";
echo "<br>";

//3. Write a PHP script to find whether a given number is odd or even Hints: use IF-ELSE

echo "<h3>3. Even or Odd:</h3>  <br><br>";

$val = 5;
if($val % 2 == 0) {
    echo "Even <br>";
}else {
    echo "Odd <br>";
}

echo "<br>";
echo "<br>";
echo "<br>";

//4. Write a PHP script to find the largest number from three given numbers Hints: use IF-ELSE

echo "<h3>4.Finding the largest number from three given numbers:</h3> <br><br>";

$a = 10;
$b = 20;
$c = 30;

if($a > $b && $a > $c) {
    echo "$a is the largest number <br>";
}else if($b > $a && $b > $c) {
    echo "$b is the largest number <br>";
}else {
    echo "$c is the largest number <br>";
}

echo "<br>";
echo "<br>";
echo "<br>";

//5. Write a PHP script to print all the odd numbers between 10 to 100 Hints: use LOOP & IF-ELSE

echo "<h3>5.Printing all the odd numbers between 10 to 100:</h3>  <br><br>";

for($i = 10; $i <= 100; $i++) {
    if($i % 2 != 0) {
        echo "$i is odd number <br>";
    }
}

echo "<br>";
echo "<br>";
echo "<br>";
//6. Write a PHP script to search an element from an array Hints: use LOOP, IF-ELSE & ARRAY

echo "<h3>6. Searching an element from an array:</h3>  <br><br>";

$list = [1, 2, 4, 8, 10, 16];
$elemToFind = 8;
$found = false;

for($i = 0; $i < count($list); $i++) {
    if($list[$i] === $elemToFind) {
        $found = true;
        break;
    }    
}

if($found) {
    echo "Found <br>";
}else {
    echo "Not Found <br>";
}

echo "<br>";
echo "<br>";
echo "<br>";

/*7. Print the following shapes Hints: use NESTED LOOP
 
*
* *
* * *
	
1 2 3
12
1
	
A
B C
D E F
*/

echo "<h3>7. Printing shapes:</h3> <br><br>";

for ($i = 0; $i < 3; $i++) {
    for($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";

for ($i = 3; $i > 0; $i--) {
    for($j = 0; $j < $i; $j++) {
        echo $j + 1;
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";

for($i = 0; $i < 3; $i++) {
    for($j = 0; $j <= $i; $j++) {
        $alpha = chr($j + 65);
        echo $alpha;
    }
    echo "<br>";
}


// 8. Simple Interest
echo "<h3>8. Simple Interest</h3>";
$principal = 1000;  
$rate = 5;  
$time = 2;  
$simple_interest = ($principal * $rate * $time) / 100;  
echo "Principal = $principal, Rate = $rate%, Time = $time years<br>";
echo "Simple Interest = " . $simple_interest . "<br><br>";

// 9. Swap Two Numbers (Without 3rd variable, using array)
echo "<h3>9. Swap Two Numbers</h3>";
$a = 10;  
$b = 20;  
echo "Before Swap: a = $a, b = $b<br>";
list($a, $b) = array($b, $a);  
echo "After Swap: a = $a, b = $b<br><br>";

// 10. Leap Year Check
echo "<h3>10. Leap Year Check</h3>";
$year = 2024;  
if (($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0)) {
    echo "$year is a Leap Year<br><br>";
} else {
    echo "$year is NOT a Leap Year<br><br>";
}


// 11. Factorial of a Number
echo "<h3>11. Factorial of a Number</h3>";
$num = 5;  
$fact = 1;  
for ($i = 1; $i <= $num; $i++) {
    $fact *= $i;
}
echo "Factorial of $num is $fact<br><br>";


// 12. Prime Numbers between 1 to 50

echo "<h3>12. Prime Numbers (1 - 50)</h3>";
for ($num = 2; $num <= 50; $num++) {
    $isPrime = true;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
    if ($isPrime) {
        echo $num . " ";
    }
}
echo "<br><br>";


// 13. Patterns
echo "<h3>13. Patterns</h3>";

// Pattern 1
echo "<b>Pattern 1</b><br>";
for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";

// Pattern 2
echo "<b>Pattern 2</b><br>";
for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}
echo "<br>";

// Pattern 3
echo "<b>Pattern 3</b><br>";
for ($i = 1; $i <= 4; $i++) {
    $char = chr(ord('A') + $i - 1);
    for ($j = 1; $j <= $i; $j++) {
        echo $char . " ";
    }
    echo "<br>";
}