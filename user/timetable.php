<?php
require_once("../modules/headerUser.php")
?>

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
