<?php
  echo "Hello World!";
?>
<?php
$age=23;
echo $age;
?>
<?= "Hello World"; ?>
<br>
<?php
$price=89.99;
echo $price;
?>

<?php
$name = "GeeksforGeeks";
echo $name; 
?>
<br>
<?php
$name="isaac";
$age-"23";
echo $name,$age;
?>
<?php
$greeting="hi how are you";
echo "<br>";
echo "message:$greeting";
?>

<?php
$isActive =true;
echo "<br>";
if($isActive){
  echo "Active";
}
?>

<?php
$colors = ["red", "green", "blue"];
echo "<br>";
echo $colors[1];  
?>
<?php
$colors = ["red", "green", "blue"];
echo "<br>";
echo $colors[0];  
?>
<br>
<?php
class Car {
    public $brand = "Toyota";
}
$car = new Car();
echo $car->brand;  
?>
<?php
$a = 48;
$b = 20;
echo "<br>";
echo $a + $b;

?>
<?php
$a = 48;
$b = 20;
echo "<br>";
echo "Total = " . ($a + $b);
?>
<?php
$a = 10;
$b = 3;

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

echo "total= " .$a ** $b;
echo "<br>";
echo 10 / 4; 
 
?>

<?php
$num = 10;

if ($num % 2 == 0) {
  echo "<br>";
    echo "Even number";
}
?>

<?php
$num = 7;

if ($num % 2 == 0) {
  echo "<br>";
    echo "Even number";
} else {
  echo "<br>";
    echo "Odd number";
}
?>

<?php
$num=30;

if($num % 2 == 0){
  echo "<br>";
  echo"even number";
}
else{
  echo "<br>";
  echo "odd number";

}

?>
<?php
$name = "XYZ"; 
$age = 30;      
$salary = 45000.50; 
$isEmployed = true; 
  echo "<br>";
echo $name;

echo $age;
echo $salary;
echo $isEmployed

?>