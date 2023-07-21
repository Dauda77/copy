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

    <title>SPACE</title>
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
                        <a href="categories.php" class="list-link">Categories</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link current">News</a>
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

    <!----------------------------------------------------- News  --------------------------------------------------->

    <section class="blog-post section-header-offset">
        <div class="blog-post-container container">
            <div class="blog-post-data">
                <h3 class="title blog-post-title">SPACE</h3>
            </div>
        </div>
    </section>

    <section class="news-posts section">

        <div class="container">


            <div class="news-posts-grid-wrapper d-grid">


                <a href="#" class="article d-grid">
                    <div class="news-posts-article-image-wrapper">
                        <img src="imgs\space.jpg" alt="" class="article-image">
                    </div>

                    <div class="article-data-container">

                        <div class="article-data">
                            <span>19 Mars 2023</span>
                            <span class="article-data-spacer"></span>
                            <span>3 Min read</span>
                        </div>

                        <h3 class="title article-title">Sample article title</h3>
                        <p class="article-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique a tempore sapiente corporis, eaque fuga placeat odit voluptatibus.</p>

                    </div>
                </a>

                <a href="#" class="article d-grid">
                    <div class="news-posts-article-image-wrapper">
                        <img src="imgs\SpaceA.jpg" alt="" class="article-image">
                    </div>

                    <div class="article-data-container">

                        <div class="article-data">
                            <span>19 Mars 2023</span>
                            <span class="article-data-spacer"></span>
                            <span>3 Min read</span>
                        </div>

                        <h3 class="title article-title">Sample article title</h3>
                        <p class="article-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique a tempore sapiente corporis, eaque fuga placeat odit voluptatibus.</p>

                    </div>
                </a>

                <a href="#" class="article d-grid">
                    <div class="news-posts-article-image-wrapper">
                        <img src="imgs\SpaceB.jpg" alt="" class="article-image">
                    </div>

                    <div class="article-data-container">

                        <div class="article-data">
                            <span>19 Mars 2023</span>
                            <span class="article-data-spacer"></span>
                            <span>3 Min read</span>
                        </div>

                        <h3 class="title article-title">Sample article title</h3>
                        <p class="article-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique a tempore sapiente corporis, eaque fuga placeat odit voluptatibus.</p>

                    </div>
                </a>


                <a href="#" class="article d-grid">
                    <div class="news-posts-article-image-wrapper">
                        <img src="imgs\SpaceC.jpg" alt="" class="article-image">
                    </div>

                    <div class="article-data-container">

                        <div class="article-data">
                            <span>19 Mars 2023</span>
                            <span class="article-data-spacer"></span>
                            <span>3 Min read</span>
                        </div>

                        <h3 class="title article-title">Sample article title</h3>
                        <p class="article-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique a tempore sapiente corporis, eaque fuga placeat odit voluptatibus.</p>

                    </div>
                </a>


                <a href="#" class="article d-grid">
                    <div class="news-posts-article-image-wrapper">
                        <img src="imgs\SpaceD.jpg" alt="" class="article-image">
                    </div>

                    <div class="article-data-container">

                        <div class="article-data">
                            <span>19 Mars 2023</span>
                            <span class="article-data-spacer"></span>
                            <span>3 Min read</span>
                        </div>

                        <h3 class="title article-title">Sample article title</h3>
                        <p class="article-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique a tempore sapiente corporis, eaque fuga placeat odit voluptatibus.</p>

                    </div>
                </a>

                <a href="#" class="article d-grid">
                    <div class="news-posts-article-image-wrapper">
                        <img src="imgs\SpaceE.jpg" alt="" class="article-image">
                    </div>

                    <div class="article-data-container">

                        <div class="article-data">
                            <span>19 Mars 2023</span>
                            <span class="article-data-spacer"></span>
                            <span>3 Min read</span>
                        </div>

                        <h3 class="title article-title">Sample article title</h3>
                        <p class="article-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique a tempore sapiente corporis, eaque fuga placeat odit voluptatibus.</p>

                    </div>
                </a>


                <a href="#" class="article d-grid">
                    <div class="news-posts-article-image-wrapper">
                        <img src="imgs\SpaceF.jpg" alt="" class="article-image">
                    </div>

                    <div class="article-data-container">

                        <div class="article-data">
                            <span>19 Mars 2023</span>
                            <span class="article-data-spacer"></span>
                            <span>3 Min read</span>
                        </div>

                        <h3 class="title article-title">Sample article title</h3>
                        <p class="article-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique a tempore sapiente corporis, eaque fuga placeat odit voluptatibus.</p>

                    </div>
                </a>


                <a href="#" class="article d-grid">
                    <div class="news-posts-article-image-wrapper">
                        <img src="imgs\SpaceG.jpg" alt="" class="article-image">
                    </div>

                    <div class="article-data-container">

                        <div class="article-data">
                            <span>19 Mars 2023</span>
                            <span class="article-data-spacer"></span>
                            <span>3 Min read</span>
                        </div>

                        <h3 class="title article-title">Sample article title</h3>
                        <p class="article-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique a tempore sapiente corporis, eaque fuga placeat odit voluptatibus.</p>

                    </div>
                </a>

                <a href="#" class="article d-grid">
                    <div class="news-posts-article-image-wrapper">
                        <img src="imgs\SpaceH.jpg" alt="" class="article-image">
                    </div>

                    <div class="article-data-container">

                        <div class="article-data">
                            <span>19 Mars 2023</span>
                            <span class="article-data-spacer"></span>
                            <span>3 Min read</span>
                        </div>

                        <h3 class="title article-title">Sample article title</h3>
                        <p class="article-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique a tempore sapiente corporis, eaque fuga placeat odit voluptatibus.</p>

                    </div>
                </a>

                <a href="#" class="article d-grid">
                    <div class="news-posts-article-image-wrapper">
                        <img src="imgs\SpaceI.jpg" alt="" class="article-image">
                    </div>

                    <div class="article-data-container">

                        <div class="article-data">
                            <span>19 Mars 2023</span>
                            <span class="article-data-spacer"></span>
                            <span>3 Min read</span>
                        </div>

                        <h3 class="title article-title">Sample article title</h3>
                        <p class="article-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique a tempore sapiente corporis, eaque fuga placeat odit voluptatibus.</p>

                    </div>
                </a>

                <a href="#" class="article d-grid">
                    <div class="news-posts-article-image-wrapper">
                        <img src="imgs\SpaceJ.jpg" alt="" class="article-image">
                    </div>

                    <div class="article-data-container">

                        <div class="article-data">
                            <span>19 Mars 2023</span>
                            <span class="article-data-spacer"></span>
                            <span>3 Min read</span>
                        </div>

                        <h3 class="title article-title">Sample article title</h3>
                        <p class="article-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique a tempore sapiente corporis, eaque fuga placeat odit voluptatibus.</p>

                    </div>
                </a>

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
    
</body>
</html>