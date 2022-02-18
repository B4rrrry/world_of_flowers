<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/header.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/data.php';

$data = new Data();
if (isset($_POST['select-sort-first']) && isset($_POST['select-sort-second'])) {
  $orders = $data->getOrders($_POST['select-sort-first'], $_POST['select-sort-second']);
} else {
  $orders = $data->getOrders();
}

?>
<section class="window">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="window-title">
          Администрирование / <span>Заявки</span>
        </h1>
        <div class="window-wrapper">
          <form action="<?= $_SERVER['PHP_SELF'] ?>" class="form-sort" method="POST">
            <span class="form-sort-text">
              Режим сортировки
            </span>
            <div class="select-wrapper first">
              <select name="select-sort-first" id="select-first" class="select-sort select-sort__first">
                <option value="id" class="select-sort__item">
                  По номеру
                </option>
                <option value="name" class="select-sort__item">
                  По имени
                </option>
                <option value="email" class="select-sort__item">
                  По email
                </option>
                <option value="address" class="select-sort__item">
                  По адресу
                </option>
                <option value="date" class="select-sort__item">
                  По дате
                </option>
                <option value="payment" class="select-sort__item">
                  По способу оплаты
                </option>
              </select>
            </div>
            <div class="select-wrapper second">
              <select name="select-sort-second" id="select-sort-second" class="select-sort select-sort__second">
                <option value="desc" class="select-sort__item">
                  По убыванию
                </option>
                <option value="asc" class="select-sort__item">
                  По возрастанию
                </option>
              </select>
            </div>
            <input type="submit" value="Показать" class="form-sort-submit form-sort-submit__first">
          </form>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="requests-wrapper">
          <?php foreach ($orders as $order) : ?>
            <div class="request-item">
              <table>
                <tr>
                  <td>
                    Номер
                  </td>
                  <td>
                    Имя
                  </td>
                  <td>
                    Телефон
                  </td>
                  <td>
                    Email
                  </td>
                  <td>
                    Адрес
                  </td>
                  <td>
                    Квартира/дом
                  </td>
                  <td>
                    Дата
                  </td>
                  <td>
                    Время с
                  </td>
                  <td>
                    Время до
                  </td>
                  <td>
                    Анонимно
                  </td>
                  <td>
                    Имя получателя
                  </td>
                  <td>
                    Телефон получателя
                  </td>
                  <td>
                    Способ оплаты
                  </td>
                  <td>
                    Сумма
                  </td>
                  <td>
                    Имя заказчика
                  </td>
                </tr>
                <tr>
                  <td>
                    <?= $order['id'] ?>
                  </td>
                  <td>
                    <?= $order['name'] ?>
                  </td>
                  <td>
                    <?= $order['phone'] ?>
                  </td>
                  <td>
                    <?= $order['email'] ?>
                  </td>
                  <td>
                    <?= $order['address'] ?>
                  </td>
                  <td>
                    <?= $order['flat'] ?>
                  </td>
                  <td>
                    <?= $order['date'] ?>
                  </td>
                  <td>
                    <?= $order['startTime'] ?>
                  </td>
                  <td>
                    <?= $order['endTime'] ?>
                  </td>
                  <td>
                    <?= $order['isAnonym'] ?>
                  </td>
                  <td>
                    <?= $order['recName'] ?>
                  </td>
                  <td>
                    <?= $order['recPhone'] ?>
                  </td>
                  <td>
                    <?= $order['payment'] ?>
                  </td>
                  <td>
                    <?= $order['amount'] ?>
                  </td>
                  <td>
                    <?= $order['userName'] ?>
                  </td>
                </tr>
              </table>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
</body>

</html>