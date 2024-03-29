
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registration</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('assets/backend')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('assets/backend')}}/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="{{asset('assets/backend')}}/js/axios.min.js"></script>

</head>

<body class="bg-gradient-primary">

    <div class="progress d-none" style="height: 3px;">
        <div class="progress-bar bg-warning" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
    </div>


    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account! As Candidate</h1>
                            </div>
                            <section class="user" id="candidate-form-reset">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"id="cpassword" name="cpassword" placeholder="Repeat Password">
                                    </div>
                                </div>
                            
                                <button class="btn btn-primary btn-user btn-block" onclick="companyRegistration()">REGISTRATION</button>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </section>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{url('/jobpuls-forget-password')}}" target="_blank">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="{{url('/jobpuls-login')}}" target="_blank">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        
       async function companyRegistration(){
            let name = document.getElementById("name").value;
            let email = document.getElementById("email").value;
            let password = document.getElementById("password").value;
            let cpassword = document.getElementById("cpassword").value;

            let postData = {
                name:name,
                email:email,
                password:password
            }
            if(name === ""){
                errorToast("Name field is required")
            }else if(email === ""){
                errorToast("Email field is required")
            }else if(password === ""){
                errorToast("password is required")
            }else if(password.length < 3){
                errorToast("password length must be 4 charater or more")
            }else if(password != cpassword){
                errorToast("password and conirm password does not match")
            }else{


            let res = await axios.post("/user-registration-candidate",postData)
            console.log(res.data["status"])
            if(res.data["status"] === "success"){
                alert(res.data["message"]);
                //window.loaction.href = "/jobpuls-login"
                window.location.href="/jobpuls-login"
            }
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