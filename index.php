
<?php
    $login = false;
    $name = "";

    if(isset($_COOKIE["login"]) && $_COOKIE["login"] == "1")
    {
        $login = true;
    }
    if(empty($_COOKIE["name"]))
    {
        header("Location: login/index.php");
       
    }
    else{
        
        $name = base64_decode($_COOKIE["name"]);

?>



<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/7ce396367e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Just Share</title>
</head>
<body>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo">
                <a href="index.html">
                    <i class="fab fa-slideshare"></i>
                <span>Just Share </span></a>           
            </div>
            <div class="search">
                <input type="text" placeholder="Search..."><i class="fas fa-search"></i>
                

            </div>
            <ul class="menu">
                <li><a href="" class="menu-btn"> <i class="far fa-question-circle"></i></a></li>
                <li><a href="" class="menu-btn"> <i class="fas fa-cog"></i></a></li>
                <li><a href="" class="menu-btn">
                    <div class="image"><img src="images/profil.bmp"></div></a></li>
                
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
    <main>
        <div class="max-width">
            <section class="left">
                <div class="menu">
                    <div class="title">Menu</div>
                    <div class="menu-left">
                        
                            <a href="" class="menu-btn"> <i class="fas fa-home"></i><span>Home</span></a>
                        
                            <a href="" class="menu-btn"><i class="fas fa-clipboard"></i><span>Posts</span></a>
                        
                            <a href="" class="menu-btn"> <i class="fas fa-envelope"></i><span>Messages</span></a>
                        
                            <a href="" class="menu-btn"><i class="fas fa-user-friends"></i><span>Friends</span></a>
                        
                            <a href="" class="menu-btn"><i class="fas fa-camera"></i><span>Photos</span></a>
                        
                    </div>
                    
                    <div class="f-groups">
                        <div class="title">Your Favorite Groups</div>
                        <div class="groups">
                        <a href="" class="menu-btn"> <div class="image"><img src="images/w3.jpg"></div><span>W3 School</span></a>
                        <a href="" class="menu-btn"> <div class="image"><img src="images/profil.bmp"></div><span>Codepen</span></a>
                        <a href="" class="menu-btn"> <div class="image"><img src="images/stack.png"></div><span>Stackoverflow</span></a>
                        <a href="" class="menu-btn"> <div class="image"><img src="images/js.png"></div><span>Javascript Developer</span></a>
                    </div>
                   
                </div>

            </section>
            <div class="middle">
            <section class="middle-top">
                <div class="post">
                    <div class="post-menu">
                        <?= $name ?>
                       
                        <a href="" class="menu-btn"> <span>Posts</span></a>
                    
                        <a href="" class="menu-btn"><span>Photos</span></a>
                    </div>
                    <div class="post-bottom">
                    <div class="image"><img src="images/profil.bmp"></div>
                    <div class="post-text">
                        <input type="text" placeholder="Write a post...">
                    </div>
                </div>
                </div>
            </section>

            <section class="middle-bottom">
            

                <div class="posts">
                    <div class="posts-info">
                        <div class="image">
                            <img src="images/frau.png">
                        </div>
                        <div class="posts-name">
                            
                                <div class="name">
                                    Ayse Acar
                                    <span>added 1 photo</span></div>
                                

                            <div class="posts-date">Today at.9.29 AM</div>
                        </div>
                        
                        
                    </div>
                    <div class="posts-content">
                        <div class="posts-title">Travelling to Austria</div>
                        <div class="posts-image">
                            <img src="images/freedom.jpg">
                        </div>

                        <div class="posts-like">
                            <div class="likes"></div>
                            <div class="comments"></div>
                        </div>



                    </div>
                    <div class="posts-allcommits">

                    </div>
                    
                    
                </div>
                


            </section>
        </div>
            <div class="right">
                
                <section class="right-top">
                    <div class="events">
                        <div class="title">Events</div>
                        <div class="events-list">
                            <a href="" class="menu-btn"> <i class="far fa-calendar"></i><span>2 Events</span></a>

                            <a href="" class="menu-btn"> <i class="fas fa-birthday-cake"></i><span>Can's birthday</span></a>

                        
                    </div>
                </section>
                <section class="right-bottom"></section>

            </div>
        </div>

    </main>
    <footer>
        <span>Created By <a href="https://github.com/BasakKurtLab">Basak Kurt</a> | <span class="far fa-copyright"></span>2021 All rights reserved</span>
    </footer>
  
    
  
</body>
</html>

<?php
    }
?>