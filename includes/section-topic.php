<?php 
if(!isset($_GET['id'])){
    header("Location: index.php");
}
else{
    $id_get = intval($_GET['id']);
}
$demande = $bdd->query('SELECT * FROM topic WHERE idTopic ="'.$id_get.'"');
$reponse = $demande->fetch();

?>

<section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 breadcrumbf">
                            <a href="#">Topic n° <?= $id_get; ?> </a><span class="diviver">&gt;</span><a href="#"> <?= $reponse['nomTopic'];?></a>
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">

                            <!-- POST -->
                            <div class="post beforepagination">
                                <div class="topwrap">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                            <img src="images/avatar.jpg" alt="" />
                                        </div>
                                        <div class="name">
                                            <p><?= $reponse['auteur'];?></p>
                                        </div>
                                    </div>
                                    <div class="posttext pull-left">
                                        <?php 
                                        if(isset($reponse['idTopic'])){
                                            echo "<h2>".$reponse['nomTopic']."</h2>";
                                            echo "<p>".$reponse['descTopic']."</p>";
                                        }?>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>                              
                                <div class="postinfobot">

                                    <div class="prev pull-left">                                        
                                        <a href="#reply"><i class="fa fa-reply"></i></a>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                            </div><!-- POST -->

                            <div class="paginationf">
                                 <p> Commentaires </p>
                            </div>
                            
                            <?php
                            $demande2 = $bdd->query('SELECT * FROM post WHERE idTopic ="'.$id_get.'"');
                            while($reponse = $demande2->fetch()){
                                ?>
                            <!-- POST -->
                            <div class="post">
                                <div class="topwrap">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                            <img src="images/avatar2.jpg" alt="" />
                                        </div>

                                    </div>
                                    <div class="posttext pull-left">
                                        <p><?= $reponse['contenuPost']; ?></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>                              
                                <div class="postinfobot">

                                    <div class="prev pull-left">                                        
                                        <a href="#"><i class="fa fa-reply"></i></a>
                                    </div>
                            

                                    <div class="clearfix"></div>
                                </div>
                            </div><!-- POST -->
                            <?php
                            }
                            ?>




                            <!-- POST -->
                            <div class="post">
                                <form action="form-confirmation/form-confirmation-commentaire.php" class="form" method="post">
                                    <div class="topwrap">
                                        <div class="userinfo pull-left">
                                            <div class="avatar">
                                                <img src="images/avatar4.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div class="posttext pull-left">
                                            <div class="textwraper">
                                                <div class="postreply">Envoyer sa réponse</div>
                                                <textarea name="contenu" id="contenu" placeholder="Entrez votre message ici"></textarea>
                                                <?php echo '<input type="hidden" id="idget" name="idget" value="'.$id_get.'">'; ?>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>                              
                                    <div class="postinfobot">



                                        <div class="pull-right postreply">
                                            
                                            <div class="pull-left"><button type="submit" name="submit" class="btn btn-primary">Répondre</button></div>
                                            <div class="clearfix"></div>
                                        </div>


                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div><!-- POST -->


                        </div>
                        <div class="col-lg-4 col-md-4">

                            <!-- -->
                            
                            <div class="sidebarblock">
                                <h3>Catégories</h3>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <ul class="cats">
                                    <?php 
                                    $sql2 = $bdd->query("SELECT * FROM categorie ORDER BY idCategorie");
                                    while($rep3 = $sql2->fetch()){
                                        echo '<li><a href="#">'.$rep3['nomCategorie'].'</a></li>';
                                    }
                                    ?>
                                    </ul>
                                </div>
                            </div>

                            
                            <!-- -->
                            



                

            </section>