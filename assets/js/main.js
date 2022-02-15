
modalRequest();
function modalRequest() {
  const buyBtn = document.querySelectorAll(".buy__btn"),
    modalWrap = document.querySelector(".modal__request-wrap"),
    modalForm = document.querySelector(".modal__request-form"),
    modalClose = document.querySelector(".modal__request-close"),
    headerMobile = document.querySelector('.header__mobile-req');
  headerMobile.addEventListener('click', function () {
    openModal();
  })
  modalClose.addEventListener("click", function () {
    closeModal();
  });
  function closeModal () {
    modalWrap.classList.remove("modal__request-wrap-active");
    modalForm.classList.remove("modal__request-form-active");
  }
  function openModal () {
    modalWrap.classList.add("modal__request-wrap-active");
    modalForm.classList.add("modal__request-form-active");
 
  }
  buyBtn.forEach((btn, i) => {
    btn.addEventListener("click", function () {
      openModal();
      
    });
  });

}
