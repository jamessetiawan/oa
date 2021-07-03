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

    <main class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <h1 class="display-3 mt-5 text-center text-white"><strong>Online Administration</strong></h1>
            <h3 class="display-4 text-center text-white">SMK Negeri 1 Cijati</h3>
            <p class="mb-5 text-center text-white">responsible for managing school administration</p>
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
            <a href="#"  data-toggle="modal" data-target="#siteYoutube" style="border-radius:50px !important" class="btn btn-lg btn-outline-danger rounded">Youtube</a>

            <a href="#"  data-toggle="modal" data-target="#siteBootstrap" style="border-radius:50px !important" class="btn btn-lg btn-outline-light rounded">More</a>

            </div>
          </div>
        </div>
        
    </main>
   

 
<!-- Modal -->
<div class="modal fade" id="siteBootstrap" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Site Bootstrap SMKN 1 Cijati</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe src="https://smk-negeri-1-cijati.business.site/" frameborder="0" style="width:100%;min-height:600px"></iframe>
      </div>
     
    </div>
  </div>
</div>

 
<!-- Modal -->
<div class="modal fade" id="siteYoutube" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Youtube SMKN 1 Cijati</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <iframe width="100%" height="500px" src="https://www.youtube.com/embed/6ijbbQY6GHY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
     
    </div>
  </div>
</div>


   
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