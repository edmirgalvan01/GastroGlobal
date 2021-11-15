var inputSearch = document.getElementById('input__search');
var results = document.getElementById('search__results');

inputSearch.addEventListener('click', () => {
   if (results.classList.contains('search__results--default')) {
      results.classList.remove('search__results--default');
      results.classList.add('search__results--activate');
   } else {
      results.classList.add('search__results--default');
   }
});
