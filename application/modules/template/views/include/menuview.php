<nav class="navbar navbar-default" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a href="./" class="navbar-brand ">
                <span class="my_websitetitle">
                    <strong>Dorothy </strong> 
                    <span class="handwriting"> Search Engine</span><br />
                    <small >Cameroon Universities & Libraries Search Engine </small>
                </span>
            </a>

        </div>



        <div class="collapse navbar-collapse">

            <ul class="nav navbar-nav navbar-right visible-xs">
                <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
                <?php 
                if(!$this->ion_auth->logged_in()){ 
                ?>
                <li><a href="<?php echo base_url(); ?>login">Login</a></li>
                <?php
                }
                ?>
                <?php 
                if(!$this->ion_auth->logged_in()){ 
                ?>
                <li><a href="<?php echo base_url(); ?>register">Register</a></li>
                <?php
                }
                ?>
                <?php 
                if($this->ion_auth->logged_in()){ 
                ?>
                <a href="account_dashboard.html">My account</a>
                <?php
                }
                ?>
                <!-- <li><a href="listings.html">Listings</a></li>
                <li><a href="account_dashboard.html">My account</a></li>
                <li><a href="account_ad_create.gif">Post an ad</a></li> -->
            </ul> 
            <div class="nav navbar-nav navbar-right hidden-xs">
                <div class="row">

                    <div class="pull-right">
                        <a href="<?php echo base_url(); ?>" class="">Home</a> |
                        <?php 
                        if(!$this->ion_auth->logged_in()){ 
                        ?>
                        <a data-toggle="modal" data-target="#modalLogin"  href="#">Login</a> | 
                        <?php
                        }
                        ?>
                        <?php 
                        if(!$this->ion_auth->logged_in()){ 
                        ?>
                        <a href="<?php echo base_url(); ?>register">Register</a>
                        <?php
                        }
                        ?>
                        <?php 
                        if($this->ion_auth->logged_in()){ 
                        ?>
                        <a href="<?php echo base_url(); ?>dashboard" class="btn btn-warning post-ad-btn">My account</a>
                        <?php
                        }
                        ?>
                        <!-- | 
                        <a href="listings.html">Listings</a> | 
                        <a href="account_dashboard.html">My account</a>
                        <a href="account_ad_create.gif" class="btn btn-warning post-ad-btn">Post an ad</a> -->

                    </div>	
                </div>
            </div>

        </div>
    </div>

</nav>