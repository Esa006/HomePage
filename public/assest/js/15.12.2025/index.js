const btn = document.querySelector(".myBtn");
const input = document.querySelector("input");
const box = document.querySelector(".box");
const username = document.querySelector(".username");
const myForm = document.querySelector("#myForm");
const container = document.getElementById("container");
const newdiv = document.createElement("div");
const newpara = document.createElement("p");
const img = document.createElement("img");

btn.addEventListener("click", () => {
  document.body.style.backgroundColor = "yellow";

  const newimg = document.createElement("img");
  newimg.src = "https://via.placeholder.com/150";
  newimg.alt = "Dynamic Image";
  newimg.style.margin = "10px";

  container.appendChild(newimg);
});

box.addEventListener("mouseover", () => {
  box.style.backgroundColor = "orange";
});

box.addEventListener("mouseenter", () => {
  box.style.backgroundColor = "red";
});

box.addEventListener("mouseleave", () => {
  box.style.backgroundColor = "blue";
});

input.addEventListener("keydown", (event) => {
  console.log("Key down:", event.key);
});

input.addEventListener("keyup", () => {
  console.log("Final value:", input.value);
});

input.addEventListener("input", () => {
  console.log(input.value);
});

username.addEventListener("input", () => {
  console.log(username.value);
});

myForm.addEventListener("submit", (e) => {
  e.preventDefault();
  console.log("Form submitted!");
  alert("Form submitted");
});

newdiv.style.backgroundColor = "red";
newdiv.style.padding = "20px";
newdiv.style.marginTop = "20px";
newpara.textContent = "This para was created dynamically";
newdiv.appendChild(newpara);
container.appendChild(newdiv);
