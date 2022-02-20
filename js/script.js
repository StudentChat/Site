let btnOpenWindow = document.getElementById("btnOpenWindow");
let openWindow = document.getElementById("invisible");
let emailForm = document.getElementById("email");
//Валидация email
btnOpenWindow.addEventListener("click", () => {
  // let email = document.getElementById("email").value;
  // let pattern =
  //   /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  // let emailValid = pattern.test(email);
  // if (emailValid == true) {
  //   emailForm.classList.remove("validFalse");
  //   emailForm.classList.add("validTrue");
  openWindow.classList.remove("invisible");
  // } else {
  //   emailForm.classList.remove("validTrue");
  //   emailForm.classList.add("validFalse");
  // }
});
//скрыть окно ввода временного пароля
let close = document.getElementById("close");
close.addEventListener("click", () => {
  openWindow.classList.add("invisible");
});

let logIn = document.getElementById("logIn");
logIn.addEventListener("click", () => {
  window.location.replace("user/wall.html");
});
