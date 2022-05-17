<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Администрация</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="icon" href="../img/Logo-light.svg" />
  </head>
  <body>
    <header class="header center">
      <a class="logo" href="vacancy.php"
        ><img
          class="logo"
          src="../img/Logo-image-Administrator.svg"
          alt="Логотип"
      /></a>
      <div class="btns"></div>
      <div class="btns">
        <!-- сделать выход через js -->
        <a href="../authorization.php">
          <img class="headerIcon" src="../img/log out.svg" alt="Выход"
        /></a>
      </div>
    </header>

    <section class="container">
      <select name="subject" id="subject" class="center db border list mb">
        <option>Не выбрано</option>
        <option>база 1</option>
        <option>база 2</option>
      </select>

      <div class="adminTools">
        <img src="../img/add.svg" alt="" width="50px" height="50px" />
        <img src="../img/edit.svg" alt="" width="50px" height="50px" />
        <img src="../img/DELETE.svg" alt="" width="40px" height="50px" />
      </div>
      <div class="adminTools">
        <table border="1" bordercolor="black">
          <tr>
            <th>ID</th>
            <th>поля базы</th>
          </tr>
          <tr>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
          </tr>
        </table>
      </div>
    </section>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/script.js"></script>
  </body>
</html>
