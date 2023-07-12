<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php"><img style="height: 50px;" src="logo.png" alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="course.php">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <?php
          // Check if the user is logged in
          $isLoggedIn = false; // Replace with your logic to determine if the user is logged in or not

          // Show different options based on the login status
          if ($isLoggedIn) {
            echo '
              <li class="nav-item">
                <a class="nav-link" href="user.php">Participants</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="course.php">Course</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="jobs.php">Jobs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="forums.php">Forums</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
            ';
          } else {
            echo '
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
            ';
          }
        ?>
      </ul>
    </div>
  </nav>
