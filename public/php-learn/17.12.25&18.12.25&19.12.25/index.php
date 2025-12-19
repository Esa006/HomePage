<?php
    include("database.php");
 echo "connected";
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
$name = "isaac";
$age = "23";
echo $name . ' ' . $age;

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
echo $isEmployed;

?>
 <?php
$marks = 80;
if ($marks >= 75) {
    echo "<br>";
    echo "Distinction";
} elseif ($marks >= 50) {
    echo "Pass";
} else {
    echo "Fail";
}
 ?>
 <br>
 <?php
$mark = 55;

if ($mark >= 75) {
    echo "Distinction";
} elseif ($mark >= 50) {
    echo "Pass";
} else {
    echo "Fail";
}
?>

<?php
$mark =80;

switch(true){
  case($mark >=75):
    echo "distinction";
    break;
    case ($mark >= 50):
        echo "Pass";
        break;
         default:
        echo "Fail";
}
?>
<?php

$day = 3;

switch ($day) {
    case 1:
        echo "Monday";
        break;

    case 2:
        echo "Tuesday";
        break;

    case 3:
        echo "Wednesday";
        break;

    default:
        echo "Invalid day";
}
?>
<br>
<?php
$day = 3;

if ($day == 1) {
  echo '<br>';
    echo "Monday";
} elseif ($day == 2) {
    echo "Tuesday";
}
?>

<?php
$numbers = [10, 20, 30];

foreach ($numbers as $num) {
    echo $num . "<br>";
}
?>

<?php
$numbers = [10, 20, 30];

for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . "<br>";
}
?>
<?php $student = [
    "name" => "Ravi",
    "age" => 22
];

foreach ($student as $key => $value) {
    echo $key . " : " . $value . "<br>";
}
?>
<?php
$cart=[
  [ "item" => "phone", "price"=>20000],
    [ "item" => "phone", "price"=>50000],
];
foreach ($cart as $product){
  echo $product["item"]." - ".$product["price"] ."<br>";
}


$count = 1;

while ($count <= 3) {
    echo "Hello<br>";
    $count++;
}
?>

<?php
$student=[
  "name"=> "Arun",
  "age"=>21,
"course"=>"php"
];
foreach($student as $key =>$value){
  echo $key . ":" . $value . "<br>";
}
?>
<?php
$students = [
    [
        "id"     => 1,
        "name"   => "Ravi",
        "course" => "PHP",
        "marks"  => 85
    ],
    [
        "id"     => 2,
        "name"   => "Arun",
        "course" => "Java",
        "marks"  => 90
    ],
    [
        "id"     => 3,
        "name"   => "Kumar",
        "course" => "Python",
        "marks"  => 78
    ]
];



foreach ($students as $student) {
    echo "ID: " . $student["id"] . "<br>";
    echo "Name: " . $student["name"] . "<br>";
    echo "Course: " . $student["course"] . "<br>";
    echo "Marks: " . $student["marks"] . "<br>";
    echo "------------------<br>";
}


$orders = [
    [
        "order_id" => 101,
        "customer" => "Ravi",
        "items" => [
            ["name" => "Phone", "price" => 20000],
            ["name" => "Charger", "price" => 500]
        ]
    ]
];

foreach ($orders as $order) {
    echo "Order ID: " . $order["order_id"] . "<br>";

    foreach ($order["items"] as $item) {
        echo "- " . $item["name"] . " : " . $item["price"] . "<br>";
    }
}
$colors = ["Red", "Green", "Blue"];
echo count($colors); 
$numbers = [];
if (empty($numbers)) {
    echo "Array is empty";
}
?>
<br>
<?php
$cart = [
    ["item" => "Phone", "price" => 20000],
    ["item" => "Laptop", "price" => 50000],
    ["item" => "Charger", "price" => 500]
];

$total = array_sum(array_column($cart, "price"));
echo "Total Price: " . $total;
?>
<?php
function calculateTotal($cart) {
    return array_sum(array_column($cart, "price"));
}
$cart = [
    ["item" => "Phone", "price" => 20000],
    ["item" => "Laptop", "price" => 50000]
];
echo "Total: " . calculateTotal($cart); 
function add($a, $b) {
  echo "<br>";
    echo $a + $b;
}
add(10, 20); 
function calculateTotals($cart) {
    return array_sum(array_column($cart, "price"));
}
$cart = [
    ["item" => "Phone", "price" => 20000],
    ["item" => "Laptop", "price" => 50000]
];

$total = calculateTotals($cart);
echo "<br>";
echo "Total: " . $total; 
?>
<?php
$nums = 15;

if ($nums % 2 == 0) {
  echo "<br>";
    echo "$nums is even";
} else {
   echo "<br>";
    echo "$nums is odd";
}
?>
<?php
function isPrime($num) {
    if ($num <= 1) {
        return false; 
    }

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }

    return true; 
}


$number = 29;

if (isPrime($number)) {
     echo "<br>";
    echo "$number is a prime number";
} else {
    echo "$number is not a prime number";
}
?>
<?php
$users = [
    "Ravi" => 25,
    "Arun" => 22
];

foreach ($users as $name => $age) {
    echo "$name is $age years old.<br>";
}
?>
<?php
$numbers = [1, 2, 3, 4, 5, 6];

$evenNumbers = array_filter($numbers, function($num) {
    return $num % 2 == 0;
});

print_r($evenNumbers);
?>

<?php
function calculator($a, $b, $operator) {
    switch ($operator) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if ($b == 0) {
                return "Cannot divide by zero";
            }
            return $a / $b;
        default:
            return "Invalid operator";
    }
}


