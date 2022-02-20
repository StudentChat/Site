let btnOpenWindow = document.getElementById("btnOpenWindow");
let openWindow = document.getElementById("invisible");
btnOpenWindow.addEventListener("click", () => {
  openWindow.classList.remove("invisible");
});
let close = document.getElementById("close");
close.addEventListener("click", () => {
  openWindow.classList.add("invisible");
});
