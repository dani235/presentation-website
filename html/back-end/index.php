<?php 
session_start();


if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">Back</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" class="btn btn-primary" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" class="btn btn-outline-primary" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" class="btn btn-success" href="join.php">Join Class</a>
        </li>
        <li class="nav-item">
        <a href="index.php?logout='1'" class="btn btn-danger" style="text-decoration: none;">logout</a>
        </li>
    </div>
  </div>
</nav>

<div class="header">
  <h2>Admin Panel</h2>
</div>
<div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
    <div class="error success" >
        <h3>
        <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
        ?>
        </h3>
    </div>
    <?php endif ?>

<div style="text-align: center;">
  <!-- logged in user information -->
  <?php  if (isset($_SESSION['username'])) : ?>
      <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p><br>
      <a href="contact.php" class="btn btn-outline-primary" style="text-decoration: none;">Contact</a>
      <a href="join.php" class="btn btn-outline-success" style="text-decoration: none;">Join Classes</a>
  <?php endif ?>
  </div>
</div>
      
</body>
</html>