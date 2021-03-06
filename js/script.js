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
const heightField = (element) => {
  if (element == null) {
    return;
  }
  element.style.height = 50 + "px";
};

//скрыть окно ввода временного пароля
const close = document.getElementById("close");
setListener(close, "click", () => {
  openWindow.classList.add("invisible");
  modalWindow.classList.add("invisible");
  window.location.replace("authorization.php");
});

const logIn = document.getElementById("logIn");
setListener(logIn, "click", () => {
  //проверка наличия пользователя в бд
  window.location.replace("user/wall.php");
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
  if (formLinkTimetable.classList.contains("invisible") == true) {
    formLinkTimetable.classList.remove("invisible");
    formEsrTimetable.classList.add("invisible");
  } else if (formLinkTimetable.classList.contains("invisible") == false) {
    formLinkTimetable.classList.add("invisible");
  }
});
setListener(btnEsrTimetable, "click", () => {
  if (formEsrTimetable.classList.contains("invisible") == true) {
    formLinkTimetable.classList.add("invisible");
    formEsrTimetable.classList.remove("invisible");
  } else if (formEsrTimetable.classList.contains("invisible") == false) {
    formEsrTimetable.classList.add("invisible");
  }
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
  window.location.replace("../authorization.php");
});

//показ формы вакансии при клике на ее карточку
// const viewVacancy = document.querySelectorAll('[id="viewVacancy"]');
// setListener(viewVacancy, "click", () => {
//   window.location.replace("viewVacancy.php");
// });

// форма удаления поста
const btnsRemovePost = document.querySelectorAll('[id="btnRemovePost"]');
const removePost = document.getElementById("removePost");
for (let btnRemovePost of btnsRemovePost) {
  btnRemovePost.addEventListener("click", () => {
    removePost.classList.remove("invisible");
  });
}

// открытие закрытие формы смены никнейма
const btnEditNickname = document.getElementById("btnEditNickname");
const editNickname = document.getElementById("editNickname");
const closeEditNickname = document.getElementById("closeEditNickname");
setListener(btnEditNickname, "click", () => {
  editNickname.classList.remove("invisible");
});
setListener(closeEditNickname, "click", () => {
  editNickname.classList.add("invisible");
});

// открытие закрытие формы вопроса
openFormFaq = document.getElementById("openFormFaq");
formFaq = document.getElementById("formFaq");
closeFormFaq = document.getElementById("closeFormFaq");

setListener(openFormFaq, "click", () => {
  formFaq.classList.remove("invisible");
});
setListener(closeFormFaq, "click", () => {
  formFaq.classList.add("invisible");
});

// // клик по дизлайку/лайку
// let likesPosts = document.querySelectorAll('[id="likePost"]');
// let likesPostsImages = document.querySelectorAll('[id="likePostImage"]');

// let dislikesPosts = document.querySelectorAll('[id="dislikePost"]');
// let dislikesPostsImages = document.querySelectorAll('[id="dislikePostImage"]');

// for (let dislikePost of dislikesPosts) {
//   for (let dislikePostImage of dislikesPostsImages) {
//     setListener(dislikePost, "click", () => {
//       dislikePostImage.classList.toggle("active");
//     });
//   }
// }

// кнопка возвращения наверх
$(window).scroll(function () {
  let scrolled = $(window).scrollTop();
  if (scrolled > 200) {
    $("#backToTop").addClass("active");
  } else {
    $("#backToTop").removeClass("active");
  }
});

$("#backToTop").click(function () {
  $("body,html").animate({ scrollTop: 0 }, 1000);
});

// удаление чатов
const btnsDeleteChat = document.querySelectorAll('[id="btnDeleteChat"]');
const formDeleteChat = document.getElementById("formDeleteChat");
const btnDeleteChatNo = document.getElementById("btnDeleteChatNo");

setListener(btnDeleteChatNo, "click", () => {
  formDeleteChat.classList.add("invisible");
});

for (let btnDeleteChat of btnsDeleteChat) {
  btnDeleteChat.addEventListener("click", () => {
    formDeleteChat.classList.remove("invisible");
  });
}
// настройки пользователя - расписание
const linkTimetableSetting = document.getElementById("linkTimetableSetting");
const esrTimetableSetting = document.getElementById("esrTimetableSetting");
let settingTimetable = document.getElementById("settingTimetable");
setListener(settingTimetable, "change", () => {
  if (settingTimetable.value == "none") {
    linkTimetableSetting.classList.add("invisible");
    esrTimetableSetting.classList.add("invisible");
  } else if (settingTimetable.value == "link") {
    linkTimetableSetting.classList.remove("invisible");
    esrTimetableSetting.classList.add("invisible");
  } else if (settingTimetable.value == "ESR") {
    linkTimetableSetting.classList.add("invisible");
    esrTimetableSetting.classList.remove("invisible");
  }
});
// автоматическое растягивание textArea
let writeMessage = document.getElementById("writeMessage");
heightField(writeMessage);

$(document).on("input", "textarea", function () {
  $(this).outerHeight(38).outerHeight(this.scrollHeight);
});

//проверка данных при регистрации
const btnRegister = document.getElementById("btnOpenWindow");
const openWindow = document.getElementById("invisible");
const emailForm = document.getElementById("email");
const modalWindow = document.getElementById("modalWindow");
//Валидация email
// setListener(btnRegister, "click", () => {
//   let email = document.getElementById("email").value;
//   let pattern =
//     /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//   let emailValid = pattern.test(email);
//   if (emailValid == true) {
//     emailForm.classList.remove("validFalse");
//     emailForm.classList.add("validTrue");
//     window.location.replace("user/wall.php");
//   } else {
//     emailForm.classList.remove("validTrue");
//     emailForm.classList.add("validFalse");
//   }
// });
