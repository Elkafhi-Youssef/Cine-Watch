<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'user.nav.php';?>

<!-- <div style="margin-left: 0px;"  class="edit pop ">
        <form action="<?= URLROOT.DS.'User'.DS.'modifyPatient/'.$data['id_patient'] ?>" method="POST">
          <div>
              <label>fullname :</label>
          <input type="text" value="<?php echo $data['fn_patient'];?>" name="fullname" id="fullname">
          </div>
          <div>
              <label>Birthday :</label>
              <input type="Date" value="<?php echo $data['date_birth'];?>" name="date" id="date">
          </div>
          <div>
              <label>Email :</label>
              <input type="email"value="<?php echo $data['email_patient'];?>" name="gmail" id="email">
          </div>
          <div>
              <label>password :</label>
              <input type="password" value="<?php echo $data['passwod'];?>" name="password" id="password">
          </div>
          <div>
              <select style="margin-top: 20px;" value="" name="sickness" id="">
                <option selected value="<?php echo $data['type_sickness'];?>"><?php echo $data['type_sickness'];?></option>
                <option value="sickness1">sickness1</option>
                <option value="sickness2">sickness2</option>
                <option value="sickness3">sickness3</option>
                <option value="sickness4">sickness4</option>
              </select>
              
          </div>
          <div>
              <label>
             <img src="<?php echo URLROOT.DS.'public/images/doctor2.png'; ?>" alt=""></label>
          </div>
          <div class="button">
            <button type="submit">Edit</button>
          </div>
        </form>
      </div> -->
       

      <div class="container">
        <div class="content-container">
            <div class="info__user"
                style="background: linear-gradient(to bottom, rgba(19, 16, 16, 0), #151515), url('<?= URLROOT."/public/upload/".$data[0]['imageFilm'];?>') ;background-size: 100%;">

                <div class="info_film">
                   <img class="img_film" src="<?= URLROOT.DS.'public/upload/'.$data[0]['imageFilm'];?>" alt="">
                   <div class="information">
                        <div t>
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






