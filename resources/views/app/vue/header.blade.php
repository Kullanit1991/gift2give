<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
<script src="https://unpkg.com/vue-material"></script>
<script src="https://unpkg.com/vuesax"></script>

<script>
    Vue.use(VueMaterial.default)
    new Vue({
        el: '#header',

        data() {
            return {
                token: {
                  user: {
                    name: ''
                  }
                }
            };
        },
        async mounted() {
            this.token = localStorage.getItem('user');
            this.token = JSON.parse(this.token);
            // console.log(JSON.parse(this.token));
        },

        computed: {

        },
        methods: {
            async logout() {

                Swal.fire({
                    title: 'Are you logging out?',
                    text: "",
                    icon: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes'
                }).then((result) => {
                    if (result.isConfirmed) {
                       
                                localStorage.removeItem('user');
                                window.open(`/`,'_self')
                        
                    }
                })





            }
        }


    })

</script>
