let message;
message = "hello world";
alert(message);
let use = "John",
  ag = 25,
  messages = "Hello";
const newpara = document.createElement("p");

newpara.textContent = `${use},${ag},${messages}`;
document.body.appendChild(newpara);
var welcome = "Hello";

let userName = "John";
console.log("camelCase", userName);
let UserAccount = "Hello Case";
console.log("PascalCase", UserAccount);

let shopping_cart_items = 5;
console.log("snake_case", shopping_cart_items);

let $userName = "John";
let $price = 500;
console.log($userName);
console.log($price);

let ags = 25;
let price = 99.99;
console.log(ags, price);

let named = "John";
let usersd = "Hello-world";
let greeting = `Hi ${named}`;
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
console.log(Math.round(4.6));
console.log(Math.floor(4.9));
console.log(Math.ceil(4.1));
console.log(Math.max(1, 5, 3));
console.log(Math.min(1, 5, 3));
let ae = 30;
if (ae >= 18) {
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
  message = "Hello";
} else if (login == "Director") {
  message = "Greetings";
} else if (login == "") {
  message = "No login";
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
  console.log("The office is closed.");
}
let hours = 12;
let minute = 30;

if (hours == 12 && minute == 30) {
  console.log("The time is 12:30");
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
  console.log("Hello everyone!");
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
let numberss = [10, 20, 30, 50];
console.log(numberss);
let number = new Array(10, 20, 30);
console.log(numberss);

let fruits = ["apple", "banana", "orange"];
console.log(fruits[0]);
console.log(fruits[1]);
console.log(fruits[2]);
console.log(fruits[3]);

let fruit = ["apple", "banana", "orange"];
fruits[1] = "mango";
console.log(fruit);

let arr = [1, 2];
arr.push(4);
arr.unshift(0);
console.log(arr);

let arry = [1, 2, 3];

arry.pop();

arry.shift();

console.log(arry);

let datas_list = [1, 2, 3, 4];

let datas_lists = arr.slice(1, 3);

console.log(datas_lists);

console.log(String(123));
String(true);
String(null);
String(undefined);

let priced = "500";
let tax = 50;

let total = Number(priced) + tax;
console.log("Total Amount: " + total);
let data_lists = [1, 2, 3];
let data_list = "hello";

console.log(data_lists);
console.log(data_list);

console.log(String(123));
console.log(String(true));
console.log(String(null));
console.log(String(undefined));

const add = (a, b) => {
  return a + b;
};
console.log(add(20, 80));

const greet = () => "Hello";
console.log(greet());

const person = {
  name: "Raj",
  sayName: function () {
    setTimeout(() => {
      console.log(this.name);
    }, 1000);
  },
};

console.log(person.sayName());

// Template Literals
let name = "Raj";
let age = 25;

console.log(`My name is ${name} and age is ${age}`);

let names = "andrew";
let ages = 25;
console.log(`My name is ${names} and age is ${ages}`);

function greets(name = "Guest") {
  console.log(name);
}

// Destructuring
const user = { name: "Raja", age: 25 };

const { name: customer, age: customerage } = user;

console.log(`The customer name is ${customer} and customer age ${customerage}`);

const custom_name = { name: "isaac" };
const copy = { ...custom_name };
console.log(copy);

class Person {
  constructor(name) {
    this.name = name;
  }

  greet() {
    console.log("Hi " + this.name);
  }
}
console.log(Math.abs(5));
console.log(Math.abs(-5));
console.log(Math.abs(0));
console.log(Math.abs(-0));
let items = ["apple", "banana", "orange"];

console.log(items.indexOf("banana"));
console.log(items.join("mango"));

setTimeout(function () {
  console.log("Hello-isaac");
}, 1000);

(function () {
  console.log("Executed immediately");
})();
(function () {
  console.log("hello welcome");
})();

const users = [
  {
    squadName: "Super hero squad",
    homeTown: "Metro City",
    formed: 2016,
    secretBase: "Super tower",
    active: true,
    members: [
      { name: "Molecule Man", age: 29, secretIdentity: "Dan Jukes" },
      { name: "Madame Uppercut", age: 39, secretIdentity: "Jane Wilson" },
      { name: "Eternal Flame", age: 1000000, secretIdentity: "Unknown" },
    ],
  },
];
const br = document.createElement("br");
document.body.appendChild(br);
const memberData = users[0].members.map((member) => {
  return `
    Name: ${member.name}<br>
    Age: ${member.age} <br>
    Secret Identity: ${member.secretIdentity} <br>
    Squad Name: ${users[0].squadName} <br>
    Home Town: ${users[0].homeTown} <br>
    <hr/>
  `;
});

newpara.innerHTML = memberData.join("");
document.body.appendChild(newpara);

const numbers = [1, 2, 3, 4, 5];
const evenNumbers = numbers.filter((num) => num % 2 === 0);
console.log(evenNumbers);

const customer_data = [
  { name: "Raj", age: 25 },
  { name: "Kumar", age: 30 },
  { name: "Ravi", age: 20 },
];

const adults = customer_data.filter((user) => user.age >= 25);
console.log(adults);

const products = [
  { id: 1, name: "iPhone 14", category: "mobile", price: 70000, inStock: true },
  {
    id: 2,
    name: "Samsung S23",
    category: "mobile",
    price: 65000,
    inStock: false,
  },
  { id: 3, name: "HP Laptop", category: "laptop", price: 55000, inStock: true },
  {
    id: 4,
    name: "Dell Laptop",
    category: "laptop",
    price: 60000,
    inStock: true,
  },
  {
    id: 5,
    name: "Boat Headset",
    category: "accessory",
    price: 2000,
    inStock: true,
  },
];

const laptops = products.filter(
  (product) =>
    product.category === "laptop" && product.price <= 60000 && product.inStock
);

const container = document.createElement("div");

container.innerHTML = laptops
  .map(
    (product) => `
    <p>
      <strong>${product.name}</strong><br>
      Category: ${product.category}<br>
      Price: ₹${product.price}
    </p>
    <hr>
  `
  )
  .join("");

document.body.appendChild(container);
const numbers_list = [1, 2, 3, 4];

const totals = numbers.reduce((sum, num) => sum + num, 0);
console.log(totals);

const cart = [
  { id: 1, name: "iPhone 14", price: 70000, qty: 1 },
  { id: 2, name: "Boat Headset", price: 2000, qty: 2 },
  { id: 3, name: "Power Bank", price: 1500, qty: 1 },
];
const totalAmount = cart.reduce((total, item) => {
  return total + item.price * item.qty;
}, 0);

console.log("Total Amount:", totalAmount);

function greeet(name, callback) {
  console.log("Hello " + name);
  callback();
}

function afterGreeting() {
  console.log("Greeting completed");
}

greeet("Raja", afterGreeting);

const myPromise = new Promise((resolve, reject) => {
  setTimeout(() => {
    const randomNumber = Math.random();
    if (randomNumber < 0.5) {
      resolve("Data has been successfully retrieved.");
    } else {
      reject("An error occurred while fetching data.");
    }
  }, 1000);
});

const apidata = document.createElement("div");

fetch("https://jsonplaceholder.typicode.com/users")
  .then((response) => response.json())
  .then((data) => {
    const totalUsers = data.length;
    const lastIndex = totalUsers - 1;
    const lastUser = data[lastIndex];

    console.log("Last index:", lastIndex);
    console.log("Last user:", lastUser);

    apidata.innerHTML = `
      <h2>Total Users: ${totalUsers}</h2>
      <h3>Last User (Index ${lastIndex}):</h3>
      <p>Name: ${lastUser.name}</p>
      <p>Email: ${lastUser.email}</p>
      <p>Username: ${lastUser.username}</p>
    `;
    document.body.appendChild(apidata);
  })
  .catch((error) => {
    console.error(error);
  });

const api2 = document.createElement("div");
document.body.appendChild(api2);
async function fetchProducts() {
  try {
    const response = await fetch("https://dummyjson.com/products?limit=10");
    const data = await response.json();

    data.products.forEach((product) => {
      const div = document.createElement("div");
      div.innerHTML = `
        <h3>${product.title}</h3>
        <p>Price: $${product.price}</p>
        <p>Category: ${product.category}</p>
      `;
      container.appendChild(div);
    });
  } catch (error) {
    console.error("Error:", error);
  }
}
fetchProducts();

const api3 = document.createElement("div");
document.body.appendChild(api3);
async function showCommentsForPost(postId) {
  try {
    const response = await fetch(
      "https://jsonplaceholder.typicode.com/comments?id=10"
    );
    const comments = await response.json();

    const first100 = comments.slice(0, 20);
    console.log(first100);
    const filtered = first100.filter((comment) => comment.postId === postId);
    console.log("Total comments from first 100:", filtered.length);
  } catch (error) {
    console.error(error);
  }
}
showCommentsForPost(1);

fetch("https://jsonplaceholder.typicode.com/posts", {
  method: "POST",
  headers: {
    "Content-Type": "application/json",
  },
  body: JSON.stringify({
    title: "My Post",
    body: "Post content",
    userId: 1,
  }),
})
  .then((res) => res.json())
  .then((data) => console.log(data))
  .catch((err) => console.error(err));

let rev = [1, 2, 67, 25, 89];

for (let i = rev.length - 1; i >= 0; i--) {
  rev.push(rev[i]);
  console.log(rev[i]);
}

let revs = [1, 2, 67, 25, 89];
let lastData = revs[revs.length - 1];
console.log(lastData);

function calculate(a, b, callback) {
  let result = a + b;
  callback(result);
}

function showResult(value) {
  console.log("Result:", value);
}
calculate(10, 20, showResult);

async function updatePost() {
  try {
    const response = await fetch(
      "https://jsonplaceholder.typicode.com/posts/1",
      {
        method: "PUT",
        headers: {
          "Content-Type": "application/json",
        },
        body: Json.stringify({
          id: 1,
          title: "Updated hello",
          body: "updated post content",
          userId: 1,
        }),
      }
    );
    const result = await response.json();
    console.log("Updated data:", result);
  } catch (error) {
    console.log("Error:", error);
  }
}
updatePost();
