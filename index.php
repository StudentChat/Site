<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Авторизация</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" href="../img/Logo-light.svg" />
  </head>
  <body>
    <header>
      <div class="authHeader center centerLogo">
        <a class="center db authLogo" href="index.php">
          <img src="img/Logo-image.svg" alt="Логотип" width="500px"
        /></a>
      </div>
    </header>

    <?php 
    error_reporting(0);
    
    if($_COOKIE['user']==''):
    ?>

    <section class="">
      <div class="authCenterScreen db center">
        <form action="php/login.php" class="border authForm" method="post">
          <p class="title mb">Вход</p>
          <input
            class="border center inputPassword"
            id="email"
            type="email"
            name="emailLog"
            placeholder="Введите E-mail"
            required
          />
          <input
            class="border center inputPassword mb"
            name="passwordLog"
            type="password"
            placeholder="Введите пароль"
            required
          />
          <button id="btnOpenWindow" class="btn btnSubmit center" type="submit">
            Войти
          </button>
        </form>

        <form action="php/confirmRegistration.php" class="border authForm" method="post">
          <p class="title mb">Регистрация</p>
          <input
            class="border center inputPassword"
            id="email"
            type="email"
            name="emailReg"
            placeholder="Введите E-mail"
            required
          />
          
          <input
            class="border center inputPassword"
            name="usernameReg"
            type="text"
            placeholder="Введите никнейм"
            required
          />
          <input
            class="border center inputPassword"
            name="passwordReg"
            type="password"
            placeholder="Введите пароль"
            required
          />
          <!-- <input
            class="border center inputPassword mb"
            name="confirmPass"
            type="password"
            placeholder="Повторите пароль"
            required
          /> -->
          <button id="btnRegister" class="btn btnSubmit center" type="submit">
            Зарегистрироваться
          </button>
        </form>
        <p class="btn btnLink center mb">
          <a class="link" href="worker/authorization.php">Для работодателей</a>
        </p>
      </div>
    </section>
    <?php else: header('Location: user/wall.php')?>

    <?php endif; ?>

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
    <script src="js/script.js"></script>
  </body>
</html>
