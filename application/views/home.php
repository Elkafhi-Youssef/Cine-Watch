<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URLROOT.DS.'public/css/home.css';?>" >
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
      rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Home page</title>
</head>
<body>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <h1 class="logo">Cine Watch</h1>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    <li class="menu-list-item active"><a href="">Home</a></li>
                    <li class="menu-list-item"><a href="">Movies</a></li>
                    <li class="menu-list-item"><a href="">Series</a></li>
                    
                </ul>
            </div>
            <div class="profile-container">
                
                <ul class="register">
                    <li class="register__item singin "><a href="">Sing in</a></li>
                    <li class="register__item singup"><a href="">Sing up</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="content-container">
            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('<?= URLROOT."/public/img/f-1.jpg";?>' );">
                <img class="featured-title" src="<?= URLROOT.DS.'public/img/f-t-1.png';?>" alt="">
                <p class="featured-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto illo dolor
                    deserunt nam assumenda ipsa eligendi dolore, ipsum id fugiat quo enim impedit, laboriosam omnis
                    minima voluptatibus incidunt. Accusamus, provident.</p>
                <button class="featured-button">WATCH</button>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">Movies</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="<?= URLROOT.DS.'public/img/1.jpeg';?>" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
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
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="movie-list-container">
                <h1 class="movie-list-title">NEW RELEASES</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="<?= URLROOT.DS.'public/img/8.jpg';?>" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="<?= URLROOT.DS.'public/img/9.jpg';?>" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="<?= URLROOT.DS.'public/img/10.jpg';?>" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="<?= URLROOT.DS.'public/img/11.jpg';?>" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="<?= URLROOT.DS.'public/img/12.jpg';?>" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="<?= URLROOT.DS.'public/img/13.jpg';?>" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="<?= URLROOT.DS.'public/img/14.jpg';?>" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('<?= URLROOT."/public/img/f-2.jpg";?>');">
                <img class="featured-title" src="<?= URLROOT."/public/img/f-2.jpg";?>" alt="">
                <p class="featured-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto illo dolor
                    deserunt nam assumenda ipsa eligendi dolore, ipsum id fugiat quo enim impedit, laboriosam omnis
                    minima voluptatibus incidunt. Accusamus, provident.</p>
                <button class="featured-button">WATCH</button>
            </div> -->
            <div class="movie-list-container">
                <h1 class="movie-list-title">Series</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="<?= URLROOT.DS.'public/img/1.jpeg';?>" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="<?= URLROOT.DS.'public/img/2.jpeg';?>" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="<?= URLROOT.DS.'public/img/15.jpg';?>" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="<?= URLROOT.DS.'public/img/3.jpg';?>" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="<?= URLROOT.DS.'public/img/4.jpg';?>" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="<?= URLROOT.DS.'public/img/15.jpg';?>" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="<?= URLROOT.DS.'public/img/1.jpg';?>" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="movie-list-container">
                <h1 class="movie-list-title">NEW RELEASES1</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="<?= URLROOT.DS.'public/img/17.jpg';?>" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="<?= URLROOT.DS.'public/img/18.jpg';?>" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="<?= URLROOT.DS.'public/img/19.jpg';?>" alt="">
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
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="<?= URLROOT.DS.'public/img/1.jpeg';?>" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src=""<?= URLROOT.DS.'public/img/1.jpeg';?>"" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="<?= URLROOT.DS.'public/img/1.jpeg';?>" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <div class="container_form">
        <div class="login-box">
            <div class="close">
            <img src="<?= URLROOT."/public/img/x.svg";?>" alt="">
            </div>
            <h2>Sing in</h2>
            <form action="<?= URLROOT."/AllPosts/login";?>" method="POST">
                <div class="user-box">
                    <input type="text" name="email" required="">
                    <label>Email</label>
                 </div>
                <div class="user-box">
                    <input type="password" name="password" required="">
                    <label>Password</label>
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
    <div class="container_form1 ">
        <div class="login-box">
            <div class="close">
            <img src="<?= URLROOT."/public/img/x.svg";?>" alt="">
            </div>
            <h2>Sing up</h2>
            <form action="<?= URLROOT."/AllPosts/register";?>" method="POST">
            <div class="user-box">
                    <input type="text" name="fullname" required="">
                    <label>Fullname</label>
                 </div>
                <div class="user-box">
                    <input type="text" name="email" required="">
                    <label>Email</label>
                 </div>
                 <div class="user-box">
                    <input type="text" name="country" required="">
                    <label>country</label>
                 </div>
                 <div class="user-box">
                 <select name="gender" id="">
                        <option value="select your gender">select your gender</option>
                        <option value="homme">Homme</option>
                        <option value="femme">Femme</option>
                    </select>
                 </div> 

                <div class="user-box">
                    <input type="password" name="password" required="">
                    <label>Password</label>
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
    const closeLogin = document.querySelectorAll(".close");
    const container_form = document.querySelector(".container_form");
    const container_form1 = document.querySelector(".container_form1");
    const singin = document.querySelector(".singin");
    const singup = document.querySelector(".singup");
    singup.addEventListener('click',(e)=>{
        console.log("here");
        e.preventDefault();
        container_form1.style.display = 'block';
        container_form.style.display = 'none';
    })
    singin.addEventListener('click',(e)=>{
        e.preventDefault();
        container_form.style.display = 'block';
        container_form1.style.display = 'none';
    })
    console.log(closeLogin);
    const arrayClose = closeLogin.forEach((btnclose)=>{
        btnclose.addEventListener('click',(e)=>{
        e.preventDefault();
        container_form.style.display = 'none';
        container_form1.style.display = 'none';
    })
    })
    
</script>
</body>

</html>