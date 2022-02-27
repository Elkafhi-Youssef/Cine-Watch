<div class="container_form">
        <div class="login-box">
            <div class="close">
            <img src="<?= URLROOT."/public/img/x.svg";?>" alt="">
            </div>
            <h2>Add post</h2>
            <form method="POST" action="<?= URLROOT.'/Post/updatePost/'.$data['id_post'];?>" enctype="multipart/form-data">
                <div class="user-box">
                    <input type="text" value="<?= $data['title_film'];?>" name="title" required="">
                    <label>Film Title</label>
                 </div>
                 <div class="user-box">
                    <input type="text" value="<?= $data['countryFilm'];?>" name="country" required="">
                    <label>Country </label>
                 </div>
                <div style="display:none;" class="user-box">
                    <input type="text" value="1" name="id_user" required="">
                    <label>id_user</label>
                </div>
                <div  class="user-box">
                    <input type="text" value="<?= $data['descFilm'];?>" name="description" required="">
                    <label>Description</label>
                </div>
                <div class="user-box">
                    <select  name="genre" id="">
                        <option value="<?= $data['genreFilm'];?>"><?= $data['genreFilm'];?></option>
                        <option value="Anime">Anime</option>
                        <option value="Action">Action</option>
                        <option value="Comedy">Comedy</option>
                        <option value="Drama">Drama</option>
                    </select>
                </div>
                <div class="user-box">
                    <select name="category" id="">
                        <option value="<?= $data['categoryFilm'];?>"><?= $data['categoryFilm'];?></option>
                        <option value="Movies">Movies</option>
                        <option value="Serials">Serials</option>
                    </select>
                </div>
                <div class="user-box">
                    <input type="file" value="<?= $data['imageFilm'];?>" name="image" id="">
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