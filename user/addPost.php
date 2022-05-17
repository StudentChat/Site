<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Добавить пост</title>
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
        <a href="../index.php">
          <img class="headerIcon" src="../img/log out.svg" alt="Выход"
        /></a>
      </div>
    </header>

    <section>
      <form class="border formAddPost center">
        <label class="uploadFile border db">
          <input class="File" type="file" multiple accept="image/*" required />
          <img
            class="center db imgUpload"
            src="../img/upload.svg"
            alt=""
            width="100px"
            height="100px"
          />
          <p class="textUpload">Загрузить</p>
        </label>
        <div class="blockAddPost">
          <p class="db">Введите тему поста</p>
          <input class="db inputTitlePost border center" type="text" required />
          <p class="db">Введите описание поста</p>
          <textarea
            class="border db center inputDescriptionPost"
            required
          ></textarea>
          <p class="db">Выберите тематику поста</p>
          <select
            class="db inputSelectPost border center"
            name=""
            id=""
            required
          >
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
          <label class="db inputFilePost center border">
            <input class="File" type="file" />
            <img
              class="db center imgUpload mt"
              src="../img/upload_files.svg"
              alt=""
              width="50px"
              height="50px"
            />
            <p class="textUpload">Загрузить файлы</p>
          </label>

          <div class="mb imgContainer invisible">
            <label class="FilesPostView border dib">
              <img
                class="center db imagePostView"
                src=""
                alt=""
                width="100%"
                height="100%"
              />
            </label>
          </div>
        </div>

        <button class="db btn center btnAddPost">Создать пост</button>
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
