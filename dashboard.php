<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Agriculture</title>
</head>

<body class="body" style="background-image: url('img/main.jpg'); background-size: full; font-family: 'Playfair Display', serif;">
 
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
                        <a class="nav-link" href="logout.php">Log Out</a>
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

<div class=" mt-5 text-center" style="margin-bottom:13%;letter-spacing:2px;">
        <h1 class="main-title">Agrokultura</h1>
        <br>
        <h3 class="subtitle">Bujqësia përfshin prodhimin bimor dhe blegtoral, peshkimin <br> dhe pylltarinë për ushqim dhe
            produkte jo ushqimore.</h3>
    </div>

        <div class="mt-5" style="display: flex; justify-content:space-around;margin-bottom:20%;">

    <div>
        <a href="addc.php" class="btn btn-success main-btn" style="display:flex;align-items:center;justify-content:center;width:150px;height:100px;margin-left:10%;margin-top:-100%">Shopping</a>
    </div>


    <div>
        <a href="addg.php" class="btn btn-success main-btn" bs-target="#exampleModal2" style="display:flex;align-items:center;justify-content:center;width:150px;height:100px;margin-top:-100%">Grante</a>
    </div>
    

</div>
    
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
        </script>
        



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
    background-color: #111;
    height: auto;
    width: 99vw;
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
    color: #ADADAD;
  }
  
  .soclia li:hover{
    color: aqua;
    cursor: pointer;
  }
  
  .footer-bottom{
    background-color: #000;
    height:24px;
    width: 99vw;
    pad: 20px 0;
    text-align: center;
  }
  
  .footer-bottom p {
    font-size: 14px;
    word-spacing: 2px;
    text-transform: capitalize;
  } 
</style>



<script src="script.js"></script>
</body>

</html>