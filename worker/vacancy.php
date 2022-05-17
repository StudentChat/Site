<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Вакансии</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="icon" href="../img/Logo-light.svg" />
  </head>
  <body>
    <header class="header center">
      <a class="logo" href="vacancy.php"
        ><img class="logo" src="../img/Logo-image-Worker.svg" alt="Логотип"
      /></a>
      <div class="btns">
        <a class="btn btnLink" href="vacancy.php">Вакансии</a>
        <a class="btn btnLink" href="chat.php">Чат</a>
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
            администратора. <br />Условия: <br />- Полный рабочий день; <br />-
            Оформление по ТК РФ; <br />- Конкурентная заработная плата; <br />-
            Интересные задачи и профессиональное развитие;
          </p>
        </a>
        <div class="downPanel">
          <a href="profileWorker.php" class="profilePost decorationPost">
            <img
              class="dib imgProfilePost"
              src="../img/profile.svg"
              alt=""
              width="46px"
            />
            <p class="nickname dib">ООО "прайс"</p>
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
          <div class="border db statisticElement">
            <h1 class="dib priceVacancy">50000</h1>
            <p class="dib priceVacancy">р</p>
          </div>
        </div>
      </div>
    </section>

    <form action="#" id="filterUser" class="border filter invisible">
      <button class="btnCloseForm" id="closefilterUser">
        <img src="../img/close.svg" alt="Закрыть" />
      </button>
      <p>Тип вакансии</p>
      <select name="subject" id="subject" class="border list mb">
        <option>Не выбрано</option>
        <option>Работа</option>
        <option>Практика</option>
        <option>Практика с последующим трудоустройством</option>
        <option>Подработка</option>
        <option>Стажировка</option>
      </select>
      <p>Категория вакансии</p>
      <select name="subject" id="subject" class="border list mb">
        <option>Не выбрано</option>
        <option>Для студентов</option>
        <option>IT</option>
        <option>Автомобильный бизнес</option>
        <option>Административная работа</option>
        <option>Банки, инвестиции</option>
        <option>Без опыта</option>
        <option>Бухгалтерия, финансы</option>
        <option>Высший менеджмент</option>
        <option>Госслужба, НКО</option>
        <option>Домашний персонал</option>
        <option>ЖКХ, эксплуатация</option>
        <option>Искусство, развлечения</option>
        <option>Консультирование</option>
        <option>Маркетинг, реклама, PR</option>
        <option>Медицина, фармацевтика</option>
        <option>Образование, наука</option>
        <option>Охрана, безопасность</option>
        <option>Продажи</option>
        <option>Производство, сырьё, с/х</option>
        <option>Страхование</option>
        <option>Строительство</option>
        <option>Транспорт, логистика</option>
        <option>Туризм, рестораны</option>
        <option>Управление персоналом</option>
        <option>Фитнес, салоны красоты</option>
        <option>Юриспруденция</option>
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
        Описание вакансии
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
      <p>Зарплата</p>
      <input
        class="border filterInputMiddleFirst mb"
        type="number"
        placeholder="От"
      />
      <input
        class="border filterInputMiddleSecond"
        type="number"
        placeholder="До"
      />
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
