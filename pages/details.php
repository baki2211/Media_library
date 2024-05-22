<?php
require_once "../db_config.php";
require_once "../components/hero.php";

if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "SELECT * FROM library WHERE ID= {$id}";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($result);

} else {
    header("location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../styles/index.css" />
</head>
<body>
    <?=$hero?>
    <div class="container">
        <div class="center">
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?=$row["image"] ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Title</h5>
        <p class="card-text"><?=$row["title"]?></p>
        <h5 class="card-title">ISBN Code</h5>
        <p class="card-text"><?=$row["ISBN_code"]?></p>
        <h5 class="card-title">Description</h5>
        <p class="card-text"><?=$row["short_description"]?></p>
        <h5 class="card-title">Media Type</h5>
        <p class="card-text"><?=$row["type"]?></p>
        <h5 class="card-title">Author Name</h5>
        <p class="card-text"><?=$row["author_first_name"].$row["author_last_name"]?></p>
        <h5 class="card-title">Publisher Name</h5>
        <p class="card-text"><?=$row["publisher_name"]?></p>
        <h5 class="card-title">Publisher Address</h5>
        <p class="card-text"><?=$row["publisher_address"]?></p>
        <h5 class="card-title">Publish Date</h5>
        <p class="card-text"><?=$row["publish_date"]?></p>
        <p class="card-text"><small class="text-body-secondary">Status: <?=$row["status"]?></small></p>
        <a href="../index.php" class="btn btn-warning">Back to home page</a>
      </div>
    </div>
  </div>
</div>
        </div>
    </div>
</body>
</html>