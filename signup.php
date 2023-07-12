<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $firstName = $_POST["firstName"];
  $lastName = $_POST["lastName"];
  $gender = $_POST["gender"];
  $batch = $_POST["batch"];
  $department = $_POST["department"];
  $connectedTo = $_POST["connectedTo"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  
  $isAdminVerified = true; 

  if ($isAdminVerified) {
  
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "UIU_StudentSphere";

    try {
      $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      die("Error connecting to the database: " . $e->getMessage());
    }

 
    $sql = "INSERT INTO participants (first_name, last_name, gender, batch, department, connected_to, email, password) 
            VALUES (:firstName, :lastName, :gender, :batch, :department, :connectedTo, :email, :password)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
      "firstName" => $firstName,
      "lastName" => $lastName,
      "gender" => $gender,
      "batch" => $batch,
      "department" => $department,
      "connectedTo" => $connectedTo,
      "email" => $email,
      "password" => $password
    ]);

    // Redirect to the login page after successful signup
    header("Location: login.php");
    exit();
  } else {
    // Display an alert that the user is not verified yet
    echo '<script>alert("Signup unsuccessful. User not verified yet.")</script>';
  }
}
?>


  <!-- Include header.php -->
  <?php include 'header.php'; ?>

  <!-- Include navbar.php -->
  <?php include 'navbar.php'; ?>


  <!-- Content -->
  <div class="container">
    <h1>Signup</h1>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
      <div class="form-group">
        <label for="firstName">First Name:</label>
        <input type="text" class="form-control" id="firstName" name="firstName" required>
      </div>
      <div class="form-group">
        <label for="lastName">Last Name:</label>
        <input type="text" class="form-control" id="lastName" name="lastName" required>
      </div>
      <div class="form-group">
        <label for="gender">Gender:</label>
        <input type="text" class="form-control" id="gender" name="gender" required>
      </div>
      <div class="form-group">
        <label for="batch">Batch:</label>
        <input type="text" class="form-control" id="batch" name="batch" required>
      </div>
      <div class="form-group">
        <label for="department">Department:</label>
        <input type="text" class="form-control" id="department" name="department" required>
      </div>
      <div class="form-group">
        <label for="connectedTo">Currently Connected To:</label>
        <input type="text" class="form-control" id="connectedTo" name="connectedTo">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary">Signup</button>
    </form>
  </div>

  <!-- Include footer.php -->
  <?php include 'footer.php'; ?>