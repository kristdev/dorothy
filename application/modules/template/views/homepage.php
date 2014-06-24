<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../assets/ico/favicon.html">

        <title>Dorothy - Cameroon Lib Univerities Search engine</title>

        <!-- Bootstrap core CSS -->
        <link id="switch_style" href="<?php echo base_url(); ?>assets/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url(); ?>assets/css/theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/my_stylesheet.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/fontawesome/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dropzone/downloads/css/dropzone.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap-select/bootstrap-select.css">
        
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="<?php echo base_url(); ?>assets/js/html5shiv.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="my_fontbody">

            
        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "../../connect.facebook.net/en_GB/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        
        



        <nav class="navbar navbar-default" role="navigation">
            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a href="index-2.html" class="navbar-brand ">
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


                                <a data-toggle="modal" data-target="#modalLogin"  href="#">Login</a> | 
                                <a href="register.html">Register</a> <!-- | 
                                <a href="listings.html">Listings</a> | 
                                <a href="account_dashboard.html">My account</a>
                                <a href="account_ad_create.gif" class="btn btn-warning post-ad-btn">Post an ad</a> -->

                            </div>	
                        </div>




                    </div>

                </div>
                </div>





            </nav>



            

            <div class="jumbotron home-search" style="">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <br />
                <p class="main_description">Search thousands of books, Statements and thesis  classifieds all in one place</p>

                <br /><br />
                <div class="row text-center">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="input-group">
                            <span class="hidden-xs input-group-addon input-group-addon-text">Find me a</span>
                            <div class="col-md-8 col-xs-12">
                                <input type="text" class="form-control" placeholder="e.g. Mathematics, Pysics, Geography, Biology">
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <select class="selectpicker form-control" multiple data-live-search="true">
                                    <optgroup label="Les rayons">
                                        <option>Gestion Appliquée</option>
                                        <option>Sciences</option>
                                        <option>Droit</option>
                                        <option>Economie</option>
                                        <option>Communication</option>
                                        <option>Histoire</option>
                                        <option>Commerce-Vente</option>
                                    </optgroup>
                                    <optgroup label="Gestion Appliquée">
                                        <option>Ressources Humaines</option>
                                        <option>Management</option>
                                    </optgroup>
                                    <optgroup label="Sciences">
                                        <option>Mathématiques</option>
                                        <option>Sciences de la vie</option>
                                        <option>Siences de la terre</option>
                                        <option>Astronomie</option>
                                    </optgroup>
                                    <optgroup label="Droit">
                                        <option>Droit privé</option>
                                        <option>Droit public</option>
                                        <option>Droit international</option>
                                        <option>Code Jurisprudence</option>
                                    </optgroup>
                                    <optgroup label="Economie">
                                        <option>Tent</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                    </div>        
                </div>
                <br />
                <br />
                <div class="row">
                    <div class="col-sm-12" style="text-align: center">
                        <a href="listings.html" class="btn btn-primary search-btn">Search</a>
                    </div>
                </div>                
                <br />
                <br />
                <div class="row">
                    <div class="col-sm-12" style="text-align: center">

                        <div id="quotes">
                            <div class="text-item" style="display: none;">Boom! <strong>Vince</strong> just sold a <strong>Washing Machine</strong> in <strong>Sheffield</strong></div>
                            <div class="text-item" style="display: none;"><strong>Julia</strong> is availiable for <strong>home cleaning</strong> in <strong>Manchester</strong></div>
                            <div class="text-item" style="display: none;">Success! <strong>Paul</strong> has just sold a <strong>Mercedes-Benz E-class</strong> in <strong>Liverpool</strong></div>
                            <div class="text-item" style="display: none;">Hey, <strong>Uber</strong> has a <strong>job opening</strong> in <strong>London</strong></div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">



    <div class="row">

        <div class="col-sm-12 col-md-8">

            <div class="row directory">
                <div class="col-sm-12 ">
                    <h2><span>Directory listings</span></h2>
                </div>
            </div>

            <div class="row directory">
                <div class="col-xs-12">
                    <div class="directory-block">
                        <div class="row">
                            <div class="col-md-4">
                                <h4><i class="fa fa-folder-open"></i> Gestion Appliquée</h4>
                                <p>
                                    <a href="listings.html" >Ressources Humaines</a>, 
                                    <a href="listings.html" >Management</a>, 
                                    <a href="listings.html" >Comptabilité</a>, 
                                    <a href="listings.html">Fiscalité</a>, 
                                    <a href="listings.html" >Logistique</a>, 
                                    <a href="listings.html" >Qualité</a>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <h4><i class="fa fa-folder-open"></i> Sciences</h4>
                                <p>
                                    <a href="listings.html" >Mathémtiques</a>, 
                                    <a href="listings.html" >Scicences de la vie</a>, 
                                    <a href="listings.html" >Sciences de la terre</a>, 
                                    <a href="listings.html">Astronomie</a>, 
                                    <a href="listings.html" >Scooters</a>,
                                    <a href="listings.html" >Vans</a>, 
                                    <a href="listings.html" >Trucks</a>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <h4><i class="fa fa-folder-open"></i> Droit</h4>
                                <p>
                                    <a href="listings.html" >Droit Privé</a>, 
                                    <a href="listings.html" >Droit public</a>, 
                                    <a href="listings.html" >Code Jurisprudence</a>, 
                                    <a href="listings.html">Droit international</a>
                                </p>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-4">
                                <h4><i class="fa fa-folder-open"></i> Economie</h4>
                                <p>
                                    <a href="listings.html" >Cars</a>, 
                                    <a href="listings.html" >Car Parts</a>, 
                                    <a href="listings.html" >Campervans</a>, 
                                    <a href="listings.html">Motobikes</a>, 
                                    <a href="listings.html" >Scooters</a>, 
                                    <a href="listings.html" >Vans</a>, 
                                    <a href="listings.html" >Trucks</a>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <h4><i class="fa fa-folder-open"></i> Communication</h4>
                                <p>
                                    <a href="listings.html" >Cars</a>, 
                                    <a href="listings.html" >Car Parts</a>, 
                                    <a href="listings.html" >Campervans</a>, 
                                    <a href="listings.html">Motobikes</a>, 
                                    <a href="listings.html" >Scooters</a>, 
                                    <a href="listings.html" >Vans</a>, 
                                    <a href="listings.html" >Trucks</a>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <h4><i class="fa fa-folder-open"></i> Histoire</h4>
                                <p>
                                    <a href="listings.html" >Cars</a>, 
                                    <a href="listings.html" >Car Parts</a>, 
                                    <a href="listings.html" >Campervans</a>, 
                                    <a href="listings.html">Motobikes</a>, 
                                    <a href="listings.html" >Scooters</a>, 
                                    <a href="listings.html" >Vans</a>, 
                                    <a href="listings.html" >Trucks</a>
                                </p>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-4">
                                <h4><i class="fa fa-folder-open"></i> Commerce-Vente</h4>
                                <p>
                                    <a href="listings.html" >Cars</a>, 
                                    <a href="listings.html" >Car Parts</a>, 
                                    <a href="listings.html" >Campervans</a>, 
                                    <a href="listings.html">Motobikes</a>, 
                                    <a href="listings.html" >Scooters</a>, 
                                    <a href="listings.html" >Vans</a>, 
                                    <a href="listings.html" >Trucks</a>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <h4><i class="fa fa-folder-open"></i> Lettres et Langues</h4>
                                <p>
                                    <a href="listings.html" >Cars</a>, 
                                    <a href="listings.html" >Car Parts</a>, 
                                    <a href="listings.html" >Campervans</a>, 
                                    <a href="listings.html">Motobikes</a>, 
                                    <a href="listings.html" >Scooters</a>, 
                                    <a href="listings.html" >Vans</a>, 
                                    <a href="listings.html" >Trucks</a>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <h4><i class="fa fa-folder-open"></i> Politique</h4>
                                <p>
                                    <a href="listings.html" >Cars</a>, 
                                    <a href="listings.html" >Car Parts</a>, 
                                    <a href="listings.html" >Campervans</a>, 
                                    <a href="listings.html">Motobikes</a>, 
                                    <a href="listings.html" >Scooters</a>, 
                                    <a href="listings.html" >Vans</a>, 
                                    <a href="listings.html" >Trucks</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

            


            <div class="row directory-counties hidden-xs">
                <div class="col-sm-12">
                    <ul class="nav nav-tabs" id="myTab">
                        <li class=""><a data-toggle="tab"  href="#popular">Popular cities</a></li>
                                                <li class=""><a data-toggle="tab"  href="#EN">England</a></li>
                                                <li class=""><a data-toggle="tab"  href="#WA">Wales</a></li>
                                                <li class=""><a data-toggle="tab"  href="#SC">Scotland</a></li>
                                                <li class="hidden-md"><a data-toggle="tab"  href="#NI">Northern Ireland</a></li>
                                                <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" id="myTabDrop1" href="#">Other countries <b class="caret"></b></a>
                            <ul aria-labelledby="myTabDrop1" role="menu" class="dropdown-menu">
                                <li><a href="listings.html">USA</a></li>
                                <li><a href="listings.html">France</a></li>
                                <li><a href="listings.html">Germany</a></li>
                                <li><a href="listings.html">Spain and Portugal</a></li>
                                <li><a href="listings.html">Switzerland</a></li>
                                <li><a href="listings.html">Other Europe</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="tab-content " id="myTabContent">
                                                <div id="popular" class="tab-pane fade counties-pane active">
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings.html">London</a><br />
                                                                                <a href="listings.html">Edinburgh</a><br />
                                                                                <a href="listings.html">Manchester</a><br />
                                                                                <a href="listings.html">Birmingham</a><br />
                                                                                <a href="listings.html">Glasgow</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings.html">Liverpool</a><br />
                                                                                <a href="listings.html">Bristol</a><br />
                                                                                <a href="listings.html">Oxford</a><br />
                                                                                <a href="listings.html">Cambridge</a><br />
                                                                                <a href="listings.html">Cardiff</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings.html">Brighton</a><br />
                                                                                <a href="listings.html">Newcastle-upon-Tyne</a><br />
                                                                                <a href="listings.html">Leeds</a><br />
                                                                                <a href="listings.html">York</a><br />
                                                                                <a href="listings.html">Inverness</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings.html">Bath</a><br />
                                                                                <a href="listings.html">Nottingham</a><br />
                                                                                <a href="listings.html">Reading</a><br />
                                                                                <a href="listings.html">Aberdeen</a><br />
                                                                                <a href="listings.html">Chester</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                    </div>


                                                                        <div id="EN" class="tab-pane counties-pane">
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings.html" >Avon</a><br />
                                                                                <a href="listings.html" >Bedfordshire</a><br />
                                                                                <a href="listings.html" >Berkshire</a><br />
                                                                                <a href="listings.html" >Buckinghamshire</a><br />
                                                                                <a href="listings.html" >Cambridgeshire</a><br />
                                                                                <a href="listings.html" >Cheshire</a><br />
                                                                                <a href="listings.html" >Cleveland</a><br />
                                                                                <a href="listings.html" >Cornwall</a><br />
                                                                                <a href="listings.html" >Cumbria</a><br />
                                                                                <a href="listings.html" >Derbyshire</a><br />
                                                                                <a href="listings.html" >Devon</a><br />
                                                                                <a href="listings.html" >Dorset</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings.html" >Durham</a><br />
                                                                                <a href="listings.html" >East Sussex</a><br />
                                                                                <a href="listings.html" >Essex</a><br />
                                                                                <a href="listings.html" >Gloucestershire</a><br />
                                                                                <a href="listings.html" >Hampshire</a><br />
                                                                                <a href="listings.html" >Herefordshire</a><br />
                                                                                <a href="listings.html" >Hertfordshire</a><br />
                                                                                <a href="listings.html" >Isle of Wight</a><br />
                                                                                <a href="listings.html" >Kent</a><br />
                                                                                <a href="listings.html" >Lancashire</a><br />
                                                                                <a href="listings.html" >Leicestershire</a><br />
                                                                                <a href="listings.html" >Lincolnshire</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings.html" >London</a><br />
                                                                                <a href="listings.html" >Merseyside</a><br />
                                                                                <a href="listings.html" >Middlesex</a><br />
                                                                                <a href="listings.html" >Norfolk</a><br />
                                                                                <a href="listings.html" >Northamptonshire</a><br />
                                                                                <a href="listings.html" >Northumberland</a><br />
                                                                                <a href="listings.html" >North Humberside</a><br />
                                                                                <a href="listings.html" >North Yorkshire</a><br />
                                                                                <a href="listings.html" >Nottinghamshire</a><br />
                                                                                <a href="listings.html" >Oxfordshire</a><br />
                                                                                <a href="listings.html" >Rutland</a><br />
                                                                                <a href="listings.html" >Shropshire</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings.html" >Somerset</a><br />
                                                                                <a href="listings.html" >South Humberside</a><br />
                                                                                <a href="listings.html" >South Yorkshire</a><br />
                                                                                <a href="listings.html" >Staffordshire</a><br />
                                                                                <a href="listings.html" >Suffolk</a><br />
                                                                                <a href="listings.html" >Surrey</a><br />
                                                                                <a href="listings.html" >Tyne and Wear</a><br />
                                                                                <a href="listings.html" >Warwickshire</a><br />
                                                                                <a href="listings.html" >West Midlands</a><br />
                                                                                <a href="listings.html" >West Sussex</a><br />
                                                                                <a href="listings.html" >West Yorkshire</a><br />
                                                                                <a href="listings.html" >Worcestershire</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                    </div>
                                                                        <div id="WA" class="tab-pane counties-pane">
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings.html" >Clwyd</a><br />
                                                                                <a href="listings.html" >Dyfed</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings.html" >Gwent</a><br />
                                                                                <a href="listings.html" >Gwynedd</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings.html" >Mid Glamorgan</a><br />
                                                                                <a href="listings.html" >Powys</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings.html" >South Glamorgan</a><br />
                                                                                <a href="listings.html" >West Glamorgan</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                    </div>
                                                                        <div id="SC" class="tab-pane counties-pane">
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings.html" >Aberdeenshire</a><br />
                                                                                <a href="listings.html" >Angus</a><br />
                                                                                <a href="listings.html" >Argyll</a><br />
                                                                                <a href="listings.html" >Ayrshire</a><br />
                                                                                <a href="listings.html" >Banffshire</a><br />
                                                                                <a href="listings.html" >Berwickshire</a><br />
                                                                                <a href="listings.html" >Bute</a><br />
                                                                                <a href="listings.html" >Caithness</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings.html" >Clackmannanshire</a><br />
                                                                                <a href="listings.html" >Dumfriesshire</a><br />
                                                                                <a href="listings.html" >Dunbartonshire</a><br />
                                                                                <a href="listings.html" >East Lothian</a><br />
                                                                                <a href="listings.html" >Fife</a><br />
                                                                                <a href="listings.html" >Inverness-shire</a><br />
                                                                                <a href="listings.html" >Kincardineshire</a><br />
                                                                                <a href="listings.html" >Kinross-shire</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings.html" >Kirkcudbrightshire</a><br />
                                                                                <a href="listings.html" >Lanarkshire</a><br />
                                                                                <a href="listings.html" >Midlothian</a><br />
                                                                                <a href="listings.html" >Moray</a><br />
                                                                                <a href="listings.html" >Nairnshire</a><br />
                                                                                <a href="listings.html" >Orkney</a><br />
                                                                                <a href="listings.html" >Peeblesshire</a><br />
                                                                                <a href="listings.html" >Perthshire</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings.html" >Renfrewshire</a><br />
                                                                                <a href="listings.html" >Ross-shire</a><br />
                                                                                <a href="listings.html" >Roxburghshire</a><br />
                                                                                <a href="listings.html" >Selkirkshire</a><br />
                                                                                <a href="listings.html" >Shetland</a><br />
                                                                                <a href="listings.html" >Stirlingshire</a><br />
                                                                                <a href="listings.html" >Sutherland</a><br />
                                                                                <a href="listings.html" >West Lothian</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings.html" >Wigtownshire</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                    </div>
                                                                        <div id="NI" class="tab-pane counties-pane">
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings.html" >Antrim</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings.html" >Armagh</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings.html" >Down</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings.html" >Fermanagh</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings.html" >Londonderry</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings.html" >Tyrone</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                    </div>
                                            </div>
                </div>


            </div>



        </div>

        <div class="col-xs-12 col-md-4 " >
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-12  col-lg-11 pull-right" >
                    <br class="hidden-sm hidden-xs"/>
                    <br class="hidden-sm hidden-xs"/>
                    <br class="hidden-sm hidden-xs"/>

                    <div class="panel panel-default">
                        <div class="panel-heading">Les salons les plus visités</div>
                        <ul class="cards list-group">
                            <li class="list-group-item">
                                <p class="title">Ashley Jacobs</p>
                                <div class="img">
                                    <img class="img-responsive col-md-4" src="<?php echo base_url(); ?>assets/img/users/7bfa446aed17be550bdd5b157fd71a9e.jpg">
                                    <div class="label label-info">Pro</div>
                                </div>
                                <p class="info-text">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.</p>
                                <div class="stats">
                                    <p class="time">5 minutes ago</p>
                                    <span>15 <i class="fa fa-paperclip"></i></span> - 
                                    <span>27 <i class="fa fa-comments"></i></span> - 
                                    <span>158 <i class="fa fa-eye"></i></span> 
                                </div>
                            </li>
                            <li class="list-group-item">
                                <p class="title">Sarah Whitman</p>
                                <div class="img">
                                    <img class="img-responsive col-md-4" src="<?php echo base_url(); ?>assets/img/users/733aa09b66022a64ba72aad2311f7c01.jpg">
                                    <div class="label label-warning">Free</div>
                                </div>
                                <p class="info-text">Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master.</p>
                                <div class="stats">
                                    <p class="time">29 minutes ago</p>
                                    <span>10 <i class="fa fa-paperclip"></i></span> - 
                                    <span>19 <i class="fa fa-comments"></i></span> - 
                                    <span>58 <i class="fa fa-eye"></i></span>  
                                </div>
                            </li>
                            <li class="list-group-item">
                                <p class="title">Connor Adams</p>
                                <div class="img">
                                    <img class="img-responsive col-md-4" src="<?php echo base_url(); ?>assets/img/users/a7070605bda0ea1c618af0c6235c183d.jpg">
                                    <div class="label label-info">Pro</div>
                                </div>
                                <p class="info-text">Anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack.</p>
                                <div class="stats">
                                    <p class="time">Yesterday</p>
                                    <span>25 <i class="fa fa-paperclip"></i></span> - 
                                    <span>39 <i class="fa fa-comments"></i></span> - 
                                    <span>252 <i class="fa fa-eye"></i></span> 
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-5 col-md-12  col-lg-11 pull-right" >

                    <!-- <div class="panel panel-default">
                    
                    
                        <div class="panel-body" style="height: 102px; display: block;">
                    
                            <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="265" data-layout="standard" data-action="like" data-show-faces="false" data-share="false" style="display: block; height: 30px;"></div>
                            <br />
                            Place this tag where you want the +1 button to render.
                            <div class="g-plusone" data-annotation="inline" data-width="300" style="display: block; height: 30px;"></div>
                    
                            Place this tag after the last +1 button tag.
                            <script type="text/javascript">
                                (function() {
                                    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                    po.src = '../../apis.google.com/js/platform.js';
                                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                                })();
                            </script>
                        </div>
                        <div class="panel-footer">
                            <a href="https://twitter.com/twitterapi" class="twitter-follow-button" data-dnt="true">Follow @twitterapi</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="../../platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                        </div>
                    </div> -->

                    <p class="main_slogan" style="margin: 28px 0">Currently listing 355,785 classified ads in the United Kingdom.</p>

                </div>

            </div>

        </div>
    </div>				

