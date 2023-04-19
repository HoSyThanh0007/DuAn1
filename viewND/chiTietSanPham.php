<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/layout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>CHI TIẾT SẢN PHẨM </title>
</head>
<style>
@import url("https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600&display=swap");
* {
  font-family: "Nunito", sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  border: none;
  text-decoration: none;
  transition: all 0.2s linear;
}

    .reviews .slide {
  text-align: center;
}
.swiper reviews-slider{
        
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 25px;
}

.reviews .slide p {
  font-size: 1.5rem;
  line-height: 2;
  color: #777;
  position: relative;
  background: #f0fdfa;
  border: 0.1rem solid #0eb582;
  margin-bottom: 3rem;
  padding: 2rem;
}

.reviews .slide p::before {
  content: "";
  position: absolute;
  bottom: -1.2rem;
  left: 50%;
  transform: translateX(-50%) rotate(45deg);
  background: #f0fdfa;
  border-bottom: 0.1rem solid #0eb582;
  border-right: 0.1rem solid #0eb582;
  height: 2rem;
  width: 2rem;
}
section {
    display: block;
    padding: 3rem 5%;
  }
.reviews .slide img {
  height: 7rem;
  width: 7rem;
  border-radius: 50%;
}

.reviews .slide h3 {
  font-size: 2.2rem;
  text-transform: capitalize;
  color: #444;
  padding: 0.5rem 0;
}

.reviews .slide .stars {
  font-size: 1.2rem;
  color: #0eb582;
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
     .b{
        padding: 40px;
        position: absolute;
        padding-left: 70px;
        display: none;
        z-index: 3;
    }
    .c:hover .b{
    display: block;
    }
    .c{
        display: flex;
    }
 
   .dathang{
    font-family: "Nunito", sans-serif;
    font-size:16px;
   }
   .dathang h2{
    font-size:24px;
   }
   #sl{
    font-size:24px;
    width : 50px;
   }
  .TinhTrang{
    font-family: "Nunito", sans-serif;
    font-size:20px;
  }
  .TinhTrang a{
    width: 40px;
    height: 40px;
  }
  .TinhTrang button{
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 8px 18px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 8px;

  }
  .TinhTrang button:hover{
    background-color: #3e8e41;
  }
  .spctmr{
margin-top:40px;
  }
  .binhluansp{
    font-size:16px;
  }
  textarea {
    width:auto;
  height:100px;
  border: 2px solid #ccc; /* Đường viền 2px với màu xám nhạt #ccc */
  padding: 10px; /* Khoảng cách giữa nội dung và đường viền là 10px */
}.topbinhluan div {
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-bottom: 20px;
    background-color: #f9f9f9;
}

.topbinhluan p {
    margin: 0;
    font-size: 16px;
    line-height: 1.5;
    color: #555;
}

.topbinhluan h4 {
    margin-top: 10px;
    font-size: 14px;
    font-style: italic;
    color: #999;
}
</style>
<body>

