<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css./layout.css">
    <title>Indext</title>
    <link rel="stylesheet" href="../lib/owl/owl.theme.default.min.css">
    <link rel="stylesheet" href="../lib/owl/owl.carousel.min.css">
    <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- swiper css link  -->
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>
<body>

   <style>
      .tips-box img {
         width:410px;
         height:280px;
      }
      .signin {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 8px 18px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 8px;
}

.signin:hover {
  background-color: #3e8e41;
}
/* css phần tài khoản đăng nhập trên thanh header */
.a{
   font-size:15px;
    width: 30px;
    border-radius: 50%;
    border: 0.1875em solid #0F1C3F;
    height: 30px;
   }
.b{
 display : none;
}
.ab{
    display: flex;
}
.c:hover .b {
  margin-left:33px;
  display: block;
  position: absolute;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0,0,0,.1);
  padding: 10px;
  width: 150px;
  z-index: 1;
}

.c .b p {
  margin: 0;
  padding: 5px 0;
  font-size: 16px;
}

.c .b a {
  color: #333;
  text-decoration: none;
  font-size: 16px;
}

.c .b a:hover {
  color: #ff6600;
}
p {
  font-size: 20px;
  line-height: 1.5;
}
.heading_1{
   margin-top:40px;
}
.tips p{
   margin-top:20px;
}
   </style>
    <div class="container">
        <?php
        session_start();
        ?>
  <header class="header">

   <a href="#" class="logo"> <i class="fas fa-likghtbulb"></i> Thcshop.com</a>

   <nav class="navbar">
      <div id="close-navbar" class="fas fa-times"></div>
      <a href="index.php">TRANG CHỦ</a>
      <a href="sanpham.php">SẢN PHẨM</a>
      <a href="lienhe.php">LIÊN HỆ</a>
      <a href="donHangdaMua.php">ĐƠN HÀNG</a>
      <a href="./giohang.php">GIỎ HÀNG</a>
   </nav>
  
                <?php
                if (empty($_SESSION["email"])) {
                    echo ' <div >                
                     <button class="signin"> <a href="dangNhap.php">Đăng nhập</a></button>
                    </div>';
                } else {
                  echo '<div class="c"><div class=ab><img class="a" src="../image/'.$_SESSION['image'].'" alt=""><p>'.$_SESSION['email'].'</p> </div>
                    <div class="b">
                    <p> <a href="../control/login_out.php">Đăng xuất</a></p>
                    <p> <a href="./forgotPassword.php">Đổi mật khẩu</a></p>
                    <p>tài khoản của tôi</p>
                   </div>
                   </div>
                    ';
                }
                ?>
          
</header>
    
<!--kết thúc form đăng nhập đăng kí -->
    <!-- ảnh trang chủ -->
        <div class="slideshow owl-carousel owl-theme">
            <img id="slide" src="./slideshow/banner1.jpg" alt="" width="100%" height="600px" id="anh">
            <img id="slide" src="./slideshow/banner2.jpg" alt="" width="100%" height="600px" id="anh">
            <img id="slide" src="./slideshow./banner3.jpg" alt="" width="100%" height="600px" id="anh">
        </div>

    <!-- giới thiệu hàng chất lượng và giao hàng nhanh -->
<!-- about section starts  -->

<section class="about">

   <div class="image">
      <img src="./image/anhmaytinh.jpg" alt="">
   </div>

   <div class="content">
      <h3 class="about-title">Chúng tôi có những lĩnh vực tốt nhất về Công nghệ </h3>
      <p>Tổ chức, cá nhân đề nghị cấp Giấh doanh bưu điện hoặc gửi trực tiếp hoặc hệ thống dịch vụ công trực tuyến đến Bộ Công Thương (Cục Hóa chất); </p>
      <div class="icons-container">
         <div class="icons">
            <img src="./img/about-icon-1.png" alt="">
            <h3>350+</h3>
            <span>courses</span>
         </div>
         <div class="icons">
            <img src="./img/about-icon-2.png" alt="">
            <h3>1200+</h3>
            <span>students</span>
         </div>
         <div class="icons">
            <img src="./img/about-icon-3.png" alt="">
            <h3>10+</h3>
            <span>awards</span>
         </div>
      </div>
   </div>

</section>

<!--  hiển thị các mẫu đạc trưng -->
    
<!-- subjects section starts  -->

<section class="subjects">

<h1 class="heading">chủ đề</h1>

