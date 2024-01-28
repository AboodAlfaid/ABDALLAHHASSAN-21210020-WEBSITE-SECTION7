<?php
require_once "DB/ProductController.php";
$BooksController = new ProductController;
$books = $BooksController->getAllProducts();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BookHaven - Your Literary Oasis</title>
    <link rel="stylesheet" href="styles.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
  </head>
  <body>
    <?php include "templates/headerTemplate.php"; ?>
    <main>
      <section class="featured-carousel">
        <h2>Curated Picks for You</h2>
        <div class="myspecialcontainer">
          <div
            id="carouselExample"
            class="carousel slide w-100"
            data-ride="carousel"
          >
            <a
              class="carousel-control-prev"
              href="#carouselExample"
              role="button"
              data-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only color-black">Previous</span>
            </a>
            <a
              class="carousel-control-next"
              href="#carouselExample"
              role="button"
              data-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Next</span>
            </a>
            <div class="carousel-inner h-100">
              <div class="carousel-item h-100 active">
                <div
                  class="d-flex w-100 h-100 justify-content-around align-items-center"
                >
                  <a href="./categoryDetails.php" class="p-2 d-block justify-content-around"
                    >Romance</a
                  >
                  <a href="./categoryDetails.php" class="p-2 d-block justify-content-around"
                    >Thriller</a
                  >
                  <a href="./categoryDetails.php" class="p-2 d-block justify-content-around"
                    >Fantasy</a
                  >
                </div>
              </div>
              <div class="carousel-item h-100">
                <div
                  class="d-flex w-100 h-100 justify-content-around align-items-center"
                >
                  <a href="./categoryDetails.php" class="p-2 d-block justify-content-around"
                    >Non-Fiction</a
                  >
                  <a href="./categoryDetails.php" class="p-2 d-block justify-content-around"
                    >Sci-Fi</a
                  >
                  <a href="./categoryDetails.php" class="p-2 d-block justify-content-around"
                    >Mystery</a
                  >
                </div>
              </div>
              <div class="carousel-item h-100">
                <div
                  class="d-flex w-100 h-100 justify-content-around align-items-center"
                >
                  <a href="#" class="p-2 d-block justify-content-around"
                    >History</a
                  >
                  <a href="#" class="p-2 d-block justify-content-around"
                    >Biographies</a
                  >
                  <a href="#" class="p-2 d-block justify-content-around"
                    >Children's Books</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <h2>Dive into our Featured Books!</h2>
        <div class="book-grid">
        <?php 
        foreach($books as $book){
        ?>
          <div
            class="bookGrided"
            data-title="<?php echo $book['BookName'];?>"
            data-price="<?php echo $book['Price'];?>"
            data-quantity="<?php echo $book['Quantity'];?>"
          >
            <img src="<?php echo $book['ImageRef'];?>" alt="The Alchemist" />
            <div class="book-info">
              <h3><a href="productDetails.php?id=<?php echo $book['BookID']?>"><?php echo $book['BookName'];?></a></h3>
              <p>$<?php echo $book['Price'];?></p>
              <p>Quantity: <?php echo $book['Quantity'];?></p>
            </div>
          </div>
          <?php
          }
          ?>
        </div>
          
      </section>
      <section class="staff-picks">
        <h2>Staff Picks: Dive into Our Favorites</h2>
        <div width="100%">
          <img
            src="BooksCover/bookadv.png"
            alt=""
            width="100%"
            height="600px"
          />
        </div>
      </section>
      <section>
        <h2>Subscriptions</h2>
        <div class="card-container">
          <div class="card">
            <h2 class="card-title">Basic</h2>
            <p class="card-price">$5</p>
            <p class="card-description">
              Get into any book in our library without restrictions and Receive
              personalized book suggestions based on your preferences.
              Additionally, be the first to access new releases and pre-orders.
            </p>
            <button class="card-button">Subscribe</button>
          </div>
          <div class="card">
            <h2 class="card-title">Premium</h2>
            <p class="card-price">$10</p>
            <p class="card-description">
              Enjoy all the features of the Basic plan AND Skip the line and
              receive dedicated customer support assistance, you can also choose
              one free ebook every month from a curated selection.
            </p>
            <button class="card-button">Subscribe</button>
          </div>
        </div>
      </section>
    </main>
    <?php include "templates/footer.html";?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
