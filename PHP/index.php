<?php
//1. Write a PHP script to calculate the area and perimeter of a Rectangle, and display the result. Hints: The area of a Rectangle = length × width, perimeter = 2 × (length + width)

echo "1. Area and Perimeter: <br> <br>";

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

echo "2. Vat:  <br><br>";

$amount = 5000;
$vat = 0.15;

$total = ($amount * $vat) + $amount;
echo "Total Amount: $total<br>";
echo "<br>";
echo "<br>";
echo "<br>";

//3. Write a PHP script to find whether a given number is odd or even Hints: use IF-ELSE

echo "3. Even or Odd:  <br><br>";

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

echo "4.Finding the largest number from three given numbers: <br><br>";

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

echo "5.Printing all the odd numbers between 10 to 100:  <br><br>";

for($i = 10; $i <= 100; $i++) {
    if($i % 2 != 0) {
        echo "$i is odd number <br>";
    }
}

echo "<br>";
echo "<br>";
echo "<br>";
//6. Write a PHP script to search an element from an array Hints: use LOOP, IF-ELSE & ARRAY

echo "6. Searching an element from an array:  <br><br>";

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

echo "7. Printing shapes: <br><br>";

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