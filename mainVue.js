new Vue({
    el: "#vueContainer",
    data: {
      albumsList: [],
    },
  
    mounted() {
        axios.get("http://localhost/Lezione%2057/php-ajax-dischi/api/user.php").then(resp => {this.albums = resp.data});
    }
  
})