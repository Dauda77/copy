<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SJTalkss</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="imgs\favicon-32x32.png">
    <!-- Remix icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Swiper.js styles -->
    <!-- <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css"/> -->
    <!-- Custom styles -->
    <link rel="stylesheet" href="news.css">
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
                        <a href="home.php" class="list-link current">Home</a>
                    </li>
                    <li class="list-item">
                        <a href="categories.php" class="list-link">Categories</a>
                    </li>
                    <li class="list-item">
                        <a href="news.php" class="list-link ">News</a>
                    </li>
                    <li class="list-item">
                        <a href="comment.php" class="list-link">Comments</a>
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

    <!-- Featured articles -->
    <section class="featured-articles section section-header-offset">

        <div class="featured-articles-container container d-grid">

            <div class="featured-content d-grid">

                <div class="headline-banner">
                    <h3 class="headline fancy-border">
                        <span class="place-items-center">Breaking news</span>
                    </h3>
                    <span class="headline-description">Apple announces a new partnership...</span>
                    
                </div>

                <a href="./post.php" class="article featured-article featured-article-1">
                    <img src="imgs\architecture.jpg" alt="" class="article-image">
                    <span class="article-category">Technology</span>

                    <div class="article-data-container">

                        <div class="article-data">
                            <span>Avr 5th 2023</span>
                            <span class="article-data-spacer"></span>
                            <span>8 Min read</span>
                        </div>

                        <h3 class="title article-title">Smart Homes</h3>

                    </div>
                </a>

                <a href="./post.php" class="article featured-article featured-article-2">
                    <img src="imgs\run.jpg" alt="" class="article-image">
                    <span class="article-category">Sports</span>

                    <div class="article-data-container">

                        <div class="article-data">
                            <span>Avr 15th 2023</span>
                            <span class="article-data-spacer"></span>
                            <span>4 Min read</span>
                        </div>

                        <h3 class="title article-title">ESPY Awards</h3>

                    </div>
                </a>

                <a href="./post.php" class="article featured-article featured-article-3">
                    <img src="imgs\nature.jpg" alt="" class="article-image">
                    <span class="article-category">Nature</span>

                    <div class="article-data-container">

                        <div class="article-data">
                            <span>Avr 20th 2023</span>
                            <span class="article-data-spacer"></span>
                            <span>5 Min read</span>
                        </div>

                        <h3 class="title article-title">Top 5 Natural Destinations</h3>  

                    </div>
                </a>

            </div>
            
            <div class="sidebar d-grid">

                <h3 class="title featured-content-title">Trending news</h3>

                <a href="#" class="trending-news-box">
                    <div class="trending-news-img-box">
                        <span class="trending-number place-items-center">01</span>
                        <img src="imgs\coding.jpg" alt="" class="article-image">
                    </div>

                    <div class="trending-news-data">

                        <div class="article-data">
                            <span>23 Mars 2023</span>
                            <span class="article-data-spacer"></span>
                            <span>3 Min read</span>
                        </div>

                        <h3 class="title article-title">Sample article title</h3>

                    </div>
                </a>

                <a href="#" class="trending-news-box">
                    <div class="trending-news-img-box">
                        <span class="trending-number place-items-center">02</span>
                        <img src="imgs\footballpitch.jpg" alt="" class="article-image">
                    </div>

                    <div class="trending-news-data">

                        <div class="article-data">
                            <span>26 Mars 2023</span>
                            <span class="article-data-spacer"></span>
                            <span>3 Min read</span>
                        </div>

                        <h3 class="title article-title">Sample article title</h3>

                    </div>
                </a>

                <a href="#" class="trending-news-box">
                    <div class="trending-news-img-box">
                        <span class="trending-number place-items-center">03</span>
                        <img src="imgs\space.jpg" alt="" class="article-image">
                    </div>

                    <div class="trending-news-data">

                        <div class="article-data">
                            <span>29 Mars 2023</span>
                            <span class="article-data-spacer"></span>
                            <span>3 Min read</span>
                        </div>

                        <h3 class="title article-title">Sample article title</h3>

                    </div>
                </a>

                <a href="#" class="trending-news-box">
                    <div class="trending-news-img-box">
                        <span class="trending-number place-items-center">04</span>
                        <img src="imgs\weight.jpg" alt="" class="article-image">
                    </div>

                    <div class="trending-news-data">

                        <div class="article-data">
                            <span>06 Avr 2023</span>
                            <span class="article-data-spacer"></span>
                            <span>3 Min read</span>
                        </div>

                        <h3 class="title article-title">Sample article title</h3>

                    </div>
                </a>

                <a href="#" class="trending-news-box">
                    <div class="trending-news-img-box">
                        <span class="trending-number place-items-center">05</span>
                        <img src="imgs\foodB.jpg" alt="" class="article-image">
                    </div>

                    <div class="trending-news-data">

                        <div class="article-data">
                            <span>13 Avr 2023</span>
                            <span class="article-data-spacer"></span>
                            <span>3 Min read</span>
                        </div>

                        <h3 class="title article-title">Sample article title</h3>

                    </div>
                </a>

            </div>

        </div>

    </section>

   
    <!-- Popular tags -->
    <section class="popular-tags section">

        <div class="container">

            <h2 class="title section-title" data-name="Popular tags">Popular tags</h2>
            

            <div class="popular-tags-container d-grid">

                <a href="#" class="article">
                    <span class="tag-name">#Travel</span>
                    <img src="imgs\architecture.jpg" alt="" class="article-image">
                </a>

                <a href="#" class="article">
                    <span class="tag-name">#Food</span>
                    <img src="imgs\foodC.jpg" alt="" class="article-image">
                </a>

                <a href="#" class="article">
                    <span class="tag-name">#Technology</span>
                    <img src="imgs\technology.jpg" alt="" class="article-image">
                </a>

                <a href="#" class="article">
                    <span class="tag-name">#Health</span>
                    <img src="imgs\pitch.jpg" alt="" class="article-image">
                </a>

                <a href="#" class="article">
                    <span class="tag-name">#Nature</span>
                    <img src="imgs\nature.jpg" alt="" class="article-image">
                </a>

                <a href="#" class="article">
                    <span class="tag-name">#Fitness</span>
                    <img src="imgs\weight.jpg" alt="" class="article-image">
                </a>

            </div>

        </div>
    </section>
                  
    <!--  -->

    <div id="weat" class="meteo"></div>

    <!--  -->

    <!-- Newsletter -->
    <section class="newsletter section">

        <div class="container">

            <h2 class="title section-title" data-name="Newsletter">Newsletter</h2>

            <div class="form-container-inner">
                <h6 class="title newsletter-title">Subscribe to SJTalkss</h6>
                <p class="newsletter-description">Lorem ipsum dolor sit amet consectetur adipisicing quaerat dignissimos.</p>

                <form action="" class="form">
                    <input class="form-input" type="text" placeholder="Enter your email address">
                    <button class="btn form-btn" type="submit">
                        <i class="ri-mail-send-line"></i>
                    </button>
                </form>

            </div>

        </div>

    </section>

    <!-- Footer -->
    <footer class="footer section">

        <div class="footer-container container d-grid">
            
            <div class="company-data">
                <a href="home.php">
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
    <!-- Meteo JS -->
    <script async src="meteo.js"></script>
    <script  async src="translate.js"></script>
</body>
</html>