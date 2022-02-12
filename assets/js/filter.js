filtersInit();
function filtersInit () {
  const filters = document.querySelectorAll('.box-list__box--checkbox'),
        filterWraps = document.querySelectorAll('.box-list__box-wrap');
  filters.forEach( (filter, i) => {
    filter.addEventListener('click', function () {
      if(filter.checked == true) {
        filterWraps[i].classList.add('box-list__box-wrap--checked')
      } else {
        filterWraps[i].classList.remove('box-list__box-wrap--checked')
      }
    })
  } )
}