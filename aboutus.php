<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="body2">
<div class="back_fill">
          <div class="con">
              
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <img src="img/agriculture.png" alt="" style="width:70px;height:70px;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="ujitja.php">Ujitja</a></li>
            <li><a class="dropdown-item" href="shopping.php">Dyqani</a></li>
            <li><a class="dropdown-item" href="grante.php">Grantet</a></li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="margin-right:-70%;">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Log In</a>
                    </li>
                </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="signin.php">Register</a>
                    </li>
                </ul>
    </div>
  </div>
</nav>
<section>

<img src="img/main.jpg" alt="" class="abtus-img">

<div class="historia" style="margin-left:3%;"><h1>Historia jone</h1></div>
<div style="width:40%;margin-left:3%;"><p class="historia-txt" style="font-size:150%;">Kompania jonë mishëron një trashëgimi të rrënjosur në një pasion për të qëndrueshme
bujqësia. Me një  angazhim për të përzier traditën dhe inovacionin, ne kemi kultivuar një udhëtim që nderon tokën dhe bujarinë e saj.</p></div>


<div class="grante" style="margin-left:50%;margin-top:-40.5%"><h1>Grante</h1></div>
<div style="width:50%;margin-left:50%"><p class="grante-txt">Zbuloni grante të përshtatura për të mbështetur inovacionin bujqësor. Grantet tona të ofruara synojnë të nxisin përparimet teknologjike, praktikat e qëndrueshme dhe zgjidhjet krijuese brenda komunitetit bujqësor. Fuqizimi i fermerëve për të përqafuar mjetet dhe metodologjitë më të fundit.</p></div>
<a href="grante.php"><button style="margin-left:50%;" class="abtus-btn">Meso me shume</button></a>


<div class="dyqani" style="margin-left:50%"> <h1>Dyqani</h1></div>
<p class="dyqani-txt" style="margin-left:50%">Zbuloni në një grup gjithëpërfshirës të gjërave thelbësore bujqësore. Nga farat dhe plehrat e cilësisë së lartë deri te pajisjet dhe veglat moderne, faqja jonë e blerjeve plotëson çdo nevojë bujqësore.</p>
<a href="shopping.php"><button style="margin-left:50%;" class="abtus-btn">Meso me shume</button></a>

<div class="ujtija" style="margin-left:50%"><h1>Ujitja</h1></div>
<p class="ujtija-txt" style="margin-left:50%">Zbuloni teknika të sakta të ujitjes të përshtatura për të optimizuar hidratimin e të korrave. Eksploroni sistemet më të avancuara të ujitjes me pika dhe teknologjitë inteligjente të ujitjes, të krijuara për të dhënë sasi të sakta uji direkt në rrënjë, duke ruajtur burimet duke maksimizuar rendimentin e të korrave.</p>
 <a href="ujitja.php"><button style="margin-left:50%;" class="abtus-btn">Meso me shume</button></a>

</section>


<footer>
    <div class="footer-content">
        <h3>Agrokultura</h3>
        <p></p>
        <ul class="soclia">
            <li>Instagram</li>
            <li>Facebook</li>
            <li>Twitter</li>
        </ul>
    </div>
    <div class="footer-bottom">
        <p>copyright &copy;2023 </p>
    </div>
</footer>


<style>
    footer{
    background: #111;
    height: auto;
    width: 100vw;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    color: #fff;
    padding-top: 10px;
   
    
  }
  
  .footer-content{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
  }
  
  .footer-content h3{
    font-size: 1.8rem;
    font-weight: 400;
    text-transform: capitalize;
    line-height: 3rem;
  
  }
  
  .footer-content p{
    max-width: 500px;
    margin: 10px auto;
    line-height: 28px;
    font-size: 14px;
  }
  
  .soclia{
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin:  1rem 0 3rem 0;
  }
  
  .soclia li{
    margin: 0 10px;
  }
  
  .soclia a {
    text-decoration: none;
    color: #fff;
  }
  
  .soclia li:hover{
    color: aqua;
    cursor: pointer;
  }
  
  .footer-bottom{
    background-color: #000;
    width: 100vw;
    pad: 20px 0;
    text-align: center;
  }
  
  .footer-bottom p {
    font-size: 14px;
    word-spacing: 2px;
    text-transform: capitalize;
  } 
</style>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>
</html>