<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/header.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/data.php';
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
          <form action="" class="change-form">
            <div class="input-wrapper">
              <label for="program" class="label-program label-text">Редактирование товара</label>
              <div class="select-wrapper first">
                <select name="select-program" id="program" class="program-select">
                  <option selected value="0" class="program-select__item">
                    Выберите товар
                  </option>
                </select>
              </div>
            </div>
            <div class="input-wrapper">
              <label for="change" class="label-program label-text">Выберите что нужно изменить</label>
              <div class="select-wrapper second">
                <select name="select-change" id="change" class="select-change">
                  <option value="0" class="select-change__item">
                    Срок обучения
                  </option>
                </select>
              </div>
            </div>
            <div class="input-wrapper">
              <label for="text" class="label-program label-text">На что меняем</label>
              <input type="text" id="text" class="description-change" placeholder="Введите текст" />
            </div>
            <input type="submit" value="Поменять" class="change-submit" />
          </form>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="window-wrapper">
          <h2 class="delete-title">Удаление товара</h2>
          <form action="" class="form-delete">
            <div class="select-wrapper first">
              <select name="select-program" id="program" class="program-select">
                <option selected value="0" class="program-select__item">
                  Выберите товар
                </option>
              </select>
            </div>
            <input type="submit" value="Удалить" class="delete-submit" />
          </form>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="window-wrapper">
          <h2 class="add-title">Добавление товара</h2>
          <form action="" class="form-add">
            <div class="select-wrapper first">
              <input type="text" class="add-name" placeholder="Название товара" />
              <input type="text" placeholder="Цена товара" class="add-knowledge" />
              <!--                   <input
                    type="text"
                    placeholder="Чему вы научитесь"
                    class="add-learn"
                  />
                  <input
                    type="text"
                    placeholder="Описание"
                    class="add-description"
                  />
                  <input
                    type="text"
                    placeholder="Стоимость"
                    class="add-price"
                  /> -->
              <input type="submit" value="Добавить" class="add-submit" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
</body>

</html>