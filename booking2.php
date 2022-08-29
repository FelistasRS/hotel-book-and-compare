<?php
session_start();

require "calculateDays.inc.php";


$hotels =[
    'Rockefellar Hotel'=> 756,
     'Maxwell and co.'=> 740
    
    ];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> African Luxury Lifestyle </title>
    <link rel= "stylesheet" href= "style3.css">
  
</head>

<div class= "container">
  <div class="card">
    <div class= "imgBx">
   
   <form action="booking.php"  method="post">   
<a href= "#">
   <img src="./images/371264478.jpg">
   <form action="final.php" method= "post">
</a>
<h2> Rockefellar Hotel </h2>
<p> One of the fast growing hotels that will definitely guarantee you a luxurious stay with its quality services.
    The hotels has an outdoor spa where one can relax while being pampered. Book while you still can!
</p>
            <head>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
            <!--Get your own code at fontawesome.com-->
            </head>
            <body>
            
            <i style='font-size:24px' class='fas'>&#xf1eb;</i>
            <i style='font-size:24px' class='fas'>&#xf2e7;</i>
            <i style='font-size:24px' class='fas'>&#xf5bb;</i>
            <i style='font-size:24px' class='fas'>&#xf000;</i>
            <i style='font-size:24px' class='fas'>&#xf77d;</i>
            <br>
</body>
</html>
<?php 
     echo "Check-in: ".$_POST['start'];
     echo "<br>";
      echo "Check-out: ".$_POST['end'];
      echo "<br>";
       $total = $hotels['Rockefellar Hotel']*calculateDays($_POST['start'], $_POST['end']);
       echo "R".$total."total";   
 ?>

<input type= "submit">

</div>
</div>

<div class= "container">
  <div class="card">
    <div class= "imgBx">
<a href= "#">
  <img src="./images/prettypic.jpg">
  <form action="final.php" method= "post">
</a>
<h2> Maxwell and .co </h2>
<p> One of KZN's prodest historical buildings. The place 
offers amazing views of the ever so enchanting Indian Ocean. Famous for its world class locally made cocktails!
Trust me ,you wouldn't wanna miss that.
</p>
            <head>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
            <!--Get your own code at fontawesome.com-->
            </head>
            <body>
            
            <i style='font-size:24px' class='fas'>&#xf1eb;</i>
            <i style='font-size:24px' class='fas'>&#xf2e7;</i>
            <i style='font-size:24px' class='fas'>&#xf561;</i>
            <i style='font-size:24px' class='fas'>&#xf5ca;</i>
            <br>
</body>
</html>
 
<?php 
     echo "Check-in: ".$_POST['start'];
     echo "<br>";
      echo "Check-out: ".$_POST['end'];
      echo "<br>";
       $total = $hotels['Maxwell and co']*calculateDays($_POST['start'], $_POST['end']);
       echo "R".$total."total";   
 ?>
<br>
<input type= "submit">
</div>