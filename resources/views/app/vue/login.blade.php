<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
<script src="https://unpkg.com/vue-material"></script>
<script src="https://unpkg.com/vuesax"></script>

<script>
    Vue.use(VueMaterial.default)
    new Vue({
        el: '#myModal',

        data() {
            return {
                email: '',
                password: '',
            };
        },
        async mounted() {

        },

        computed: {

        },
        methods: {
            async submit() {
                // var form = {
                //     "email": this.email,
                //     "password": this.password,

                // };
                // let data = await axios.post('/api/auth/login', form)
                //     .then((r) => {
                //         console.log(r);
                //         Swal.fire({
                //             icon: 'success',
                //             title: 'Login Successfully',
                //             text: '',
                //         })
                //         localStorage.setItem('user', JSON.stringify(r.data));
                        
                //        window.open(`/`,'_self')
                //     }).catch((e) => {
                //         Swal.fire({
                //             icon: 'error',
                //             title: 'Oops...',
                //             text: 'Something went wrong!',
                //         })
                //     });
            }
        }


    })

</script>
