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
            <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
          height:35px;
          font-size:16px;;
            width:100%;
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
.table {
  margin-top:20px;
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
}

.table th,
.table td {
  padding: 8px;
  text-align: left;
  vertical-align: middle;
  border: 1px solid #ddd;
}

.table th {
  font-weight: bold;
  background-color: #f2f2f2;
}

.table tbody tr:nth-child(even) {
  background-color: #f9f9f9;
}

.table tbody tr:hover {
  background-color: #f2f2f2;
}
.btn {
  display: inline-block;
  padding: 6px 12px;
  font-size: 14px;
  font-weight: 400;
  line-height: 1.42857143;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  cursor: pointer;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;
  color: #fff;
  background-color: #5cb85c;
  border-color: #4cae4c;
  transition: all 0.3s ease-in-out;
}

.btn:hover {
  background-color: #4cae4c;
  border-color: #3e8f3e;
}

.btn:active {
  background-color: #449d44;
  border-color: #398439;
  box-shadow: none;
}

.btn:focus {
  outline: none;
  box-shadow: none;
}
img{
    width:100px;
    height:100px;
}
/* nut thanh toán*/
.modal {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    background: rgb(0,0,0,0.4);
    display: none;
    align-items: center;
    justify-content: center;
  }
  .modal.open{
    display: flex;
  }
  .modal-container {
    position: relative;
    background: rgb(240, 234, 234);
    width: 600px;
    min-height: 300px;
    max-width: calc(100%-32px);
    animation: modalFadeIn ease.6s;
  }
  .modal-header {
    background: rgb(38, 178, 77);
    height: 110px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 35px;
  }
  .modal-close {  
    position: absolute;
    color: #fff;
    padding: 10px;
    cursor: pointer;
    opacity: 0.8;
  }
  .modal-close:hover {
    opacity: 1;
    background: #6293ab;
  }
  .modal-boddy{
    padding: 14px;
  }
  .modal-label{
    display: block;
    font-size: 15px;
    margin-bottom: 12px;
  
  }
  .modal-input {
   margin-bottom: 24px;
   border : 1px solid #ccc;
   width: 100%;
   padding: 15px;
  }
  #buy-tikets {
    font-size: 15px;
    padding: 18px;
    background: #1d8e4a;
    border: none;
    text-transform: uppercase;
    width: 100%;
    color: #fff;
    cursor: pointer;
  }
  #buy-tikets:hover {
     opacity: 0.9;
     background: #022d41;
  }
  .modal-footer {
  padding: 16px;
  text-align: right;
  }
  .modal-footer a {
  color: rgb(17, 216, 84);
  }
  p{
    font-size:20px;
  }
  @keyframes modalFadeIn {
    from{
        opacity: 0;
       transform:translateY(-140px);
    }
    to{
        opacity: 1;
       transform: translateY(0);
    }
  }

    </style>

    <body>
    <div class="container">
            
<header class="header">
           <a href="#" class="logo"></i> Thcshop.com</a>

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
        <button class="btn js-buy-ticket">Thanh Toán</button>
    </div>
</div>
                        <div class="modal js-modal">
   <div class="modal-container js-modal-content">
       <div class="modal-close js-modal-close">
           <i class="ti-close">                      
           </i>
       </div>
       <header class="modal-header">            
         <i class="ti-bag"></i>
            Thông Tin
       </header>
       <form action="../control/control_add_bill.php" method="POST">
       <div class="modal-boddy"> 
       <input type="text" hidden value="<?php echo $_SESSION['id'] ?>" name="id" id="">
                <p for="">Số điện thoại</p>
                <input type="text" name="sdt" id="">
                <p for="">Họ và tên</p>
                <input type="text" name="name" id="">
                <p for="">địa chỉ</p>
                <input type="text" name="diachi" id="">
                <p for="">Tổng tiền</p>
                <input type="text" value="<?= $tong ?>" name="tongTien" id="">
            </div>
            <button id="buy-tikets">
               Mua <i class="ti-check"></i>
            </button>
          </form>
     </div>
   </div>
<script>
 const buyBtns= document.querySelectorAll('.js-buy-ticket')
 const modal =document.querySelector('.js-modal')
 const modalClose=document.querySelector('.js-modal-close')
 const modalContent=document.querySelector('.js-modal-content')
 function showBuyTicket (){
     modal.classList.add('open')
 }
 function hideBuyTicket(){
     modal.classList.remove('open')
 }
 for(const buyBtn of buyBtns){
     buyBtn.addEventListener('click',showBuyTicket)
 }
 modalClose.addEventListener('click',hideBuyTicket)
 modal.addEventListener('click',hideBuyTicket)
 modalContent.addEventListener('click', function(event){
     event.stopPropagation()    
 })
</script>
        <script src="./script.js"></script>

    </body>

    </html>
<?php } else {
    header("location:./dangNhap.php");
}
?>
