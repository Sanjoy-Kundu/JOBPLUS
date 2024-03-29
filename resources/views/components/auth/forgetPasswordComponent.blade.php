
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Forgot Password</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('assets/backend')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('assets/backend')}}/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="{{asset('assets/backend')}}/js/axios.min.js"></script>
    <script src="{{asset('assets/backend')}}/js/config.js"></script>
    <script src="{{asset('assets/backend')}}/js/toastify-js.js"></script>

</head>

<body class="bg-gradient-primary">

    <div class="progress" style="height: 3px;">
        <div class="progress-bar bg-warning d-none" id="loader" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
      </div>

    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                        <p class="mb-4">We get it, stuff happens. Just enter your email address below
                                            and we'll send you a link to reset your password!</p>
                                    </div>
                                    <section class="user" id="reset-from-section">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Your Email">
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block" onclick="sendOtp()">
                                            Next
                                        </button>
                                    </section>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" target="_blank" href="{{url("/jobpuls-login")}}">Already have an account? Login!</a>
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
        async function  sendOtp() {
            let email = document.getElementById("email").value 
            let postBody = {
                email:email
            }

           showLoader()
           let res = await axios.post("/sendOtp",postBody)
           hideLoader()

           if(res.data["status"] === "success"){
            successToast(res.data["message"]);
            sessionStorage.setItem("email",document.getElementById('email').value ); // session stroage email set
            window.location.href="/jobplus-otp-page"
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