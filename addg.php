<?php
include_once("config.php");

if (isset($_POST['submit2'])) { // Assuming your submit button has name="submit"

    // Card creation
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Insert card details into the database
    $sql = "INSERT INTO cards (title, content) VALUES (:title, :content)"; // Update table name to "cards"
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':content', $content);
    $stmt->execute();

    echo "Card with image uploaded successfully.";
}
?>
<?php include_once('header.php')?>
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


          <div class="d-grid">
            <button type="submit2" class="btn btn-primary">Create Card</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
</body>
</html>