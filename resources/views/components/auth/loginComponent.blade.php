
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('assets/backend')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/backend')}}/css/toastify.min.css" rel="stylesheet" type="text/css">


    <!-- Custom styles for this template-->
    <link href="{{asset('assets/backend')}}/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="{{asset('assets/backend')}}/js/axios.min.js"></script>
    <script src="{{asset('assets/backend')}}/js/config.js"></script>
    <script src="{{asset('assets/backend')}}/js/toastify-js.js"></script>

</head>

<body class="bg-gradient-info">

    <div class="progress" style="height: 3px;">
        <div class="progress-bar bg-warning d-none" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
      </div>

    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <section class="user" id="login-form">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        {{-- <a href="index.html" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a> --}}
                                        <button class="btn btn-primary btn-user btn-block" onclick="userLogin()">LOGIN</button>
                                        <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                    </section>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{url('/jobpuls-forget-password')}}" target="_blank">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small fs-5" href="{{url('/jobpuls-registration')}}">Create an Account as a Candidate</a> <br>
                                        <a class="small fs-5" href="{{url('/jobpuls-registration-companies')}}">Create an Account as a Companies</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script>
      async  function userLogin(){
            let email      = document.getElementById("email").value;
            let password  = document.getElementById("password").value;

            if(email === ""){
                errorToast("Name field is required")
            }else if(password === ""){
                errorToast("password is required")
            }else if(password.length < 3){
                errorToast("password length must be 4 charater or more")
            }else{

                let postData = {
                email:email,
                password:password
            }
            let res = await axios.post("/user-login",postData)
            if(res.data["status"] === "success"){
                alert("login successfully")
                window.location.href="/dashboard"
            }
            //console.log(res.data);
            }




         
            
        }
        
    </script>













    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('assets/backend')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('assets/backend')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('assets/backend')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('assets/backend')}}/js/sb-admin-2.min.js"></script>
    

</body>

</html>