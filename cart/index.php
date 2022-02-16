<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/data.php';

if (!isset($_SESSION['User'])) {
  header('Location: /auth/');
}

$data = new Data();
$cart = $data->getCart($_SESSION['User']['Login']);
$count = $data->getCartCount($_SESSION['User']['Login']);
$amount = $data->getCartAmount($_SESSION['User']['Login']);

require $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 

?>
<main>
  <section class="basket">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="basket__wrap">
            <h1 class="basket__title title">Корзина</h1>
            <?php if (is_null($cart)) : ?>
              <p class="basket__none">
                Ваша корзина пуста. <br />
                Воспользуйтесь каталогом, чтобы добавить товары.
              </p>
            <?php endif; ?>
            <div class="basket-info__wrap">
              <ul class="basket-list">
                <?php foreach ($cart as $item) : ?>
                <li class="basket-list__item">
                  <div class="basket-list__delete-btn">
                    <span></span>
                  </div>
                  <img src="/assets/img/products/<?=$item['photo']?>" alt="<?=$item['name']?>" class="basket-list__img" />
                  <div class="basket-list__info">
                    <p class="basket-list__name"><?=$item['name']?></p>
                    <div class="basket-list__info-bottom">
                      <div class="basket-list__count-wrap">
                        <button class="basket-list__count-btn basket-list__count-btn--min">
                          -
                        </button>
                        <p class="basket-list__count"><?=$item['count']?></p>
                        <button class="basket-list__count-btn basket-list__count-btn--plus">
                          +
                        </button>
                      </div>
                      <p class="basket-list__price" data-price="<?=$item['price']?>">
                        <span><?=$item['price']?></span> руб.
                      </p>
                    </div>
                  </div>
                </li>
                <?php endforeach; ?>
              </ul>
              <div class="basket-total">
                <ul class="basket-total__list">
                  <li class="basket-total__list-item">
                    <div class="basket-total__list-line">
                      <p class="basket-total__list-name">Заказ</p>
                      <!-- name end -->
                      <!-- price  -->
                      <p class="basket-total__list-price">
                        <span><?=$amount?></span> руб.
                      </p>
                      <!-- price end -->
                    </div>
                    <!-- line end -->
                    <!-- line  -->
                    <div class="basket-total__list-line">
                      <!-- name  -->
                      <p class="basket-total__list-name">Товаров</p>
                      <!-- name end -->
                      <!-- price  -->
                      <p class="basket-total__list-count">
                        <?php foreach ($count as $c) : ?>
                          <span><?=$c['count']?> </span>шт.
                        <?php endforeach; ?>
                      </p>
                      <!-- price end -->
                    </div>
                    <!-- line end -->
                  </li>
                  <!-- item end -->
                  <!-- item  -->
                  <li class="basket-total__list-item">
                    <!-- line  -->
                    <div class="basket-total__list-line">
                      <!-- name  -->
                      <p class="basket-total__list-name">Итого</p>
                      <!-- name end -->
                      <!-- price  -->
                      <p class="basket-total__list-total-price">
                        <span><?=$amount?></span> руб.
                      </p>
                      <!-- price end -->
                    </div>
                  </li>
                  <!-- item end -->
                </ul>
                <!-- agree end -->
              </div>
              <!-- basket total end -->
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form class="basket-data__wrap">
            <!-- list  -->
            <ul class="basket-data__list">
              <!-- item  -->
              <li class="basket-data__list-item">
                <!-- title -->
                <p class="basket-data__list-title">
                  Ваши контактные данные
                </p>
                <!-- title end -->
                <!-- field  -->
                <input type="text" name="" id="basket-name" class="basket-data__list-field basket-data__list-field--contact" placeholder="Имя" />
                <!-- field end -->
                <!-- field  -->
                <input type="text" name="" id="basket-phone" class="basket-data__list-field basket-data__list-field--contact" placeholder="+7 (999) 999 99 99" />
                <!-- field end -->
                <!-- field  -->
                <input type="text" name="" id="basket-email" class="basket-data__list-field basket-data__list-field--contact" placeholder="E-mail" />
                <!-- field end -->
              </li>
              <!-- item end -->
              <!-- item  -->
              <li class="basket-data__list-item basket-data__list-item--delivery">
                <!-- title -->
                <p class="basket-data__list-title">Доставка</p>
                <!-- title end -->
                <!-- field  -->
                <!-- wrpa  -->
                <div class="basket-data__list-field-wrap">
                  <input type="text" name="" id="" class="basket-data__list-field basket-data__list-field--delivery" placeholder="Адрес, улица и дом" />
                  <!-- field end -->
                  <!-- field  -->
                  <input type="text" name="" id="" class="basket-data__list-field basket-data__list-field--delivery" placeholder="Квартира/офис" />
                  <!-- field end -->
                </div>
                <!-- wrpa end -->
              </li>
              <!-- item end -->
              <!-- item  -->
              <li class="basket-data__list-item basket-data__list-item--date">
                <!-- title -->
                <p class="basket-data__list-title">Дата и время</p>
                <!-- title end -->
                <!-- field  -->
                <input type="date" name="" id="" class="basket-data__list-field basket-data__list-field--date" />
                <!-- field end -->
                <!-- time  -->
                <div class="basket-data__list-time">
                  <!-- label -->
                  <label for="" class="basket-data__list-label">
                    С:
                    <!-- field  -->
                    <input type="time" name="" id="" class="basket-data__list-field" placeholder="08:00" />
                    <!-- field end -->
                  </label>
                  <!-- label end -->
                  <!-- label -->
                  <label for="" class="basket-data__list-label">
                    До:
                    <!-- field  -->
                    <input type="time" name="" id="" class="basket-data__list-field" placeholder="18:00" />
                    <!-- field end -->
                  </label>
                  <!-- label end -->
                </div>
                <!-- time end -->
              </li>
              <!-- item end -->
              <!-- item  -->
              <li class="basket-data__list-item">
                <!-- title -->
                <p class="basket-data__list-title">Получатель</p>
                <!-- title end -->
                <!-- anon  -->
                <div class="basket-data__list-agree">
                  <!-- wrap  -->
                  <div class="basket-data__list-agree-btn box-basket-wrap">
                    <input type="checkbox" name="" id="" class="basket-data__list-agree-box box-basket" />
                  </div>
                  <!-- wrap end -->
                  <!-- text  -->
                  <p class="basket-data__list-agree-text">
                    Отправить анонимно
                  </p>
                  <!-- text end -->
                </div>
                <!-- anon end -->
                <!-- field  -->
                <input type="text" name="" id="basket-pol" class="basket-data__list-field basket-data__list-field--name-contact" placeholder="Имя получателя" />
                <!-- field end -->
                <!-- field  -->
                <input type="text" name="" id="basket-phone-pol" class="basket-data__list-field basket-data__list-field--phone-contact" placeholder="Телефон получателя" />
                <!-- field end -->
              </li>
              <!-- item end -->
              <!-- item  -->
              <li class="basket-data__list-item">
                <!-- title -->
                <p class="basket-data__list-title">Оплата</p>
                <!-- title end -->
                <!-- label  -->
                <label for="" class="basket-data__list-label basket-data__list-label--radio">
                  <input type="radio" class="basket-data__list-radio" name="" id="" />
                  Наличными при получении
                </label>
                <!-- label end -->
                <!-- label  -->
                <label for="" class="basket-data__list-label basket-data__list-label--radio">
                  <input type="radio" class="basket-data__list-radio" name="" id="" />
                  Наличными при получении
                </label>
                <!-- label end -->
                <input type="submit" value="Оформить заказ" class="basket-data__list-sub" />
              </li>
              <!-- item end -->
            </ul>
            <!-- list end -->
          </form>
        </div>
      </div>
    </div>
  </section>
</main>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/footer.php';