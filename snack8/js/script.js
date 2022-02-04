const App = new Vue(
    {
      el: '#app',
      data: {
        products: [],
        textSearch: 'all',
      },
      created() {
        console.log(this.textSearch);
        axios.get('http://localhost/PHP/31_01_2022_cicli_array/php-snacks-blocco-1/snack8/server/controller.php?tipologia=' + this.textSearch) .then((result) => {
          this.products = result.data.results;
        }).catch((error) => { console.log(error); });
      },
  }
);