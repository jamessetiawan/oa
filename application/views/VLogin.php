<!DOCTYPE html>
<html lang="en">

<head>

  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Administration</title>

    <!-- Custom fonts for this template-->
    <link href="<?=base_url('asset/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7cPlayfair+Display:400i" rel="stylesheet">


    <!-- Custom styles for this template-->
    <link href="<?=base_url('asset/css/sb-admin-2.css')?>" rel="stylesheet">

</head>

<body>
    <?=$this->load->view('navbar',[],true)?>
    <div class="container-fluid">
    

    <!-- Outer Row -->
    <div class="row justify-content-center m-0" style="min-height:550px;">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 my-5" style="background:none !important;color:white">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image" style="font-size:50pt"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-white mb-4">Online Administration Login</h1>
                                </div>
                                <form class="user" action="" method="post">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control form-control-user" placeholder="Enter NIK/Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user" placeholder="Password" required>
                                    </div>
                                    
                                    <button type="submit" name="btn_login" class="btn btn-primary btn-user btn-block">
                                        Login
                                        </button>
                                    
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


 
    </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url('asset/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?=base_url('asset/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?=base_url('asset/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url('asset/js/sb-admin-2.js')?>"></script>

</body>

</html>