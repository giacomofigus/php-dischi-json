const { createApp } = Vue 

createApp({
    data(){
        return{
            apiUrl: 'dischiSpotify.php',
            arrayDischi : ''
        }
    },
    mounted(){
        this.getDischi()
    },
    methods:{
        getDischi(){
            axios.get(this.apiUrl).then((response) =>{
                this.arrayDischi = response.data
            })
        }
    }
}).mount('#app')