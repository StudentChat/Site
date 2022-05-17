<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Стена</title>
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

    <div class="center container filters">
      <select class="sort" name="Sort" id="Sort">
        <option value="">По новизне</option>
        <option value="">По количеству просмотров</option>
        <option value="">По количеству лайков</option>
        <option value="">По количеству дизлайков</option>
      </select>
      <button id="btnFilterUser" class="btn filterIcon">
        <img src="../img/filter.svg" alt="" width="40px" height="40px" />
      </button>
    </div>

    <section class="center container postsWall">
      <div class="border post">
        <a href="viewPost.php" class="decorationPost">
          <img
            src="https://demiart.ru/forum/uploads14/post-2420685-1400076698.jpg"
            alt="Фото поста"
            class="imgPost"
          />
          <h1 class="titlePost singlelineTitle">
            Студия Web-boss разработала новую модель развития
          </h1>
          <p class="descriptionPost singlelineText">
            Таким образом реализация намеченных плановых заданий позволяет
            оценить значение новых предложений. Идейные соображения высшего
            порядка, а также начало повседневной работы по формированию позиции
            позволяет оценить значение модели развития. С другой стороны
            постоянное информационно-пропагандистское обеспечение нашей
            деятельности обеспечивает широкому кругу (специалистов) участие в
            формировании позиций, занимаемых участниками в отношении
            поставленных задач. Разнообразный и богатый опыт консультация с
            широким активом обеспечивает широкому кругу. Равным образом
            консультация с широким активом требуют определения и уточнения
            модели развития. Равным образом постоянный количественный рост и
            сфера нашей активности играет важную роль в формировании системы
            обучения кадров, соответствует насущным потребностям. С другой
            стороны рамки и место обучения кадров способствует подготовки и
            реализации модели развития. Если у вас есть какие то интересные
            предложения, обращайтесь! Студия Web-Boss всегда готова решить любую
            задачу. С другой стороны рамки и место обучения кадров способствует
            подготовки и реализации модели развития.
          </p>
        </a>
        <div class="downPanel">
          <a href="profile.php" class="profilePost decorationPost">
            <img
              class="dib imgProfilePost"
              src="../img/profile.svg"
              alt=""
              width="46px"
            />
            <p class="nickname dib">olegmamonov10</p>
          </a>
        </div>

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
        </div>
      </div>
    </section>

    <form action="#" id="filterUser" class="border filter invisible">
      <button class="btnCloseForm" id="closefilterUser">
        <img src="../img/close.svg" alt="Закрыть" />
      </button>
      <p>Тематика поста</p>
      <select name="subject" id="subject" class="border list mb">
        <option>Арт</option>
        <option>IT</option>
        <option>Игры</option>
        <option>Музыка</option>
        <option>Фото</option>
        <option>Наука</option>
        <option>Спорт</option>
        <option>Туризм</option>
        <option>Кино</option>
        <option>Юмор</option>
        <option>Стиль</option>
      </select>
      <label>
        <input
          id="image"
          type="checkbox"
          name="check"
          class="checkboxSize border mb"
        />
        Главное изображение
      </label>
      <label class="db">
        <input class="checkboxSize border mb" type="checkbox" name="check" />
        Описание поста </label
      ><label class="db">
        <input class="checkboxSize border mb" type="checkbox" name="check" />
        Прикрепленные файлы
      </label>
      <p>
        Больше <input class="border filterInputSmall mb" type="text" /> лайков
      </p>
      <p>
        Больше
        <input class="border filterInputSmall mb" type="text" /> дизлайков
      </p>
      <p>
        Больше
        <input class="border filterInputSmall mb" type="text" /> комментариев
      </p>
      <button class="db btn center" type="submit">Применить</button>
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