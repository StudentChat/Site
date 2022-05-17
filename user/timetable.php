<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Расписание</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="icon" href="../img/Logo-light.svg" />
  </head>
  <body>
    <header class="header center">
      <a class="logo" href="wall.php"
        ><img class="logo" src="../img/Logo-image.svg" alt="Логотип"
      /></a>
      <div class="btns">
        <a class="btn btnLink" href="wall.php">Стена</a>
        <a class="btn btnLink" href="timetable.php">Расписание</a>
        <a class="btn btnLink" href="chat.php">Чат</a>
        <a class="btn btnLink" href="vacancy.php">Вакансии</a>
        <a class="btn btnLink" href="faq.php">О нас</a>
      </div>
      <div class="btns">
        <a href="addPost.php"
          ><img class="headerIcon" src="../img/add.svg" alt="Добавить пост"
        /></a>
        <a href="profile.php"
          ><img class="headerIcon" src="../img/profile.svg" alt="Профиль"
        /></a>
        <a href="setting.php">
          <img class="headerIcon" src="../img/setting.svg" alt="Настройки"
        /></a>
        <!-- сделать выход через js -->
        <a href="../index.php">
          <img class="headerIcon" src="../img/log out.svg" alt="Выход"
        /></a>
      </div>
    </header>

    <div class="border timetableForm center">
      <p class="center db timetableTitle">
        Выберите способ отображения расписания
      </p>
      <button id="btnLinkTimetable" class="center db btn btnTimetable">
        Использовать ссылку
      </button>

      <form id="formLinkTimetable" action="" class="center db invisible">
        <input type="text" class="border db center inputTimetable" />
        <a href="timetableView.php" class="btn db center btnLink">Сохранить</a>
      </form>

      <button id="btnEsrTimetable" class="btn db center btnTimetable">
        Использовать ЕСР
      </button>

      <form id="formEsrTimetable" action="#" class="center db invisible">
        <select name="" id="" class="center db inputTimetable" required>
          <option value="">Выберите город</option>
        </select>
        <select name="" id="" class="center db inputTimetable" required>
          <option value="">Выберите учреждение</option>
        </select>
        <select name="" id="" class="center db inputTimetable" required>
          <option value="">Выберите группу</option>
        </select>
        <input
          type="text"
          class="center db inputTimetable"
          placeholder="Введите имя"
          required
        />
        <input
          type="text"
          class="center db inputTimetable"
          placeholder="Введите фамилию"
          required
        />
        <a href="timetableView.php" type="submit" class="btn center db btnLink"
          >Сохранить</a
        >
      </form>
    </div>

    <button id="openFormFaq" class="btn filterIcon btnQuestion">
      <img src="../img/question.svg" alt="" width="50px" height="50px" />
    </button>

    <form id="formFaq" action="" class="formFaq border db invisible">
      <h1 class="titleFAQ mb">Форма обратной связи</h1>
      <button id="closeFormFaq" class="btn btnCloseForm">
        <img class="" src="../img/close.svg" alt="" />
      </button>
      <input
        class="inputFaq center textFAQ border db"
        type="text"
        placeholder="Введите имя"
      />
      <input
        class="inputFaq center textFAQ border db"
        type="email"
        placeholder="Введите E-mail"
      />
      <textarea
        class="inputFaq center textFAQ comment border db"
        placeholder="Опишите проблему или оставьте отзыв"
      ></textarea>
      <button class="center btn db" type="submit">Отправить</button>
    </form>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/script.js"></script>
  </body>
</html>
