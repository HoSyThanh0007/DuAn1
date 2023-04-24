

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
    <?php session_start()?>

    
    <header class="header">
           <a href="#" class="logo"> Thcshop.com</a>

   <nav class="navbar">
      <div id="close-navbar" class="fas fa-times"></div>
      <a href="index.php">TRANG CHỦ</a>
      <a href="sanpham.php">SẢN PHẨM</a>
      <a href="lienhe.php">LIÊN HỆ</a>
      <a href="donHangdaMua.php">ĐƠN HÀNG</a>
      <a href="./giohang.php">GIỎ HÀNG</a>
   </nav>
   
<!-- fỏm đăng nhập đăng kí  -->
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


       
        <table class="table">
            
            <thead>
                <tr class="bg-[black] h-[50px]">
                
                <th class="text-[white]">Tên sản phẩm</th>
                <th class="text-[white]">Số lượng</th>
                <th class="text-[white]">Giá</th>
                <th><a class="text-[white]" href="./donHangdaMua.php">back</a></th>
                
                </tr>
            </thead>
           
            <tbody>
            <?php 
    require "../models/connect.php";
    $id = $_GET["id"];
    $id_user = $_SESSION['id'];
    $query = "SELECT `id`, `id_bill`, `id_sp`, `sl`, `total_price` FROM `billdetail` WHERE id_bill = '$id' && id_user =$id_user";
    $billdetail = getAll($query);
?>

 <?php foreach($billdetail as $item):?>
                <tr>   
                   <td>
                        <?php $id_sp = $item['id_sp'];
                        $query = "SELECT * FROM products WHERE id = $id_sp";
                        $product = getOne($query);
                        echo $product['name'];
                        ?>

                   </td>
                   <td>
                    <?= $item['sl']?>
                   </td>
                   <td>
                    <?= $item['total_price']?>
                   </td>
                
                </tr>
                <?php endforeach?>
            </tbody>
        </table>

    </div>
</body>

</html>
