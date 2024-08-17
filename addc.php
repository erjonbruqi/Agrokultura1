<?php
include_once("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"])) {
    // Image upload handling
    $filename = $_FILES["image"]["name"];
    $filetype = $_FILES["image"]["type"];
    $tmp_name = $_FILES["image"]["tmp_name"];

    $image_data = file_get_contents($tmp_name);

    // Card creation
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Insert card details into the database
    $sql = "INSERT INTO cards (title, content, image_data) VALUES (:title, :content, :image_data)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':content', $content);
    $stmt->bindParam(':image_data', $image_data, PDO::PARAM_LOB);
    $stmt->execute();

    echo "Card with image uploaded successfully.";
  
}
?>
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
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/agriculture.png" width="40" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
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
                        <a class="nav-link" href="login.php">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <form action="" method="post" enctype="multipart/form-data">
  <div class="container mt-4">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card p-4">
          <h2 class="text-center mb-4">Create Card</h2>

          <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" name="title" class="form-control" required>
          </div>

          <div class="mb-3">
            <label for="content" class="form-label">Content:</label>
            <textarea name="content" class="form-control" rows="4" required></textarea>
          </div>

          <div class="mb-3">
            <label for="image" class="form-label">Image:</label>
            <input type="file" name="image" class="form-control" accept="image/*">
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Create Card</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

</body>
</html>