<div class="container">
  <header class="header">

   <a href="#" class="logo"> <i class="fas fa-lightbulb"></i> Fptshop.com</a>

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

        <div class="spctmr">

            <?php

            require "../models/connect.php";
            $id = $_GET["id"];
            $query = "SELECT * FROM products WHERE id = $id";
            $product = getAll($query);
            $comments = "SELECT * FROM comment WHERE idp = $id";
            $comment = getAll($comments);
            //    giỏ hàng
            ?>


            <div class="anhsp">
                <?php foreach ($product as $details) : ?>

                    <img src="<?= " ../image/" . $details["image"] ?>" alt="">
                <?php endforeach ?>
            </div>
            <div class="dathang">
                <?php foreach ($product as $details) : ?>
                    <h2>
                        <?= $details["descrtiption"] ?>
                    </h2>
                    <p>
                    Giảm thêm 300.000đ khi thanh toán qua VNPAY khi mua các sản phẩm iPhone</p> 
                    <p>
 Nhận mã giảm giá tới 300.000đ qua ZaloPay khi mua iPhone 14 series - (Xem chi tiết)</p>
 <p>Thanh toán qua Moca tặng ngay đế sạc trị giá 320.000đ (Cho hóa đơn có tổng giá trị từ 15 Triệu) - Áp dụng từ 01/04 - (Xem chi tiết)</p>
 <p>Giảm thêm 30% tới 1,2 triệu khi mở thẻ TP Bank EVO - Duyệt nhanh chỉ 15 phút, LH Cửa hàng hoặc 19002091 để được hỗ trợ - (Xem chi tiết)</p>
 <p>Trả góp qua Homepaylater giảm thêm tới 500.000đ, duyệt nhanh chỉ 30s - (Xem chi tiết)</p>
 <p>Mở thẻ tín dụng VPBank nhận ưu đãi tới 1.500.000đ - (Xem chi tiết)</p>
 <p>Hỗ trợ trả góp 0% qua 26 ngân hàng và công ty tài chính. - (Xem chi tiết)</p>
                    </p>
                <?php endforeach ?>





                <?php
                if (isset($_SESSION["id"]) && ($_SESSION["id"]) > 0) {

                    $id_p = $_GET["id"];
                    $id_user = $_SESSION["id"];

                    $a = "SELECT * FROM products WHERE id = $id_p";
                    $p = getOne($a);

                ?> 
                    <div class= "TinhTrang">
                    <form action="../control/gioHang_control.php" method="POST" enctype="multipart/form-data">
                        <input type="text" hidden value="<?php echo $id_p ?>" name="id_p" id="">
                        <input type="text" hidden value="<?php echo $id_user ?>" name="id_user" id="">
                        <input type="text" hidden value="<?php echo $p['name'] ?>" name="name" id="">
                        <input type="number" min="1" value="1" name="sl" id="sl">
                        <input type="text" hidden value="<?php echo $p['image'] ?>" name="image" id="">
                        <input type="text" hidden value="<?php echo $p['price'] ?>" name="price" id=""> <br>
                        <b>Tình Trạng : Còn Hàng</b>
                        <hr>
                        <a href="../control/gioHang_control.php"><button>Thêm vào giỏ hàng</button></a>
                    </form>
                    </div>
                   
                <?php

                } else {
                    echo " <button   ><a href='../viewND/dangNhap.php?'>đăng nhập để bình luận</a></button>";
                }
                ?>
            </div>
        </div>
        
<!-- students reviews section starts  -->

<section class="reviews">

<h1 class="heading"> đánh giá về tình hình Sản Phẩm </h1>

<div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <p>Chiến lược phát triển ngành công nghiệp hóa chất Việt Nam đến năm 2030, tầm nhìn đến năm 2040 (Chiến lược) với quan điểm phát triển nhanh, bền vững ngành công nghiệp hóa chất, ứng dụng công nghệ hiện đại,…</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
      </div>
</div>

</section>

<!-- students reviews section ends -->


        <h1>Đánh giá sản phẩm</h1>
        <div class="binhluansp">
            <?php
            if (isset($_SESSION["id"]) && ($_SESSION["id"]) > 0) {

                $id_p = $_GET["id"];
                $id_user = $_SESSION["id"];

                $a = "SELECT * FROM products WHERE id = $id_p";
                $p = getOne($a);

            ?>
                <form action="../control/comment.php" method="POST">
                    <div>
                        <input type="text" hidden value="<?= $id ?>" name="id_p" id="">
                        <input type="text" hidden value="<?= $_SESSION["email"] ?>" name="name" id="">
                        <input type="text" hidden value="<?= $_SESSION["id"] ?>" name="id_u" id="">
                        <div class="chitietsp">
                          
                        </div>
                        <textarea name="comment" id="topbinhluan" cols="180" rows="10" placeholder="sản phẩm tốt"></textarea>
                    </div>
                    <button>Bình Luận</button>
                </form>

            <?php
            } else {
                echo " <button   ><a href='../viewND/dangNhap.php?'>đăng nhập để bình luận</a></button>";
            }
            ?>
        </div>

        <div class="topbinhluan">
            <?php foreach ($comment as $bl) : ?>
                <div>
                    <p>
                        <?= $bl["name"] ?>
                   </p>
                    <p>
                        <?= $bl["comment"] ?>
                   </p>
                    <h4>
                        <?= $bl["date"] ?>
                    </h4>
                  
                </div>
            <?php endforeach ?>
        </div>



    </div>
            </div>
</body>

</html>
