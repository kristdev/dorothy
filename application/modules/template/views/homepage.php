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
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/jQCloud/jqcloud/jqcloud.css">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>assets/js/html5shiv.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/respond.min.js"></script>
    <![endif]-->

    <!--[if IE]>
        <link href="bower_components/better-dom/dist/better-dom-legacy.htc" rel="htc"/>
        <script src="bower_components/better-dom/dist/better-dom-legacy.js"></script>
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

 <!-- <Module_menu> -->
<?php echo Modules::run('template/menu'); ?>
 <!-- </Module_menu> -->

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

            <!-- <Module_tagscloud> -->
                <?php echo Modules::run('tagscloud'); ?>
            <!-- </Module_tagscloud> -->
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

                    <p class="main_slogan text-info" style="margin: 28px 0">Currently listing <strong>355,785</strong>  classified ads in the United Kingdom.</p>

                </div>

            </div>

        </div>
    </div>				

</div><!-- /.container --><!-- Modal -->

<!-- <Module_login> -->
<?php echo Modules::run('login'); ?>
<!-- </Module_login> -->

<!-- <Vue_footer> -->
<?php echo $this->load->view('./include/footerview', FALSE); ?>
<!-- </Vue_footer> -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url(); ?>assets/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/angular/angular.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bootstrap/dist/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/dropzone/downloads/dropzone.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/global.js"></script>
<script src="<?php echo base_url(); ?>assets/bootstrap-select/bootstrap-select.js"></script>
<script src="<?php echo base_url(); ?>assets/jQCloud/jqcloud/jqcloud-1.0.3.min.js"></script>

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="http://www.jquery-css.com/js/navigate.js" ></script>


<script>
   $(window).on('load', function () {

        $('.selectpicker').selectpicker();

        // $('.selectpicker').selectpicker('hide');
    });
</script>

<script type="text/javascript">
  var word_list = new Array(
    {text: "Lorem", weight: 13, link: "https://github.com/lucaong/jQCloud"},
    {text: "Ipsum", weight: 10.5, link: "http://jquery.com/"},
    {text: "Dolor", weight: 9.4},
    {text: "Sit", weight: 8},
    {text: "Amet", weight: 6.2},
    {text: "Consectetur", weight: 5},
    {text: "Adipiscing", weight: 5},
    {text: "Elit", weight: 5},
    {text: "Nam et", weight: 5},
    {text: "Leo", weight: 4},
    {text: "Sapien", weight: 4, link: "http://www.lucaongaro.eu/"},
    {text: "Pellentesque", weight: 3},
    {text: "habitant", weight: 3},
    {text: "morbi", weight: 3},
    {text: "tristisque", weight: 3},
    {text: "senectus", weight: 3},
    {text: "et netus", weight: 3},
    {text: "et malesuada", weight: 3},
    {text: "fames", weight: 2},
    {text: "ac turpis", weight: 2},
    {text: "egestas", weight: 2},
    {text: "Aenean", weight: 2},
    {text: "vestibulum", weight: 2},
    {text: "elit", weight: 2},
    {text: "sit amet", weight: 2},
    {text: "metus", weight: 2},
    {text: "adipiscing", weight: 2},
    {text: "ut ultrices", weight: 2},
    {text: "justo", weight: 1},
    {text: "dictum", weight: 1},
    {text: "Ut et leo", weight: 1},
    {text: "metus", weight: 1},
    {text: "at molestie", weight: 1},
    {text: "purus", weight: 1},
    {text: "Curabitur", weight: 1},
    {text: "diam", weight: 1},
    {text: "dui", weight: 1},
    {text: "ullamcorper", weight: 1},
    {text: "id vuluptate ut", weight: 1},
    {text: "mattis", weight: 1},
    {text: "et nulla", weight: 1},
    {text: "Sed", weight: 1}
  );
    $(window).on('load', function () {
        $("#wordcloud").jQCloud(word_list);
    });
  
</script>

</body>

</html>