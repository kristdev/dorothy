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
                <li class="active"><a href="#">Home</a></li>
                <li><a href="my_account.html">Login</a></li>
                <li><a href="register.html">Register</a></li>
                <!-- <li><a href="listings.html">Listings</a></li>
                <li><a href="account_dashboard.html">My account</a></li>
                <li><a href="account_ad_create.gif">Post an ad</a></li> -->
            </ul> 
            <div class="nav navbar-nav navbar-right hidden-xs">
                <div class="row">

                    <div class="pull-right">
                        <a href="./" class="">Home</a> |
                        <a data-toggle="modal" data-target="#modalLogin"  href="#">Login</a> | 
                        <a href="<?php echo base_url(); ?>register">Register</a> <!-- | 
                        <a href="listings.html">Listings</a> | 
                        <a href="account_dashboard.html">My account</a>
                        <a href="account_ad_create.gif" class="btn btn-warning post-ad-btn">Post an ad</a> -->

                    </div>	
                </div>
            </div>

        </div>
    </div>

</nav>