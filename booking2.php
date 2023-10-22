<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="keywords" content="cinemas in pakistan,cinemas in islamabad">
<title> Booking </Title>
 <link href="mystyles.css" rel="stylesheet">
</style>

</head>
<body background="b6.jpg">
<header> <img src="head.jpg" align="center" width="100%" height="180"> </header>
<br>

<nav width="100%">


<ul class="menu" >

<li><a href="file:///C:/Users/HP/Desktop/web/assign.html" color="black">Home </a></li>
<li><a href="file:///C:/Users/HP/Desktop/web/booking.html">Booking </a></li>
<li><a href="file:///C:/Users/HP/Desktop/web/price.html"> Pricing </a></li>
<li><input type="button" class="a" onclick="alert('We are located in E-11/4 near margalla gateway')" value="Location"> </Li>
<li><input type="button" class="a" onclick="alert('You can email us your questions or call us at email and contact given at bottom of the page. Thank you!')" value="Contact Us">  </li>
</ul>

</nav>

<div Style="width:50%; height:800px;border:2px solid white; display:inline; position:absolute; left:25%; float:left;" class="b" align="center">
<h1 style="align:center;"> BOOK YOUR SEATS </h1>
<form action="booking2.php" method="post">

<?php
if ($_SERVER['REQUEST_METHOD']=='POST')
{
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];




$servername = "localhost";
$username = "root";
$password = "";
$dbname= "a_c";


// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO personal_info (name, email, contact )
VALUES ('$name', '$email', '$phone')";

if (mysqli_query($conn, $sql)>1) {
  echo "your data already exists";
} else {
  echo "your info has been submitted";
}

mysqli_close($conn);

}


?>


<pre>
<!-- <label for="fullname" class="form"> FULL NAME:</label> <input type="text" id="fullname" name="name" required>  


<label for="email" class="form"> EMAIL: </label> <input type="email" id="email" name="email" required> 


<label for="phone" class="form"> PHONE: </label> <input type="text" id="phone" name="phone" maxlength="11">


<label for="date" class="form"> SELECT DATE OF SHOW: <input type="date" id="date" name="date" min="06/06/2021"> -->


<label for="movie" class="form"> SELECT MOVIE: </label> <select id="movie" name="movie"> <option value="m1" name="m1"> Movie 1 </option>
<option value="m2" name="m2"> Movie 2 </option>
<option value="m3" name="m3"> Movie 3 </option>
<option value="m4" name="m3"> Movie 4 </option>
<option value="m5" name="m3"> Movie 5 </option>
</select> 


<label for="time" class="form"> SELECT SHOW TIME:</label> <select id="time" name="time"> <option value="12pm" name="12pm"> 12:05pm </option>
<option value="3pm" name="3pm"> 3:00pm </option>
<option value="6pm" name="6pm"> 6:00pm </option>
<option value="9pm" name="9pm"> 9:05pm </option>
</select>


<label for="seats" name="seats" class="form"> NUMBER OF SEATS:</label> <input type="number" id="seats" min="0" max="11"> 


<label for="type" class="form"> SELECT TYPE:</label> <input type="radio" id="type" name="type" value="Normal"><label for="type" class="form">Normal</label> <input type="radio" id="type" name="type" value="VIP"><label for="type" class="form">VIP</label>


<input type="checkbox" id="popcorn" name="popcorn"> <label for="popcorn" class="form"> Check box to avail our "SWEET POPCORNS" completely FREE! 
Also select the popcorn sweetness level:</label> <input type="range" name="sweetness" min="0" max="100">


<input type="checkbox" id="terms" name="popcorn"> <label for="terms" class="form"> I have read and agreed to terms and conditions.</label>


<input type="submit" name="BOOK2!" value="BOOK!" style="background-color:#6E0709;color:white;height:40px;width:80px;">
</pre>

</form>
</div>

<ul style="list-style-type:none; overflow:hidden; padding-right:110px;align:center; background-color:grey; height:40px; width:88%; position:absolute; top:1101px;" >
<li></li>
<li> Email:aromatic@cinema.com </li>
<li> contact: 051 34205738, +92 304328585 </li>
<li> Location: E-11/4 near margalla Gateway. </li>

</ul>


</body>




</html>






