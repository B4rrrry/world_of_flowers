<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/data.php';
$data = new Data();
$products = $data->getProducts();
$flowers = $data->getFlowers();
require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
var_dump($_POST);
?>
<main>
  <section class="products">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="products__title title">Наши букеты</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="products__wrap wrap">
            <!-- filters  -->
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post" class="products__filter filter">
              <!-- list  -->
              <ul class="filter-list">
                <!-- item  -->
                <li class="filter-list__item">
                  <!-- title  -->
                  <p class="filter-list__title">Цена</p>
                  <!-- title end -->
                  <div class="polzunok-container-5">
                    <div class="polzunok-labels__wrap">
                      <label class="polzunok-label" for="">
                        от:
                        <input type="text" name="startPrice" class="polzunok-input-5-left" />
                      </label>
                      <label class="polzunok-label" for="">
                        до:
                        <input type="text" name="endPrice" class="polzunok-input-5-right" /></label>
                    </div>
                    <div class="polzunok-5"></div>
                  </div>
                </li>
                <!-- item end  -->
                <!-- item  -->
                <li class="filter-list__item">
                  <!-- title  -->
                  <p class="filter-list__title">Длина букета</p>
                  <!-- title end -->
                  <!-- checkbox list  -->
                  <ul class="filter-list__box-list box-list">
                    <!-- item  -->
                    <li class="box-list__item box-list__item--w">
                      <!-- wrap  -->
                      <div class="box-list__box-wrap">
                        <input type="checkbox" data-checkbox-lenght-value="30см" class="box-list__box box-list__box--checkbox" />
                      </div>
                      <!-- wrap end  -->
                      <!-- label -->
                      <label for="" class="box-list__label">30 см</label>
                      <!-- label end -->
                    </li>
                    <!-- item end  -->
                    <!-- item  -->
                    <li class="box-list__item box-list__item--w">
                      <!-- wrap  -->
                      <div class="box-list__box-wrap">
                        <input type="checkbox" data-checkbox-lenght-value="35см" class="box-list__box box-list__box--checkbox" />
                      </div>
                      <!-- wrap end  -->
                      <!-- label -->
                      <label for="" class="box-list__label">35 см</label>
                      <!-- label end -->
                    </li>
                    <!-- item end  -->
                    <!-- item  -->
                    <li class="box-list__item box-list__item--w">
                      <!-- wrap  -->
                      <div class="box-list__box-wrap">
                        <input type="checkbox" data-checkbox-lenght-value="40см" class="box-list__box box-list__box--checkbox" />
                      </div>
                      <!-- wrap end  -->
                      <!-- label -->
                      <label for="" class="box-list__label">40 см</label>
                      <!-- label end -->
                    </li>
                    <!-- item end  -->
                    <!-- item  -->
                    <li class="box-list__item box-list__item--w">
                      <!-- wrap  -->
                      <div class="box-list__box-wrap">
                        <input type="checkbox" data-checkbox-lenght-value="45см" class="box-list__box box-list__box--checkbox" />
                      </div>
                      <!-- wrap end  -->
                      <!-- label -->
                      <label for="" class="box-list__label">45 см</label>
                      <!-- label end -->
                    </li>
                    <!-- item end  -->
                    <!-- item  -->
                    <li class="box-list__item box-list__item--w">
                      <!-- wrap  -->
                      <div class="box-list__box-wrap">
                        <input type="checkbox" data-checkbox-lenght-value="50см" class="box-list__box box-list__box--checkbox" />
                      </div>
                      <!-- wrap end  -->
                      <!-- label -->
                      <label for="" class="box-list__label">50 см</label>
                      <!-- label end -->
                    </li>
                    <!-- item end  -->
                    <!-- item  -->
                    <li class="box-list__item box-list__item--w">
                      <!-- wrap  -->
                      <div class="box-list__box-wrap">
                        <input type="checkbox" data-checkbox-lenght-value="60см" class="box-list__box box-list__box--checkbox" />
                      </div>
                      <!-- wrap end  -->
                      <!-- label -->
                      <label for="" class="box-list__label">60 см</label>
                      <!-- label end -->
                    </li>
                    <!-- item end  -->
                  </ul>
                  <!-- checkbox list end -->
                </li>
                <!-- item end  -->
                <li class="filter-list__item">
                  <!-- title  -->
                  <p class="filter-list__title">Кому</p>
                  <!-- title end -->
                  <!-- checkbox list  -->
                  <ul class="filter-list__box-list box-list">
                    <!-- item  -->
                    <li class="box-list__item box-list__item--to">
                      <!-- wrap  -->
                      <div class="box-list__box-wrap">
                        <input type="checkbox" data-checkbox-for-who="Маме" name="" id="" class="box-list__box box-list__box--checkbox" />
                      </div>
                      <!-- wrap end  -->
                      <!-- label -->
                      <label for="" class="box-list__label">Маме</label>
                      <!-- label end -->
                    </li>
                    <!-- item end  -->
                    <!-- item  -->
                    <li class="box-list__item box-list__item--to">
                      <!-- wrap  -->
                      <div class="box-list__box-wrap">
                        <input type="checkbox" data-checkbox-for-who="Сестре" class="box-list__box box-list__box--checkbox" />
                      </div>
                      <!-- wrap end  -->
                      <!-- label -->
                      <label for="" class="box-list__label">Сестре</label>
                      <!-- label end -->
                    </li>
                    <!-- item end  -->
                    <!-- item  -->
                    <li class="box-list__item box-list__item--to">
                      <!-- wrap  -->
                      <div class="box-list__box-wrap">
                        <input type="checkbox" data-checkbox-for-who="Бабушке" class="box-list__box box-list__box--checkbox" />
                      </div>
                      <!-- wrap end  -->
                      <!-- label -->
                      <label for="" class="box-list__label">Бабушке</label>
                      <!-- label end -->
                    </li>
                    <!-- item end  -->
                    <!-- item  -->
                    <li class="box-list__item box-list__item--to">
                      <!-- wrap  -->
                      <div class="box-list__box-wrap">
                        <input type="checkbox" data-checkbox-for-who="Коллеге" class="box-list__box box-list__box--checkbox" />
                      </div>
                      <!-- wrap end  -->
                      <!-- label -->
                      <label for="" class="box-list__label">Коллеге</label>
                      <!-- label end -->
                    </li>
                    <!-- item end  -->
                    <!-- item  -->
                    <li class="box-list__item box-list__item--to">
                      <!-- wrap  -->
                      <div class="box-list__box-wrap">
                        <input type="checkbox" data-checkbox-for-who="Девушке" class="  idinahui box-list__box box-list__box--checkbox" />
                      </div>
                      <!-- wrap end  -->
                      <!-- label -->
                      <label for="" class="box-list__label">Девушке</label>
                      <!-- label end -->
                    </li>
                    <!-- item end  -->
                    <!-- item  -->
                    <li class="box-list__item box-list__item--to">
                      <!-- wrap  -->
                      <div class="box-list__box-wrap">
                        <input type="checkbox" data-checkbox-for-who="Ребенку" class="box-list__box box-list__box--checkbox" />
                      </div>
                      <!-- wrap end  -->
                      <!-- label -->
                      <label for="" class="box-list__label">Ребенку</label>
                      <!-- label end -->
                    </li>
                    <!-- item end  -->
                  </ul>
                </li>
                <li class="filter-list__item">
                  <p class="filter-list__title">Цветы в составе</p>
                  <ul class="filter-list__box-list box-list">
                    <?php foreach ($flowers as $flower) : ?>
                    <li class="box-list__item box-list__item--comp">
                      <div class="box-list__box-wrap">
                        <input type="checkbox" data-flower-in="<?=$flower['name']?>" class="checkbox-flower box-list__box box-list__box--checkbox" />
                      </div>
                      <label for="" class="box-list__label"><?=$flower['name']?></label>
                    </li>
                    <?php endforeach; ?>
                  </ul>
                </li>
              </ul>
              <input type="submit" value="Найти" class="filter__sub" />
            </form>
            <ul class="products__list">
              <?php foreach ($products as $product) : ?>
                <li class="products__list-item product__item-cont">
                  <a href="/catalog/product/?item=<?= $product['id'] ?>" class="products__link">
                    <img src="/assets/img/products/<?= $product['photo'] ?>" alt="<?= $product['name'] ?>" class="products__list-img" />
                    <p class="products__list-name"><?= $product['name'] ?></p>
                  </a>
                  <p class="products__list-price"><?= $product['price'] ?></p>
                    <button class="buy__favorites" data-fav-prod-id="<?= $product['id'] ?>">
                      <img src="/assets/img/other/heart.svg" alt="heart" class="buy__favorites-img" />
                    </button>
                    <div class="buy__wrap">
                      <a href="/catalog/product/?item=<?= $product['id'] ?>" class="buy__basket">Подробнее</a>
                    </div>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="pagination__wrap">
            <!-- list  -->
            <ul class="pagination-list">
              <!-- item  -->
              <li class="pagination-list__item">
                <!-- link  -->
                <a href="#" class="pagination-list__link pagination-list__link--active">1</a>
                <!-- link end -->
              </li>
              <!-- item end  -->
              <!-- item  -->
              <li class="pagination-list__item">
                <!-- link  -->
                <a href="#" class="pagination-list__link">2</a>
                <!-- link end -->
              </li>
              <!-- item end  -->
              <!-- item  -->
              <li class="pagination-list__item">
                <!-- link  -->
                <a href="#" class="pagination-list__link">3</a>
                <!-- link end -->
              </li>
              <!-- item end  -->
              <!-- item  -->
              <li class="pagination-list__item">
                <!-- link  -->
                <a href="#" class="pagination-list__link">4</a>
                <!-- link end -->
              </li>
              <!-- item end  -->
              <!-- item  -->
              <li class="pagination-list__item">
                <!-- link  -->
                <a href="#" class="pagination-list__link pagination-list__link--arrow">Следующая страница
                  <img src="assets/img/products/arrow.svg" alt=">" class="pagination-list__link-img" />
                </a>
                <!-- link end -->
              </li>
              <!-- item end  -->
            </ul>
            <!-- list end -->
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<script src="/assets/js/filter.js"></script>
<script src="/ajax/favoriteSender.js"></script>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php';