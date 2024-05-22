<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "../db_config.php";
require_once "../components/hero.php";

if (isset($_GET["publisher_name"])) {
    $publisher = $_GET["publisher_name"];
    $sql = "SELECT * FROM `library` WHERE `publisher_name`='$publisher'";
    $result = mysqli_query($connect, $sql);
    $pub_cards = "";

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $pub_cards .= "
            <div class='container mt-3'>
                <div class='center'>
                    <div class='row'>
                        <div class='card shadow' style='max-width: 540px;'>
                            <div class='row g-0'>
                                <div class='col-md-4'>
                                    <img src='{$row["image"]}' class='img-fluid rounded-start' alt='...'>
                                </div>
                                <div class='col-md-8'>
                                    <div class='card-body'>
                                        <h5 class='card-title'>Title: {$row["title"]}</h5>
                                        <p class='card-text'>{$row["short_description"]}.</p>
                                        <p class='card-text'>Publisher: {$row["publisher_name"]}</p>
                                        <p class='card-text'><small class='text-body-secondary'>Author: {$row["author_first_name"]} {$row["author_last_name"]}</small></p>
                                        <a href='./details.php?id={$row["ID"]}' class='btn btn-primary'>More Details...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
    } else {
        $pub_cards = "<p>No results found</p>";
    }
} else {
    header("Location: ../index.php");
    exit();
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
            <?=$pub_cards?>
            <a href="../index.php" class="btn btn-warning mt-3">Back to home page</a>
        </div>
    </div>
</body>
</html>