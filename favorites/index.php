<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/data.php';

if (!isset($_SESSION['User'])) {
  header('Location: /auth/');
}

$db = Db::getInstance();
$data = new Data();
$favs = $db->query(
  'SELECT distinct * FROM `getFavProds` WHERE userId = :userId',
  [
    'userId' => $data->getUserId($_SESSION['User']['Login'])
  ]
);

require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>
<main>
  <section class="favorites">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="favorites-wrap">
            <!-- title  -->
            <h1 class="favorites__title title">
              Избранное
            </h1>
            <!-- title end -->
            <!-- list  -->
            <ul class="favorites-list">
              <?php foreach ($favs as $fav) : ?>
                <li class="favorites-list__item">
                  <!-- img  -->
                  <img src="/assets/img/products/<?=$fav['photo']?>" alt="<?=$fav['name']?>" class="favorites-list__img">
                  <!-- img end -->
                  <!-- info  -->
                  <div class="favorites-list__info">
                    <!-- header  -->
                    <div class="favorites-list__header">
                      <!-- name  -->
                      <p class="favorites-list__name">
                        <?=$fav['name']?>
                      </p>
                      <!-- name end -->
                      <!-- price  -->
                      <p class="favorites-list__price">
                        <?=$fav['price']?> руб.
                      </p>
                      <!-- price end -->
                    </div>
                    <!-- header end -->
                    <!-- bottom  -->
                    <div class="favorites-list__bottom">
                      <!-- del  -->
                      <button class="favorites-list__del del-btn" data-favItemId="<?=$fav['id']?>" >
                        <img src="/assets/img/fav/del.svg" alt="el">
                        Удалить
                      </button>
                      <!-- del end -->
                      <!-- basket  -->
                      <button class="favorites-list__basket fav-add-btn" data-favItemId="<?=$fav['id']?>">
                        Добавить в корзину
                      </button>
                      <!-- basket end -->
                    </div>
                    <!-- bottom end -->
                  </div>
                  <!-- info end -->
                </li>
              <?php endforeach; ?>
              <!-- item end -->
            </ul>
            <!-- list end -->
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<script src="/ajax/favAddToCart.js"></script>
<script src="/ajax/favDel.js"></script>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
