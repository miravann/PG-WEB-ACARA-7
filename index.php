<!DOCTYPE html>
<html>
<head>
    <title>Demonstrasi Kode PHP</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h1>Demonstrasi Kode PHP</h1>

<h2>Comments</h2>
<?php
// This is a single-line comment
# This is also a single-line comment
/* This is a
multi-line comment */
?>

<p>.</p>

<h2>Variabel</h2>
<?php
$x = 20;
$y = "English Premier League Trophy"; 
echo "Variabel x: $x<br>";
echo "Variabel y: $y<br>";
?>

<p>.</p>

<h2>Echo</h2>
<?php
echo "Hello, Manchester United Fans!<br>";
?>

<p>.</p>

<h2>Data Type</h2>
<?php
$a = 3;       // Integer
$b = 3.14;    // Float
$c = "36";    // String
$d = true;    // Boolean
$e = NULL;    // NULL

var_dump($a, $b, $c, $d, $e);
?>

<p>.</p>

<h2>String</h2>
<?php
$txt1 = "Rasmus Hojlund";  
$txt2 = "Manchester United"; 
echo "<h4>$txt1</h4>";
echo "<p>Best striker for $txt2</p>";
?>

<p>.</p>

<h2>Number</h2>
<?php
$number1 = 10;
$number2 = 5;
echo "Number 1: $number1<br>";
echo "Number 2: $number2<br>";
?>

<p>.</p>

<h2>Casting</h2>
<?php
$var = 100; // Integer
$varString = (string)$var; // Casting to String
echo "After casting: $varString<br>";
?>

<p>.</p>

<h2>Math</h2>
<?php
echo "Square root of 81: " . sqrt(81) . "<br>";
echo "Square root of 64: " . sqrt(64) . "<br>";
?>

<p>.</p>

<h2>Operator</h2>
<?php
// Arithmetic Operators
$add = $number1 + $number2;
$sub = $number1 - $number2;
$mul = $number1 * $number2;
$div = $number1 / $number2;
$mod = $number1 % $number2;

// Assignment Operators
$x = 10;
$x += 5; // x = x + 5

// Equality Operators
$equal = ($number1 == $number2); // Equal
$identical = ($number1 === $number2); // Identical

echo "Addition: $add<br>";
echo "Subtraction: $sub<br>";
echo "Multiplication: $mul<br>";
echo "Division: $div<br>";
echo "Modulus: $mod<br>";
echo "After x += 5: $x<br>";
echo "Is equal: " . ($equal ? 'true' : 'false') . "<br>";
echo "Is identical: " . ($identical ? 'true' : 'false') . "<br>";
?>

<p>.</p>

<h2>If Else If</h2>
<?php
$score = 75;
if ($score >= 90) {
    echo "Grade: A<br>";
} elseif ($score >= 80) {
    echo "Grade: B<br>";
} elseif ($score >= 70) {
    echo "Grade: C<br>";
} else {
    echo "Grade: D<br>";
}
?>

<p>.</p>

<h2>Switch</h2>
<?php
$day = 3; // Wednesday
switch ($day) {
    case 1:
        echo "It's Monday<br>";
        break;
    case 2:
        echo "It's Tuesday<br>";
        break;
    case 3:
        echo "It's Wednesday<br>";
        break;
    default:
        echo "It's another day<br>";
}
?>

<p>.</p>

<h2>Array</h2>
<?php
$array = array("Manchester United", "Liverpool", "Chelsea");
echo "Team 1: " . $array[0] . "<br>";
echo "Team 2: " . $array[1] . "<br>";
echo "Team 3: " . $array[2] . "<br>";
?>

<p>.</p>

<h2>Loop</h2>
<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Loop iteration: $i<br>";
}
?>

<p>.</p>

<h2>Function</h2>
<?php
function greet($name) {
    return "Hello, $name!";
}
echo greet("Rasmus Hojlund") . "<br>";
?>

<p>.</p>

<h2>Tabel Klasemen Liga Inggris 2008</h2>
<table>
    <tr>
        <th>Posisi</th>
        <th>Tim</th>
        <th>Main</th>
        <th>Menang</th>
        <th>Seri</th>
        <th>Kalah</th>
        <th>Gol</th>
        <th>Kebobolan</th>
        <th>Selisih Gol</th>
        <th>Poin</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Manchester United</td>
        <td>38</td>
        <td>24</td>
        <td>8</td>
        <td>6</td>
        <td>79</td>
        <td>22</td>
        <td>+57</td>
        <td>80</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Chelsea</td>
        <td>38</td>
        <td>21</td>
        <td>8</td>
        <td>9</td>
        <td>68</td>
        <td>35</td>
        <td>+33</td>
        <td>71</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Arsenal</td>
        <td>38</td>
        <td>20</td>
        <td>11</td>
        <td>7</td>
        <td>83</td>
        <td>40</td>
        <td>+43</td>
        <td>71</td>
    </tr>
    <tr>
        <td>4</td>
        <td>Liverpool</td>
        <td>38</td>
        <td>20</td>
        <td>10</td>
        <td>8</td>
        <td>77</td>
        <td>36</td>
        <td>+41</td>
        <td>70</td>
    </tr>
    <tr>
        <td>5</td>
        <td>Everton</td>
        <td>38</td>
        <td>18</td>
        <td>8</td>
        <td>12</td>
        <td>55</td>
        <td>43</td>
        <td>+12</td>
        <td>62</td>
    </tr>
    <tr>
        <td>6</td>
        <td>Aston Villa</td>
        <td>38</td>
        <td>17</td>
        <td>9</td>
        <td>12</td>
        <td>61</td>
        <td>50</td>
        <td>+11</td>
        <td>60</td>
    </tr>
</table>

</body>
</html>