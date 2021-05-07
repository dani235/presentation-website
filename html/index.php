<?php
session_start();

$errors =array();
$conn = new mysqli("localhost", "root", "", "present");

if (!$conn) {
  die("Error!" . mysqli_connect_error());
}


if (isset($_POST['save_join'])) {
    $firstname = mysqli_real_escape_string($conn, $_REQUEST['firstName']);
    $secondname = mysqli_real_escape_string($conn, $_REQUEST['secondName']);
    $phone = mysqli_real_escape_string($conn, $_REQUEST['Phone']);
    $address = mysqli_real_escape_string($conn, $_REQUEST['Address']);
    $email = mysqli_real_escape_string($conn, $_REQUEST['Email']);
    

    if (empty($firstname)) {
        array_push($errors, "Firstname is required");
    }
    if (empty($secondname)) {
        array_push($errors, "Secondname is required");
    }
    if (empty($phone)) {
        array_push($errors, "Phone is required");
    }
    if (empty($address)) {
        array_push($errors, "Addreess is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    

      if (count($errors) == 0) {
        $sql = "INSERT INTO join_class (FirstName, SecondName, Phone, Address, Email) 
                  VALUES('$firstname', '$secondname', '$phone', '$address', '$email')";
        mysqli_query($conn, $sql);
        header('location: index.php');
    }
}

  if (isset($_POST['submit'])){
    $fullname = mysqli_real_escape_string($conn, $_REQUEST['FullName']);
    $useremail = mysqli_real_escape_string($conn, $_REQUEST['userEmail']);
    $opinion = mysqli_real_escape_string($conn, $_REQUEST['textarea']);

    if (count($errors) == 0) {
      $sql = "INSERT INTO contact_admin (FullName, Email, Textarea) 
                VALUES('$fullname', '$useremail', '$opinion')";
      mysqli_query($conn, $sql);
      header('location: index.php');
  }

    $mailTo = "ile.danielflorin@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$fullname.".\n\n".$opinion;

    mail($mailTo, $txt, $headers);
    header("Location: index.php?mailsend");
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Proiect HTML Tic</title>

    <!--Meta-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Css-->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="img/ltp2.jpg" rel="icon">
</head>
<body>

<div id="navbar">
  <a href="back-end/index.php" id="logo">L.T.P Betel</a>
  <div id="navbar-right">
    <a class="active" href="#home">Acasă</a>
    <a href="#teacher">Profesori</a>
    <a href="#contact">Contactează-ne</a>
    <a href="#join">Aplică</a>
  </div>
</div>

<!--Home Area-->
<div class="home-area" id="home">
  <h2 class="header-home"><br><br><br><b>Acasă</b><br><br></h2>

  <img src="img/ltp2.jpg" width="850" height="782" class="img1ltp" alt="">
  
  <div class="istoric">
  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Liceul Teologic Penticostal ”Betel” a fost fondat în anul 1994 de către Biserica Penticostală nr. 1 "BETEL" din Oradea, str. Ion<br> Ghica nr.13, fiind proprietatea acesteia şi funcţionează sub călăuzirea Bisericii şi a Inspectoratului Şcolar al Judeţului Bihor.</p>
  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Liceul Teologic Penticostal ”Betel” este o instituţie şcolară finanţată de către stat, fiind cuprinsă în reţeaua şcolilor subordonate<br> Ministerului Educaţiei şi Cercetării şi Inspectoratului Şcolar Judeţean Bihor şi funcţionează din anul 1994 pe baza Dispoziţiei <br>cu nr. 73 din 23.06.1994, iniţial sub denumirea de Seminarul Teologic Penticostal, denumire care a fost schimbată în anul 2001 <br>prin Dispoziţia cu nr. 3093 din 18.05.2001 de către ISJ Bihor, în Liceul Teologic Penticostal Oradea, iar din anul şcolar 2005-2006,<br> cu numele de Liceul Teologic Penticostal ”Betel”, Oradea, prin decizia 5419/17.10.2005. Din 1994 şi până în anul şcolar 2004-2005<br> liceul a funcţionat în clădirea din Ion Ghica nr. 13 în cele 10 săli puse la dispoziţie de către Biserica Penticostală Betel.</p>
  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anual şcoala s-a dezvoltat numeric şi prin introducerea ciclului gimnazial începând cu anul şcolar 2000-2001 fapt ce a dus la demararea<br> unui proiect de construcţie a unei noi clădiri. Începând cu anul şcolar 2005-2006, Liceul Teologic Penticostal ”Betel” îşi desfăşoară<br> activitatea într-o clădire nouă în Cartierul Nufărul II, pe strada Nicolae Şova nr. 6, clădire ce a fost inaugurată odată cu începerea<br> noului an şcolar, respectiv în 12 septembrie 2005.</p>
    </div>
</div>
<!--End Home-->

<!--About Area-->
<div class="about-area" id="teacher">
  <h2 class="header-about"><br><br><br><b>Profesori</b><br><br></h2>

  <div class="column">
  <div class="card">
    
    <img src="img/onisim.jpg" alt="John" style="width:100%">
    <h4>Onisim Cozma</h4>
    <p class="title">Director, diriginte,<br> profesor de limba română</p>
    <p>Liceul Teologic Penticostal Betel</p>
    <div class="overlay">
      <div style="margin: 200px 0;">
      <a href="https://www.instagram.com/cozmaonisim/?hl=ro"><i class="fa fa-instagram"></i></a>  
      &nbsp;&nbsp;<a href="https://www.facebook.com/onisim.cozma"><i class="fa fa-facebook"></i></a> 
    </div>
  </div>
  </div>
</div>

  <div class="column">
  <div class="card">
    <img src="img/hodut2.jpg" alt="John" style="width:100%;">
    <h4>Adrian Hoduț</h4>
    <p class="title">Diriginte,<br> profesor de informatică</p>
    <p>Liceul Teologic Penticostal Betel</p>
    <div class="overlay">
      <div style="margin: 200px 0;">
      <a href="#" disabled><i class="fa fa-instagram"></i></a> 
        &nbsp;&nbsp;
      <a href="https://www.facebook.com/hodut.adrian"><i class="fa fa-facebook"></i></a> 
    </div>
  </div>
  </div>
  </div>

  <div class="column">
  <div class="card">
    <img src="img/ligia.jpg" alt="John" style="width:100%">
    <h4>Ligia Centea</h4>
    <p class="title">Diriginte,<br> profesor de limba română</p>
    <p>Liceul Teologic Penticostal Betel</p>
    <div class="overlay">
    <div style="margin: 200px 0;">
      <a href="https://www.instagram.com/centea.ligia/?hl=ro"><i class="fa fa-instagram"></i></a> 
      &nbsp;&nbsp;
      <a href="https://www.facebook.com/ligia.centea"><i class="fa fa-facebook"></i></a> 
    </div>
  </div>
  </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img/ban.jpg" alt="John" style="width:100%">
      <h4>Denisa Ban</h4>
      <p class="title">Diriginte,<br> profesor de limba română</p>
      <p>Liceul Teologic Penticostal Betel</p>
      <div class="overlay">
      <div style="margin: 200px 0;">
        <a href="https://www.instagram.com/denisa_ban/?hl=ro"><i class="fa fa-instagram"></i></a> 
        &nbsp;&nbsp;
        <a href="https://www.facebook.com/bandenisatabita"><i class="fa fa-facebook"></i></a> 
      </div>
    </div>
    </div>
    </div>
      
</div>
<!--End About-->

<!--Contact Area-->
<div class="contact-area" id="contact">
    <h2 class="header-contact"><br><br><br><b>Contactează-ne</b></h2>
<!--Form-->
<form class="form-contact" action="index.php" method="POST">
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Numele:</label>
    <input type="text" class="form-control" name="FullName" id="exampleFormControlInput1" placeholder="John Cena" required>
  </div>
  <div class="mb-3">
  <label for="exampleFormControlInput2" class="form-label">Email:</label>
  <input type="email" class="form-control" name="userEmail" id="exampleFormControlInput2" placeholder="name@example.com" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Părerea ta:</label>
  <textarea class="form-control" name="textarea" id="exampleFormControlTextarea1" rows="3" required></textarea>
</div><br>
<div class="form-check form-switch" style="text-align: left;">
  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" required>
  <label class="form-check-label" for="flexSwitchCheckDefault">Ești de acord cu <a href="terms.html">Termnii și condițiile.</a></label>
</div><br>
<div class="mb-3">
  <button type="submit" name="submit" class="btn btn-primary">Trimite Email</button>  
</div>

</form>

<!--End Form-->
<!--Maps-->
<div class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5439.611163524474!2d21.9511850191764!3d47.02442111842139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47463864de8e00d5%3A0x87e47ab29cb157d4!2sLiceul%20Teologic%20Penticostal%20Betel!5e0!3m2!1sro!2sro!4v1620373837322!5m2!1sro!2sro" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<!--End Maps-->
</div>
<!--End Contact Area-->


<!--Join Area-->
<div class="join-area" id="join">
  <h2 class="header-join"><br><br><br><b>Aplică </b></h2>
  <img src="img/child1.jpg" width="600" height="350" class="img1child" alt="">
  <form class="form-contact form-join" action="index.php" method="POST">
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Prenume:</label>
      <input type="text" class="form-control" name="firstName" id="exampleFormControlInput2" placeholder="John" required>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput2" class="form-label" required>Nume de familie:</label>
      <input type="text" class="form-control" name="secondName" id="exampleFormControlInput3" placeholder="Cena" required>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput3" class="form-label" required>Telefon:</label>
      <input type="text" class="form-control" name="Phone" id="exampleFormControlInput4" placeholder="0123-345-678" required>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput4" class="form-label" required>Adresă:</label>
      <input type="text" class="form-control" name="Address" id="exampleFormControlInput5" placeholder="Bihor, Oradea, Str. X" required>
    </div>
    <div class="mb-3">
    <label for="exampleFormControlInput5" class="form-label" required>Email:</label>
    <input type="email" class="form-control" name="Email" id="exampleFormControlInput6" placeholder="name@example.com" required>
  </div>
  <div class="form-check form-switch" style="text-align: left;">
    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" required>
    <label class="form-check-label" for="flexSwitchCheckDefault">Ești de acord cu <a href="terms.html">Termenii și condițiile.</a></label>
  </div><br>
  <div class="mb-3">
    <button type="sumbit" class="btn btn-primary" name="save_join">Aplică</button>  
  </div>
  
  </form>
</div>
<!--End Join-->

<footer>
  
  <p class="foot-left"><strong>Social Media:</strong> <br><a href=""><i class="fa fa-facebook"></i>  Facebook</a><br> <a href=""><i class="fa fa-instagram"></i>  Instagram</a><br><a href=""><i class="fa fa-linkedin"></i>  Linkedin</a><br> <a href=""><i class="fa fa-twitter"></i>  Twitter</a></p>
  
  <p class="foot-right"><strong>Program:</strong><br>8:00 - 16:00 (Luni - Vineri)<br>Închis (Sâmbătă - Duminică)</p>
  
  <p class="foot-center"><img src="img/betel1.jpg" alt="" width="591" height="133" ></p>
    
  <br>
  <p>
    2021 &copy; Copyright <strong>Ile<span> Daniel</span></strong>. All Rights Reserved
  </p>
</footer>

<button onclick="topFunction()" id="myBtn" title="Home"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

<script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>