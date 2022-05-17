<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>О нас</title>
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

    <section class="container">
      <h1 class="titleFAQ">Документация</h1>
      <div class="blockFAQ">
        <a class="textFAQ requisites" href="">Документ</a>
      </div>
      <h1 class="titleFAQ">Контакты</h1>
      <div class="blockFAQ">
        <p class="textFAQ dib">E-mail:</p>
        <a class="textFAQ requisites" href="mailto:mail@studentchat.ru">
          mail@studentchat.ru
        </a>
        <p class="db"></p>
        <p class="textFAQ dib">Телефон:</p>
        <a class="textFAQ dib requisites" href="tel:+7##########">
          +7 (###) ### ## ##</a
        >
        <p class="textFAQ">Адрес: г.Краснодар, ул. Садовая 218</p>
        <div class="border">
          <script
            type="text/javascript"
            charset="utf-8"
            async
            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8eebfd95a87681bdd384e64b1a699977c73d4dd548f5ebc71f8ef6f02f14e615&amp;width=1194&amp;height=700&amp;lang=ru_RU&amp;scroll=true"
          ></script>
        </div>
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
    </section>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/script.js"></script>
  </body>
</html>
