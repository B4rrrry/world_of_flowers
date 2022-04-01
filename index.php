<?php
require_once 'data.php';
require_once 'header.php';
$data = new Data();
$hitProds = $data->getHitProducts();
$newProds = $data->getNewProducts();
?>
<div id="pagepiling">
  <main>
    <section class="offer section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="offer__wrap wrap">
              <div class="offer__info">
                <h1 class="offer__title">Дарите улыбку своим любимым</h1>
                <p class="offer__subtitle">
                  Собираем букеты для особого случая
                </p>
                <a href="/catalog/" class="offer__link">Выбрать букет</a>
              </div>
              <img src="/assets/img/offer/cveto.png" alt="cvetok" class="offer__img" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="about section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="about__title title">О нас</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="about__wrap wrap">
              <div class="about__info">
                <p class="about__info-text text">
                  Наш цветочный салон пользуется пополярностью в Омске. А
                  все потому, что мы с любовью и заботой относимся к нашим
                  клиентам и уделяем внимание абсолютно каждому цветку,
                  поступающему на продажу в салон.
                </p>
                <p class="about__info-text text">
                  Мы открыли свои двери еще в 2011 году. И уже на протяжении
                  10 лет мы радуем вас и ваших близких свежими букетами.
                </p>
                <div class="about__video">
                  <a href="https://www.youtube.com/watch?v=95cazzinVkU" target="_blank" class="about__video-link"><img src="/assets/img/about/glas.svg" alt="play" class="about__video-img" /></a>
                  <p class="about__video-text">
                    Посмотрите небольшое видео о нашем салоне
                  </p>
                </div>
              </div>
              <img src="/assets/img/about/image.png" alt="image" class="about__img" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="hits section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="hits__title title">Хиты</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="hits__slider slider">
              <?php foreach ($hitProds as $hitProd) : ?>
                <div class="slider__item" data-prodId="<?= $hitProd['id'] ?>">
                  <a href="/catalog/product/?item=<?= $hitProd['id'] ?>" class="products__link">
                    <img src="/assets/img/products/<?= $hitProd['photo'] ?>" alt="<?= $hitProd['name'] ?>" class="hits__slider-img" />
                  </a>
                  <div class="hits__slider-info">
                    <a href="/catalog/product/?item=<?= $hitProd['id'] ?>" class="products__link">
                      <p class="hits__slider-name text"><?= $hitProd['name'] ?></p>
                    </a>
                    <p class="hits__slider-price"><?= $hitProd['price'] ?></p>
                  </div>
                  <div class="buy__wrap buy__wrap--main">
                  <a href="/catalog/product/?item=<?= $hitProd['id'] ?>" class="buy__btn buy__btn--link" tabindex="0">Перейти к букету</a>
                    <button class="buy__favorites " data-fav-prod-id="<?= $hitProd['id'] ?>">
                      <img src="/assets/img/other/heart.svg" alt="heart" class="buy__favorites-img" />
                    </button>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
            <div class="hits__wrap">
              <a href="/catalog/" class="hits__link catalog_link">Перейти в каталог</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="news section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="news__title title">Новинки</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="news__wrap">
              <div class="news__slider slider">
                <?php foreach ($newProds as $newProd) : ?>
                  <div class="slider__item" data-prodId="<?= $newProd['id'] ?>">
                    <a href="/catalog/product/?item=<?= $newProd['id'] ?>" class="products__link">
                      <img src="assets/img/products/<?= $newProd['photo'] ?>" alt="<?= $newProd['name'] ?>" class="news__slider-img" />
                    </a>
                    <div class="news__slider-info">
                      <a href="/catalog/product/?item=<?= $newProd['id'] ?>" class="products__link">
                        <p class="news__slider-name text"><?= $newProd['name'] ?></p>
                      </a>
                      <p class="news__slider-price"><?= $newProd['price'] ?> руб.</p>
                    </div>
                    <div class="buy__wrap buy__wrap--main">
                  <a href="/catalog/product/?item=<?= $hitProd['id'] ?>" class="buy__btn buy__btn--link" tabindex="0">Перейти к букету</a>
                    <button class="buy__favorites " data-fav-prod-id="<?= $hitProd['id'] ?>">
                      <img src="/assets/img/other/heart.svg" alt="heart" class="buy__favorites-img" />
                    </button>
                  </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="submit section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="submit__wrap wrap">
              <img src="/assets/img/sub/img.png" alt="img" class="submit__img" />
              <div class="submit__block">
                <h2 class="submit__title title">
                  Будьте в курсе наших новостей
                </h2>
                <form action="/" method="post" class="submit__form newsletterForm" id="newsletter">
                  <h3 class="submit__form-title">Подпишитесь на рассылку:</h3>
                  <ul class="form__list">
                    <li class="form__list-item">
                      <input type="text" placeholder="Ваше имя" class="form__list-input newsletter-name" required />
                    </li>
                    <li class="form__list-item">
                      <input type="email" placeholder="Ваш email" class="form__list-input newsletter-email" required />
                    </li>
                    <li class="form__list-item">
                      <input type="submit" value="Отправить" class="form__list-input form__list-submit" />
                    </li>
                  </ul>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>
  <script src="/ajax/newsletterSender.js"></script>
  <script src="/ajax/favoriteSender.js"></script>
<?php require 'index-footer.php';
