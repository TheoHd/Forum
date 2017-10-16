<section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 breadcrumbf">
                            <a href="#">Borderlands 2</a> <span class="diviver">&gt;</span> <a href="#">General Discussion</a> <span class="diviver">&gt;</span> <a href="#">New Topic</a>
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">



                            <!-- POST -->
                            <div class="post">
                                <form action="form-confirmation/form-confirmation-topic.php" class="form newtopic" method="post">
                                    <div class="topwrap">
                                        <div class="userinfo pull-left">
                                            <div class="avatar">
                                                <img src="images/avatar4.jpg" alt="" />
                                                
                                            </div>
                                        </div>
                                        <div class="posttext pull-left">

                                            <div>
                                                <input type="text" placeholder="Entrez le titre du topic" name="titre" id="titre" class="form-control" />
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                
                                                    <select name="categorie" id="categorie"  class="form-control" >
                                                        <option value="" disabled selected>Select Category</option>
                                                        <?php
                                                        $i = 1;
                                                        $sql3 = $bdd->query("SELECT * FROM categorie ORDER BY idCategorie");
                                                        
                                                        while($rep4 = $sql3->fetch()){
                                                            echo '<option value="'.$i.'">'.$rep4['nomCategorie'].'</option>';
                                                            $i++ ;
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div>
                                                <textarea name="desc" id="desc" placeholder="Description"  class="form-control" ></textarea>
                                            </div>


                                        </div>
                                        <div class="clearfix"></div>
                                    </div>                              
                                    <div class="postinfobot">


                                        <div class="pull-right postreply">
                                            
                                            <div class="pull-left"><button type="submit" name="submit" class="btn btn-primary">Envoyer</button></div>
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



            </section>