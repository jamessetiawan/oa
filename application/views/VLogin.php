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
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url('asset/css/sb-admin-2.css')?>" rel="stylesheet">

</head>

<body class="bg-light">

    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">
    <img src="<?=base_url('asset/img/logo.png')?>" style="width:50px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="<?=site_url('/web/index')?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <?php if(!$this->session->userdata('Login')):?>

        <li class="nav-item">
            <a class="nav-link" href="<?=site_url('/web/login')?>">Login</a>
        </li>
        <?php endif;?>

        </ul>
        <span class="navbar-text">
        <?php 
            $site="";
            if($this->session->userdata('type')=="guru"){
                $site=site_url('guru');
            }
            else{
                $site=site_url('kepsek');
            }
        ?>
        <?php if($this->session->userdata('Login')):?>
        <a href="<?=$site?>">Dashboard -
        <?=ucfirst($this->session->userdata('type'))?>
        </a> |

        <a href="<?=site_url('guru/logout')?>">Logout</a>
        <?php endif;?>
    </span>
       
    </div>
    </nav>

    <!-- Outer Row -->
    <div class="row justify-content-center m-0" style="min-height:550px;">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 my-5">
                <div class="card-body bg-light p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image" style="font-size:50pt"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Online Administration Login</h1>
                                </div>
                                <form class="user" action="" method="post">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control form-control-user" placeholder="Enter NIK">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
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


        <!-- FOOTER -->
    <footer class="container-fluid bg-primary text-white">
    <p class="p-2">&copy; 2018-2021 SMKN 1 Cijati</p>
    </footer>
    </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url('asset/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?=base_url('asset/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <script src="https://getbootstrap.com/docs/4.6/assets/js/docs.min.js"></script>                                  
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?=base_url('asset/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url('asset/js/sb-admin-2.js')?>"></script>

</body>

</html>