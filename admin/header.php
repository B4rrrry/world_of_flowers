<?php
if (isset($_GET['logout']) && $_GET['logout'] == 'yes') {
  session_destroy();
  unset($_SESSION['User']);
  header('Location: /');
}
$menu = require_once 'menu.php';

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
  <title>Главная страницы</title>
</head>

<body>
  <header class="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <nav>
            <ul class="header-nav">
              <?php foreach ($menu as $m) : ?>
                <li class="header-nav__item <?= $_SERVER['REQUEST_URI'] == $m['LINK'] || $_SERVER['REQUEST_URI'] == $m['LINK'] . 'index.php' ? 'current-page' : '' ?>">
                  <a href="<?= $m['LINK'] ?>" class="header-nav__link"><img src="img/<?= $m['IMG'] ?>" alt="<?= $m['ALT'] ?>" class="header-nav__img" /></a>
                </li>
              <?php endforeach; ?>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>