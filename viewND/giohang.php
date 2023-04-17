<?php
session_start();
if (isset($_SESSION['id']) && ($_SESSION['id'] > 0)) {

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/layout.css">
        <title>GIỎ HÀNG </title>
    </head>
    <style>
        .container {
            max-width: 1200px;
            padding: 0;
            margin: 0 auto;
            box-sizing: border-box;
            font-size:20px;
        }
        input{
            width: 50px;
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
   .table{
    margin-top:30px;
   }
   .close-navbar{
    display:;
   }
   a {
  text-decoration: none;
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
    </style>

    <body>
    
            
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
    <div class="container">
            <?php      
            require "../models/connect.php";
            $id_user = $_SESSION['id'];
            $query = "SELECT * FROM cart WHERE id_user = $id_user";

            $pr = getAll($query);

            ?>

            <table class="table">
                <thead>
                    <tr>
                        <th>stt</th>
                        <th>tên sản phẩm</th>
                        <th>image</th>
                        <th>số lượng</th>
                        <th>Giá</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $tong = 0;
                    $count = 0;
                    ?>

                    <?php foreach ($pr as $pro): ?>
                        <tr>
                            <?php $count = $count + 1 ?>
                            <td>
                                <?= $count ?>
                            </td>
                            <td>
                                <h3>
                                    <?= $pro['name'] ?>
                                </h3>
                            </td>
                            <td><img src="<?= "../image/" . $pro['image'] ?>" alt=""></td>
                            <td><input type="number" value="<?= $pro['sl'] ?>" name="" id=""></td>
                            <td>
                                <h3>
                                    <?= $pro['gia'] ?>
                                </h3>
                            </td>
                            <td><a class="btn btn-success" href="../control/control_xoaDonhang.php?id=<?php echo $pro['id'] ?>">xóa</a></td>
                            <?php
                            $sl = $pro['sl'];
                            $gia = $pro['gia'];
                            $tong = $tong + ($sl * $gia);
                            ?>

                        <?php endforeach ?>
                    </tr>
                    <tr>
                        <td> Tổng tiền</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <?= $tong ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <a href="./thongTin.php?id=<?= $tong?>"><button>Thanh Toán</button></a>
                    </div>
        </div>
        <script src="./script.js"></script>

    </body>

    </html>
<?php } else {
    header("location:./dangNhap.php");
}
?>
