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

<div Style="width:50%; height:500px;border:2px solid white; display:inline; position:absolute; left:25%; float:left;" class="b" align="center">
<h1 style="align:center;"> SEARCH YOUR BOOKING</h1>
<form action="cancel booking.php" method="POST">


<pre>

<label for="fullname" class="form"> FULL NAME:</label> <input type="text" id="fullname" name="name2" required>  

<label for="phone" class="form"> PHONE: </label> <input type="text" id="phone" name="phone2" maxlength="11">


<input type="submit" name="search!" value="Search!" style="background-color:#6E0709;color:white;height:40px;width:80px;">
</pre>
<?php
include('connection.php');
if ($_SERVER['REQUEST_METHOD']=='POST'){
$a =$_POST['name2'];
$b =$_POST['phone2'];

$c="DELETE FROM booking WHERE name='$a' AND phone='$b'";

if (mysqli_query($conn, $c)) {
    echo "Your booking has been canceled";
  } 
  
  else {
    echo "You dont have any booking". mysqli_error($conn);
  }
  
  mysqli_close($conn);
}






?>


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