echo calculator(10, 5, '+');
echo "<br>";
echo calculator(10, 5, '-'); 
echo "<br>";
echo calculator(10, 5, '*'); 
echo "<br>";
echo calculator(10, 5, '/');
?>
<form method="post" action="">
  Name: <input type="text" name="username"><br>
  Email: <input type="email" name="email" required><br>
  <input type="submit" name="submit" value="Submit">
</form>
<?php
if(isset($_POST['submit'])){
    $name = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);

    echo "Name: " . $name . "<br>";
    echo "Email: " . $email;
}
?>
<?php

if(isset($_GET['num1']) && isset($_GET['num2'])){
    $sum = $_GET['num1'] + $_GET['num2'];
    echo "Sum: " . $sum;
}
?>

<form method="get">
    Number 1: <input type="number" name="num1"><br><br>
    Number 2: <input type="number" name="num2"><br><br>
    <input type="submit" value="Calculate">
</form>

<?php
if (isset($_GET['num1']) && isset($_GET['num2'])) {
    echo "Total: " . ($_GET['num1'] + $_GET['num2']);
}
?>
<?php

?>
<form method="post">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" name="login" value="Login">
</form>

<?php
session_start(); 
$_SESSION['username'] = "isaac"; 
echo $_SESSION['username'];  
setcookie("username", "Esakiraj", time() + 60); 
echo "Cookie created. Reload or go to read.php";
?>

<?php
if (isset($_FILES['photo'])) {

    $fileName = $_FILES['photo']['name'];
 echo "File Name: " . $_FILES['photo']['name'] . "<br>";
    echo "File Type: " . $_FILES['photo']['type'] . "<br>";
    echo "File Size: " . $_FILES['photo']['size'] . " bytes<br>";
    move_uploaded_file($tmpName, "uploads/" . $fileName);
    echo "File uploaded successfully";
 
}

?>

<form method="POST">
    Name: <input type="text" name="name"><br>
    Email: <input type="text" name="email"><br>
    Age: <input type="text" name="age"><br>
    <button type="submit">Submit</button>
</form>
<?php
$errors = [];

if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST['name'])) {
        $errors[] = "Name required";
    }

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email";
    }

    if (!filter_var($_POST['age'], FILTER_VALIDATE_INT)) {
        $errors[] = "Invalid age";
    }

    if (empty($errors)) {
        echo "Form submitted successfully";
    } else {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>
<?php

if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    
    $comment = $_POST['comment'];

    
    $safe_comment = htmlspecialchars($comment, ENT_QUOTES, 'UTF-8');

    echo "<h3>Safe Output:</h3>";
    echo "<p>" . $safe_comment . "</p>";
}
?>

<form method="POST">
    <label>Enter Comment:</label><br>
    <textarea name="comment" rows="4" cols="50"></textarea><br><br>
    <button type="submit">Submit</button>
</form>

<?php
class CarDemo {
    public $color;
    public $brand;

    public function honk() {
        echo "Beep! I am a " . $this->brand;
    }
}

$mycar = new CarDemo(); 

$mycar->color = "Red";
$mycar->brand = "Toyota";

echo $mycar->color . "<br>";
$mycar->honk();
?>
<?php
class User {
    public $name;
    public $email;

    public function __construct($name, $email) {
        $this->name  = $name;
        $this->email = $email;
    }
}

$user = new User("Ravi", "ravi@example.com");
print_r($user);
?>
<?php

class Vehicle {
    public $type;

    public function start() {
        echo "Vehicle started<br>";
    }
}

class Automobile extends Vehicle {
    public $brand;

    public function showDetails() {
        echo "Type: " . $this->type . "<br>";
        echo "Brand: " . $this->brand . "<br>";
    }
}


$auto = new Automobile();

$auto->type  = "Four Wheeler";
$auto->brand = "Toyota";

$auto->showDetails();

$auto->start();
?>
<?php
class Userd {
    public $name;
    public function showName() {
        echo $this->name;
    }
}
$users = new Userd();
$users->name = "Ravi";
$users->showName();
?>
<?php
class Account {
    protected $balance = 5000;
}
class SavingsAccount extends Account {
    public function showBalance() {
        echo $this->balance;
    }
}
$acc = new SavingsAccount();
$acc->showBalance(); 
?>
<?php
class BankAccount {
    private $pin;
    protected $balance;

    public function __construct($pin, $balance) {
        $this->pin = $pin;
        $this->balance = $balance;
    }

    public function checkBalance() {
        echo $this->balance;
    }
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Register</button>
</form>

<?php
require "database.php"; // your PDO connection

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $sql = "INSERT INTO user (username, email, password)
            VALUES (:username, :email, :password)";

    $stmt = $pdo->prepare($sql);
$stmt->execute([
    ':username' => $_POST['username'], 
    ':email'    => $_POST['email'],
    ':password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
]);
    echo "User registered successfully";
}
?>
<?php
require "database.php";

// Fetch all users
$sql = "SELECT * FROM user";
$stmt = $pdo->query($sql);
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>User List</h2>
<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    <?php foreach($users as $user): ?>
    <tr>
        <td><?= $user['id'] ?></td>
        <td><?= $user['username'] ?></td>
        <td><?= $user['email'] ?></td>
        <td>
            <a href="update.php?id=<?= $user['id'] ?>">Edit</a> |
            <a href="delete.php?id=<?= $user['id'] ?>" onclick="return confirm('Delete this user?')">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

