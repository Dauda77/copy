<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Favicon -->
     <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon.png">
     <!-- Remix icons -->
     <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
     <!-- Swiper.js styles -->
     <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css"/>
     <!-- Custom styles -->
     <link rel="stylesheet" href="news.css">

    <title>categories</title>
</head>
<body>
    <!-- Header -->
    <header class="header" id="header">

        <nav class="navbar container">
            <a href="./index.php">
                <h2 class="logo">SJTalkss</h2>
            </a>

            <div class="menu" id="menu">
                <ul class="list">
                    <li class="list-item">
                        <a href="home.php" class="list-link">Home</a>
                    </li>
                    <li class="list-item">
                        <a href="categories.php" class="list-link current">Categories</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">News</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Membership</a>
                    </li>
                    <li class="list-item screen-lg-hidden">
                        <a href="sign-in.php" class="list-link">Sign in</a>
                    </li>
                    <li class="list-item screen-lg-hidden">
                        <a href="sign-up.php" class="list-link">Sign up</a>
                    </li>
                </ul>
            </div>

            <div class="list list-right">
                <button class="btn place-items-center" id="theme-toggle-btn">
                    <i class="ri-sun-line sun-icon"></i>
                    <i class="ri-moon-line moon-icon"></i>
                </button>

                <button class="btn place-items-center" id="search-icon">
                    <i class="ri-search-line"></i>
                </button>

                <button class="btn place-items-center screen-lg-hidden menu-toggle-icon" id="menu-toggle-icon">
                    <i class="ri-menu-3-line open-menu-icon"></i>
                    <i class="ri-close-line close-menu-icon"></i>
                </button>

                <a href="sign-in.php" class="list-link screen-sm-hidden">Sign in</a>
                <a href="sign-up.php" class="btn sign-up-btn fancy-border screen-sm-hidden">
                    <span>Sign up</span>
                </a>
            </div>

        </nav>

    </header>

    <!-- Search -->
    <div class="search-form-container container" id="search-form-container">

        <div class="form-container-inner">

            <form action="" class="form">
                <input class="form-input" type="text" placeholder="What are you looking for?">
                <button class="btn form-btn" type="submit">
                    <i class="ri-search-line"></i>
                </button>
            </form>
            <span class="form-note">Or press ESC to close.</span>

        </div>

        <button class="btn form-close-btn place-items-center" id="form-close-btn">
            <i class="ri-close-line"></i>
        </button>

    </div>


    <!-- categories -->
    <section class="blog-post section-header-offset">
        <div class="blog-post-container container">
            <div class="blog-post-data">
                <h3 class="title blog-post-title">Categories</h3>
            </div>
        </div>
    </section>
      
    <section class="categories">
        <div class="category-container">
            <a href="sports.php">
            <h1 class="category-title-a"><center>SPORTS</center></h1>
            <img src="imgs\footballpitch.jpg" alt="" class="category-image-a">
        </a>
        </div>

        <div class="category-container">
            <h1 class="category-title-b"><center>TECHNOLOGY</center></h1>
            <img src="imgs\coding.jpg" alt="" class="category-image-b">
        </div>

        <div class="category-container">
            <a href="space.php">
            <h1 class="category-title-c"><center>SPACE</center></h1>
            <img src="imgs\space.jpg" alt="" class="category-image-c">
            </a>
        </div>

        <div class="category-container">
            <a href="food.php">
            <h1 class="category-title-d"><center>FOOD</center></h1>
            <img src="imgs\foodB.jpg" alt="" class="category-image-d">
            </a>
        </div>

        <div class="category-container">
            <a href="archi.php">
            <h1 class="category-title-d"><center>ARCHITECTURE</center></h1>
            <img src="imgs\buil1.jpg" alt="" class="category-image-d">
            </a>
        </div>

        <div class="category-container">
            <a href="food.php">
            <h1 class="category-title-d"><center>NATURE</center></h1>
            <img src="imgs\nature1.jpg" alt="" class="category-image-d">
            </a>
        </div>
    </section>



    <!-- Footer -->
    <footer class="footer section footer-categories">

        <div class="footer-container container d-grid">
            
            <div class="company-data">
                <a href="./index.php">
                    <h2 class="logo">SJTalkss</h2>
                </a>
                <p class="company-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Facere, iure. Harum, animi dolores, nam, ad magni expedita.</p>
                
                <ul class="list social-media">
                    <li class="list-item">
                        <a href="#" class="list-link"><i class="ri-instagram-line"></i></a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link"><i class="ri-facebook-circle-line"></i></a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link"><i class="ri-twitter-line"></i></a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link"><i class="ri-pinterest-line"></i></a>
                    </li>
                </ul>

                <span class="copyright-notice">&copy;2023 SJTalkss. All rights reserved.</span>
            </div>

            <div>
                <h6 class="title footer-title">Categories</h6>
                
                <ul class="footer-list list">
                    <li class="list-item">
                        <a href="#" class="list-link">Travel</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Food</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Technology</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Health</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Nature</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Fitness</a>
                    </li>
                </ul>

            </div>

            <div>
                <h6 class="title footer-title">Useful links</h6>
                
                <ul class="footer-list list">
                    <li class="list-item">
                        <a href="#" class="list-link">Home</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Elements</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Tags</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Authors</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Membership</a>
                    </li>
                </ul>

            </div>

            <div>
                <h6 class="title footer-title">Company</h6>
                
                <ul class="footer-list list">
                    <li class="list-item">
                        <a href="#" class="list-link">Contact us</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">F.A.Q</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Careers</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Authors</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Memberships</a>
                    </li>
                </ul>

            </div>

        </div>
        
    </footer>

<!-- Swiper.js -->
<script src="./assets/js/swiper-bundle.min.js"></script>
<!-- Custom script -->
<script src="news.js"></script>
   
</body>
</html>