<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>
<main>
  <section class="contacts">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="contacts__title title">
            Контакты
          </h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="contacts__wrap wrap">
            <ul class="contacts__list">
              <li class="contacts__list-item">
                <h2 class="contacts__list-title">Телефон:</h2>
                <p class="contacts__list-text"> +7 977 474-77-44</p>
              </li>
              <li class="contacts__list-item">
                <h2 class="contacts__list-title">Адрес:</h2>
                <p class="contacts__list-text">ул. Ленина 24</p>
              </li>
              <li class="contacts__list-item">
                <h2 class="contacts__list-title">Время работы:</h2>
                <p class="contacts__list-text">Ежедневно с 10:00 до 22:0</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A36d656b40e2c6dc8497d2a40a65b3f6fa800d15489b45c876c145db147370621&amp;source=constructor" width="100%" height="482" frameborder="0"></iframe>
    </div>
  </section>
</main>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
