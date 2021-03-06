<?php
require_once("../modules/headerWorker.php")
?>
    <section class="container chatContainer">
      <form action="#" class="headChat">
        <button class="searchMessageBtn">
          <img src="../img/search.svg" alt="" width="50px" />
        </button>
        <input
          class="searchMessage border"
          type="text"
          placeholder="Поиск пользователей"
        />
        <button type="submit" class="searchMessageBtn btnEnter">
          <img class="" src="../img/enter.svg" alt="" width="40px" />
        </button>
      </form>

      <div class="messagesBox">
        <div class="message border center">
          <button class="iconUserMessage">
            <img src="../img/profile.svg" alt="" width="50px" />
          </button>
          <h1 class="nicknameMessage singlelineUser">
            Николай Николай Николай Николай Николай
          </h1>
          <img
            id="btnDeleteChat"
            class="deleteChat"
            src="../img/DELETE.svg"
            alt=""
            width="20px"
            height="20px"
          />
          <p class="textMessage singlelineTitle">
            В основе искусства и литературы, как и в основе войны, лежат деньги.
          </p>
        </div>

        <div class="message border center">
          <button class="iconUserMessage">
            <img src="../img/profile.svg" alt="" width="50px" />
          </button>
          <h1 class="nicknameMessage singlelineUser">Иван</h1>
          <img
            id="btnDeleteChat"
            class="deleteChat"
            src="../img/DELETE.svg"
            alt=""
            width="20px"
            height="20px"
          />
          <p class="textMessage singlelineTitle">
            В основе искусства и литературы, как и в основе войны, лежат деньги.
          </p>
        </div>

        <div class="message border center">
          <button class="iconUserMessage">
            <img src="../img/profile.svg" alt="" width="50px" />
          </button>
          <h1 class="nicknameMessage singlelineUser">Александр</h1>
          <img
            id="btnDeleteChat"
            class="deleteChat"
            src="../img/DELETE.svg"
            alt=""
            width="20px"
            height="20px"
          />
          <p class="textMessage singlelineTitle">
            В основе искусства и литературы, как и в основе войны, лежат деньги.
          </p>
        </div>
      </div>

      <div class="chatWindow border">
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
            <h1 class="nicknameDialog">Николай</h1>
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
            <h1 class="nicknameDialog">Николай</h1>
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
            <h1 class="nicknameDialog">Николай</h1>
            <p class="textDialog">
              В основе искусства и литературы, как и в основе войны, лежат
              деньги.
            </p>
          </div>
        </div>
        <form action="#" class="sendMessage center db">
          <textarea
            id="writeMessage"
            class="writeMessage border"
            type="text"
          ></textarea>
          <button type="submit" class="searchMessageBtn sendMessageBtn">
            <img src="../img/enter.svg" alt="" width="40px" />
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

    <form id="formDeleteChat" class="formDeleteChat invisible">
      <p class="mb timetableTitle">
        Вы действительно желаете удалить данный диалог(восстановить его будет
        невозможно!)
      </p>
      <div class="btns center">
        <button id="btnDeleteChatYes" class="btn btnDanger">ДА</button>
        <button id="btnDeleteChatNo" class="btn">Нет</button>
      </div>
    </form>

    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/script.js"></script>
  </body>
</html>
