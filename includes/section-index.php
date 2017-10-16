<section class="content">


                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            

                            <!-- POST -->
                            <?php
                            
                            $requete = $bdd->query("SELECT * FROM topic ORDER BY idTopic");

                            while($reponse = $requete->fetch())
                            {
                                echo "<div class='post'>";
                                echo "<div class='wrap-ut pull-left'>";
                                echo     "<div class='userinfo pull-left'>";
                                echo         "<div class='avatar'>";
                                echo             "<img src='images/avatar2.jpg' alt='' />";
                                echo             "<div class='status red'>&nbsp;</div>";
                                echo         "</div>";

                                
                                if(isset($reponse['rang']) && ($reponse['rang']) == 2){
                                echo '<div class="icons">';
                                echo  '<img src="images/icon3.jpg" alt=""/>';
                                echo '</div>';
                                }
                                if(isset($reponse['rang']) && ($reponse['rang']) == 3){
                                echo '<div class="icons">';
                                echo  '<img src="images/icon3.jpg" alt=""/>';
                                echo '</div>';
                                }
                                        
                                echo     "</div>";
                                echo     "<div class='posttext pull-left'>";
                                
                                if(isset($reponse['idCategorie']) && ($reponse['idCategorie']) == 1)
                                {
                                    echo         "<h2><a method='get' href='topic.php?id=".$reponse['idTopic']."'>[GAMEPLAY] ".$reponse['nomTopic']."</a></h2>";
                                }
                                if(isset($reponse['idCategorie']) && ($reponse['idCategorie']) == 2)
                                {
                                    echo         "<h2><a method='get' href='topic.php?id=".$reponse['idTopic']."'>[MUSIQUES] ".$reponse['nomTopic']."</a></h2>";
                                }
                                if(isset($reponse['idCategorie']) && ($reponse['idCategorie']) == 3)
                                {
                                    echo         "<h2><a method='get' href='topic.php?id=".$reponse['idTopic']."'>[T&A] ".$reponse['nomTopic']."</a></h2>";
                                }
                                if(isset($reponse['idCategorie']) && ($reponse['idCategorie']) == 4)
                                {
                                    echo         "<h2><a method='get' href='topic.php?id=".$reponse['idTopic']."'>[B&G] ".$reponse['nomTopic']."</a></h2>";
                                }
                                if(isset($reponse['idCategorie']) && ($reponse['idCategorie']) == 5)
                                {
                                    echo         "<h2><a method='get' href='topic.php?id=".$reponse['idTopic']."'>[VIDEO] ".$reponse['nomTopic']."</a></h2>";
                                }
                                if(isset($reponse['idCategorie']) && ($reponse['idCategorie']) == 6)
                                {
                                    echo         "<h2><a method='get' href='topic.php?id=".$reponse['idTopic']."'>[IMAGE] ".$reponse['nomTopic']."</a></h2>";
                                }
                                echo         "<p>".$reponse['descTopic']."</p>";
                                echo     "</div>";
                                echo     "<div class='clearfix'></div>";
                                echo "</div>";
                                echo "<div class='postinfo pull-left'>";
                                echo     "<div class='comments'>";
                                echo         "<div class='commentbg'>";

                                $id_t = $reponse['idTopic'];
                                $nbPost = "SELECT COUNT(*) as nb_p FROM post WHERE idTopic = ".$id_t."";
                                $nbPost = $bdd->query($nbPost)->fetch(PDO::FETCH_ASSOC);
                                $nbPost = $nbPost['nb_p'];

                                echo             $nbPost;
                                echo             "<div class='mark'></div>";
                                echo         "</div>";
                                echo     "</div>";                                
                                echo     "</div>";
                                echo     "<div class='clearfix'></div>";
                                echo "</div>";

                            }
                            ?>
                            <!-- POST -->

                            <!-- POST -->
                            <div class="post">
                                <div class="wrap-ut pull-left">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                            <img src="images/avatar2.jpg" alt="" />
                                            <div class="status red">&nbsp;</div>
                                        </div>
                                        <?php
                                        $demande = $bdd->query('SELECT * FROM topic');
                                        $reponse = $demande->fetch();
                                        if(isset($reponse['idUtilisateur']) && ($reponse['idUtilisateur']) == 1){
                                        echo '<div class="icons">';
                                        echo '<img src="images/icon1.jpg" alt=""/>';
                                        echo '</div>';
                                        }
                                        if(isset($reponse['idUtilisateur']) && ($reponse['idUtilisateur']) == 2){
                                        echo '<div class="icons">';
                                        echo  '<img src="images/icon3.jpg" alt=""/>';
                                        echo '</div>';
                                        }
                                        if(isset($reponse['idUtilisateur']) && ($reponse['idUtilisateur']) == 3){
                                        echo '<div class="icons">';
                                        echo  '<img src="images/icon3.jpg" alt=""/>';
                                        echo '</div>';
                                        }
                                        ?>
                                    </div>
                                    <div class="posttext pull-left">
                                        <h2><a href="02_topic.html">What Instagram Ads Will Look Like</a></h2>
                                        <p>Instagram offered a first glimpse at what its ads will look like in a blog post Thursday. The sample ad, which you can see below.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="postinfo pull-left">
                                    <div class="comments">
                                        <div class="commentbg">
                                            89
                                            <div class="mark"></div>
                                        </div>

                                    </div>
                                    <div class="views"><i class="fa fa-eye"></i> 1,568</div>
                                    <div class="time"><i class="fa fa-clock-o"></i> 15 min</div>                                    
                                </div>
                                <div class="clearfix"></div>
                            </div><!-- POST -->


                            <!-- POST -->
                            <div class="post">
                                <div class="wrap-ut pull-left">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                            <img src="images/avatar3.jpg" alt="" />
                                            <div class="status red">&nbsp;</div>
                                        </div>

                                        <div class="icons">
                                            <img src="images/icon2.jpg" alt="" /><img src="images/icon4.jpg" alt="" />
                                        </div>
                                    </div>
                                    <div class="posttext pull-left">
                                        <h2><a href="02_topic.html">The Future of Magazines Is on Tablets</a></h2>
                                        <p>Eric Schmidt has seen the future of magazines, and it's on the tablet. At a Magazine Publishers Association.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="postinfo pull-left">
                                    <div class="comments">
                                        <div class="commentbg">
                                            456
                                            <div class="mark"></div>
                                        </div>

                                    </div>
                                    <div class="views"><i class="fa fa-eye"></i> 1,568</div>
                                    <div class="time"><i class="fa fa-clock-o"></i> 2 days</div>                                    
                                </div>
                                <div class="clearfix"></div>
                            </div><!-- POST -->


                            <!-- POST -->
                            <div class="post">
                                <div class="wrap-ut pull-left">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                            <img src="images/avatar4.jpg" alt="" />
                                            <div class="status yellow">&nbsp;</div>
                                        </div>

                                        <div class="icons">
                                            <img src="images/icon1.jpg" alt="" /><img src="images/icon4.jpg" alt="" /><img src="images/icon6.jpg" alt="" />
                                        </div>
                                    </div>
                                    <div class="posttext pull-left">
                                        <h2><a href="02_topic.html">Pinterest Now Worth $3.8 Billion</a></h2>
                                        <p>Pinterest's valuation is closing in on $4 billion after its latest funding round of $225 million, according to a report.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="postinfo pull-left">
                                    <div class="comments">
                                        <div class="commentbg">
                                            78
                                            <div class="mark"></div>
                                        </div>

                                    </div>
                                    <div class="views"><i class="fa fa-eye"></i> 1,568</div>
                                    <div class="time"><i class="fa fa-clock-o"></i> 24 min</div>                                    
                                </div>
                                <div class="clearfix"></div>
                            </div><!-- POST -->



                            <!-- POST -->
                            <div class="post">
                                <div class="wrap-ut pull-left">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                            <img src="images/avatar.jpg" alt="" />
                                            <div class="status green">&nbsp;</div>
                                        </div>

                                        <div class="icons">
                                            <img src="images/icon1.jpg" alt="" /><img src="images/icon4.jpg" alt="" />
                                        </div>
                                    </div>
                                    <div class="posttext pull-left">
                                        <h2><a href="02_topic.html">10 Kids Unaware of Their Halloween Costume</a></h2>
                                        <p>It's one thing to subject yourself to a Halloween costume mishap because, hey, that's your prerogative.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="postinfo pull-left">
                                    <div class="comments">
                                        <div class="commentbg">
                                            560
                                            <div class="mark"></div>
                                        </div>

                                    </div>
                                    <div class="views"><i class="fa fa-eye"></i> 1,568</div>
                                    <div class="time"><i class="fa fa-clock-o"></i> 24 min</div>                                    
                                </div>
                                <div class="clearfix"></div>
                            </div><!-- POST -->


                            <!-- POST -->
                            <div class="post">
                                <div class="wrap-ut pull-left">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                            <img src="images/avatar2.jpg" alt="" />
                                            <div class="status red">&nbsp;</div>
                                        </div>

                                        <div class="icons">
                                            <img src="images/icon3.jpg" alt="" /><img src="images/icon4.jpg" alt="" /><img src="images/icon5.jpg" alt="" /><img src="images/icon6.jpg" alt="" />
                                        </div>
                                    </div>
                                    <div class="posttext pull-left">
                                        <h2><a href="02_topic.html">What Instagram Ads Will Look Like</a></h2>
                                        <p>Instagram offered a first glimpse at what its ads will look like in a blog post Thursday. The sample ad, which you can see below.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="postinfo pull-left">
                                    <div class="comments">
                                        <div class="commentbg">
                                            89
                                            <div class="mark"></div>
                                        </div>

                                    </div>
                                    <div class="views"><i class="fa fa-eye"></i> 1,568</div>
                                    <div class="time"><i class="fa fa-clock-o"></i> 15 min</div>                                    
                                </div>
                                <div class="clearfix"></div>
                            </div><!-- POST -->


                            <!-- POST -->
                            <div class="post">
                                <div class="wrap-ut pull-left">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                            <img src="images/avatar3.jpg" alt="" />
                                            <div class="status red">&nbsp;</div>
                                        </div>

                                        <div class="icons">
                                            <img src="images/icon2.jpg" alt="" /><img src="images/icon4.jpg" alt="" />
                                        </div>
                                    </div>
                                    <div class="posttext pull-left">
                                        <h2><a href="02_topic.html">The Future of Magazines Is on Tablets</a></h2>
                                        <p>Eric Schmidt has seen the future of magazines, and it's on the tablet. At a Magazine Publishers Association.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="postinfo pull-left">
                                    <div class="comments">
                                        <div class="commentbg">
                                            456
                                            <div class="mark"></div>
                                        </div>

                                    </div>
                                    <div class="views"><i class="fa fa-eye"></i> 1,568</div>
                                    <div class="time"><i class="fa fa-clock-o"></i> 2 days</div>                                    
                                </div>
                                <div class="clearfix"></div>
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
                            <div class="sidebarblock">
                                <h3>Sondage de la semaine</h3>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <p>Quel est votre Final Fantasy préféré ?</p>
                                    <form action="#" method="post" class="form">
                                        <table class="poll">
                                            <tr>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90.4%">
                                                            Final Fantasy VII
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="chbox">
                                                    <input id="opt1" type="radio" name="opt" value="1">  
                                                    <label for="opt1"></label>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar color2" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                                            Final Fantasy X
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="chbox">
                                                    <input id="opt2" type="radio" name="opt" value="2" checked>  
                                                    <label for="opt2"></label>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar color3" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                            Final Fantasy VIII
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="chbox">
                                                    <input id="opt3" type="radio" name="opt" value="3">  
                                                    <label for="opt3"></label>  
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                    <p class="smal">Les votes se terminent le 26 janvier 2017 !</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-xs-12">
                            <div class="pull-left"><a href="#" class="prevnext"><i class="fa fa-angle-left"></i></a></div>
                            <div class="pull-left">
                            <ul class="paginationforum">
                                    <?php 
                                    for($i=1;$i<=$pagesTotales;$i++){
                                        if($i == $pageCourante){
                                            echo $i.' ';
                                        } elseif ($i == $pageCourante+1){
                                            echo '<a href="index.php?page='.$i.'" class="suivant">'.$i.'</a></li> ';
                                        } else {
                                            echo '<li class="hidden-xs"><a href="index.php?page='.$i.'">'.$i.'</a></li> ';
                                        }
                                    }
                                    ?>
                                    </ul>
                                <ul class="paginationforum">
                                    
                                    <li class="hidden-xs"><a href="#">1</a></li>
                                    <li class="hidden-xs"><a href="#">2</a></li>
                                    <li class="hidden-xs"><a href="#">3</a></li>
                                    <li class="hidden-xs"><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">6</a></li>
                                    <li><a href="#" class="active">7</a></li>
                                    <li><a href="#">8</a></li>
                                    <li class="hidden-xs"><a href="#">9</a></li>
                                    <li class="hidden-xs"><a href="#">10</a></li>
                                    <li class="hidden-xs hidden-md"><a href="#">11</a></li>
                                    <li class="hidden-xs hidden-md"><a href="#">12</a></li>
                                    <li class="hidden-xs hidden-sm hidden-md"><a href="#">13</a></li>
                                    <li><a href="#">1586</a></li>
                                </ul>
                            </div>
                            <div class="pull-left"><a href="#" class="prevnext last"><i class="fa fa-angle-right"></i></a></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>


            </section>