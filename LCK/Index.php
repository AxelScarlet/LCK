<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUQ'S CHICKEN KITCHEN</title>
    
    <link rel="stylesheet" href="style/styles.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

    <?php include('partials/navbar.php');?>

    <br><br><br><br>
    <div>
        <div id="carouselIndex" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselIndex" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselIndex" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselIndex" data-bs-slide-to="2"></li>
            </ol>
            
            <!-- Slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="menu_pic/4.png" class="d-block w-100 " alt="Slide 1">
                    <div class="carousel-caption">
                        <h3>Tasty and Crispy</h3>
                        <p>Best Local Chicken Restaurant in the Town</p>
                      </div>
                </div>
                <div class="carousel-item">
                    <img src="menu_pic/3.png" class="d-block w-100 " alt="Slide 2">
                    <div class="carousel-caption">
                        <h3>Savor The Taste</h3>
                        <p>An explosion of flavor in every bite!</p>
                      </div>
                </div>
                <div class="carousel-item">
                    <img src="menu_pic/7.png" class="d-block w-100 " alt="Slide 3">
                    <div class="carousel-caption">
                        <h3>Satisfy Your Palate on a Budget</h3>
                        <p>Flavorful Delights at Affordable Prices</p>
                      </div>
                </div>
    
            </div>
            
            <!-- Controls -->
            <a class="carousel-control-prev" href="#carouselIndex" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselIndex" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
    <br>
        
    <div class="container">
        <h1>Luq's Chicken Kitchen</h1>
        <p>Latest Popular Local Chicken Restaurant in the town!</p>
    </div>
    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="container orange-container text-justify rounded">
                    <br>
                    <img src="menu_pic\1.png" class="d-block w-75 mx-auto rounded" alt="Slide 1">
                    <br><h2>Crispy Chicken</h2>
                    <button type="button" class="btn btn-dark" data-bs-toggle="collapse" data-bs-target="#moreInfo1">More Info</button>
                    <div id="moreInfo1" class="collapse">
                        Juicy original golden crispy wings served to perfection with light crunchiness bites in a bucket. 
                    </div>
                    <br><br>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="container dark-container text-justify rounded">
                    <br>
                    <img src="menu_pic\3.png" class="d-block w-75 mx-auto rounded" alt="Slide 1">
                    <br><h2>Crispy Chicken Satay</h2>
                    <button type="button" class="btn btn-warning" data-bs-toggle="collapse" data-bs-target="#moreInfo2">More Info</button>
                    <div id="moreInfo2" class="collapse">
                        Juicy original golden crispy wings served to perfection with light crunchiness bites in a bucket. 
                    </div>
                    <br><br>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="container orange-container text-justify rounded">
                    <br>
                    <img src="menu_pic\4.png" class="d-block w-75 mx-auto rounded" alt="Slide 1">
                    <br><h2>Crispy Chicken Popcorn</h2>
                    <button type="button" class="btn btn-dark" data-bs-toggle="collapse" data-bs-target="#moreInfo3">More Info</button>
                    <div id="moreInfo3" class="collapse">
                        Juice bites fried to perfection.
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
    <br>
<?php include('partials/footer.php');?>
