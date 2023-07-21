<!DOCTYPE html>
<html>
<head>
  <title>My Profile</title>
    <link rel="stylesheet" type="text/css" href="news.css">
     <!-- Remix icons -->
     <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"> 


  
</head>
<body>
  
    <!-- Header -->
    <header class="header" id="header">

      <nav class="navbar container">
          <a href="home.php">
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
                      <a href="news.php" class="list-link">News</a>
                  </li>
                  <li class="list-item">
                      <a href="comment.php" class="list-link">comments</a>
                  </li>
                  <li class="list-item screen-lg-hidden">
                      <a href="signing/sign-in.php" class="list-link">Sign in</a>
                  </li>
                  <li class="list-item screen-lg-hidden">
                      <a href="signing/sign-up.php" class="list-link">Sign up</a>
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

              <a href="signing/sign-in.php" class="list-link screen-sm-hidden">Sign in</a>
              <a href="signing/sign-up.php" class="btn sign-up-btn fancy-border screen-sm-hidden">
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