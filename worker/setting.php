<?php
require_once("../modules/headerWorker.php")
?>

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
