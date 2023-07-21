<?php 
include("headerprofile.php")
?>


  <!-- PROFILE PAGE -->
  <div class="container-profilee">
    <div class="profilee-head">
      <div class="profilee-header">
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
    </div>
    <form method="post" action="logout.php">
  <input type="submit" class="disconnect" name="disconnect" value="Déconnexion"></input>
  </form>
    <main class="mainee">
      <section class="sect">
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
      <section class="sect">
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
