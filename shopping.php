<?php
include_once("config.php");

// Fetch cards from the database
$sql = "SELECT * FROM cards";
$stmt = $conn->prepare($sql);
$stmt->execute();
$cards = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include_once('header.php');?>
    <div class="card mb-3" style=" width:50%; margin-top:5%; margin-left:25%; margin-bottom:5%;  " >
  <img src="img/mk.jpg" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <button type="button" class="btn btn-primary btn-sm"><a href="ujitja.php">Blej</a></button>
  </div>
</div>


<div class="other products" style="margin-top:25%;">
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="img/mk1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
      <button type="button" class="btn btn-primary btn-sm">Blej</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/mk2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
      <button type="button" class="btn btn-primary btn-sm">Blej</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/mk3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
      <button type="button" class="btn btn-primary btn-sm">Blej</button>
      </div>
    </div>
  </div>
</div>
</div>

    <div class="container mt-4">
        <div class="row">
            <?php foreach ($cards as $card) : ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <?php
                        // Assuming you have an 'image_data' column for image data
                        $image_data = base64_encode($card['image_data']);
                        $image_src = "data:image/jpeg;base64, $image_data";
                        ?>
                        <img src="<?php echo $image_src; ?>" class="card-img-top" alt="Card Image">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $card['title']; ?></h5>
                            <p class="card-text"><?php echo $card['content']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>