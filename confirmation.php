<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> booking confirmation</title>
</head>

<body style="align:center;" background="b6.jpg">

<div style="text-align:center; width:300px; top:15%; left:30%; position:absolute; background-color:black;color:white; border:3px solid white; padding:150px; font-family:romantimes; font-size:large;S">
CONGRATULATIONS!<br> <br>
 YOUR BOOKING HAS BEEN CONFIRMED!<br> <br>

Booking number: <p style="background-color:#6E0709;color:white;">41412</p>
<?php 
echo $name=$_POST['name']."<br>";
echo $email=$_POST['email']."<br>";
echo $phone=$_POST['phone']."<br>";
echo $date=$_POST['date']."<br>";
echo $movie=$_POST['movie']."<br>";
echo $time=$_POST['time']."<br>";
echo $seats=$_POST['seats']."<br>";
echo $type=$_POST['type']."<br>";
?>

<?php

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $date=$_POST['date'];
    $movie=$_POST['movie'];
    $time=$_POST['time'];
    $seats=$_POST['seats'];
    $type=$_POST['type'];
    
    
    
    include("connection.php");
    $sql = "INSERT INTO booking (name,phone, email, movie, showdate, showtime,seats_num,type)
    VALUES ('$name', '$phone', '$email','$movie', '$date', '$time', '$seats', '$type')";
    
    
    if (mysqli_query($conn, $sql)) {
      echo " thankyou for booking";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    
    }

?>

</div>
</body>




</html>