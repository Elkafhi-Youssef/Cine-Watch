
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="stylesheet" href="<?php echo URLROOT.DS.'public/css/index.css'; ?>">
        <link rel="stylesheet" href="<?php echo URLROOT.DS.'public/css/post.css'; ?>">
        <link rel="stylesheet" href="<?= URLROOT.DS.'public/css/home.css';?>" >
        <link rel="stylesheet" href="<?php echo URLROOT.DS.'public/css/profile.css'; ?>">
    <title>Movie Design</title>
</head>

<body>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <a style="text-decoration: none ;color:red;" href="http://127.0.0.1/breif_5/AllPosts">
                    <h1 class="logo">Cine Watch</h1>
                </a>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    <li class="menu-list-item active">Home</li>
                    <li class="menu-list-item">Movies</li>
                    <li class="menu-list-item">Series</li>
                    <!-- <li class="menu-list-item">Popular</li>
                    <li class="menu-list-item">Trends</li> -->

                </ul>
            </div>
            <div class="profile-container">
               <a href="<?=URLROOT.'/ProfileC/getAllPostsUser/'.$_SESSION['user_id'];?>">

                   <img class="profile-picture" src="<?php echo URLROOT.DS.'public/img/profile.jpg'; ?>" alt="">
               </a> 
                <div class="profile-text-container">
                    <span class="profile-text">
                        <a style="color: white;text-decoration: none;" href="<?=URLROOT.'/home/logout';?>">log out</a>
                    <span style="font-size: 10px;">
                       (<?=$_SESSION['fullname'];?>)</span>
                    </span>    
                   
                </div>
                <!-- <div class="toggle">
                    <i class="fas fa-moon toggle-icon"></i>
                    <i class="fas fa-sun toggle-icon"></i>
                    <div class="toggle-ball"></div>
                </div> -->
            </div>
        </div>
    </div>





















