<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/data.php';

if (!isset($_SESSION['User'])) {
  header('Location: /auth/');
}

require $_SERVER['DOCUMENT_ROOT'] . '/header.php'; 

?>
<main>
  <section class="basket">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="basket__wrap">
            <!-- title  -->
            <h1 class="basket__title title">Корзина</h1>
            <!-- none  -->
            <p class="basket__none">
              Ваша корзина пуста. <br />
              Воспользуйтесь каталогом, чтобы добавить товары.
            </p>
            <!-- none end -->
            <!-- title end -->
            <div class="basket-info__wrap">
              <!-- products list  -->
              <ul class="basket-list">
                <!-- item  -->
                <li class="basket-list__item">
                  <!-- delete btn  -->
                  <div class="basket-list__delete-btn">
                    <span></span>
                  </div>
                  <!-- delete btn end -->
                  <!-- img  -->
                  <img src="assets/img/basket/1.png" alt="img" class="basket-list__img" />
                  <!-- img end -->
                  <!-- info  -->
                  <div class="basket-list__info">
                    <!-- name  -->
                    <p class="basket-list__name">Букет “Нежный”</p>
                    <!-- name end -->
                    <!-- count and price  -->
                    <div class="basket-list__info-bottom">
                      <!-- count  -->
                      <div class="basket-list__count-wrap">
                        <!-- btn  -->
                        <button class="basket-list__count-btn basket-list__count-btn--min">
                          -
                        </button>
                        <!-- btn end -->
                        <!-- count  -->
                        <p class="basket-list__count">1</p>
                        <!-- count end -->
                        <!-- btn  -->
                        <button class="basket-list__count-btn basket-list__count-btn--plus">
                          +
                        </button>
                        <!-- btn end -->
                      </div>
                      <!-- count end -->
                      <!-- price  -->
                      <p class="basket-list__price" data-price="2000">
                        <span>2000 </span>руб.
                      </p>
                      <!-- price end -->
                    </div>
                    <!-- count and price end -->
                  </div>
                  <!-- info end -->
                </li>
                <!-- item end -->
                <!-- item  -->
                <li class="basket-list__item">
                  <!-- delete btn  -->
                  <div class="basket-list__delete-btn">
                    <span></span>
                  </div>
                  <!-- delete btn end -->
                  <!-- img  -->
                  <img src="assets/img/basket/1.png" alt="img" class="basket-list__img" />
                  <!-- img end -->
                  <!-- info  -->
                  <div class="basket-list__info">
                    <!-- name  -->
                    <p class="basket-list__name">Букет “Нежный”</p>
                    <!-- name end -->
                    <!-- count and price  -->
                    <div class="basket-list__info-bottom">
                      <!-- count  -->
                      <div class="basket-list__count-wrap">
                        <!-- btn  -->
                        <button class="basket-list__count-btn basket-list__count-btn--min">
                          -
                        </button>
                        <!-- btn end -->
                        <!-- count  -->
                        <p class="basket-list__count">1</p>
                        <!-- count end -->
                        <!-- btn  -->
                        <button class="basket-list__count-btn basket-list__count-btn--plus">
                          +
                        </button>
                        <!-- btn end -->
                      </div>
                      <!-- count end -->
                      <!-- price  -->
                      <p class="basket-list__price" data-price="2000">
                        <span>2000 </span>руб.
                      </p>
                      <!-- price end -->
                    </div>
                    <!-- count and price end -->
                  </div>
                  <!-- info end -->
                </li>
                <!-- item end -->
              </ul>
              <!-- products list end -->
              <!-- basket total  -->
              <div class="basket-total">
                <!-- list  -->
                <ul class="basket-total__list">
                  <!-- item  -->
                  <li class="basket-total__list-item">
                    <!-- line  -->
                    <div class="basket-total__list-line">
                      <!-- name  -->
                      <p class="basket-total__list-name">Заказ</p>
                      <!-- name end -->
                      <!-- price  -->
                      <p class="basket-total__list-price">
                        <span>32000 </span>руб.
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
                        <span>11 </span>шт.
                      </p>
                      <!-- price end -->
                    </div>
                    <!-- line end -->
                    <!-- line  -->
                    <div class="basket-total__list-line">
                      <!-- name  -->
                      <p class="basket-total__list-name">Скидка</p>
                      <!-- name end -->
                      <!-- price  -->
                      <p class="basket-total__list-discount">
                        <span>0 </span>руб.
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
                        <span>32000 </span>руб.
                      </p>
                      <!-- price end -->
                    </div>
                    <!-- line end -->
                    <form action="" class="basket-total__list-form">
                      <!-- coupon  -->
                      <input type="text" name="" id="" class="basket-total__list-coupon" placeholder="Код купона" />
                      <!-- coupon end -->
                      <!-- sub  -->
                      <input type="submit" value="Применить" class="basket-total__list-sub" />
                      <!-- sub end -->
                    </form>
                  </li>
                  <!-- item end -->
                </ul>
                <!-- list end -->
                <!-- agree  -->
                <div class="basket-total__list-agree">
                  <!-- wrap  -->
                  <div class="basket-total__list-agree-btn box-basket-wrap">
                    <input type="checkbox" name="" id="" class="basket-total__list-agree-box box-basket" />
                  </div>
                  <!-- wrap end -->
                  <!-- text  -->
                  <p class="basket-total__list-agree-text">
                    согласен на обработку персональных данных
                  </p>
                  <!-- text end -->
                </div>
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
