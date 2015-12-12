<body>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <?php if(!strpos(current_url(), "index.php/create_post")){ ?> 
                    <a class="navbar-brand" href="index.html" style="color:black;">Back</a>
                <?php } ?>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <!-- if user is logged in, dont show login and register links -->
                    <!-- instead show name of user and logout button -->
                    <?php if(!$this->session->userdata('name')){ ?>
                        <li>
                            <a href="" data-toggle="modal" data-target="#login_modal">Login</a>
                        </li>
                        <li>
                            <a href="" data-toggle="modal" data-target="#register_modal">Register</a>
                        </li>
                    <?php }else{ ?>
                        <li>
                            <a href="#"><?php echo $this->session->userdata('name'); ?></a>
                        </li>
                        <li>
                            <a href="index.php/user_controller/logout" title="Log out"><i class="glyphicon glyphicon-off"></i></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Dont show page header when we create new post -->
    <?php if(!strpos(current_url(), "index.php/create_post")){ ?> 
        <header class="intro-header" style="background-image: url('<?php echo base_url();?>common/img/home-bg.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="site-heading">
                            <h1>Clean Blog</h1>
                            <hr class="small">
                            <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    <?php } ?>