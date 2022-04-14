new Vue({
    el:'#app',
    data: {
        arrDischi: [],
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/api.php')
            .then(response => this.arrDischi = response.data)
    }
})