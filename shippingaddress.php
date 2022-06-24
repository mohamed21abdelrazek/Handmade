<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Shipping Address </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>
<style>
* {
margin: 0;
padding: 0;
box-sizing: border-box;
border-radius: 5px;
}
h1{
    font-weight: bold;
    font-size: 21px;
    color: #0082e6;
    }
body {
display: flex;
height: 130vh;
justify-content: center;
align-items: center;
background:white;
}

.container {
max-width: 660px;
width: 140%;
background: beige;
padding: 25px 30px;
border-radius: 5px;
}    

form .userdetails {
font-size: 20px;
font-weight: 500;
}
form .userdetails .input-box input, select{
    width: 550px;
}
form .userdetails p{
    font-size: 13px;
}
h3{
    font-weight: bold;
}
a{
    padding-left: 250px;
}
button{
    border-radius: 5px;
    margin: 10px;
    height: 40px;
    width: 100px;
    font-size: 17px;
    cursor: pointer;
    background: rgb(219, 208, 208);
   
}
button:hover{
    background: #0082e6;
}

</style>
<body>
    <div class="section">
        <h1>Enter shipping address</h1>
<div class="container">
  <form action="#" method="post">
    

<div class="userdetails">
 <div class="input-box">
    <span class="details">Country/region </span><br>
    <select class="countries" id="countries" >
        <option>Egypt</option>
        <option>India</option>
        <option>United States</option>
        <option>Germany</option>
        <option>Austria</option>
        <option>China</option>
        <option>South Africa</option>
        <option>Turkey</option>
        <option>Yemen</option>
        <option>Niger</option>
        <option>Oman</option>
        <option>Italy</option>
        <option>Indonesia</option>
        <option>Japan</option>
    </select>
 </div>   
 <div class="input-box">
    <span class="details">Full name (First and Last name)</span><br>
    <input type="text" placeholder="Full name" required name="Full name" />
</div>   
<div class="input-box">
    <span class="details">Mobile Number</span><br>
    <input type="number"placeholder="e.g. +201xxxxxxxxx" required name="number" style ="-webkit-appearance: none;" />
    <style media="screen">
        input::-webkit-inner-spin-button,
        input::-webkit-outer-spin-button {
        -webkit-appearance: none;
        }
        </style>
</div>
<p>May be used to assist delivery</p>
<div class="input-box">
<span class="details">Street name</span><br>
<input type="text"placeholder="e.g. Talaat Harb Street" required name="Street name"/>
</div> 
<div class="input-box">
<span class="details">Building name/no., floor, Apt. or villa no.</span><br>
<input type="text"placeholder="e.g. Building 25B, Third Floor, Apt 20 " required name="Building name/no., floor, Apt. or villa no."/>
</div> 
<div class="input-box">
<span class="details">City/Area</span><br>
<input type="text"placeholder="e.g. El Nozha, New Cario City & Dokki" required name="City/Area"/>
</div> 
<p>Can't find your city/area? Try a different spelling</p>
<div class="input-box">
    <span class="details">District</span><br>
    <input type="text"placeholder=" " required name="District"/>
    </div> 
    <div class="input-box">
        <span class="details">Governorate</span><br>
        <select class="Governorate" id="Governorate" >
            <option>Giza</option>
            <option>Cairo</option>
            <option>Aswan</option>
            <option>Alexandria</option>
            <option>Asyut</option>
            <option>Ismailia</option>
            <option>Port Said</option>
            <option>Red Sea</option>
            <option>Faiyum</option>
            <option>Dakahlia</option>
            <option>Gharbia</option>
            <option>Matruh</option>
            <option>Luxor</option>
            <option>Suez</option>
            <option>Damietta</option>
            <option>Qena</option>
            <option>New Valley</option>
            <option>Nort Sinia</option>
            <option>Sharqia</option>
            <option>South Sinia</option>
            <option>Kafr El Sheikh</option>
            <option>Asyut</option>
            <option>Beheira</option>
            <option>Beni Suef</option>


        </select>

        </div> 
    <div class="input-box">
        <span class="details">Nearest Landmark</span><br>
        <input type="text"placeholder="e.g. Cairo festival city " required name="Nearest landmark"/>
        </div> 
    </div>
<h3>Add delivery instructions</h3>
<h4 style="font-weight: bold;">Adress type</h4>
<div class="radio-group">
    <label >
      <input type="radio" value="visa" name="gander">
      Home(7am-9pm, all days)
     
    </label>
     
    <label>
      <input type="radio" value="visa" name="gander">
      office(9am-6pm, weekdays)
    </label>
</div>

</form>
<input type="checkbox" name="vehicle1" value="address">
<label for="vehicle1">Use as my default address.</label><br> 
<a href="paymentform.html">
<button class="button">Add address</button> 
</a>
</div>
    </div>
</div>
</body>    
</html>