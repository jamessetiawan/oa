<body style="display:block;min-height:530px;
    background:url('<?=base_url('asset/img/bg.webp')?>');background-size:cover;background-position:top center;">
<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
        <a class="navbar-brand" href="<?=base_url()?>">
        <img src="<?=base_url('asset/img/logo.png')?>" style="width:150px">
        </a>
        <?php if($this->session->userdata('Login')):?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php endif;?> 

            <div class="collapse navbar-collapse text-center" id="navbarText">
            <div class="navbar-text text-right w-100">
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
            <a class="btn btn-sm btn-link d-sm-block d-lg-inline-block text-right" href="<?=$site?>"><i class="fas fa-square"></i> Dashboard -
            <?=ucfirst($this->session->userdata('type'))?>
            </a> 

            <a class="btn btn-sm btn-link d-sm-block d-lg-inline-block text-right" href="<?=site_url('guru/logout')?>"><i class="fas fa-square"></i> Logout</a>
            <?php endif;?>
            </div>
        
        </div>
    </nav>