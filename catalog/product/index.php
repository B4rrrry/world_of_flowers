<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/data.php';

if (isset($_GET['item'])) {
  $data = new Data();
  $productData = $data->getProductData($_GET['item']);
  $productContent = $data->getProductContent($_GET['item']);
} else {
  header('Location: /catalog/');
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>
<main>
  <section class="product">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="product__wrap wrap">
            <?php foreach ($productData as $data) : ?>
              <img src="/assets/img/products/<?= $data['photo'] ?>" alt="<?= $data['name'] ?>" class="product__img" />
              <div class="product__info">
                <h1 class="product__title"><?= $data['name'] ?></h1>
                <p class="product__composition_title">Состав букета:</p>
                <ul class="product__composition_list">
                  <?php foreach ($productContent as $value) : ?>
                    <li class="product__composition_list-item">
                      <p class="product__composition_list-text">
                        <span></span> <?= $value['flower'] ?>
                      </p>
                    </li>
                  <?php endforeach; ?>
                  <?php foreach ($productContent as $value) : ?>
                    <li class="product__composition_list-item">
                      <p class="product__composition_list-text">
                        <span></span> <?= $value['decor'] ?>
                      </p>
                    </li>
                  <?php endforeach; ?>
                </ul>
                <div class="product__price-wrap">
                  <p class="product__price"><?= $data['price'] ?> руб.</p>
                  <button class="buy__btn" id="buySender" data-item="<?=$data['id']?>">В корзину</button>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<script src="/ajax/addToCart.js"></script>
</body>
</html>