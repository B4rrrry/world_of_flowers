<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/data.php';
var_dump($_POST);
if ($_SESSION['User']['Access'] == 'admin') {
  header('Location: /admin/requests/');
} else {
  if (isset($_POST['submit'])) {
    $login = htmlspecialchars(trim($_POST['login']));
    $password = htmlspecialchars(trim($_POST['password']));
    $db = Db::getInstance();
    $query = "SELECT `login`, `password`, `name`, `access` FROM `users` WHERE `login` = :userLogin AND `password` = :userPass";
    $params = ['userLogin' => $login, 'userPass' => hash('sha256', $password)];
    $data = $db->query($query, $params);
    
    if (!empty($data)) {
      $_SESSION['User'] = [
        'Login' => $data[0]['login'], 
        'Password' => $data[0]['password'], 
        'Name' => $data[0]['name'],
        'Access' => $data[0]['access']
      ];
      header('Location: /admin/requests/');
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style.min.css" />
  <title>Авторизация</title>
</head>

<body>
  <section class="auth">
    <div class="container">
      <div class="col-lg-12">
        <div class="auth-wrapper">
          <h1 class="auth-title">Авторизация</h1>
          <p class="auth-text">
            Для использования системы, пожалуйста, авторизуйтесь
          </p>
          <form action="<?=$_SERVER['PHP_SELF']?>" class="auth-form" method="POST">
            <input type="text" name="login" placeholder="Ваш логин" class="auth-form__login" />
            <input type="text" name="password" placeholder="Ваш пароль" class="auth-form__password" />
            <input type="submit" name="submit" class="auth-form__submit" value="Авторизоваться" />
          </form>
        </div>
      </div>
    </div>
  </section>
</body>

</html>