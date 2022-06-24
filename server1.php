<?php

if(!isset($_SESSION)){             
    session_start();                     
}
                                      
$error = array();                   
$quantity = 1; 
$db =mysqli_connect('localhost','root','','handmade');          




if(isset($_POST['reg'])){              
    $first = mysqli_real_escape_string($db , $_POST['firstname']);     
    $second = mysqli_real_escape_string($db , $_POST['lastname']);     
    $email = mysqli_real_escape_string($db , $_POST['email']);          
    $phone = mysqli_real_escape_string($db , $_POST['phone']);
    $password = mysqli_real_escape_string($db , $_POST['password']);
    $con = mysqli_real_escape_string($db , $_POST['conpassword']);
    $gender = mysqli_real_escape_string($db , $_POST['gender']);
    $country = mysqli_real_escape_string($db , $_POST['countries']);
if(empty($first)){           
    array_push($error , 'Enter the first');            
}
if(empty($second)){
    array_push($error , 'Enter the second');
}
if(empty($email)){
    array_push($error , 'Enter the email');
}
if(empty($phone)){
    array_push($error , 'Enter the phone');
}
if(empty($password)){
    array_push($error , 'Enter the password');
}
if(empty($con)){
    array_push($error , 'Enter the confirm password');
}
if(empty($gender)){
    array_push($error , 'Enter the Gender');
}

if($password!=$con){
    array_push($error , 'Password not match');
}

if(count($error) ==0){
    $sql = "SELECT email FROM register WHERE email='$email'";
    $result = mysqli_query($db , $sql);
    if(mysqli_num_rows($result)>0){              
           echo "error this email already exists in the database.";
           return;
    } 
$sql = "INSERT INTO register (fname,lname,email,phone,password,conpassword,gender,country)  Values ('$first' , '$second' , '$email','$phone','$password','$con','$gender', '$country')";     
mysqli_query($db , $sql);               
}
}





// login
if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($db , $_POST['email']);       
    $password = mysqli_real_escape_string($db , $_POST['password']);
if(empty($email)){                                                   
    array_push($error , 'Enter the email');            
}
if(empty($password)){
    array_push($error , 'Enter the password');
}
if(count($error) ==0){
    $sql = "SELECT * FROM register WHERE email='$email' AND password='$password' ";
    $result = mysqli_query($db , $sql);    
                                           
    if(mysqli_num_rows($result)==1){              
        $_SESSION['success']=" Welcome you are logged in";       
        //redirect user to homepage
        header('location:index.php');     
    }
}
}



//insert product
if(isset($_POST['save'])){           
    $id = mysqli_real_escape_string($db , $_POST['id']);      
    $name = mysqli_real_escape_string($db , $_POST['name']);         
    $code = mysqli_real_escape_string($db , $_POST['code']);
    $size = mysqli_real_escape_string($db , $_POST['size']);
    $img = mysqli_real_escape_string($db , $_POST['img']);
    $price = mysqli_real_escape_string($db , $_POST['price']);
    $category = mysqli_real_escape_string($db , $_POST['category']);
    $offered = mysqli_real_escape_string($db , $_POST['offered']);

if(empty($name)){
    array_push($error , 'Please Enter the Name');
}
if(empty($img)){
    array_push($error , 'Please Select the image');
}
if(empty($price)){
    array_push($error , 'Please Enter the Price');
}


if(count($error) ==0){
$sql = "INSERT INTO product(id,img,name,offered,size,code,price,category)  Values ('$id','$name' , '$code' , '$size','$img','$price','$category','$offered')";     
mysqli_query($db , $sql);              
}
}   




// cart
if(isset($_POST['cart'])){     
    $id = mysqli_real_escape_string($db , $_POST['id']);             
    $name = mysqli_real_escape_string($db , $_POST['name']);         
    $img = mysqli_real_escape_string($db , $_POST['img']);
    $price = mysqli_real_escape_string($db , $_POST['price']);
    // echo $id;
    // echo "asdfasdf";
    // return;
if(empty($name)){
    array_push($error , 'Please Enter the Name');
}
if(empty($img)){
    array_push($error , 'Please Select the image');
}
if(empty($price)){
    array_push($error , 'Please Enter the Price');
}

if(count($error) ==0){
    $sql = "SELECT * FROM productcart WHERE product_id = '$id' ";
    $result = mysqli_query($db , $sql);    
                                       
    // if(mysqli_num_rows($result)>0){  
    //     $sql1 = " SELECT quantity FROM productcart WHERE product_id = '$id' ";
    //     $res = mysqli_query($db , $sql1);
    //     $data = reset(mysqli_fetch_array($res));
    //     $curentcountity = $data['quantity'];
    //     echo $curentcountity;
    //     // $Plus = $sql1 + $quantity;
    //     // $quantity = 2;
    //     $sq = " UPDATE `productcart` SET `quantity`='[$quantity]' WHERE product_id = '$id' ";
    //     mysqli_query($db , $sq); 
    //     echo "product updated";
    // }

    if(mysqli_num_rows($result)==0){
        $sqll = "INSERT INTO productcart(name,price,img,quantity,product_id)  Values ('$name','$price','$img','$quantity' , '$id')";     
        mysqli_query($db , $sqll);  
        echo "product added";
    }
            
}
}   
?>