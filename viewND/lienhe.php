<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./css/layout.css">

</head>
<body>
   
<!-- header section starts  -->
<?php
        session_start();
        ?>
<header class="header">

   <a href="#" class="logo"> <i class="fas fa-lightbulb"></i> educa </a>

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
                    echo '<div class="c"><img class="a" src="../image/'.$_SESSION['image'].'" alt=""><p>'.$_SESSION['email'].'</p>
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

<!-- account form section ends -->

<!-- header section ends -->

<!-- contact section starts  -->

<section class="contact">

   <h1 class="heading"> get in touch </h1>

   <div class="icons-container">

      <div class="icons">
         <i class="fas fa-clock"></i>
         <h3>thời gian làm việc :</h3>
         <p>00:07am - 00:06pm</p>
      </div>

      <div class="icons">
         <i class="fas fa-phone"></i>
         <h3>phone :</h3>
         <p>0964467656</p>
         <p>0396847688</p>
      </div>

      <div class="icons">
         <i class="fas fa-envelope"></i>
         <h3> email : </h3>
         <p>hosythanh07072001@gmail.com</p>
         <p>khoahocvietlink@gmail.com</p>
      </div>

      <div class="icons">
         <i class="fas fa-map"></i>
         <h3>địa chỉ :</h3>
         <p>Bắc linh đàm , quân hoàng mai , hà nội</p>
      </div>

   </div>

   <div class="row">

      <div class="image">
         <img src="./img/contact-img.png" alt="">
      </div>

      <form action="https://formsubmit.co/3033a156557250ded30acc71feba8bcd"method="POST">
         <h3>send us a message</h3>
         <input type="text" name="Name" placeholder="name" class="box" required>
         <input type="email" name="Email" placeholder="email" class="box" required>
         <input type="number" placeholder="phone" class="box" required>
         <textarea name="Messaage" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
         <button type="submit" class="btn">Send Messaage</button>
      </form>

   </div>

</section>

<!-- contact section ends -->

<!-- faq section starts  -->

<section class="faq">

   <h1 class="heading">các câu hỏi thường gặp</h1>

   <div class="accordion-container">

      <div class="accordion active">
         <div class="accordion-heading">
            <h3>liên hệ qua , trợ giúp</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            Căn cứ Nghị định số 98/2017/NĐ-CP ngày 18 tháng 8 năm 2017 của Chính phủ quy định chức năng, nhiệm vụ, quyền hạn và cơ cấu tổ chức của Bộ Công Thương;
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>
               năm 2023 làm nghề gì tốt nhất?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            Căn cứ Nghị định số 98/2017/NĐ-CP ngày 18 tháng 8 năm 2017 của Chính phủ quy định chức năng, nhiệm vụ, quyền hạn và cơ cấu tổ chức của Bộ Công Thương;
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>phí phát triển web là bao nhiêu?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            Căn cứ Nghị định số 98/2017/NĐ-CP ngày 18 tháng 8 năm 2017 của Chính phủ quy định chức năng, nhiệm vụ, quyền hạn và cơ cấu tổ chức của Bộ Công Thương;
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>Tôi có thể tự chọn gia sư cho mình không?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            Căn cứ Nghị định số 98/2017/NĐ-CP ngày 18 tháng 8 năm 2017 của Chính phủ quy định chức năng, nhiệm vụ, quyền hạn và cơ cấu tổ chức của Bộ Công Thương;
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>phương thức thanh toán nào có sẵn?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            Căn cứ Nghị định số 98/2017/NĐ-CP ngày 18 tháng 8 năm 2017 của Chính phủ quy định chức năng, nhiệm vụ, quyền hạn và cơ cấu tổ chức của Bộ Công Thương;
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>
               Tôi có thể dùng thử miễn phí trong một tháng không?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            Căn cứ Nghị định số 98/2017/NĐ-CP ngày 18 tháng 8 năm 2017 của Chính phủ quy định chức năng, nhiệm vụ, quyền hạn và cơ cấu tổ chức của Bộ Công Thương;
         </p>
      </div>

   </div>

</section>

<!-- faq section ends -->

<!-- logo slider starts  -->

<section class="logo-container">
   <div class="swiper logo-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide"> <img src="img/partner-logo-1.png" alt=""> </div>
         <div class="swiper-slide"> <img src="img/partner-logo-2.png" alt=""> </div>
         <div class="swiper-slide"> <img src="img/partner-logo-3.png" alt=""> </div>
         <div class="swiper-slide"> <img src="img/partner-logo-4.png" alt=""> </div>
         <div class="swiper-slide"> <img src="img/partner-logo-5.png" alt=""> </div>
      </div>
   </div>
</section>

<!-- logo slider ends -->







<!-- footer section starts  -->
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
<!-- footer section ends -->




<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="./script.js"></script>
<style>
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
.c:hover .b{
    display: block;
    }
    .b{
        padding: 40px;
        position: absolute;
        padding-left: 70px;
        display: none;
    }
    .c{
   font-size:20px;
   display:flex;
   justify-content: center;
}
.a{
   font-size:15px;
    width: 30px;
    border-radius: 50%;
    border: 0.1875em solid #0F1C3F;
    height: 30px;
   }

    .img {
        margin-top: 15px;
        max-width: 80%;
    }

    .c:hover .b{
    display: block;
}
.b{
    padding: 40px;
    position: absolute;
    padding-left: 70px;
    display: none;
   
}
.signin:hover {
  background-color: #3e8e41;
</style>
</body>
</html>