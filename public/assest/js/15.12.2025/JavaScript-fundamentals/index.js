let message;
message = "hello world";
alert(message);
let user = "John",
  age = 25,
  messages = "Hello";
const newpara = document.createElement("p");

newpara.textContent = `${user},${age},${message}`;
document.body.appendChild(newpara);
var welcome = "Hello";

let userName = "John";
console.log("camelCase", userName);
let UserAccount = "Hello Case";
console.log("PascalCase", UserAccount);
// snake_case
let shopping_cart_items = 5;
console.log("snake_case", shopping_cart_items);

let $userName = "John";
let $price = 500;
console.log($userName);
console.log($price);
//premitive data type
//number
let ages = 25;
let price = 99.99;
console.log(ages, price);

//string
let name = "John";
let users = "Hello-world";
let greeting = `Hi ${name}`;
let data = null;

let bigNumber = 12345678901234567890n;
console.log(typeof bigNumber);
let nameFieldChecked = true;
console.log(typeof nameFieldChecked);
let ageFieldChecked = false;

let username = {
  name: "John",
  age: 25,
};
console.log(typeof username);

let colors = ["red", "green", "blue"];
console.log(typeof colors);

let isBoss = confirm("Are you the boss?");
alert(isBoss);
let test = prompt("Test", "");

let value = true;
alert(typeof value);

let values = String(value);
console.log(alert(typeof values));

let x = 1;
x = -x;
console.log(x);
let j = 1,
  y = 3;
console.log(j - x);
let a = 10;
let b = 5;
console.log(a + b);
console.log(30 - 34);
console.log(40 * 30);
console.log(34 / 5);
console.log(10 % 3);
console.log(2 ** 3);
let count = 8;
count++;
count--;
Math.round(4.6);
Math.floor(4.9);
Math.ceil(4.1);
Math.max(1, 5, 3);
Math.min(1, 5, 3);

if (age >= 18) {
  console.log("Eligible to vote");
} else {
  console.log("Not eligible");
}

console.log(5 == "5");
console.log(5 === "5");
console.log(true == 1);
console.log(true === 1);
console.log(null == undefined);
console.log(null === undefined);
console.log(0 == false);
console.log(0 === false);

let userInput = "18";

if (userInput == 18) {
  console.log("Age accepted");
}

if (userInput === 18) {
  console.log("This will not run");
}

let year = prompt("if you are born", "");

if (year == 2015) alert("You are right!");
let years = prompt("which year born", "");

if (year == 2000) alert("You are right!");

if (year == 2015) {
  alert("That's correct!");
  alert("You're so smart!");
}
let date = prompt("which year degree completed", "");

if (year < 2015) {
  alert("Too early...");
} else if (year > 2015) {
  alert("Too late");
} else {
  alert("Exactly!");
}

let aged = 20;

let result = aged >= 18 ? "Adult" : "Minor";
console.log(result);
let login;

if (login == "Employee") {
  messaged = "Hello";
} else if (login == "Director") {
  messaged = "Greetings";
} else if (login == "") {
  messaged = "No login";
} else {
  message = "";
}
let messa =
  login === "Employee"
    ? "Hello"
    : login === "Director"
    ? "Greetings"
    : login === ""
    ? "No login"
    : "";
let hour = 12;
let isWeekend = true;

if (hour < 10 || hour > 18 || isWeekend) {
  alert("The office is closed.");
}
let hours = 12;
let minute = 30;

if (hours == 12 && minute == 30) {
  alert("The time is 12:30");
}

let isLoggedIn = true;

if (!isLoggedIn) {
  console.log("Please login");
} else {
  console.log("Welcome");
}
let userd = "John";

alert(userd ?? "Anonymous");

let i = 0;

while (i < 3) {
  alert(i);
  console.log(i);
  i++;
}

let userdname;
if (userdname === undefined) {
  console.log("Please enter your username");
}

let n = 1;
n *= 3 + 5;
console.log(n);

let cartTotal = 1200;
if (cartTotal > 1000) {
  console.log("Free delivery");
}
let password;

do {
  password = prompt("Enter password");
} while (!password);

console.log("Password accepted");

const form = document.createElement("form");

const input = document.createElement("input");
input.type = "text";
input.placeholder = "Enter your name";
input.name = "username";

const button = document.createElement("button");
button.type = "submit";
button.textContent = "Submit";

form.appendChild(input);
form.appendChild(button);

document.getElementById("formContainer").appendChild(form);
for (let i = 0; i < 10; i++) {
  if (i % 2 == 0) continue;
  console.log(i);
}
for (let i = 0; i < 9; i++) {
  if (i % 2 !== 0) continue;
  console.log(i);
}

function showMessage() {
  alert("Hello everyone!");
}
showMessage();
showMessage();
const multiply = function (a, b) {
  return a * b;
};

console.log(multiply(4, 5));

function checkEven(num) {
  return num % 2 === 0;
}

console.log(checkEven(6));
console.log(checkEven(7));

let sayHi = function () {
  alert("welcome");
};
