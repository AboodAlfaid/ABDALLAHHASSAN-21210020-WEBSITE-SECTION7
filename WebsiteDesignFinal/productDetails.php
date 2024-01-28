<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    require_once "DB/ProductController.php";
    $BooksController = new ProductController;
    $books = $BooksController->getAllProducts();
    $selectedBook=$BooksController->getProductByID($id);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
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
<body>
    <?php include "templates/headerTemplate.php"; ?>
    
<div class="pd-wrap">
      <div class="container">
          <div class="heading-section">
              <h2>Product Details</h2>
          </div>
          <div class="row">
              <div class="col-md-6">

        <div class="item">
          <img src="<?php echo $selectedBook[0]['ImageRef']?>" />
      </div>
              </div>
              <div class="col-md-6">
                  <div class="product-dtl">
                      <div class="product-info">
                          <div class="product-name"><?php echo $selectedBook[0]['BookName'] ?></div>
                          <div class="product-price-discount"><span><?php echo $selectedBook[0]['Price']?></span></div>
                          <div class="reviews-counter">
                            <span>selectedProduct.rating</span>
                            <div class="rate">
                                <div style="width: 75px">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                          </div>
                          
                      </div>
                      <p>selectedProduct.description</p>
                      
                        <p>Quantity: <?php echo $selectedBook[0]['Quantity'];?></p>
                      <div class="row">
                      </div>
                      <div class="product-count">
                        <button class="round-black-btn" >BUY</button>
                        <button class="round-white-btn" >Preview</button>
                    </div>
                  </div>
              </div>
          </div>
          <div class="product-info-tabs">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-<?php echo $book?>">
                      <p class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</p>
                    </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                    </div>
                    
              </div>
          </div>
          </div>

          <h1 class="related">Products related to this</h1>

<swiper-container 
  navigation="true" 
  pagination="true" 
  pagination-clickable="true"
  slides-per-view="3" 
  speed="500" 
  css-mode="true"
  mousewheel-force-to-axis="true"
  keyboard = "true"
>
<?php foreach($books as $book){
?>
  <swiper-slide>

    <div class="product-card">
      <div class="product-tumb">
          <img src="<?php echo $book['ImageRef']?>" alt="">
      </div>
      <div class="product-details">
          <span class="product-catagory"></span>
          <h4><a ><?php echo $book['BookName']?></a></h4>
          <p>book.description</p>
          <div class="product-bottom-details">
              <div class="product-price">$<?php echo $book['Price']?></div>
              <div class="product-links">
                  <a href=""><i class="fa fa-heart"></i></a>
                  <a href=""><i class="fa fa-shopping-cart"></i></a>
              </div>
          </div>
      </div>
    </div>

  </swiper-slide>
  <?php } ?>

</swiper-container>
    <?php include "templates/footer.html";?>
</body>
</html>