<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/data.php';

if (!isset($_SESSION['User'])) {
  header('Location: /auth/');
}

$data = new Data();
$cart = $data->getCart($_SESSION['User']['Login']);
$count = $data->getCartCount($_SESSION['User']['Login']);
$amount = $data->getCartAmount($_SESSION['User']['Login']);


if (isset($_POST['orderSubmit'])) {
  $paymentMethod = 'Наличные';
  $isAnon = 'Нет';
  if ($_POST['card'] == 'on') {
    $paymentMethod = 'По карте';
  }

  if ($_POST['recipient'] == 'on') {
    $isAnon = 'Да';
  }

  $name = htmlspecialchars(trim($_POST['name']));
  $phone = htmlspecialchars(trim($_POST['phone']));
  $email = htmlspecialchars(trim($_POST['email']));
  $addr = htmlspecialchars(trim($_POST['address']));
  $flat = htmlspecialchars(trim($_POST['flat']));
  $date = htmlspecialchars(trim($_POST['date']));
  $startTime = htmlspecialchars(trim($_POST['startTime']));
  $endTime = htmlspecialchars(trim($_POST['endTime']));
  $recName = htmlspecialchars(trim($_POST['recName']));
  $recPhone = htmlspecialchars(trim($_POST['recPhone']));
  $userId = $data->getUserId($_SESSION['User']['Login']);

  $data->handleNewOrder(
    $name,
    $phone,
    $email,
    $addr,
    $flat,
    $date,
    $startTime,
    $endTime,
    $isAnon,
    $recName,
    $recPhone,
    $paymentMethod,
    $amount,
    $userId
  );

  $data->clearCart($userId);
  header('Location: /cart/');
}

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
                    <span data-boquet-id="<?=$item['boquet']?>"></span>
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
          <form class="basket-data__wrap" id="order-maker" method="POST">
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
                <input type="text" required name="name" id="basket-name" class="basket-data__list-field basket-data__list-field--contact" placeholder="Имя" />
                <!-- field end -->
                <!-- field  -->
                <input type="text" required name="phone" id="basket-phone" class="basket-data__list-field basket-data__list-field--contact" placeholder="+7 (999) 999 99 99" />
                <!-- field end -->
                <!-- field  -->
                <input type="text" required name="email" id="basket-email" class="basket-data__list-field basket-data__list-field--contact" placeholder="E-mail" />
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
                  <input type="text" required  name="address" id="address" class="basket-data__list-field basket-data__list-field--delivery" placeholder="Адрес, улица и дом" />
                  <!-- field end -->
                  <!-- field  -->
                  <input type="text" required name="flat" id="flat" class="basket-data__list-field basket-data__list-field--delivery" placeholder="Квартира/офис" />
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
                <input type="date" required name="date" id="date" class="basket-data__list-field basket-data__list-field--date" />
                <!-- field end -->
                <!-- time  -->
                <div class="basket-data__list-time">
                  <!-- label -->
                  <label for="" class="basket-data__list-label">
                    С:
                    <!-- field  -->
                    <input type="time" name="startTime" id="startTime" class="basket-data__list-field" placeholder="08:00" />
                    <!-- field end -->
                  </label>
                  <!-- label end -->
                  <!-- label -->
                  <label for="" class="basket-data__list-label">
                    До:
                    <!-- field  -->
                    <input type="time" name="endTime" id="endTime" class="basket-data__list-field" placeholder="18:00" />
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
                    <input type="checkbox" name="recipient" id="recipient" class="basket-data__list-agree-box box-basket" />
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
                <input type="text" name="recName" id="basket-pol" class="basket-data__list-field basket-data__list-field--name-contact" placeholder="Имя получателя" />
                <!-- field end -->
                <!-- field  -->
                <input type="text" name="recPhone" id="basket-phone-pol" class="basket-data__list-field basket-data__list-field--phone-contact" placeholder="Телефон получателя" />
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
                  <input type="radio" class="basket-data__list-radio" name="cash" id="cash" />
                  Наличными при получении
                </label>
                <!-- label end -->
                <!-- label  -->
                <label for="" class="basket-data__list-label basket-data__list-label--radio">
                  <input type="radio" class="basket-data__list-radio" name="card" id="card" />
                  Картой
                </label>
                <!-- label end -->
                <input type="submit" name="orderSubmit" value="Оформить заказ" class="basket-data__list-sub" />
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
<script src="../assets/js/jquery.maskedinput.min.js"></script>
<script src="../ajax/basket.js"></script>
<script src="/assets/js/basket.js"></script>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
