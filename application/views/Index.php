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

    
    <?=$this->load->view('navbar',[],true)?>

    <main>
        <div class="container">
            <h1 class="display-3 mt-5 text-center text-white">Online Administration</h1>
            <h2 class="display-4 text-center text-white">SMK Negeri 1 Cijati</h2>
            <p class="display-5 mb-5 text-center text-white">responsible for managing school administration</p>
            <div class="bar text-center">
            <?php 
                $site="";
                if($this->session->userdata('type')=="guru"){
                    $site=site_url('guru');
                }
                else{
                    $site=site_url('kepsek');
                }
            ?>
            <?php if(!$this->session->userdata('Login')):?>
                <a href="<?=site_url('web/login')?>" style="border-radius:50px !important" class="btn btn-lg btn-primary rounded">Login</a>

            <?php else:?>
                <a href="<?=$site?>" style="border-radius:50px !important" class="btn btn-lg btn-primary rounded">Dashboard</a>

            <?php endif;?> 
            <a href="<?=site_url('web/about')?>" style="border-radius:50px !important" class="btn btn-lg btn-outline-light rounded">More</a>

            </div>
        </div>
    </main>
   
   
  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url('asset/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?=base_url('asset/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
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