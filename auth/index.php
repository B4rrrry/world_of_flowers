<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/data.php';
if (isset($_POST['submit'])) {
  $login = htmlspecialchars(trim($_POST['login']));
  $password = htmlspecialchars(trim($_POST['password']));
  $db = Db::getInstance();
  $query = "SELECT `login`, `password`, `name` FROM `users` WHERE `login` = :userLogin AND `password` = :userPass";
  $params = ['userLogin' => $login, 'userPass' => hash('sha256', $password)];
  $data = $db->query($query, $params);
  
  if (!empty($data)) {
    $_SESSION['User'] = ['Login' => $data[0]['login'], 'Password' => $data[0]['password'], 'Name' => $data[0]['name']];
    header('Location: /cart/');
  }
}

?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&family=Open+Sans:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/reset.min.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <title>Wolrd of Flowers</title>
  </head>
  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header__wrap wrap">
            <!-- logo  -->
            <a href="/" class="header__logo-link"
              ><img
                src="/assets/img/header/logo_black.svg"
                alt="Logo"
                class="header__logo"
            /></a>
            <!-- logo end  -->
            <!-- nav  -->
            <nav class="header-nav">
              <ul class="header__nav">
                <li class="header__nav-item">
                  <a href="/catalog/" class="header__nav-link"
                    >Каталог</a
                  >
                </li>
                <li class="header__nav-item">
                  <a href="/delivery/" class="header__nav-link"
                    >Доставка</a
                  >
                </li>
                <li class="header__nav-item">
                  <a href="/contacts/" class="header__nav-link"
                    >Контакты</a
                  >
                </li>
              </ul>
            </nav>
            <!-- nav end  -->
            <!-- mobile  -->
            <!-- btns  -->
            <ul class="header-btns">
              <!-- item  -->
              <li class="header-btns__item">
                <a href="/favorites/" class="header-btns__btn header-btns__btn--fav">
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    class="header-btns__btn-img header-btns__btn-img"
                  >
                    <rect width="24" height="24" fill="url(#pattern0)" />
                    <defs>
                      <pattern
                        id="pattern0"
                        patternContentUnits="objectBoundingBox"
                        width="1"
                        height="1"
                      >
                        <use
                          xlink:href="#image0_209_8"
                          transform="scale(0.00195312)"
                        />
                      </pattern>
                      <image
                        id="image0_209_8"
                        width="512"
                        height="512"
                        xlink:href="data:image/png;base64,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"
                      />
                    </defs>
                  </svg>
                </a>
              </li>
              <!-- item end  -->
              <!-- item  -->
              <li class="header-btns__item header-btns__item--basket">
                <a href="/cart/" class="header-btns__btn header-btns__btn--basket">
                  <img src="/assets/img/header/basket.svg" alt="fav" />
                </a>
                <!-- count  -->
                <p class="header-btns__count">1</p>
                <!-- count end -->
              </li>
              <li class="header-btns__item">
                    <a href="/auth/" class="header-btns__btn ">
                     Войти
                    </a>
                </li>
              <!-- item end  -->
            </ul>
            <!-- btns end -->
            <ul class="header__mobile">
              <li class="header__mobile-item">
                <a
                  href="tel:+79774747744"
                  class="header__mobile-link header__mobile-phone"
                  >+ 7 (977) 474 77 44</a
                >
              </li>
              <li class="header__mobile-item">
                <a href="#" class="header__mobile-link header__mobile-req"
                  >Заказать обратный звонок</a
                >
              </li>
            </ul>
            <!-- mobile end  -->
          </div>
        </div>
      </div>
    </div>
  </header>
<form action="<?=$_SERVER['PHP_SELF']?>" style="padding-top: 150px; display: flex; flex-direction: column; width: 250px" method="post">
  <label for="login">Ваш логин</label>
  <input type="text" name="login" id="login">
  <label for="password">Ваш пароль</label>
  <input type="password" name="password" id="password">
  <input type="submit" name="submit" value="Войти">
</form>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/footer.php';