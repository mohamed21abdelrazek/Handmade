<?php include ('server1.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta http-equiv="X-UA-compatiable" content="IE-edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="style1.css">
<title>products</title>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <nav>
        
        </label>
        <label class="logo"><img src="./image/logo1.jpeg"></label>
        <ul>
        <li><a class="active" href="index.html">Home</a></li>
        <li><a href="log in.html">LogIn</a></li>
        <li><input class="search" type="search" placeholder="Search"></li>    
        <li class="cart">
        <a href="cart1.php">
            <ion-icon name="cart"></ion-icon>
   
        </a>
        </li>
        </ul>
        </nav>    
<div class="container">
<h3 class="title"> new arrivals </h3>
<div class="product-container">
    <?php
    $records = mysqli_query($db,"SELECT * FROM product");
    while ($data = mysqli_fetch_array($records)) {                                  


?>
<div class="product" data-name="<?php echo $data ['id']; ?>">
<img src="./image/<?php echo $data['img'];?>" alt="">   
<h3><?php echo $data ['name']; ?></h3>
<div class="price"><?php echo $data ['price']; ?></div>
</div>
<?php
    }     
    ?>
</div>
 </div> 
<div class="products-preview">
    <?php
    $records = mysqli_query($db,"SELECT * FROM product");
    while ($data = mysqli_fetch_array($records)) {                                  


?>
<div class="preview " data-target="<?php echo $data ['id']; ?>"> 
    <i class="fa fa-times"></i>     
<img src="./image/<?php echo $data['img'];?>" alt="">
<h3><?php echo $data ['name']; ?></h3>
<p><?php echo $data ['offered']; ?></p>
<p><?php echo $data ['size']; ?><br>Code  <?php echo $data ['code']; ?></p>
<div class="price"><?php echo $data ['price']; ?></div>
<div class="button">
<form action="products.php" method="post">
<div class="backEnd" style="display:none;">
        <table>
            <tr>
                <td><label>Id</label></td>
                <td> <input type="text" name="id"  value="<?php echo $data['id']?>" placeholder="Enter Product Id" required> ></td>
            </tr>
            <tr>
                <td><label>Name</label></td>
                <td> <input type="text" name="name"  value="<?php echo $data['name']?>" placeholder="Enter Product Name" required> ></td>
            </tr>
            <tr>
                <td><label>Img</label></td>
                <td><input type="text" name="img"  value="<?php echo $data['img']?>" placeholder="Enter Product Code" required>></td>
            </tr>
            <tr>
                <td><label>Price</label></td>
                <td><input type="text" name="price"  value="<?php echo $data['price']?>"  placeholder="Enter Product Price" required> ></td>
            </tr>
        </table>
        </div>






 <button style="display: contents;"> <a href="shippingaddress.php" class="buy" >buy Now</a></button> 
<!-- <button name="cart"  style="display: contents;"><a href="#" class="add-cart cart1" >Add To Cart</a></button> -->
<input name="cart" type="submit" value="Add To Cart"  style="flex: 1 1 16rem;
    padding: 10px;
    font-size: 18px;
    color: white;
    border: 2px solid #444;
    background: #0082e6;
    border-radius: 10px;
    transition: 0.5s;">
</form>
</div>
</div>
<?php
}
?>
</div>

<footer>
<ul class="social_icon">
<li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
<li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
<li><a href="#"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
<li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
</ul>
<div class="menu">
<li><a href="index.html">Home</a></li>
<li><a class="active" href="#">product</a></li>
<li><a href="store.html">Shopping Card</a></li>
</div>
<p>© 2022 online tutorial | all rights reserved</p>
</footer>
<script>
    let preveiwContainer = document.querySelector('.products-preview');
    let previewBox =  preveiwContainer.querySelectorAll('.preview');
    document.querySelectorAll('.product-container .product').forEach(product =>{
    product.onclick = () =>{
    preveiwContainer.style.display = 'flex';
    let name = product.getAttribute('data-name');
    previewBox.forEach(preview =>{
    let target = preview.getAttribute('data-target');
    if (name == target){
    preview.classList.add('active');
    }
    });
    };
    });
    previewBox.forEach(close  =>{
        close.querySelector('.fa-times').onclick = () =>{
          close.classList.remove('active');
          preveiwContainer.style.display = 'none';
        };
    });

    

</script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</body>

</html>
<?php
if(isset($_POST['cart'])){ 
    $id = mysqli_real_escape_string($db , $_POST['id']); 
 $sql = "SELECT * FROM productcart WHERE product_id = '$id' ";
 $result = mysqli_query($db , $sql);    
 if(mysqli_num_rows($result)>0){  
     $sql1 = " SELECT * FROM productcart WHERE product_id = '$id' ";
     $res = mysqli_query($db , $sql1);
     $quantity = 1;
     while($data = mysqli_fetch_array($res)){
        echo $data['quantity'];
        $quantity += (int)$data['quantity'];
        echo "asdfffffffffffasdfffffffffffffffffffffffff         " + $quantity;
     }
    // $data = mysqli_fetch_array($res)[0];
    //  $curentcountity = $data['quantity'];
    //  echo "current quantity" + $curentcountity; 
     // $Plus = $sql1 + $quantity;
     // $quantity = 2;
     $sq = " UPDATE `productcart` SET `quantity`='[$quantity]' WHERE product_id = '$id' ";
     mysqli_query($db , $sq); 
     echo "product updated";
 }

 elseif(mysqli_num_rows($result)==0){
     $sqll = "INSERT INTO productcart(name,price,img,quantity,product_id)  Values ('$name','$price','$img','$quantity' , '$id')";     
     mysqli_query($db , $sqll);  
     echo "product added";
 }
}




ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
