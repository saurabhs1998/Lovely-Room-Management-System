<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="swiper.min.css">

  <!-- Demo styles -->
  <style>
    body {
      background: #262626;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 100%;
      padding-top: 150px;
      padding-bottom: 50px;
    }
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 380px;
      background: #fff;

    }
    .swiper-slide .imgBox img{
        width: 100%;
        height: 300px;
    }
    .swiper-slide .imgBox {
        width: 100%;
        height: 300px;
        overflow: hidden;
    }
    .swiper-slide .Details{
        box-sizing: border-box;  
        padding: 22px;

    }
    .swiper-slide .Details h3{
        margin: 0;
        padding: 0;
        font-size: 20px;
        text-align: center;
        line-height: 20px;

    }

    

  </style>
</head>
<body>
  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
         <div class="imgBox">
            <img src="img1.jpg" alt="imgBox">
         </div>
         <div class="Details">
            <h3>Nature img<br><span>Lovely Img</span></h3>
         </div>
      </div>
      <div class="swiper-slide">
         <div class="imgBox">
            <img src="img2.jpg" alt="imgBox">
         </div>
         <div class="Details">
            <h3>Nature img<br><span>Lovely Img</span></h3>
         </div>
      </div>
      <div class="swiper-slide">
         <div class="imgBox">
            <img src="img3.jpg" alt="imgBox">
         </div>
         <div class="Details">
            <h3>Nature img<br><span>Lovely Img</span></h3>
         </div>
      </div>
      <div class="swiper-slide">
         <div class="imgBox">
            <img src="img4.jpg" alt="imgBox">
         </div>
         <div class="Details">
            <h3>Nature img<br><span>Lovely Img</span></h3>
         </div>
      </div>
      <div class="swiper-slide">
         <div class="imgBox">
            <img src="img5.jpg" alt="imgBox">
         </div>
         <div class="Details">
            <h3>Nature img<br><span>Lovely Img</span></h3>
         </div>
      </div>
      <div class="swiper-slide">
         <div class="imgBox">
            <img src="img6.jpg" alt="imgBox">
         </div>
         <div class="Details">
            <h3>Nature img<br><span>Lovely Img</span></h3>
         </div>
      </div>
      <div class="swiper-slide">
         <div class="imgBox">
            <img src="img7.jpg" alt="imgBox">
         </div>
         <div class="Details">
            <h3>Nature img<br><span>Lovely Img</span></h3>
         </div>
      </div>
    
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
</body>
</html>