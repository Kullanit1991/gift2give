

    {{-- login style --}}
    <link rel="stylesheet" href="{{ asset('css/login/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/login/demo.css') }}" type="text/css">

    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>

    
    <div class="modal fade" id="homeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-title text-center">
              <h4>Login</h4>
            </div>
            <div class="d-flex flex-column text-center">
              <form>
                <div class="form-group">
                  <input type="email" class="form-control" id="email1"placeholder="Your email address...">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="password1" placeholder="Your password...">
                </div>
                <button type="button" class="btn btn-info btn-block btn-round">Login</button>
              </form>
              
              <div class="text-center text-muted delimiter">or use a social network</div>
              <div class="d-flex justify-content-center social-buttons">
                <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter">
                  <i class="fab fa-twitter"></i>
                </button>
                <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
                  <i class="fab fa-facebook"></i>
                </button>
                <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Linkedin">
                  <i class="fab fa-linkedin"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
          <div class="modal-footer d-flex justify-content-center">
            <div class="signup-section">Not a member yet? <a href="#a" class="text-info"> Sign Up</a>.</div>
          </div>
      </div>
    </div>




<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    
<script src="{{ asset('js/login/script.js') }}"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>  
<script src="https://unpkg.com/vue-material"></script>
<script src="https://unpkg.com/vuesax"></script> 

<script>
  Vue.use(VueMaterial.default) 
    new Vue({
      el: '#homeModal', 
       
        data() {
            return {
       
            }; 
        },
        async mounted() {
           console.log("dfdfdfd");
        }, 

        computed: {
            
        },
        methods: {
         
        }

       
    })
</script>