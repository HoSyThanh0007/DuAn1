<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/layout.css">
    <title>GIẢM GIÁ</title>
</head>
<style>
    .box{
        display:grid;
       grid-template-columns: 1fr 1fr 1fr;
       margin-left: 10%;
    }
    .dell{
        width: 500px;
  
     margin-top: 10%;
       height: 600px;
    }
    .dell img{
        width: 400px;
    }
    h2{
        font-size: 25px;
        font-weight: 600;
        text-transform: capitalize;
    }
    del{
        color:red;
        font-size: 15px;
        font-weight: 500;
    }
    h3{
        font-size: 25px;
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
   
        float:right;
        font-size:20px;
    }
    .a{
    width: 40px;
    border-radius: 50%;
    border: 0.1875em solid #0F1C3F;
    height: 40px;
   }
</style>
<body>
    <?php 
    session_start();
    ?>
   
<header class="header">
           <a href="#" class="logo"> <i class="fas fa-lightbulb"></i> Fptshop.com</a>

   <nav class="navbar">
      <div id="close-navbar" class="fas fa-times"></div>
      <a href="index.php">TRANG CHỦ</a>
      <a href="sanpham.php">SẢN PHẨM</a>
      <a href="giam_gia.php"> HÀNG GIẢM GIÁ</a>   
      <a href="lienhe.php">LIÊN HỆ</a>
      <a href="donHangdaMua.php">ĐƠN HÀNG</a>
      <a href="./giohang.php">GIỎ HÀNG</a>
   </nav>
   <div class="icons">
    
      <div id="menu-btn" class="fas fa-bars"></div>
   </div>

<!-- fỏm đăng nhập đăng kí  -->
<div class="account-form">

   <div id="close-form" class="fas fa-times"></div>

   <div class="buttons">
      <span class="btn active login-btn">login</span>
      <span class="btn register-btn">register</span>
   </div>

   <form class="login-form active" action="">
      <h3>login now</h3>
      <input type="email" placeholder="enter your email" class="box">
      <input type="password" placeholder="enter your password" class="box">
      <div class="flex">
         <input type="checkbox" name="" id="remember-me">
         <label for="remember-me">remember me</label>
         <a href="#">forgot password?</a>
      </div>
      <input type="submit" value="login now" class="btn">
   </form>

   <form class="register-form" action="">
      <h3>register now</h3>
      <input type="email" placeholder="enter your email" class="box">
      <input type="password" placeholder="enter your password" class="box">
      <input type="password" placeholder="confirm your password" class="box">
      <input type="submit" value="register now" class="btn">
   </form>

</div>

<!--kết thúc form đăng nhập đăng kí -->

            <div class="authenticate">
                <?php
                    if(empty($_SESSION["email"])){
                    echo ' <div >
                    <div id="account-btn" class="fas fa-user"></div>
                    </div>';
                    }else{  
                        echo '<div class="c"><p>'.$_SESSION['email'].'</p>
                        <div class="b">
                        <p> <a href="../control/login_out.php">Đăng xuất</a></p>
                        <p> <a href="./forgotPassword.php">Đổi mật khẩu</a></p>
                        <p>tài khoản của tôi</p>
                       </div>
                       </div>
                        ';
                    }
                ?>
            </div>
        </header>
    <?php 
    require "../models/connect.php";
    $query = "SELECT * FROM products WHERE deal";
    $productList = getAll($query);
    ?>
    <div class="flex justify-center">
        <div >
            <div class="box">
                <?php foreach($productList as $item1):?>
                <div class="dell">   
                    
                   
                    <img   src="<?= "../image/".$item1["image"]?>" alt="">
                    <h2><?= $item1["name"]?></h2>
                    <p><?= $item1["descrtiption"]?></p>
                    <del><?= $item1["price"]."$"?></del>
                    <h3 class=""><?= $item1["deal"]."$"?></h3>
                    
                </div>
                <?php endforeach?>
            </div>
        </div>
    </div>
    
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

    <script src="./script.js"></script>
   
</body>
</html>