</div><!-- /.container --><!-- Modal -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLogin" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Sign in to your account</h4>
            </div>
            <div class="modal-body">
                <p>If you have an account with us, please enter your details below.</p>

                <form method="POST" action="http://templates.expresspixel.com/bootlistings/account_dashboard.html" accept-charset="UTF-8" id="user-login-form" class="form ajax" data-replace=".error-message p">

                    <div class="form-group">
                        <input placeholder="Your username/email" class="form-control" name="email" type="text">                </div>

                    <div class="form-group">
                        <input placeholder="Your password" class="form-control" name="password" type="password" value="">                </div>

                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary pull-right">Login</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="modal" href="#modalForgot">Forgot your password?</a>
                        </div>
                    </div>

                </form>
            </div>

            <div class="modal-footer" style="text-align: center">
                <div class="error-message"><p style="color: #000; font-weight: normal;">Don't have an account? <a class="link-info" href="register.html">Register now</a></p></div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- Modal -->
<div class="modal fade" id="modalForgot" tabindex="-1" role="dialog" aria-labelledby="modalForgot" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot your password?</h4>
            </div>
            <div class="modal-body">
                <p>Enter your email to continue</p>

                <form role="form">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your email address">
                    </div>

                    <div class="row">
                        <div class="col-md-6">

                        </div><div class="col-md-6">
                        <a href="my_account.html" class="btn btn-primary pull-right">Continue</a>
                        </div>
                    </div>
                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="footer">
    <div class="container">

        <div class="row">

            <div class="col-sm-4 col-xs-12">
                <p><strong>&copy; Bootstrap Classifieds 2014</strong></p>
                <p>All rights reserved</p>
            </div>			

            <div class="col-sm-8 col-xs-12">
                <p class="footer-links">
                    <a href="index-2.html" class="active">Home</a>
                    <a href="typography.html">Typography</a>
                    <a href="terms.html">Terms and Conditions</a>
                    <a href="contact.html">Contact Us</a>
                </p>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url(); ?>assets/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bootstrap/dist/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/dropzone/downloads/dropzone.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/global.js"></script>
<script src="<?php echo base_url(); ?>assets/bootstrap-select/bootstrap-select.js"></script>

<script>
       $(window).on('load', function () {

            $('.selectpicker').selectpicker();

            // $('.selectpicker').selectpicker('hide');
        });
   </script>
</body>

</html>