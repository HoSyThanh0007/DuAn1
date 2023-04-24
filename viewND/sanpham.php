<?php
        session_start();
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/layout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>SẢN PHẨM</title>
</head>
<style>

    .sanpham1 {
        display: grid;
    }
    .sanpham1 h3{
        text-align: center;
    }
    .sanpham1 p{
        padding-left: 30px;
    }
    .sanpham1 span{
        padding: 0px 10px 30px 30px;
    }
    

    .loai {
        border-radius: 5px;
        /* width: 319px; */
        height: 500px;
        /* border: 1px solid black; */
        background-color: #f0fdfa;
    }

    .loai h1 {
        border-bottom: 1px solid black;
        text-align: center;
    }

    .loai a {
        text-decoration: none;
        text-transform: capitalize;

    }

    .loai h2 {
        padding-bottom: 25px;
        border-bottom: 1px solid #cdcd;
        text-align: center;

    }

    .sanpham {
        width:900px;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        border-radius: 5px;
        gap: 25px;
        background-color: #f0fdfa;
        padding: 15px 15px;
    }

    .sanpham1 {
        /* width: 300px; */
        /* border: 1px solid black; */
        border-radius: 15px;
        background-color: white;
    }

    .sanpham1 a img {
        margin: 10px 10px;
        width: 94%;
        height: 300px;
    }

/* Kiểu cho form tìm kiếm */
.loai .formdk {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  margin-bottom: 20px;
}

.loai .formdk .tim {
  border: 2px solid #ddd;
  border-radius: 20px;
  font-size: 16px;
  margin-right:30px;
}

.loai .formdk .tim:focus {
  border-color: #4CAF50;
  outline: none;
}

.loai .formdk .timkiem {
 margin-top:30px;
  background-color: #4CAF50;
  color: #fff;
  width:80px;
  border: none;
  border-radius: 20px;
  font-size: 16px;
  margin-right: 10px;
  cursor: pointer;
}

/* Kiểu cho danh mục sản phẩm */
.loai h1 {
    color: #4CAF50;
  margin-bottom: 20px;
  font-size: 30px;
}

.loai .loai1 {
  padding: 10px;
  font-size:16px;
  border: 2px solid #ddd;
  border-radius: 10px;
  margin-bottom: 10px;
}

.loai .loai1 h2 a {
  color: #333;
  text-decoration: none;
}

.loai .loai1 h2 a:hover {
  color: #4CAF50;
}
    .slide {
        gap: 20px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        margin-top: 10%
    }
.boxs p {
    font-size: 20px;
    justify-content: center;
}

.boxs span {
    font-size: 18px;
    font-weight: 500;
    padding-right: 10%;
    color: red;
}
    .boxs {
        justify-content: center;
       
        display: grid;
        width: 180px;
        height: 200px;
      
    }


    .hoveranh img {
   object-fit: cover;
   transition: transform .5s;
}

.hoveranh:hover img {
   transform: scale(1.1);
}
    .sanpham {
        margin-right:15px;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 15px;
        border-radius: 5px;
    }
.sanpham h3 {
    text-align: center;
    font-size: 20px;
    font-weight: 100;
    text-transform: uppercase;
}
    .boxs {
        height: 300px;
        border-radius: 5px;
        border: 2px solid #360cdc;
        width: 250px;
    }
    h3 {
  font-size: 20px;
  font-weight: bold;
  margin: 10px 0;
}

/* Kiểu cho phần tử p */
p {
  font-size: 20px;
  line-height: 1.5;
}

/* Kiểu cho phần tử span.gia */
.gia{
    font-size: 22px;
    font-weight: 600;
    color: #A18A68;
    margin-left: 2px;
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
.footert {
   margin-top:30px;
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
</style>

<body>
    <div class="container">
       

     <header class="header">
           <a href="#" class="logo">Thcshop.com</a>

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
<!--kết thúc form đăng nhập đăng kí -->
        </header>
     
        <?php


require "../models/connect.php";

$query = "SELECT * FROM categoryid";
$categoryidList = getAll($query);
?>
<!-- tìm kiếm -->
<?php

if (empty($_GET["id"])) {
    $query = "SELECT * FROM products";
    $productList = getAll($query);
} else {
    $id = $_GET["id"];

    $query = "SELECT * FROM products WHERE class = $id";
    $productList = getAll($query);
}


?>  

<div class="slide">
    <!-- Danh mục -->
    <?php if (empty($_POST["search"])) {
        $sanpham = "SELECT * FROM products";
        $productList = getAll($query);
    } else {
        $search = $_POST["search"];
        $sanpham = "SELECT * FROM products WHERE name LIKE '%$search%'";
        $productList = getAll($sanpham);
    }
   ?>

    <div class="loai">
        <div class="formdk">
            <form action="./sanpham.php" method="POST">

             
                <input type="submit" value="Tìm kiếm" class="timkiem">
                <input type="text" name="search" class="tim">
            </form>

        </div> 
           <h1>Danh mục</h1>
        <?php foreach ($categoryidList as $item) : ?>
            <div class="loai1">
                <h2>
                    <a href="./sanpham.php?id=<?= $item["iddm"] ?>"><?= $item["namee"] ?></a>
                </h2>
            </div>
        <?php endforeach ?>


    </div>

    <!-- Sản phẩm -->
    <div class="sanpham">
        <?php foreach ($productList as $item1) : ?>
            <div class="sanpham1">
                <div class="hoveranh">
                <a href="./chiTietSanPham.php?id=<?= $item1["id"] ?>"><img src="<?= "../image/" . $item1["image"] ?>" alt=""> </a>
        </div>
                <h3>
                    <?= $item1["name"] ?>
                </h3>
                <p>
                    <?= $item1["descrtiption"] ?>
                </p>
                <span class="gia">
                    <?= "$" .  $item1["price"]  ?>
                </span>

            </div>
        <?php endforeach ?>
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

        </div>

<!-- footer section ends -->
<script src="./script.js"></script>
</body>

</html>
