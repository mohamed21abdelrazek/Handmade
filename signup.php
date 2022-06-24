<?php include ('server1.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration form</title>
<link rel="stylesheet" href="#">
<style>
* {
margin: 0;
padding: 0;
box-sizing: border-box;
}
body {
display: flex;
height: 100vh;
justify-content: center;
align-items: center;
padding: 10px;
background:white;
}
.container {
max-width: 700px;
width: 100%;
background: beige;
padding: 25px 30px;
border-radius: 5px;
}
.container .title {
font-size: 30px;
font-weight: 500;
position: relative;
text-align: center;
}
.container .title::before {
position: absolute;
left: 0;
height: 3px;
width: 30px;
}
.container form .user-details {
display: flex;
flex-wrap: wrap;
justify-content: space-between;
margin: 20px 0 12px 0;
font-size: 23px;
}
form .user-details .input-box {
margin-bottom: 15px;
width: calc(100% /2 - 20px);
}
.user-details .input-box .detaials {
display: block;
font-weight: 500;
margin-bottom: 5px;
}
.user-details .input-box input {
height: 45px;
width: 100%;
outline: none;
border-radius: 5px;
padding-left: 15px;
font-size: 16px;
border: 1px solid;
border-bottom-width: 2px;
}
 .countries{
    height: 35px;
    width: 100%;
    display: flex;
}

form .button{
    padding-top: 10px;
}
form .button input {
height: 40px;
width: 100%;
outline: none;
color: white;
background: #0082e6;
}

</style>
</head>
<body>
<div class="container">
<div class="title">Registration</div> 
<form action="signup.php" method="post">
<?php 
        if (count($error)>0):                         
        ?>
        <div class="error">
            <?php
            foreach($error as $error1){
                echo $error1;
                echo"<br>";
            }
            ?>
        </div>
        <?php endif ?>
<div class="user-details">
<div class="input-box">
<span class="details">First Name</span>
<input type="text" placeholder="Enter your first name" required name="firstname" />
</div>       
<div class="input-box">
<span class="details">Last Name</span>
<input type="text"placeholder="Enter your last name" required name="lastname"/>
</div>        
<div class="input-box">
<span class="details">Email</span>
<input type="text"placeholder="Enter your email" required name="email"/>
</div>
<div class="input-box">
<span class="details">Phone Number</span>
<input type="number"placeholder="Enter your Number" required name="phone" style ="-webkit-appearance: none;" />
<style media="screen">
input::-webkit-inner-spin-button,
input::-webkit-outer-spin-button {
-webkit-appearance: none;
}
</style>
</div>
<div class="input-box">
<span class="details">Password</span>
<input type="password"placeholder="Enter your password" required  name="password"/>
</div>
<div class="input-box">
<span class="details">Confirm Password</span>
<input type="password"placeholder="Confirm your password" required  name="conpassword"/>
</div>
<div class="input-box">
    <span class="details">Country</span>
    <select name="countries" class="countries" id="countries" >
        <option value="Egypt">Egypt</option>
        <option value="India">India</option>
        <option value="United States">United States</option>
        <option value="Germany">Germany</option>
        <option value="Austria">Austria</option>
        <option value="China">China</option>
        <option value="South Africa">South Africa</option>
        <option value="Turkey">Turkey</option>
        <option value="Yemen">Yemen</option>
        <option value="Niger">Niger</option>
        <option value="Oman">Oman</option>
        <option value="Italy">Italy</option>
        <option value="Indonesia">Indonesia</option>
        <option value="Japan">Japan</option>
    </select>
    </div>

    <div class="input-box">
        <span class="details">Gender</span>
        <select name="gender" class="countries" id="Gender" >
            <option value="Male">Male</option>
            <option value="Female">Female</option>
           </select>
    </div>
</div>


<div class="button">
<input name="reg" type="submit" value="Register">
</div>
</form>
</div>
</body>
</html>