<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <style>
        table{
            border-collapse: collapse;
            width: 80%;
            margin: 50px auto 50px auto;
            color: gray;
            font-family: monospace;
            font-size: 20px;
            text-align: left;
        }
        th{
            background-color: black;
            color: white;
        }
    </style>
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

<div class="header" style="width: 90%;">
    <h2>Contact</h2>

</div>

<table>
    <tr>
        <td>Id</td>
        <td>FullName</td>
        <td>Email</td>
        <td>Opinion</td>
    </tr>

<?php
    $conn = mysqli_connect("localhost", "root", "", "present");
    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT id, FullName, Email, Textarea FROM contact_admin";
    $result = $conn-> query($sql);
    
    if($result !== false && $result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
            echo "<tr><td>". $row["id"] ."</td><td>". $row["FullName"] ."</td><td>". $row["Email"] ."</td><td>". $row["Textarea"] ."</td></tr>";
        }
    }
    else{
        echo "<h2 style='margin: 0px 50px auto;'>0 result</h2>";
    }
    $conn-> close();
    
?>
</table>
</body>
</html>