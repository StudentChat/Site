<?php
require_once("../modules/headerWorker.php")
?>

    <section class="container mb">
      <div class="border formAddPost center">
        <label class="uploadFile border db">
          <img
            class="center db imagePostView"
            src="../img/imageMissing.svg"
            alt=""
            width="100%"
            height="100%"
          />

          <div class="mb db price">
            <h1 class="dib priceVacancy">50000</h1>
            <p class="dib priceVacancy">р</p>
          </div>

          <a
            href="profile.php"
            class="profilePost profilePostView db decorationPost"
          >
            <img
              class="dib imgProfilePost"
              src="../img/profile.svg"
              alt=""
              width="46px"
            />
            <p class="nickname dib">ООО "прайс"</p>
          </a>
        </label>
        <button id="postRemoveBtn" class="border btn removePostView">
          Удалить
        </button>
        <div class="blockAddPost">
          <p class="db mb titlePostView">Программист Биллинга, 1С</p>
          <p class="db dib mb">Тип Вакансии:</p>
          <h2 class="dib mb subjectPostView">Работа</h2>
          <p class="db dib mb vacancyCategory">Категория вакансии</p>
          <h2 class="dib mb subjectPostView">IT</h2>
          <p class="db center inputDescriptionPost descriptionPostView">
            Обязанности: <br />- Обслуживание BG-биллинга (поддержка,
            конфигурирование); <br />- Настройка и работа Битрикс 24;
            <br />Требования: <br />- Базовые знания сетевых технологий
            (маршрутизация, коммутация); <br />- Опыт работы с linux на уровне
            администратора. <br />Условия: <br />- Полный рабочий день; <br />-
            Оформление по ТК РФ; <br />- Конкурентная заработная плата; <br />-
            Интересные задачи и профессиональное развитие;
          </p>
          <div class="mb imgContainer">
            <label class="FilesPostView border dib">
              <img
                class="center db imagePostView"
                src="../img/imageMissing.svg"
                alt=""
                width="100%"
                height="100%"
              />
            </label>
          </div>
        </div>
        <div class="statisticPostView">
          <div class="border statisticElement dib">
            <img class="staticticImage" src="../img/eye.svg" alt="" />
            <p class="statisticNumber">0</p>
          </div>
          <button
            id="btnCommentView"
            class="border statisticElement dib btnCommentView"
          >
            <img class="staticticImage" src="../img/comment.svg" alt="" />
            <p class="statisticNumber">0</p>
          </button>
          <!-- <btn class="border statisticElement dib">
            <img class="staticticImage" src="../img/disLike.svg" alt="" />
            <p class="statisticNumber">0</p>
          </btn>
          <div class="border statisticElement dib">
            <img class="staticticImage" src="../img/like.svg" alt="" />
            <p class="statisticNumber">0</p>
          </div> -->
        </div>
      </div>

      <form id="postRemoveConfirm" class="postRemoveConfirm border invisible">
        <p class="timetableTitle mb">
          Вы действительно хотите удалить данную вакансию? (Восстановить ее
          будет невозможно)
        </p>
        <div class="db center btnsCondirm">
          <button type="submit" class="btn btnConfirmYes">Да</button>
          <button type="submit" class="btn">Нет</button>
        </div>
      </form>

      <div id="commentWindow" class="invisible chatWindow border commentWindow">
        <button
          class="btnCloseForm btnCloseCommentWindow"
          id="closeCommentWindow"
        >
          <img src="../img/close.svg" alt="Закрыть" />
        </button>
        <div class="Dialog border mb center">
          <img class="logoDialog" src="../img/profile.svg" alt="" />
          <div class="wrapTextBlock">
            <h1 class="nicknameDialog">Вы</h1>
            <p class="textDialog">
              Строить правильно отношения труднее всего с женщинами и низкими
              людьми. Если приблизишь их к себе - они станут развязными, если
              удалишь от себя - возненавидят.
            </p>
          </div>
        </div>

        <div class="Dialog border mb center">
          <img class="logoDialog" src="../img/profile.svg" alt="" />
          <div class="wrapTextBlock">
            <h1 class="nicknameDialog">olegmamonov10</h1>
            <p class="textDialog">
              Век живи - век учись тому, как следует жить.
            </p>
          </div>
        </div>

        <div class="Dialog border mb center">
          <img class="logoDialog" src="../img/profile.svg" alt="" />
          <div class="wrapTextBlock">
            <h1 class="nicknameDialog">Вы</h1>
            <p class="textDialog">
              Те, кто готов отдать свою свободу, чтобы приобрести недолговечную
              защиту от опасности, не заслуживают ни свободы, ни безопасности.
            </p>
          </div>
        </div>

        <div class="Dialog border mb center">
          <img class="logoDialog" src="../img/profile.svg" alt="" />
          <div class="wrapTextBlock">
            <h1 class="nicknameDialog">olegmamonov10</h1>
            <p class="textDialog">
              Все, что происходит в наше время и что мы видим собственными
              глазами, удивляет нас гораздо меньше, нежели события прошлого, о
              которых мы читаем в книгах, хотя и в наши дни творятся не менее
              необыкновенные вещи.
            </p>
          </div>
        </div>

        <div class="Dialog border mb center">
          <img class="logoDialog" src="../img/profile.svg" alt="" />
          <div class="wrapTextBlock">
            <h1 class="nicknameDialog">Вы</h1>
            <p class="textDialog">
              Женщины в большинстве своем оттого так безразличны к дружбе, что
              она кажется им пресной в сравнении с любовью.
            </p>
          </div>
        </div>

        <div class="Dialog border mb center">
          <img class="logoDialog" src="../img/profile.svg" alt="" />
          <div class="wrapTextBlock">
            <h1 class="nicknameDialog">olegmamonov10</h1>
            <p class="textDialog">
              В основе искусства и литературы, как и в основе войны, лежат
              деньги.
            </p>
          </div>
        </div>

        <form action="#" class="sendMessage center db">
          <textarea class="writeMessage border" type="text"></textarea>
          <button type="submit" class="searchMessageBtn sendMessageBtn">
            <img src="../img/enter.svg" alt="" width="40px" />
          </button>
        </form>
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
