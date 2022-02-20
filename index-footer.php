
<div class="modal__request-wrap">
  <form action="<?=$_SERVER['PHP_SELF']?>" method="post" id="orderCallForm" class="modal__request-form">
    <div class="modal__request-close">
      <span></span>
    </div>
    <p class="modal__request-title">
      Оставьте номер телефона, и мы перезвоним вам для уточнения заказа
    </p>
    <ul class="modal__request_list">
      <li class="modal__request_list-item">
        <input type="text" class="modal__request-input modal__request-text modal__request-name" placeholder="Ваше имя" />
      </li>
      <li class="modal__request_list-item">
        <input type="text" class="modal__request-input modal__request-text modal__request-phone" placeholder="Номер телефона" />
      </li>
      <li class="modal__request_list-item">
        <input type="submit" class="modal__request-input modal__request-sub" value="Жду звонка!" />
      </li>
    </ul>
  </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="/assets/js/slick.min.js"></script>
<script src="/assets/js/pagepilling.js"></script>
<script src="/assets/js/jquery.pagepiling.min.js"></script>
<script src="/assets/js/script-slick.js"></script>
<script src="/assets/js/main.js"></script>
<script src="/ajax/phoneOrder.js"></script>
</body>

</html>