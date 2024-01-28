<?php
require_once "DB/ProductController.php";
$BooksController = new ProductController;
$books = $BooksController->getAllProducts();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link rel="stylesheet" href="styles.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="productDetailsCss.css">
   </head>
</head>
<body>
    <?php include "templates/headerTemplate.php"; ?>
    <div class = "container">
        <div class= "row upper">
            <h2>Novel</h2>
            <p>AUTHOR NAME, BEST SELLER</p>
            <div class="product-count">
                <button class="round-black-btn" >BUY</button>
                <button class="round-white-btn" >Preview</button>
            </div>
            
        </div>
        <div class= " lower">
        <?php foreach($books as $book){ ?>
        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <div class="product-tumb">
            <img src="<?php echo $book['ImageRef']?>" alt="">
            </div>
            <h5 class="card-title"><?php echo $book['BookName']?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $book['Price']?></h6>
            <p class="card-text"><?php echo $book['Quantity']?>.</p>
            <a href="./productDetails.php?id=<?php echo $book['BookID']?>" class="card-link">Card link</a>
        </div>
        </div>
        </div>
        <?php 
        }
        ?>
    </div>
    <?php include "templates/footer.html";?>
</body>
</html>