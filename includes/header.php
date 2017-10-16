<?php include "config.php"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Primus Fantasy</title>
        <!-- favicon start -->
        <link rel="apple-touch-icon" sizes="57x57" href="images/favico/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="images/favico/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/favico/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="images/favico/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/favico/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="images/favico/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="images/favico/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="images/favico/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="images/favico/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="images/favico/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favico/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="images/favico/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favico/favicon-16x16.png">
        <link rel="manifest" href="images/favico/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="images/favico/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!-- favicon end -->
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom -->
        <link href="css/custom.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
          <![endif]-->

        <!-- fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="font-awesome-4.0.3/css/font-awesome.min.css">

        <!-- CSS STYLE-->
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />

        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
        <!-- jQuery -->
        <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
        <script type="text/javascript" src="js/verif-form.js"></script>

    </head>
    <body>

        <div class="container-fluid">

            <!-- Slider -->
            <a href="index.php">
            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <ul>    
                        <!-- SLIDE  -->
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                            <!-- MAIN IMAGE -->
                            <img src="images/ffxv-banner.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                        </li>
                    </ul>
                </div>
            </div>
            </a>
            <!-- //Slider -->

            <div class="headernav">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1 col-xs-3 col-sm-2 col-md-2 logo "><a href="index.php"><img src="images/logo.jpg" alt=""  /></a></div>
                        <div class="col-lg-3 col-xs-9 col-sm-5 col-md-3 selecttopic">
                            <div class="dropdown">
                                <a data-toggle="dropdown" href="index.php" >Catégories</a> <b class="caret"></b>
                                <ul class="dropdown-menu" role="menu">
                                    <?php 
                                    $sql3 = $bdd->query("SELECT * FROM categorie ORDER BY idCategorie");
                                    while($rep8 = $sql3->fetch()){
                                        echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="#">'.$rep8['nomCategorie'].'</a></li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 search hidden-xs hidden-sm col-md-3">
                            <div class="wrap">
                                <form action="#" method="post" class="form">
                                    <div class="pull-left txt"><input type="text" class="form-control" placeholder="Rechercher un topic"></div>
                                    <div class="pull-right"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-12 col-sm-5 col-md-4 avt">
                            
                            <?php 
                            if(isset($_SESSION['connecte'])){
                                echo '<div class="stnt pull-left">';
                                echo     '<form action="nouveau-topic.php" method="post" class="form">';
                                echo         '<button class="btn btn-primary">Créer un nouveau topic</button>';
                                echo     '</form>';
                                echo '</div>';
                            }
                            
                            if(isset($_SESSION['connecte'])){
                                echo '<div class="env pull-left"><i class="fa fa-envelope"></i></div>';
                                echo '<div class="avatar pull-left dropdown">';
                                echo     '<a data-toggle="dropdown" href="#"><img src="images/avatar.jpg" alt="" /><b class="caret"></b></a> ';
                                echo     '<div class="status green">&nbsp;</div>';
                                echo     '<ul class="dropdown-menu" role="menu">';
                                echo         '<li role="presentation"><a role="menuitem" tabindex="-1" href="compte.php?='.$_SESSION['id'].'">Mon profil</a></li>';
                                if(($_SESSION['rang'] == 2) || ($_SESSION['rang'] == 3)){
                                    echo     '<li role="presentation"><a role="menuitem" tabindex="-1" href="membres.php">Membres</a></li>';
                                }
                                echo         '<li role="presentation"><a role="menuitem" tabindex="-3" href="logout.php">Log Out</a></li>';
                                echo     '</ul>';
                                echo '</div>';
                            }
                            else{
                                echo '<div class="avatar pull-left dropdown">';
                                echo     '<a data-toggle="dropdown" href="#"><div class="glyphicon glyphicon-th-list" style="width:20px;margin-top:12.5px;margin-left:20px;"></div> <b class="caret"></b></a>';
                                echo     '<ul class="dropdown-menu" role="menu">';
                                
                                echo         '<li role="presentation"><a role="menuitem" tabindex="-2" href="login.php">Se connecter</a></li>';
                                echo         '<li role="presentation"><a role="menuitem" tabindex="-4" href="nouveau-compte.php">Créer un compte</a></li>';
                                echo         '<li role="presentation"><a role="menuitem" tabindex="-3" href="apropos.php">À propos</a></li>';
                                
                                echo     '</ul>';
                                echo '</div>';
                            }
                            ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
