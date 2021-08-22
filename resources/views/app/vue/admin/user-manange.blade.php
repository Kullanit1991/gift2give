<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
<script src="https://unpkg.com/vue-material"></script>
<script src="https://unpkg.com/vuesax"></script>

<script>
    Vue.use(VueMaterial.default)
    new Vue({
        el: '#userVue',

        data() {
            return {
                
            };
        },
        async mounted() {

            // this.token = localStorage.getItem('user');
            // this.token = JSON.parse(this.token);
            // console.log(JSON.parse(this.token));
        },

        computed: {

        },
        methods: {
             editItem(id) {
                 console.log(id);
                window.location = "/setting-user/edit/"+id;
              
                // Swal.fire({
                //     title: 'Are you sure to remove the slide?',
                //     text: "",
                //     icon: 'warning',
                //     showCancelButton: true,
                //     confirmButtonColor: '#3085d6',
                //     cancelButtonColor: '#d33',
                //     confirmButtonText: 'Yes'
                // }).then((result) => {


             
                //     if (result.isConfirmed){
                //        window.location = "/admin/setting/home-screen/slides/remove/"+id;
                //     }
                   
                // })





            },
            viewItem(id){
                window.location = "/setting-user/view/"+id;
            }
        }


    })

</script>
