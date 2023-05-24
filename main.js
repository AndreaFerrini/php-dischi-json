const { createApp } = Vue

    createApp({
        data() {
            return {
                apiUrl: "server.php",
                data: ""
            }
        },
        methods: {
            chiamataApi(){
                axios.get( this.apiUrl )
                    .then( (res) =>{
                        this.data = res.data
                    } )
            }
        },
        mounted() {
            this.chiamataApi();
        },
    }).mount("#app")