<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body class="body" style="background-image: url('img/main.jpg'); background-size: full;">
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color:white;">
  <div class="container-fluid">
    <img src="img/agriculture.png" alt="" style="width:70px;height:70px;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
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
    


<div class="forma">
<form style="width:60%;">
<h3>Contact us</h3>
  <div class="form-row" >
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6" >
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Sign in</button>
  <div class="contact-info">
                    
                </div>
  
  </form>


</div>

<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.182119822743!2d19.81565817647479!3d41.32665299975955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x135031054bfc6521%3A0x49332b4f52fb9df2!2sMinistry%20of%20Agriculture%20and%20Rural%20Development!5e0!3m2!1sen!2s!4v1700916721934!5m2!1sen!2s" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  <footer>
    <div class="footer-content">
        <h3>sadasdasd   </h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, eos animi? Deleniti velit odit dolorum, voluptatibus esse mollitia harum doloribus ipsum non maxime ipsa nesciunt praesentium impedit eveniet laboriosam? Vel?</p>
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


.nav-item{
  color:black;
}



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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>