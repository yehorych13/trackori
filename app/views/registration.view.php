<!doctype html>
<html>
  <?php require 'partials/head.php'?>
  <body>
    <div class="container">
      <!-- <div class="logo-box"> -->
      <!--   <img src="assets/img/full-logo.svg" alt="птаха фред" class="logo" /> -->
      <!-- </div> -->
      <div class="title">Реєстрація</div>
      <form action="POST">
        <div class="input-box">
          <input name="username" type="text" placeholder="Введіть ім'я" required/>
        </div>
        <div class="input-box">
          <input name="email" type="email" placeholder="Введіть ел. пошту" required/>
        </div>
        <div class="input-box">
          <input name="password" type="password" placeholder="Створіть пароль" required/>
        </div>
        <div class="input-box">
          <input name="confirm_password" type="password" placeholder="Підтвердіть пароль" required/>
        </div>
        <div class="input-box button"><button type="submit">Зареєструватися</button></div>
        <div class="text">
          Вже маєте акаунт? <a href="/login">Увідіть зараз</a>
        </div>
      </form>
    </div>
  </body>
</html>
