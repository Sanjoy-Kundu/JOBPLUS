
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reset Password</title>

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

    <div class="progress d-none" id="loader" style="height: 3px;">
        <div class="progress-bar bg-warning" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
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
                                        <h1 class="h4 text-gray-900 mb-2">Reset Your Password</h1>
                                    </div>
                                    <section class="user" id="reset-password-form">
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your New Password">
                                        </div>
                                        <button onclick="resetPassword()" class="btn btn-primary btn-user btn-block">
                                           RESET
                                        </button>
                                    </section>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>



    <script>
        async function resetPassword(){
            try{
                let password = document.getElementById("password").value;

                    if(password === ""){
                        errorToast("Password Field is required");
                    }

                    let postData = {
                        password:password
                    }

                    showLoader()
                    let res = await axios.post("/forget-reset-password-otp",postData,HeaderToken())
                    hideLoader()

                    if(res.data["status"] === "success"){
                        successToast(res.data["message"])
                        window.location.href="/dashboard"
                    }
            }catch(e){
                console.log(e)
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