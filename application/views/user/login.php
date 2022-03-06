<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'user.nav.php';?>

<div style="display: block;" class="container_form">
        <div class="login-box">
            <div class="close">
            <img src="<?= URLROOT."/public/img/x.svg";?>" alt="">
            </div>
            <h2>Sing in</h2>
            <form action="<?= URLROOT."/AllPosts/login";?>" method="POST">
                <div class="user-box">
                    <input style="border-radius: 0;" type="text" name="email">
                    <label>Email</label>
                    <span style="color: red;font-size: 10px;"><?= $data['email_error'];?></span>
                 </div>
                <div class="user-box">
                    <input style="border-radius: 0;" type="password" name="password" >
                    <label>Password</label>
                    <span style="color: red;font-size: 10px;"><?= $data['password_error'];?></span>
                </div>
           <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
           <button type="submit">Submit</button> 
          </a>
         </form>
      </div>
</div>










