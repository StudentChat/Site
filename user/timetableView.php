<?php
require_once("../modules/headerUser.php")
?>
    <section>
      <div class="timetableViewPanel border center">
        <button class="btn">
          Скачать <img class="btnIcon" src="../img/download.svg" alt="" />
        </button>
        <button class="btn">
          Обновить <img class="btnIcon" src="../img/update.svg" alt="" />
        </button>
        <select class="border selectWeek" name="" id="">
          <option value=""></option>
        </select>
      </div>
      <div class="timeTable border center"></div>

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
