<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/data.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/header.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/loader.php';

$db = Db::getInstance();
$prodNames = $db->query('SELECT `name` FROM `boquets`');
$orders = $db->query('SELECT `id` FROM `orders`');

if (isset($_POST['changer-submit'])) {
  $setter = $_POST['property'];
  $db->query(
    "UPDATE `boquets` SET $setter = :value WHERE `name` = :name",
    [
      'value' => $_POST['changer-value'],
      'name' => $_POST['product']
    ]
  );

  header('Location: ' . $_SERVER['REQUEST_URI']);
}

if (isset($_POST['order-del'])) {
  $db->query(
    'DELETE FROM `orders` WHERE `id` = :id',
    [
      'id' => $_POST['delOrder']
    ]
  );
  header('Location: ' . $_SERVER['REQUEST_URI']);
}

if (isset($_POST['add-submit'])) {
  $bName = htmlspecialchars(trim($_POST['bName']));
  $bPrice = htmlspecialchars(trim($_POST['bPrice']));
  $bPhoto = $_FILES['photo']['name'];

  $db->query(
    'INSERT INTO `boquets`(`name`,`price`,`photo`) VALUES (:name, :price, :photo)',
    [
      'name' => $bName,
      'price' => $bPrice,
      'photo' => $bPhoto
    ]
  );

  Loader::UploadFile($_SERVER['DOCUMENT_ROOT'] . '/assets/img/products/', 'add-submit', 'photo');
  header('Location: ' . $_SERVER['REQUEST_URI']);
}

?>
<section class="window">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="window-title">
          Администрирование / <span>Редактирование</span>
        </h1>
        <div class="window-wrapper">
          <h2 class="window-wrapper-title">Изменения данных о товаре</h2>
          <form action="<?= $_SERVER['PHP_SELF'] ?>" class="change-form" method="POST">
            <div class="input-wrapper">
              <label for="program" class="label-program label-text">Редактирование товара</label>
              <div class="select-wrapper first">
                <select name="product" id="program" class="program-select">
                  <?php foreach ($prodNames as $prodName) : ?>
                    <option value="<?= $prodName['name'] ?>" class="program-select__item">
                      <?= $prodName['name'] ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="input-wrapper">
              <label for="change" class="label-program label-text">Выберите что нужно изменить</label>
              <div class="select-wrapper second">
                <select name="property" id="change" class="select-change">
                  <option value="name" class="select-change__item">
                    Название
                  </option>
                  <option value="price" class="select-change__item">
                    Стоимость
                  </option>
                </select>
              </div>
            </div>
            <div class="input-wrapper">
              <label for="text" class="label-program label-text">На что меняем</label>
              <input type="text" name="changer-value" id="text" class="description-change" placeholder="Введите текст" />
            </div>
            <input type="submit" name="changer-submit" value="Поменять" class="change-submit" />
          </form>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="window-wrapper">
          <h2 class="delete-title">Удаление заказа</h2>
          <form action="<?= $_SERVER['PHP_SELF'] ?>" class="form-delete" method="POST">
            <div class="select-wrapper first">
              <select name="delOrder" id="program" class="program-select">
                <?php foreach ($orders as $order) : ?>
                  <option value="<?= $order['id'] ?>" class="program-select__item">
                    <?= $order['id'] ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>
            <input type="submit" name="order-del" value="Удалить" class="delete-submit" />
          </form>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="window-wrapper">
          <h2 class="add-title">Добавление товара</h2>
          <form action="<?=$_SERVER['PHP_SELF']?>" enctype="multipart/form-data" class="form-add" method="POST">
            <div class="select-wrapper first">
              <input type="text" name="bName" class="add-name" placeholder="Название товара" />
              <input type="text" name="bPrice" placeholder="Цена товара" class="add-knowledge" />
              <label for="photo">Фото</label>
              <input type="file" name="photo" id="photo">
              <input type="submit" name="add-submit" value="Добавить" class="add-submit" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
</body>

</html>