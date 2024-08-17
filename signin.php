<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Agriculture</title>
</head>

<body class="body" style="background-image: url('img/main.jpg'); background-size: full;">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Log In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <form class="login" style="  max-width: 500px; width: 90%;background: rgba(255, 255, 255, 0.5); padding: 5%; border-radius: 10px; margin: 10% 30%;" method="POST" action="add.php">
   <img src="img/agriculture.png" width="100px" style="margin:10% 30%;"> 
   <div class="mb-3">
    <label class="form-label">Emri</label>
    <input type="name" class="form-control" name="name">
  </div>
  <div class="mb-3">
    <label class="form-label">Mbiemri</label>
    <input type="surname" class="form-control" name="surname">
  </div>
  <div class="mb-3">
    <label class="form-label">Username</label>
    <input type="username" class="form-control" name="username">
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>

 
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>


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

</body>

</html>
