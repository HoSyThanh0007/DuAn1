<?php 
    require '../models/connect.php';
  
    $soluong = $_POST["soluong"];

    $query  = "UPDATE products SET soluong = $soluong WHERE WHERE id= '$id'";
    move_uploaded_file($_FILES["product-image"]["tmp_name"],"../image/".$_FILES["product-image"]["name"]);
    connect($query); //gọi hàm connect() để thực thi câu lệnh insert
    header("location:../view/admin/product_management.php");
?>