<div class="box-container">

   <div class="box">
      <img src="./img/icon-home-1.png" alt="">
      <h3>Iphone 15</h3>
      <p>Sắp ra mắt</p>
   </div>

   <div class="box">
      <img src="./img/icon-home-2.png" alt="">
      <h3>Iphone 16</h3>
      <p>Sắp ra mắt</p>
   </div>

   <div class="box">
      <img src="./img/icon-home-3.png" alt="">
      <h3>macbook 2333</h3>
      <p>Sắp ra mắt</p>
   </div>

   <div class="box">
      <img src="./img/icon-home-4.png" alt="">
      <h3>apple wactch</h3>
      <p>Sắp ra mắt</p>
   </div>

   <div class="box">
      <img src="./img/icon-home-6.png" alt="">
      <h3>macbook 24</h3></h3>
      <p>setup</p>
   </div>
   <div class="box">
      <img src="./img/icon-home-5.png" alt="">
      <h3>apple watch</h3>
      <p>sắp ra mắt </p>
   </div>
</div>

</section>


        <?php

        require '../models/connect.php';
        $query = "SELECT * FROM products";
        $productList = getAll($query);
        //  echo "<pre>";
        //  var_dump($productList);die;


        ?>
        <div>
         <div class= "heading_1">
         <h1 class="heading"> Các Sản phẩm hót của chúng tôi </h1>
         </div>
      
            <div class="product mr">
         
                <?php for ($i = 0; $i < 4; $i++) : ?>
                    <div class="trangchu">
                        <div class="div">
                            <a href="" class="anh"><img src="<?= " ../image/" . $productList[$i]["image"] ?>"></a> 
                            <a href="./sanpham.php" class="buynow">THÔNG TIN</a>
                        </div>
                    
                        <div class="boxs">
                            <h3>
                                <?= $productList[$i]["name"] ?>
                            </h3>
                            <p>
                                <?= $productList[$i]["descrtiption"] ?>
                            </p>
                            <span>
                                <?= $productList[$i]["price"] . "$" ?>
                            </span>
                        </div>
                    </div>
                <?php endfor ?>

            </div>

        </div>
        <div class="showadd mr">
        <h1 class="heading"> ShowMode </h1>
            <div class="tips">
                <div class="tips-box mr">
                    <img src="image/mt.jpg" alt="">
                    <p>How to create a living room to love</p>
              
                </div>
                <div class="tips-box mr">
                    <img src="image/mt2.jpg" alt="">
                    <p>Solution for clean look working space
                    </p>
               
                </div>
                <div class="tips-box mr">
                    <img src="image/mt3.jpg" alt="">
                    <p class="font-bold">Make your cooking</p>
           
                </div>
            </div>
        </div>

<!-- footer section starts  -->
   
<section class="footert">

<div class="box-container">

   <div class="box">
      <h3> <i class="fas fa-lightbulb"></i> Vietlinkec </h3>
      <p>Liên hệ trực tiếp qua mạng xã hội.</p>
      <div class="share">
         <a href="https://www.facebook.com/sythanh.ho.336" class="fab fa-facebook-f"></a>
         <a href="https://www.facebook.com/sythanh.ho.336" class="fab fa-twitter"></a>
         <a href="https://instagram.com/nabil_thv?igshid=YmMyMTA2M2Y=" class="fab fa-instagram"></a>
         <a href="https://www.google.com/search?q=vietlinkedu+.com.vn&oq=viet&aqs=chrome.2.69i60j69i57j69i59j46i131i199i433i465i512j0i131i433i512j69i60l3.3186j1j4&sourceid=chrome&ie=UTF-8" class="fab fa-linkedin"></a>
      </div>
   </div>

   <div class="box">
      <h3>đường dẫn nhanh</h3>
      <a href="home.html" class="link">TRANG CHỦ</a>
      <a href="contact.html" class="link">LIÊN HỆ</a>
      <a href="about.html" class="link">GIỚI THIỆU</a>
      <a href="couses.html" class="link">KHÓA HỌC</a>
 
   </div>

   <div class="box">
      <h3>Liên kết hữu ích</h3>
      <a href="#" class="link">trợ giúp</a>
      <a href="#" class="link">trả lời câu hỏi</a>
      <a href="#" class="link">phản hồi</a>
      <a href="#" class="link">xác thực</a>
      <a href="#" class="link">hỗ trợ người dùng</a>
   </div>

   <div class="box">
      <h3>bản tin </h3>
      <p>cập nhật lại tin tức</p>
      <form action="" class="thanh">
         <input type="email" name="" placeholder="enter your email" id="" class="email">
         <input type="submit" value="subscribe" class="btn">
      </form>
   </div>

</div>
</section>


<!-- footer section ends -->
    </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../lib/owl/owl.carousel.min.js"></script>
    <script>
      $(document).ready(function () {
        $(".owl-carousel").owlCarousel();
      });

      $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        nav: true,
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 1,
          },
          1000: {
            items: 1,
          },
        },
      });
    </script>
  <script src="./script.js"></script>
</body>
   
</html>
