<?php

$check = true;

echo $check;
echo "<hr>";

$price = 100;
echo $price++ | $price;
echo '<br>' . ++$price;
echo "<hr>";

$numA = 2;
$numB = 3;
echo '$numA=' | "$numA";
//這串有疑問
echo '<br>$numB=' . $numB;
echo "<hr>";

$price = 125;
echo $price;
$price++;
echo $price;
$price--;
echo '<br>$price=' . $price;
echo '<br>++$price=' . ++$price;
echo '<br>$price++=' . $price++;
echo '<br>$price++ after_value=' . $price;
echo "<hr>";

$num1 = 10;
$num2 = 25;
echo '$num1=' . $num1;
echo "<br>";
echo '$num2=' . $num2;
echo "<BR>";
echo " + => ";
echo $num1 + $num2;
echo "<br>";
echo " - => ";
echo $num1 - $num2;
echo "<br>";
echo " * => ";
echo $num1 * $num2;
echo "<br>";
echo " / => ";
echo $num1 / $num2;
echo "<br>";
echo " % => ";
echo $num1 % $num2;
echo "<br>";
echo "<hr>";

$score = 70;
echo 'score=' . $score . '<br>';
$level = ($score >= 60) ? 'good score' : 'bad score';
echo $level;
echo "<hr>";

echo "給定兩變數，請思考如何交換兩變數值<br>";
$a = 10;
$b = 50;
echo '$a=' . $a . '; $b=' . $b;
$tmp = '';
$tmp = $a;
echo "<br>" . $tmp;
$tmp = null;
unset($tmp);

$a++;
echo '';
echo "<hr>";

$a = 10;
$b = 50;
echo '$a=' . $a . '; $b=' . $b;
$a = $a + $b;
echo '<br>$a = $a + $b :' . $a;
$b = $a - $b;
echo '<br>$b = $b - $a : #' . $b;
$a = $a - $b;
echo '<br>$a = $a - $b : #' . $a;
echo "<hr>";


echo '<a href="../index.html">back index</a>';

