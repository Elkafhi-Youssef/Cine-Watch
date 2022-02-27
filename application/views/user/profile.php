<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'user.nav.php';?>

<div class="container">
        <div class="content-container">
            <div class="info__user"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('<?= URLROOT."/public/img/f-1.jpg";?>');">
                <img class="featured-title" src="<?php echo URLROOT.DS.'public/upload/profile youssef.jpeg';?>" alt="">
               <div class="detail_info">
                    <h3 class="fullname"><?= $data[0]['Fullname'];?></h3>
                    <h3 class="countryp"><?= $data[0]['country'];?></h3>
                    <h3 class="email"><?= $data[0]['email'];?></h3>
                    <h3 class="gender"><?= $data[0]['gender'];?></h3>
                    <h3 class="age">22 years</h3>
               </div>
               <div class="detail_info">
                <h3 class="fullname">Number of  Post: 44</h3>
                <button class="movie-list-item-butto btn_add">add Post</button>
           </div>
               
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">NEW RELEASES</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <?php foreach($data as $value){ ?>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="<?= URLROOT.DS.'public/upload/'.$value['imageFilm'];?>" alt="">
                            <span class="movie-list-item-title"><?= $value['title_film'];?></span>
                            <p class="movie-list-item-desc"><?= $value['descFilm'];?></p>
                                <div class="btns_control">
                                    
                                    <button class="movie-list-item-button btn1">
                                    <a href="<?=URLROOT.'/post/showPost/'.$value['id_post'];?>">Read</a>    
                                   </button>
                                    <button class="movie-list-item-button btn2">
                                    <a href="<?=URLROOT.'/post/deletePost/'.$value['id_post'];?>">Delete</a> </button>
                                    <button class="movie-list-item-button btn3">
                                    <a href="<?=URLROOT.'/post/updatePost/'.$value['id_post'];?>">update</a>
                                    </button>

                                </div>
                        </div>
                        <?php } ?>
                        <!-- <div class="movie-list-item">
                            <img class="movie-list-item-img" src="<?= URLROOT.DS.'public/img/2.jpeg';?>" alt="">
                            <span class="movie-list-item-title">Star Wars</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="<?= URLROOT.DS.'public/img/3.jpg';?>" alt="">
                            <span class="movie-list-item-title">Storm</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="<?= URLROOT.DS.'public/img/4.jpg';?>" alt="">
                            <span class="movie-list-item-title">1917</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="<?= URLROOT.DS.'public/img/5.jpg';?>" alt="">
                            <span class="movie-list-item-title">Avengers</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="<?= URLROOT.DS.'public/img/6.jpg';?>" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="<?= URLROOT.DS.'public/img/7.jpg';?>" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div> -->
                    </div>
                    
                </div>
            </div>

        </div>
</div>
    <div class="container_form">
        <div class="login-box">
            <div class="close">
            <img src="<?= URLROOT."/public/img/x.svg";?>" alt="">
            </div>
            <h2>Add post</h2>
            <form method="POST" action="<?= URLROOT.'/Post/addPost';?>" enctype="multipart/form-data">
                <div class="user-box">
                    <input type="text" name="title" required="">
                    <label>Film Title</label>
                 </div>
                 <div class="user-box">
                    <input type="text" name="country" required="">
                    <label>Country </label>
                 </div>
                <div style="display:none;" class="user-box">
                    <input type="text" value="1" name="id_user" required="">
                    <label>id_user</label>
                </div>
                <div  class="user-box">
                    <input type="text" value="" name="description" required="">
                    <label>Description</label>
                </div>
                <div class="user-box">
                    <select  name="genre" id="">
                        <option value="">Genre Film</option>
                        <option value="Anime">Anime</option>
                        <option value="Action">Action</option>
                        <option value="Comedy">Comedy</option>
                        <option value="Drama">Drama</option>
                    </select>
                </div>
                <div class="user-box">
                    <select name="category" id="">
                        <option value="">Category</option>
                        <option value="Movies">Movies</option>
                        <option value="Serials">Serials</option>
                    </select>
                </div>
                <div class="user-box">
                    <input type="file" name="image" id="">
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
<script src="<?= URLROOT.DS.'public/js/app.js';?>"></script>
<script>
    const closeAddform = document.querySelector(".close");
    const container_form = document.querySelector(".container_form");
    const btn_add = document.querySelector(".btn_add");
    btn_add.addEventListener('click',(e)=>{
        e.preventDefault();
        container_form.style.display = 'block';
    })
    closeAddform.addEventListener('click',(e)=>{
        e.preventDefault();
        console.log(closeAddform)
        container_form.style.display = 'none';
    })
</script>
    <!-- <script src="app.js"></script> -->
</body>

</html>


<!-- <?php require_once VIEWS_PATH.DS.'views.inc'.DS.'user.footer.php';?> -->