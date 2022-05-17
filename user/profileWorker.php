<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Работодатель</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="icon" href="../img/Logo-light.svg" />
  </head>
  <body>
    <header class="header center">
      <a class="logo" href="wall.php"
        ><img class="logo" src="../img/Logo-image.svg" alt="Логотип"
      /></a>
      <div class="btns">
        <a class="btn btnLink" href="wall.php">Стена</a>
        <a class="btn btnLink" href="timetable.php">Расписание</a>
        <a class="btn btnLink" href="chat.php">Чат</a>
        <a class="btn btnLink" href="vacancy.php">Вакансии</a>
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
        <a href="../authorization.php">
          <img class="headerIcon" src="../img/log out.svg" alt="Выход"
        /></a>
      </div>
    </header>

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
        <div class=" dib nicknameField">
          <p class="nicknameUser dib">ООО "прайс"</p>
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
              Обязанности: - Обслуживание BG-биллинга (поддержка,
              конфигурирование); - Настройка и работа Битрикс 24; Требования: -
              Базовые знания сетевых технологий (маршрутизация, коммутация); -
              Опыт работы с linux на уровне администратора. Условия: - Полный
              рабочий день; - Оформление по ТК РФ; - Конкурентная заработная
              плата; - Интересные задачи и профессиональное развитие;
            </p>
          </a>
          

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

        

      <form class="postRemoveConfirm border invisible">
        <p class="timetableTitle mb">
          Вы действительно хотите удалить данный пост? (Восстановить его будет
          невозможно)
        </p>
        <div class="db center btnsCondirm">
          <button class="btn btnConfirmYes">Да</button>
          <button class="btn">Нет</button>
        </div>
      </form>

      <form action="" class="border editNickname invisible">
        <button class="btn btnCloseForm">
          <img class="" src="../img/close.svg" alt="" />
        </button>
        <p class="timetableTitle mb">Изменение никнейма</p>
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
    </section>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/script.js"></script>
  </body>
</html>