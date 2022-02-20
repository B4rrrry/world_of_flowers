<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/data.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/header.php';

$db = Db::getInstance();
$letters = $db->query('SELECT * FROM newsletter');

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
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="requests-wrapper">
          <ul class="queries" style="list-style: none;">
            <?php foreach ($letters as $l) : ?>
              <li class="queries-item" style="margin-top: 12px;">
                <ul class="queries-data" style="display: flex; list-style: none;">
                  <li class="queries-data__item">
                    <h4 class="queries-data__header">Номер</h4>
                    <p class="queries-data__text queries-data__id"><?=$l['id']?></p>
                  </li>
                  <li class="queries-data__item">
                    <h4 class="queries-data__header">Имя</h4>
                    <p class="queries-data__text"><?=$l['client_name']?></p>
                  </li>
                  <li class="queries-data__item">
                    <h4 class="queries-data__header">Телефон</h4>
                    <p class="queries-data__text"><?=$l['email']?></p>
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