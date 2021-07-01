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

            <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
            <!-- <li class="nav-item active">
                <a class="nav-link" href="<?=site_url('/web/index')?>">Home <span class="sr-only">(current)</span></a>
            </li> -->
            <!-- <?php if(!$this->session->userdata('Login')):?>

            <li class="nav-item">
                <a class="nav-link" href="<?=site_url('/web/login')?>">Login</a>
            </li>
            <?php endif;?> -->

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