<section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 breadcrumbf">
                            <a href="#">Liste des membres</a> 
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <!-- POST -->
                            <div class="post">
                                <form action="form-confirmation/form-confirmation-inscription.php" class="form newtopic" name="frm" method="post">
                                    <div class="postinfotop">
                                        <h2>Liste des membres</h2>
                                    </div>

                                    <!-- acc section -->
                                    <div class="accsection">
                                        
                                            <div class="clearfix"></div>
                                        <div class="topwrap">

                                            <div class="text-center">
                                                <div class="row">';
                                                    <div class="col-lg-1 col-md-1 margin-mbs"><p><a method="get " href="">ID</a></p></div>
                                                    <div class="col-lg-1 col-md-1"><div class="bar"></div></div>
                                                    <div class="col-lg-1 col-md-1 margin-mbs"><p>Pseudo</p></div>
                                                    <div class="col-lg-1 col-md-1 margin-mbs"><p>Prénom</p></div>
                                                    <div class="col-lg-1 col-md-1 margin-mbs"><p>Nom</p></div>
                                                    <div class="col-lg-2 col-md-2 margin-mbs"><p>Email</p></div>
                                                    <div class="col-lg-2 col-md-2 margin-mbs"><p>Date inscription</p></div>
                                                    <div class="col-lg-1 col-md-1 margin-mbs"> <p>Suppression</p> </div>
                                                    <hr>
                                                </div>

                                            
                                            <?php
                                            $reqMb = $bdd->query("SELECT * FROM user ORDER BY idUtilisateur");

                                            while($reponseMb = $reqMb->fetch()){
                                            
                                            echo    '<div class="row">';
                                            echo        '<div class="col-lg-1 col-md-1 margin-mbs"><p><a method="get " href="">#'.$reponseMb['idUtilisateur'].'</a></p></div>';
                                            echo        '<div class="col-lg-1 col-md-1"><div class="bar"></div></div>';
                                            echo        '<div class="col-lg-1 col-md-1 margin-mbs"><p>'.$reponseMb['login'].'</p></div>';
                                            echo        '<div class="col-lg-1 col-md-1 margin-mbs"><p>'.$reponseMb['prenom'].'</p></div>';
                                            echo        '<div class="col-lg-1 col-md-1 margin-mbs"><p>'.$reponseMb['nom'].'</p></div>';
                                            echo        '<div class="col-lg-2 col-md-2 margin-mbs"><p>'.$reponseMb['email'].'</p></div>';
                                            echo        '<div class="col-lg-2 col-md-2 margin-mbs"><p>'.$reponseMb['dateInscription'].'</p></div>';
                                            echo        '<div class="col-lg-1 col-md-1 margin-mbs"><a method="get" href=""><div class="glyphicon glyphicon-remove"></div></a></div>';
                                            echo    '</div>';
                                            }
                                            ?>
                                                

                                            </div>
                                            <div class="clearfix"></div>
                                        </div>  
                                    </div><!-- acc section END -->
                                    <div class="postinfobot">

                                    <div class="pull-left">
                                        <a href="index.php"> <div class="glyphicon glyphicon-home"><div class="pull-right" style="margin-left: 5px;margin-top: 2px;"><p>Retour à l'index</p></div> </div></a>
                                    </div>

                                



                                    <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div><!-- POST -->
                        </div>
                        <div class="col-lg-4 col-md-4"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 breadcrumbf">
                            <a href="#"> </a> <!-- alt+255 -->
                        </div>
                    </div>
                </div>

            </section>