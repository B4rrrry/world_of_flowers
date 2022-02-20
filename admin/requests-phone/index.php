<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/data.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/header.php';


$data = new Data();
if (isset($_POST['select-sort-first']) && isset($_POST['select-sort-second'])) {
  $queries = $data->getPhoneQueries($_POST['select-sort-first'], $_POST['select-sort-second']);
} else {
  $queries = $data->getPhoneQueries();
}

?>
<style>
  .queries-data__item {display: flex; flex-direction: column; align-items: flex-start; margin-right: 25px;}
</style>
<section class="window">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="window-title">
          Администрирование / <span>Заявки на звонок</span>
        </h1>
        <div class="window-wrapper">
          <form action="<?=$_SERVER['PHP_SELF']?>" id="form-sort" class="form-sort" method="POST">
            <span class="form-sort-text">
              Режим сортировки
            </span>
            <div class="select-wrapper first">
              <select name="select-sort-first" id="select-first" class="select-sort select-sort__first">
                <option value="id" class="select-sort__item">
                  По номеру
                </option>
                <option value="clientName" class="select-sort__item">
                  Имени
                </option>
                <option value="date" class="select-sort__item">
                  Дате
                </option>
                <option value="status" class="select-sort__item">
                  Статусу
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
          <ul class="queries" style="list-style: none;">
            <?php foreach ($queries as $q) : ?>
              <li class="queries-item" style="margin-top: 12px;">
                <ul class="queries-data" style="display: flex; list-style: none;">
                  <li class="queries-data__item">
                    <h4 class="queries-data__header">Номер</h4>
                    <p class="queries-data__text queries-data__id"><?=$q['id']?></p>
                  </li>
                  <li class="queries-data__item">
                    <h4 class="queries-data__header">Имя</h4>
                    <p class="queries-data__text"><?=$q['clientName']?></p>
                  </li>
                  <li class="queries-data__item">
                    <h4 class="queries-data__header">Телефон</h4>
                    <p class="queries-data__text"><?=$q['clientPhone']?></p>
                  </li>
                  <li class="queries-data__item">
                    <h4 class="queries-data__header">Дата</h4>
                    <p class="queries-data__text"><?=$q['date']?></p>
                  </li>
                  <li class="queries-data__item">
                    <h4 class="queries-data__header">Статус</h4>
                    <p class="queries-data__text queries-data__status" data-queryID="<?=$q['id']?>"data-queryStatus="<?=$q['status']?>"><?=$q['status']?></p>
                  </li>
                </ul>
              </li>
            <?php endforeach;?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="/ajax/sortQueries.js"></script>
</body>

</html>