<!doctype html>
<html>
  <?php require 'partials/head.php'?>
  <body>
    <div class="container">
      <div class="title">Вхід</div>
      <form action="POST">
        <div class="input-box">
          <input name="email" type="email" placeholder="Введіть ел. пошту" required/>
        </div>
        <div class="input-box">
          <input name="password" type="password" placeholder="Введіть пароль" required/>
        </div>
        <div class="input-box button"><button type="submit">Увійти</button></div>
        <div class="text">
          Не маєте акаунта? <a href="/registration">Зареєструйте зараз</a>
        </div>
      </form>
    </div>
  </body>
</html>
