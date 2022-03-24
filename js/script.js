// Обработчик событий для браузера
const setListener = (element, type, func) => {
  if (element == null) {
    return;
  }
  element.addEventListener(type, func);
  return () => {
    element.removeEventListener(type, func);
  };
};

const btnOpenWindow = document.getElementById("btnOpenWindow");
const openWindow = document.getElementById("invisible");
const emailForm = document.getElementById("email");
const modalWindow = document.getElementById("modalWindow");
//Валидация email
setListener(btnOpenWindow, "click", () => {
  // let email = document.getElementById("email").value;
  // let pattern =
  //   /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  // let emailValid = pattern.test(email);
  // if (emailValid == true) {
  //   emailForm.classList.remove("validFalse");
  //   emailForm.classList.add("validTrue");
  window.location.replace("user/wall.html");
  // } else {
  //   emailForm.classList.remove("validTrue");
  //   emailForm.classList.add("validFalse");
  // }
});
//скрыть окно ввода временного пароля
const close = document.getElementById("close");
setListener(close, "click", () => {
  openWindow.classList.add("invisible");
  modalWindow.classList.add("invisible");
  window.location.replace("authorization.html");
});

const logIn = document.getElementById("logIn");
setListener(logIn, "click", () => {
  //проверка наличия пользователя в бд
  window.location.replace("user/wall.html");
});

// просмотр комментариев к посту
const commentWindow = document.getElementById("commentWindow");
const btnCommentView = document.getElementById("btnCommentView");
const closeCommentWindow = document.getElementById("closeCommentWindow");

setListener(btnCommentView, "click", () => {
  commentWindow.classList.remove("invisible");
});

setListener(closeCommentWindow, "click", () => {
  commentWindow.classList.add("invisible");
});

// появление/исчезновение фильтра на стене
const filterUser = document.getElementById("filterUser");
const btnFilterUser = document.getElementById("btnFilterUser");
const closefilterUser = document.getElementById("closefilterUser");

setListener(btnFilterUser, "click", () => {
  filterUser.classList.remove("invisible");
});
setListener(closefilterUser, "click", () => {
  filterUser.classList.add("invisible");
});

//раскрытие пунктов расписания
const btnLinkTimetable = document.getElementById("btnLinkTimetable");
const formLinkTimetable = document.getElementById("formLinkTimetable");
const btnEsrTimetable = document.getElementById("btnEsrTimetable");
const formEsrTimetable = document.getElementById("formEsrTimetable");

setListener(btnLinkTimetable, "click", () => {
  formLinkTimetable.classList.remove("invisible");
  formEsrTimetable.classList.add("invisible");
});
setListener(btnEsrTimetable, "click", () => {
  formLinkTimetable.classList.add("invisible");
  formEsrTimetable.classList.remove("invisible");
});
//Подтверждение удаления поста
const postRemoveConfirm = document.getElementById("postRemoveConfirm");
const postRemoveBtn = document.getElementById("postRemoveBtn");
setListener(postRemoveBtn, "click", () => {
  postRemoveConfirm.classList.remove("invisible");
});

//Выход
const exit = document.getElementById("exit");
setListener(exit, "click", () => {
  window.location.replace("../authorization.html");
});

//показ формы вакансии при клике на ее карточку
const viewVacancy = document.getElementById("viewVacancy");
setListener(viewVacancy, "click", () => {
  window.location.replace("viewVacancy.html");
});
