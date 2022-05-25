<?php
require_once("../modules/headerUser.php")
?>

    <section class="container">
      <div class="settingForm border db center">
        <div class="">
          <p class="db">Расписание</p>

          <select
            class="db selectTimetable mb border"
            name=""
            id="settingTimetable"
          >
            <option value="none">не выбрано</option>
            <option value="link">Ссылка</option>
            <option value="ESR">ЕСР</option>
          </select>
        </div>

        <form id="linkTimetableSetting" action="" class="invisible mb">
          <p>Введите ссылку для доступа к сайту расписания</p>
          <input type="text" class="dib inputLinkSetting border mb" />
          <button class="center btn db">Сохранить</button>
        </form>

        <form id="esrTimetableSetting" action="" class="invisible">
          <p>Введите данные для доступа к расписанию из ЕСР</p>
          <div class="wrap mb">
            <select class="esrInput border" name="" >
              <option value="">Выберите город</option>
            </select>
            <select class="esrInput border" name="" >
              <option value="">Выберите учреждение</option>
            </select>
            <select class="esrInput border" name="" >
              <option value="">Выберите группу</option>
            </select>
          </div>
          <div class="wrap mb">
            <input
              class="esrInput border name"
              type="text"
              placeholder="Введите имя"
            />
            <input
              class="esrInput border secondNmae"
              type="text"
              placeholder="Введите фамилию"
            />
          </div>
          <button type="submit" class="btn db center">Сохранить</button>
        </form>

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
        </div>
      </div> -->

      <p>Смена пароля</p>
      <div class="">
        <form action="" class="wrap">
          <input class="esrInput border" type="password" placeholder="Введите текущий пароль">
          <input class="esrInput border" type="password" placeholder="Введите новый пароль">
          <input class="esrInput border mb" type="password" placeholder="Повторите новый пароль">
        </form>
        <button class="btn db center">Изменить</button>
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
