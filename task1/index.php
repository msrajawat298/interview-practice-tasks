<?php
require_once("functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shades of Web : Garima - Test Problem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <h2 class="text-center my-5">COMMUNITIES WE MANAGE</h2>
        <div class="row gy-5">
            <?php
            $fetch_data = curl_call();
            if (!empty($fetch_data) && array_key_exists('status', $fetch_data) && $fetch_data['status'] == "success" && !empty($fetch_data['data']) && is_array($fetch_data['data'])) {
                // Loop through the data and display each listing
                foreach ($fetch_data['data'] as $data) {
                    echo '<div class="col-12 col-lg-4 col-md-6">
                                <div class="card dataCards">
                                    <img src="' . $data["image_url"] . '" class="card-img-top" alt="' . $data["post_name"] . '">
                                    <div class="card-body py-3">
                                        <p class="card-text">' . $data["post_excerpt"] . '</p>
                                    </div>
                                    <div class="card-footer border-top-0 text-center py-4">
                                <h5>' . $data["post_title"] . '</h5>
                                </div>
                                </div>
                            </div>';
                }
            } else {
                echo '<div class="alert alert-danger" role="alert">No Data Found :(</div>';
            }
            ?>
        </div>
    </div>
    <div class="container mb-5">
        <h2 class="text-center my-5"> OUR SERVICES </h2>
        <?php
            if (!(!empty($fetch_data) && array_key_exists('status', $fetch_data) && $fetch_data['status'] == "success" && !empty($fetch_data['data']) && is_array($fetch_data['data']))) {
                echo '<div class="alert alert-warning" role="alert">No Data Found :(</div>';
            }else{
        ?>
        <div id="carouselExampleControls" class="carousel">
            <div class="carousel-inner">
                <?php
                    // Loop through the data and display each listing
                    foreach ($fetch_data['data'] as $data) {
                        echo '<div class="carousel-item">
                                <div class="card">
                                    <img src="' . $data["image_url"] . '" class="d-block w-100 position-relative" alt="...">
                                    <h5 class="card-title position-absolute bottom-0 h3 text-white fw-bold">' . $data["post_title"] . '</h5>
                                </div>
                            </div>';
                    }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="fa fa-angle-left text-dark fa-2x" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="fa fa-angle-right text-dark fa-2x" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <?php } ?>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>