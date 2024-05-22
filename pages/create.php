<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "../db_config.php";
//GLOBAL $connect;

if (isset($_POST["create"])) {
    $title = $_POST["title"];
    $image = $_POST["image"];
    $ISBN_code = $_POST["ISBN_code"];
    $short_description = $_POST["short_description"];
    $type = $_POST["type"];
    $author_first_name = $_POST["author_first_name"];
    $author_last_name = $_POST["author_last_name"];
    $publisher_name = $_POST["publisher_name"];
    $publisher_address = $_POST["publisher_address"];
    $publish_date = $_POST["publish_date"];

    $sql = "INSERT INTO library (title, image, ISBN_code, short_description, type, author_first_name, author_last_name, publisher_name, publisher_address, publish_date)
             VALUES ('$title', '$image', '$ISBN_code', '$short_description', '$type', '$author_first_name', '$author_last_name', '$publisher_name', '$publisher_address', '$publish_date')";

    
    if(mysqli_query($connect, $sql)){
        echo "<div class='alert alert-success' role='alert'>
        New record has been created - You'll be directed to the home page in a few seconds.
      </div>";
      header("refresh: 3; url= ../index.php");
    }else {
        echo "<div class='alert alert-danger' role='alert'>
        error found
      </div>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Media</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../styles/index.css" />
</head>

<body>
    <div class="container">
        <div class="center text-center p-5">
            <h1>Add Media</h1>
        </div>
    </div>
    
    <div class="container mt-5">
       <form method="POST" enctype="multipart/form-data" class="p-5">
       <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
      </div>
      <div class="form-group">
        <label for="image">Image URL</label>
        <input type="text" class="form-control" id="image" name="image">
      </div>
      <div class="form-group">
        <label for="ISBN_code">ISBN Code</label>
        <input type="text" class="form-control" id="ISBN_code" name="ISBN_code">
      </div>
      <div class="form-group">
        <label for="short_description">Description</label>
        <textarea class="form-control" id="short_description" name="short_description" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="type">Type</label>
        <select class="form-control" id="type" name="type" required>
          <option value="book">Book</option>
          <option value="CD">CD</option>
          <option value="DVD">DVD</option>
        </select>
      </div>
      <div class="form-group">
        <label for="author_first_name">Author First Name</label>
        <input type="text" class="form-control" id="author_first_name" name="author_first_name">
      </div>
      <div class="form-group">
        <label for="author_last_name">Author Last Name</label>
        <input type="text" class="form-control" id="author_last_name" name="author_last_name">
      </div>
      <div class="form-group">
        <label for="publisher_name">Publisher Name</label>
        <input type="text" class="form-control" id="publisher_name" name="publisher_name">
      </div>
      <div class="form-group">
        <label for="publisher_address">Publisher Address</label>
        <input type="text" class="form-control" id="publisher_address" name="publisher_address">
      </div>
      <div class="form-group mb-5">
        <label for="publish_date">Publish Date</label>
        <input type="date" class="form-control" id="publish_date" name="publish_date">
      </div>
      <button type="submit" class="btn btn-primary" name="create">Add Item</button>
      <a href="../index.php" class="btn btn-warning">Back to home page</a>
       </form>
   </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>