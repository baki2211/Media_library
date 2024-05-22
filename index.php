<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "./components/hero.php";
require_once "./db_config.php";

$cards = "";
$search_card = "";

if (isset($_POST["look"])) {
    $searchValue = trim($_POST["search"]);

    if (empty($searchValue)) {
        $search_card .= "<h5>Please enter a search term or <a href='index.php'>go back to the full collection.</a></h5>";
    } else {
    $sql1 = "SELECT * FROM library WHERE title = '$searchValue' OR author_first_name = '$searchValue' OR author_last_name = '$searchValue'";
    $search_result = mysqli_query($connect, $sql1);

    if (mysqli_num_rows($search_result) > 0) {
        while ($row = mysqli_fetch_assoc($search_result)) {
            $search_card .= "
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
                                        <h5 class='card-title'>{$row["title"]}</h5>
                                        <p class='card-text'>{$row["short_description"]}.</p>
                                        <p class='card-text'><small class='text-body-secondary'>{$row["author_first_name"]} {$row["author_last_name"]}</small></p>
                                        <a href='./pages/details.php?id={$row["ID"]}' class='btn btn-primary'>More Details...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href='index.php' class='btn btn-primary'>Clear search</a>
                </div>
            </div>
            ";
        }
    } else {
        $search_card = "<p>No results found</p>";
    }
}} else {
    $sql = "SELECT * FROM library";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $cards .= "
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
                                        <p class='card-text'>Publisher:<a href='./pages/publisher.php?publisher_name={$row["publisher_name"]}'>{$row["publisher_name"]}</a></p>
                                        <p class='card-text'><small class='text-body-secondary'>Author: {$row["author_first_name"]} {$row["author_last_name"]}</small></p>
                                        <a href='./pages/details.php?id={$row["ID"]}' class='btn btn-primary'>More Details...</a>
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
        $cards = "<p>No results found</p>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Multimedia Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./styles/index.css" />
</head>

<body>

    <?= $hero ?>
    <div class="container search-bar">
            <div class="row text-center justify-items-center align-items-center">
                <div class="col">
                    <a href="./pages/create.php" class="btn btn-success p-3">Add Media</a>
                </div>
                
                    <form class="col d-inline-flex flex-row" method="post">
                        <label class="p-3" for="search">Search</label>
                        <input type="text" id="search" name="search" placeholder="Search by Title or Author name" class="form-control p-3">
                        <button type="submit" class="btn btn-info p-3 ml-2" name="look">Search</button>
                    </form>
                
            </div>
    </div>

    <div class="container mt-5">
        <div class="row gap-3 row-cols-lg-3 row-cols-md-2 row-cols-sm-1 row-cols-xs-1">
            <?php echo isset($search_card) && !empty($search_card) ? $search_card : $cards; ?>
        </div>
    </div>

</body>

</html>
