<?php
session_start();
if (isset($_SESSION['id'])&&($_SESSION['id']>0)) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/layout.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
 table {
 
    margin-top:30px;
  border-collapse: collapse;
  width: 100%;
}

th, td {
    font-size:20px;
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
  font-weight: bold;
}

td.text-center {
  text-align: center;
}

button {
  background-color: #dc3545;
  color: #fff;
  border: none;
  padding: 8px 12px;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
}

button:hover {
  background-color: #c82333;
}

a.btn {
  background-color: #17a2b8;
  color: #fff;
  border: none;
  padding: 8px 12px;
  border-radius: 4px;
  text-decoration: none;
  font-size: 16px;
}

a.btn:hover {
  background-color: #138496;
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
a {
  text-decoration: none;
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


        <table class="table">
            <thead>
                <tr class="bg-[black] h-[50px]">
                    <th class="text-[white]">id</th>
                    <th class="text-[white]">Product Name</th>
                    <th class="text-[white]">phone</th>
                    <th class="text-[white]">Address</th>
                    <th class="text-[white]">order status</th>
                    <th class="text-[white]">total_money</th>
                    <th></th>

                </tr>
            </thead>

            <tbody>
                <?php
                require "../models/connect.php";
                //    $query = "SELECT * FROM products"; 
                //    $productList = getAll($query);
                $id = $_SESSION["id"];
                $user = "SELECT * FROM bill WHERE id_user = $id";
                $productList = getAll($user);
                ?>

<?php 
                foreach($productList as $product):?>
                <tr>   
                    <td class="text-center">
                        <?php echo $product["id"]?>
                    </td>
                    <td>
                        <?php echo $product['fullname']?>
                    </td>
                    <td>
                        <?php echo $product['phone']?>
                    </td>
                    <td>
                        <?php echo $product['diachi']?>
                    </td>
                    <td>
                        <?php echo $product['orderstatus']?>
                    </td>
                    <td> <?php echo $product['total_money']?></td>
                    <td>
                        <form action="../control/control_huyDon.php" method="POST">
                            <input hidden type="text" value="<?php echo $product['id']?>" name="id" id="">
                        <input hidden type="text" value="Hủy đơn hàng" name="xacnhan" id="">
                        <button>Hủy đơn hàng</button>
                    </form>
                    <a  class="btn btn-danger" href="./bill_detail.php?id=<?php echo$product["id"]?>">chi tiết</a>
                    </td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>

       </div>
</body>

</html>
<?php }else{
     header("location:./dangNhap.php");
    }?>