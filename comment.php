<?php
include("headercomment.php")
?>

    <!----------------------------------------------------- Comments  --------------------------------------------------->

  <div class="containus">
    <h1>Comments</h1>
    <div id="comments"></div>

    <h2>Add a Comment</h2>
    <form id="comment-form">
      <input type="text" id="usernamus" placeholder="Your Name" required><br>
      <textarea id="comment-content" placeholder="Your Comment" required></textarea><br>
      <input type="hidden" id="post-title" value="Anime"> <!-- Replace with actual post title -->
      <input type="submit" value="Submit Comment">
    </form>
  </div>

  <script src="news.js"></script>
  <script async src="commie.js"></script>
</body>
</html>
