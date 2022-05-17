<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Авторизация работодателя</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="icon" href="../img/Logo-light.svg" />
  </head>
  <body>
    <header>
      <div class="authHeader center">
        <a class="center db authLogo" href="index.php">
          <img src="../img/Logo-image-Worker.svg" alt="Логотип" width="500px"
        /></a>
      </div>
    </header>

    <section class="">
      <div class="authCenterScreen db center">
        <form action="#" class="border authForm">
          <p class="title mb">Вход</p>
          <input
            class="border center inputPassword"
            id="email"
            type="email"
            name="e-mail"
            placeholder="Введите E-mail"
            required
          />
          <input
            class="border center inputPassword mb"
            name="pass"
            type="password"
            placeholder="Введите пароль"
            required
          />
          <a
            href="vacancy.php"
            id=""
            class="btn btnSubmit center btnLink"
            type="submit"
          >
            Войти
          </a>
        </form>

        <form action="#" class="border authForm">
          <p class="title mb">Регистрация</p>
          <input
            class="border center inputPassword"
            id="email"
            type="email"
            name="e-mail"
            placeholder="Введите E-mail"
            required
          />
          <input
            class="border center inputPassword"
            name="pass"
            type="password"
            placeholder="Введите пароль"
            required
          />
          <input
            class="border center inputPassword"
            name="confirmPass"
            type="password"
            placeholder="Повторите пароль"
            required
          />
          <input
            class="border center inputPassword mb"
            name="confirmPass"
            type="text"
            placeholder="Введите название организации"
            required
          />
          <button id="" class="btn btnSubmit center" type="submit">
            Зарегистрироваться
          </button>
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
    </section>

    <!-- <div id="modalWindow" class="invisible modalWindow">
      <form action="#" id="invisible" class="border confirmForm invisible">
        <button class="btnCloseForm" id="close">
          <img src="img/close.svg" alt="Закрыть" />
        </button>
        <p class="description">
          Введите одноразовый пароль, высланный на E-mail
          <span>example@mail.ru</span>
        </p>
        <input
          class="border center confirmInput"
          name="pass"
          type="password"
          required
        />
        <button class="btn btnSubmit center" id="logIn" type="submit">
          Войти
        </button>
      </form>
    </div> -->
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/script.js"></script>
  </body>
</html>
