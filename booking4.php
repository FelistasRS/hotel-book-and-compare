

</body>
</html>
<?php
session_start();

require "calculateDays.inc.php";


$hotels =[
   
     'Ilanda Hotel'=> 1099,
     'Ruva Lodge'=> 1200
    ];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> African Luxury Lifestyle </title>
    <link rel= "stylesheet" href= "style3.css">
  
</head>
 

<br>

</div>
</div>
<div class= "container">
  <div class="card">
    <div class= "imgBx">
<a href= "#">
<img src="./images/94420696.jpg">
 <form action="final.php" method= "post">
</a>
<h2> Ilanda Hotel </h2>
<p> Now this Indigenous African Hotel is one for the books. Offering famous african cuisines guests say are to die for.
    Pure rich african culture is emboddied in the Ilanda Hotel from its achitecture to the jungle-like
    interior decor. This is one place you would want to visit!
</p>
              <head>
              <meta name='viewport' content='width=device-width, initial-scale=1'>
              <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
              <!--Get your own code at fontawesome.com-->
              </head>
              <body>
              
              <i style='font-size:24px' class='fas'>&#xf1eb;</i>
              <i style='font-size:24px' class='fas'>&#xf5bb;</i>
              <i style='font-size:24px' class='fas'>&#xf5ca;</i>
              <i style='font-size:24px' class='fas'>&#xf77d;</i>
              <br>
</body>
</html>
<?php 
     echo "Check-in: ".$_POST['start'];
     echo "<br>";
      echo "Check-out: ".$_POST['end'];
      echo "<br>";
       $total = $hotels['Ilanda Hotel']*calculateDays($_POST['start'], $_POST['end']);
       echo "R".$total."total";   
 ?>
<br>
<input type= "submit">
<?php
if (isset($_POST['submit'])) {
  echo "you have successfully booked the Ilanda hotel.
  An e-mail will be sent to you shortly"; 
}
?>
</div>

</form>
</body>
</html>
 

</div>
</div>
<div class= "container">
  <div class="card">
    <div class= "imgBx">
<a href= "#">
  <img src="./images/alisonhotel.webp">
  <form action="final.php" method= "post">
</a>
<h2> Ruva Lodge</h2>
<p>Looking for an adventure? Fun? The Ruva Lodge has it all, from wine tasting to 
    bungee jumping to spa treatment after a long exhausting day of adrenaline pumping into your system.
    Book while there's still space.
</p>
              <head>
              <meta name='viewport' content='width=device-width, initial-scale=1'>
              <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
              <!--Get your own code at fontawesome.com-->
              </head>
              <body>
              
              <i style='font-size:24px' class='fas'>&#xf1eb;</i>
              <i style='font-size:24px' class='fas'>&#xf5bb;</i>
              <i style='font-size:24px' class='fas'>&#xf5ca;</i>
              <i style='font-size:24px' class='fas'>&#xf77d;</i>
              <br>
</body>
</html>
<?php 
     echo "Check-in: ".$_POST['start'];
     echo "<br>";
      echo "Check-out: ".$_POST['end'];
      echo "<br>";
       $total = $hotels['Ruva Lodge']*calculateDays($_POST['start'], $_POST['end']);
       echo "R".$total."total"; 
       
 ?>
<br>
<input type= "submit">

</div>
</form>

