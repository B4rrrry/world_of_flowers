<?php
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
                  <!-- item  -->
                  <li class="favorites-list__item">
                    <!-- img  -->
                    <img src="/assets/img/fav/img.png" alt="img" class="favorites-list__img">
                    <!-- img end -->
                    <!-- info  -->
                    <div class="favorites-list__info">
                      <!-- header  -->
                      <div class="favorites-list__header">
                        <!-- name  -->
                        <p class="favorites-list__name">
                          Букет “Весна”
                        </p>
                        <!-- name end -->
                        <!-- price  -->
                        <p class="favorites-list__price">
                          3500 руб.
                        </p>
                        <!-- price end -->
                      </div>
                      <!-- header end -->
                      <!-- bottom  -->
                      <div class="favorites-list__bottom">
                        <!-- del  -->
                        <button class="favorites-list__del">
                          <img src="./assets/img/fav/del.svg" alt="el">
                          Удалить
                        </button>
                        <!-- del end -->
                        <!-- basket  -->
                        <button class="favorites-list__basket">
                          Добавить в корзину
                        </button>
                        <!-- basket end -->
                      </div>
                      <!-- bottom end -->
                    </div>
                    <!-- info end -->
                  </li>
                  <!-- item end -->
                </ul>
                <!-- list end -->
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
