var inputSearch = document.getElementById('input__search');
var results = document.getElementById('search__results');

inputSearch.addEventListener('click', () => {
   results.classList.toggle('search__results--activate');
});
