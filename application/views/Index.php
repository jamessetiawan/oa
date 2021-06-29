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
    <a class="navbar-brand" href="#"><img src="<?=base_url('asset/img/logo.png')?>" style="width:50px"></a>
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
    <main role="main">
        <div class="jumbotron text-dark mt-0 mb-0">
            <div class="row container">
           <div class="col-12 col-lg-8">
           <h1 class="display-5">Online Administration</h1>
           <p>Aplikasi administrasi berbasis online untuk guru di smkn 1 cijati</p>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt illum hic necessitatibus maiores commodi doloribus consequuntur recusandae nam fugiat quas nihil quia, nisi laborum accusantium temporibus eius dicta ea iure.
           Veniam unde placeat exercitationem sit laborum illo similique cumque corrupti qui rem, nisi laudantium asperiores fuga, distinctio iste expedita consequatur amet, minima delectus dolorem ex saepe. Delectus consequatur amet illo.</p>
           </div>

            <div class="col-4 d-block d-sm-none d-md-block d-lg-block">
            <img src="http://localhost/oa_future/asset/img/undraw_data_processing_yrrv.svg" class="w-100">
            </div>
            </div>
            
        </div>
    
    <div id="myCarousel" class="carousel slide m-0" data-ride="carousel">
    
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <p class="bg-primary text-white p-2 d-block">
        Info: 
    </p>
    <div class="carousel-inner" style="margin-top:-20px">
    
        <div class="carousel-item active">
        <img class="w-100" style="height:300px" src="https://via.placeholder.com/1300x380/eaecf4/0095f6/?text=Info%20SMK%20Negeri%201%20Cijati%201300x380" class="bg-placeholder-img">
        
        </div>
        <div class="carousel-item">
        <img class="w-100" style="height:300px" src="https://via.placeholder.com/1300x380/eaecf4/0055f6/?text=Info%20SMK%20Negeri%201%20Cijati%201300x380" class="bg-placeholder-img">
        
        </div>
        <div class="carousel-item">
        <img class="w-100" style="height:300px" src="https://via.placeholder.com/1300x380/eaecf4/0005f6/?text=Info%20SMK%20Negeri%201%20Cijati%201300x380" class="bg-placeholder-img">

        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>



<!-- FOOTER -->
<footer class="container-fluid bg-primary text-white">
  <p class="p-2">&copy; 2018-2021 SMKN 1 Cijati</p>
</footer>
</main>


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
<script>
$('.carousel').carousel({
  interval: 2000
});

</script>
</body>

</html>