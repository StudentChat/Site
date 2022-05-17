<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Настройки</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="icon" href="../img/Logo-light.svg" />
  </head>
  <body>
    <header class="header center">
      <a class="logo" href="vacancy.php"
        ><img class="logo" src="../img/Logo-image-Worker.svg" alt="Логотип"
      /></a>
      <div class="btns">
        <a class="btn btnLink" href="vacancy.php">Вакансии</a>
        <a class="btn btnLink" href="chat.php">Чат</a>
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
      <div class="settingForm border db center">
        <!-- <p>Смена E-mail</p>
        <div class="wrap">
          <form class="dib" action="">
            <input
              class="border esrInput"
              type="text"
              placeholder="Введите E-mail"
            />
            <button class="btn">Отправить код</button>
          </form>
          <form class="dib" action="">
            <input
              class="esrInput border"
              type="text"
              placeholder="Введите код"
            />
            <button class="border btn">Изменить</button>
          </form>
        </div> -->
        <p>Смена пароля</p>
        <div class="">
          <form action="" class="wrap">
            <input
              class="esrInput border"
              type="password"
              placeholder="Введите текущий пароль"
            />
            <input
              class="esrInput border"
              type="password"
              placeholder="Введите новый пароль"
            />
            <input
              class="esrInput border mb"
              type="password"
              placeholder="Повторите новый пароль"
            />
          </form>
          <button class="btn db center">Изменить</button>
        </div>
      </div>
    </section>

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
