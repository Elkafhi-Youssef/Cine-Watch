<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'user.nav.php';?>


       

      <div class="container">
        <div class="content-container">
            <div class="info__userPost"
                style="background: linear-gradient(to bottom, rgba(19, 16, 16, 0), #151515), url('<?= URLROOT."/public/upload/".$data[0]['imageFilm'];?>') ;background-size: 100%;">

                <div class="info_film">
                   <img class="img_film" src="<?= URLROOT.DS.'public/upload/'.$data[0]['imageFilm'];?>" alt="">
                   <div class="information">
                        <div >
                            <h4 class="title_film"><?=$data[0]['title_film'];?></h4>
                            <h4 class="country"><?=$data[0]['countryFilm'];?></h4>
                        </div>
                       <p class="description">
                           <?=$data[0]['descFilm'];?>
                        </p>
                    </div>
                </div>
                <div class="comment_info">
                    <div class="comments">
                        
                        <?php foreach($data[1] as $value){ ?>
                        <div class="comment">
                            <div class="head_comment">
                                <h4><?=$value['Fullname'];?></h4>
                                <?php $date = explode(' ',$value['dateComment'])?>
                                <h4><?=$date[0]?></h4>
                            </div>
                            <div class="content_comment">
                                <p><?=$value['descComment'];?> </p>
                            </div>
                        </div>
                        <?php } ?>
                       
                        
                        <form class="form_comment" method="post" action="<?= URLROOT.'/Post/addComment/'.$data[0]['id_post'];?>">
                            <div class="input_comment">
                                <input type="text" name="comment" id="">
                                <input style="display:none; background-color: #bf0000;" type="number" value="<?=$_SESSION['user_id'];?>" name="id_user" id="">
                                <!-- <input type="number" value="3" name="id_post" id=""> -->
                                <button class="send_comment" type="submit">send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="app.js"></script> -->
</body>

</html>






