<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/About-img.2.png" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>To bring quality and cheap books, “Duy bán sách dạo” will be a destination for wanderlust bookworms.</p>
         <p>“Duy bán sách dạo.” was opened as and startup by a young enthusiastic- Tra Quang Duy (CEO), who is passionate about reading and shopping online in 2022. A promising project, we will bring positive experiences to wanderlust bookworms.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>The finest bookshop I have ever encountered. My youth was incomplete without the "Duy bán sách do." bookstore, where I could experience reading in a nice environment and borrow books at affordable costs. In the near future, I will return to this location for a second time!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Quoc Kiet</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>The finest bookshop I have ever encountered. My youth was incomplete without the "Duy bán sách do." bookstore, where I could experience reading in a nice environment and borrow books at affordable costs. In the near future, I will return to this location for a second time!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Quang Duy</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>The finest bookshop I have ever encountered. My youth was incomplete without the "Duy bán sách do." bookstore, where I could experience reading in a nice environment and borrow books at affordable costs. In the near future, I will return to this location for a second time!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Hoang Hieu</h3>
      </div>
</section>

<section class="authors">

   <h1 class="title">OUR CEO</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.png" alt="">
         <div class="share">
         <a href="https://www.facebook.com/traquangduy410/" class="fab fa-facebook-f"></a>
            <a href="https://github.com/EricTra" class="fab fa-github"></a>
            <a href="https://www.instagram.com/erictraa/" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/traquangduy/" class="fab fa-linkedin"></a>
         </div>
         <h3>Uyen Nhi</h3>
      </div>

      <div class="box">
         <img src="images/author-2.png" alt="">
         <div class="share">
         <a href="https://www.facebook.com/traquangduy410/" class="fab fa-facebook-f"></a>
            <a href="https://github.com/EricTra" class="fab fa-github"></a>
            <a href="https://www.instagram.com/erictraa/" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/traquangduy/" class="fab fa-linkedin"></a>
         </div>
         <h3>Quang Duy</h3>
      </div>

      <div class="box">
         <img src="images/author-3.png" alt="">
         <div class="share">
         <a href="https://www.facebook.com/traquangduy410/" class="fab fa-facebook-f"></a>
            <a href="https://github.com/EricTra" class="fab fa-github"></a>
            <a href="https://www.instagram.com/erictraa/" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/traquangduy/" class="fab fa-linkedin"></a>
         </div>
         <h3>Khanh Huyen</h3>
      </div>
</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>