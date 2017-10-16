<section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 breadcrumbf">
                            <a href="#">Editer mon profil</a> 
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
                                        <h2>Editer mon profil</h2>
                                    </div>

                                    <!-- acc section -->
                                    <div class="accsection">
                                        <div class="acccap">
                                            <div class="userinfo pull-left">&nbsp;</div>
                                            <!-- <div class="posttext pull-left"><h3>Required Fields</h3></div> -->
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="topwrap">
                                            <div class="userinfo pull-left">
                                                <div class="avatar">
                                                     
                                                    
                                                </div>
                                                
                                                <div>
                                                    
                                                </div>
                                            </div>
                                            <div class="posttext pull-left">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3">
                                                        
                                                    </div><div class="col-lg-4 col-md-4">
                                                        <h1>Bienvenue <?=$_SESSION['log'];?></h1>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-10 col-md-10">
                                                        <p>Mon ID : <b><a href="#"><?=$_SESSION['id'];?></a></b> </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-10 col-md-10">
                                                        <p>Pseudo : <b><a href="#"><?=$_SESSION['log'];?></a></b> </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-10 col-md-10">
                                                        <p>E-Mail : <b><a href="#"><?=$_SESSION['email'];?></a><b> </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-10 col-md-10">
                                                        <?php echo '<b><p><a href="edition-profil.php?='.$_SESSION['id'].'">Editer mon profil</a> </p></b>'; ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-10 col-md-10">
                                                        <p><a href="logout.php">Se déconnecter</a> </p>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="clearfix"></div>
                                        </div>  
                                    </div><!-- acc section END -->
                                    <div class="postinfobot">
                                     

                                    <div class="pull-right postreply">
                                        
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