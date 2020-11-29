<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
<script src="https://unpkg.com/vue-material"></script>
<script src="https://unpkg.com/vuesax"></script>

<script>
    Vue.use(VueMaterial.default)
    new Vue({
        el: '#myModal2',

        data() {
            return {
                form: {
                    'name': '',
                    'email': '',
                    'password': '',
                    'cPassword': ''
                }
            };
        },
        async mounted() {

        },

        computed: {

        },
        methods: {
            async register() {
             console.log('register');
                let data = await axios.post('/api/auth/register', this.form)
                    .then((r) => {
                        Swal.fire({
                            icon: 'success',
                            title: 'Register Successfully',
                            text: '',
                        })
                        window.open(`/`,'_self')
                
                    }).catch((e) => {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                        })
                    });
            }
        }


    })

</script>
