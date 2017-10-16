<?php
if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name']))
{
    $tailleMax = 2097152;
    $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
    if($_FILES['avatar']['size'] <= $tailleMax)
    {
        $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
        if(in_array($extensionUpload, $extensionsValides))
        {
            $chemin = "images/avatars/".$_SESSION['id'].".".$extensionUpload;
            $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
            if($resultat)
            {
                $updateavatar = $bdd->prepare('UPDATE user SET avatar = :avatar WHERE id = :id');
                $updateavatar->execute(array(
                    'avatar' => $_SESSION['id'].".".$extensionUpload,
                    'id' => $_SESSION['id']
                    ));
            }
            else
            {
                $msg = "Erreur durant l'importation de votre photo de profil";
            }
        }
        else
        {
            $msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
        }
    }
    else
    {
        $msg = "Votre avatar ne doit pas excéder 2Mo !";
    }
}
?>
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
                                <form action="form-confirmation/form-confirmation-edition-profil.php" class="form newtopic" enctype="multipart/form-data" name="frm" method="post">
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
                                                <?php
                                                if(!empty($_SESSION['avatar'])){
                                                    echo '<img style="width:40px;border-radius:30px;" src="images/'.$_SESSION['avatar'].'" alt="" />';
                                                }
                                                ?>
                                                </div>
                                                
                                                <div>
                                                    
                                                </div>
                                            </div>
                                            <div class="posttext pull-left">
                                                <div class="row">
                                                    <p>Bienvenue <?=$_SESSION['log'];?></p>
                                                </div>
                                                <div class="row">

                                                    <div class="col-lg-3 col-md-3">
                                                        <input type="text" name="nom" id="nom" placeholder="Nom" class="form-control nom" />
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <input type="text" name="prenom" id="prenom" placeholder="Prénom" class="form-control prenom" />
                                                    </div>
                                                    <div class="col-lg-5 col-md-5">
                                                        <input type="email" name="email" id="email" placeholder="E-mail" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-10 col-md-10">
                                                        <input type="text" name="login" id="login" placeholder="Nom d'utilisateur" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-5">
                                                        <input type="password" placeholder="Mot de passe" class="form-control" id="mdp" name="mdp" />
                                                    </div>
                                                    <div class="col-lg-5 col-md-5">
                                                        <input type="password" placeholder="Ré-entrez le mot de passe" class="form-control" id="mdp2" name="mdp2" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12"> </div>
                                                </div>
                                                

                                            </div>
                                            <div class="clearfix"></div>
                                        </div>  
                                    </div><!-- acc section END -->
                                    <div class="postinfobot">


                                    <div class="pull-right postreply">
                                        
                                        <div class="pull-left"><button type="submit" name="submit" onclick="return val();" class="btn btn-primary">Confirmer</button></div>
                                        <div class="clearfix"></div>
                                    </div>
                                    


                                    <div class="clearfix"></div>
                                    </div>
                                    <div class="container">
                                        
                                        
                                    </div>
                                </form>
                                <form action="" class="form newtopic" enctype="multipart/form-data" name="frm-avatar" method="post">
                                        <div class="userinfo pull-left">
                                                <div class="avatar">
                                                     
                                                    
                                                </div>
                                                
                                                <div>
                                                    
                                                </div>
                                            </div>
                                            <div class="row">
                                                
                                                <hr>
                                                <div class="col-lg-2 col-md-2">
                                                    <label for="avatar">Avatar</label>
                                                    <?php if(isset($msg)){ echo $msg;} ?>
                                                </div>

                                                <div class="col-lg-5 col-md-5">
                                                    <input type="file" class="form-control" id="avatar" name="avatar" />
                                                </div>
                                            </div>
                                            <div class="postinfobot">


                                    <div class="pull-right postreply">
                                        
                                        <div class="pull-left"><button type="submit" name="submit" onclick="" class="btn btn-primary">Confirmer</button></div>
                                        <div class="clearfix"></div>
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