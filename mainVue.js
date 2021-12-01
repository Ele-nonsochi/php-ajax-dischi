new Vue({
    el: "#app",
    data: {
      albumsList: [],
    },
  
    mounted() {
        axios.get("http://localhost/Lezione%2057/php-ajax-dischi/api/user.php").then(resp => { this.albumsList = resp.data });
        console.log(this.albumsList)
    }
  
})