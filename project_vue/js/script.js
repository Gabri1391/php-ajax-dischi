Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data:{
        discs:[]
    },
    methods:{
        fetchDiscs(){
            axios.get('../project_php/api/index.php')
            .then(res => {
                this.discs = res.data
            })

        }
    },
    mounted(){
        this.fetchDiscs();
    }
})