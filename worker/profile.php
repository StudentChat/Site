<?php
require_once("../modules/headerWorker.php")
?>

    <section class="container">
      <div class="userSection">
        <label class="uploadPhoto border dib">
          <input class="File" type="file" multiple accept="image/*" required />
          <img
            class="center db imgUpload"
            src="../img/upload.svg"
            alt=""
            width="100px"
            height="100px"
          />
          <p class="textUpload">Загрузить фото</p>
          <a href="chat.php" class="btn btnMessage btnLink">Написать</a>
        </label>
        <div class="center dib nicknameField">
          <p class="nicknameUser dib">ООО "price"</p>
          <button id="btnEditNickname" class="btnEditNicknameUser">
            <img class="editNicknameUser" src="../img/pencil.svg" alt="" />
          </button>
        </div>
      </div>

      <div class="postsWall">
        <div class="border post postProfile">
          <a href="viewVacancy.php" class="decorationPost">
            <img
              src="https://demiart.ru/forum/uploads14/post-2420685-1400076698.jpg"
              alt="Фото поста"
              class="imgPost"
            />
            <h1 class="titlePost singlelineTitle">Программист Биллинга, 1С</h1>
            <p class="descriptionPost singlelineText">
              Обязанности: <br />- Обслуживание BG-биллинга (поддержка,
              конфигурирование); <br />- Настройка и работа Битрикс 24;
              <br />Требования: <br />- Базовые знания сетевых технологий
              (маршрутизация, коммутация); <br />- Опыт работы с linux на уровне
              администратора. <br />Условия: <br />- Полный рабочий день;
              <br />- Оформление по ТК РФ; <br />- Конкурентная заработная
              плата; <br />- Интересные задачи и профессиональное развитие;
            </p>
          </a>
          <!-- сделать переход через js -->
          <button class="btn db center btnEditPost">Редактировать</button>

          <button id="btnRemovePost" class="btn btnRemovePost">Удалить</button>

          <div class="statisticPost">
            <!-- <div class="border db statisticElement">
              <img class="staticticImage" src="../img/like.svg" alt="" />
              <p class="statisticNumber">0</p>
            </div>
            <div class="border db statisticElement">
              <img class="staticticImage" src="../img/disLike.svg" alt="" />
              <p class="statisticNumber">0</p>
            </div> -->
            <div class="border db statisticElement">
              <img class="staticticImage" src="../img/comment.svg" alt="" />
              <p class="statisticNumber">0</p>
            </div>
            <div class="border db statisticElement">
              <img class="staticticImage" src="../img/eye.svg" alt="" />
              <p class="statisticNumber">0</p>
            </div>
            <div class="border db statisticElement">
              <h1 class="dib priceVacancy">50000</h1>
              <p class="dib priceVacancy">р</p>
            </div>
          </div>
        </div>
      
    </section>

    <form id="removePost" class="postRemoveConfirm border invisible">
      <p class="timetableTitle mb">
        Вы действительно хотите удалить данную вакансию? (Восстановить его
        будет невозможно)
      </p>
      <div class="db center btnsCondirm">
        <button class="btn btnConfirmYes">Да</button>
        <button class="btn">Нет</button>
      </div>
    </form>

    <form id="editNickname" action="" class="border editNickname invisible">
      <button id="closeEditNickname" class="btn btnCloseForm">
        <img class="" src="../img/close.svg" alt="" />
      </button>
      <p class="timetableTitle mb">Изменение названия организации</p>
      <input
        class="db inputEditNickname border center"
        type="text"
        required
      />
      <button type="submit" class="center btn db">Сохранить</button>
    </form>

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

    <button id="backToTop" class="btn filterIcon btnPageUp">
      <img src="../img/pageUp.svg" alt="" width="50px" height="50px" />
    </button>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/script.js"></script>
  </body>
</html>
