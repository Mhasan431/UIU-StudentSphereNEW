<!-- Include header.php -->
<?php include 'header.php'; ?>

<!-- Include navbar.php -->
<?php include 'navbar.php'; ?>

<div class="container">
  <h1>Login</h1>

  <form action="login.php" method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>

  <p>Don't have an account? <a href="signup.php">Sign up</a> now.</p>
</div>

<br>
<br><br>
<br><br><br><br><br>

<!-- Include footer.php -->
<?php include 'footer.php'; ?>