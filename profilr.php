<!DOCTYPE html>
<html>
<head>
  <title>My Profile - Medium</title>
    <link rel="stylesheet" type="text/css" href="news.css">
     <!-- Remix icons -->
     <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"> 

  <style>
    /* styles.css */
.container-profile {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  position: relative;
  top: 120px;
}

.profile-head {
  text-align: center;
  padding-bottom: 20px;
}

.profile-header {
  margin-bottom: 20px;
}

.profile-picture img {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  margin-bottom: 10px;
}

main {
  padding-top: 20px;
}
section {
  margin-bottom: 20px;
}

h2 {
  font-size: 20px;
  margin: 0 0 10px;
} */

.post-list {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 20px;
}

.post {
  border: 1px solid #ccc;
  padding: 10px;
}

.post h3 {
  font-size: 18px;
  margin: 0 0 10px;
}

.post p {
  margin: 0;
}

.post a {
  display: inline-block;
  margin-top: 10px;
  color: #333;
  text-decoration: none;
  font-weight: bold;
}

.post a:hover {
  color: #000;
}

.for-profile-page {
  align-items: center;
  justify-content: center;
}

  </style>

  
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
                      <a href="#" class="list-link current">Home</a>
                  </li>
                  <li class="list-item">
                      <a href="categories.php" class="list-link">Categories</a>
                  </li>
                  <li class="list-item">
                      <a href="news.php" class="list-link">News</a>
                  </li>
                  <li class="list-item">
                      <a href="#" class="list-link">Membership</a>
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



  <!-- PROFILE PAGE -->
  <div class="container-profile">
    <div class="profile-head">
      <div class="profile-header">
        <!-- <div class="profile-picture">
          <img src="profile-picture.jpg" alt="Profile Picture">
        </div> -->
        <div class="author d-grid">
          <div class="author-image-box">
              <img src="imgs\passport.jpg" alt="" class="article-image">
          </div>
        <h1>Your Name</h1>
        <p>Job Title / Bio</p>
        <ul class="list social-media for-profile-page">
          <li class="list-item">
              <a href="#" class="list-link"><i class="ri-instagram-line"></i></a>
          </li>
          <li class="list-item">
              <a href="#" class="list-link"><i class="ri-facebook-circle-line"></i></a>
          </li>
          <li class="list-item">
              <a href="#" class="list-link"><i class="ri-twitter-line"></i></a>
          </li>
      </ul>
      <ul>
        <li><a href="#">Posts</a></li>
        <li><a href="#">Followers</a></li>
        <li><a href="#">Following</a></li>
        <li><a href="#">Edit Profile</a></li>
      </ul>
      </div>
      <nav>
        <!-- <ul>
          <li><a href="#">Posts</a></li>
          <li><a href="#">Followers</a></li>
          <li><a href="#">Following</a></li>
          <li><a href="#">Edit Profile</a></li>
        </ul> -->
      </nav>
    </div>
    <main>
      <section>
        <h2>About</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit commodo nisl eget rutrum.
          Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin
          pharetra sem et turpis placerat, vitae efficitur odio feugiat. Fusce at malesuada mi. Nullam
          gravida malesuada mauris, vel bibendum nulla consequat ac. Donec tristique, risus id tincidunt
          efficitur, tellus dolor pellentesque justo, in sollicitudin est purus in justo. Nullam ut ligula
          id nisl consequat tincidunt.
        </p>
      </section>
      <section>
        <h2>Posts</h2>
        <div class="post-list">
          <div class="post">
            <h3>Post Title</h3>
            <p>Post content goes here...</p>
            <a href="#">Read More</a>
          </div>
          <div class="post">
            <h3>Post Title</h3>
            <p>Post content goes here...</p>
            <a href="#">Read More</a>
          </div>
        </div>
      </section>
    </main>
  </div>
    <!-- Custom script -->
    <script src="news.js"></script>
</body>
</html>
