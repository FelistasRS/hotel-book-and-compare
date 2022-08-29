<?php
session_start();

require "calculateDays.inc.php";


$hotels =[

     'Shekinah'=> 701,
     'Alison Hotel'=> 658
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
<img src="./images/07g.jpg">
<form action="final.php" method= "post">
</a>
<h2> Shekinah </h2>
<p> The 3-star hotel offers nothing but comfort and a good sense of peace.
    Highly preffered by those taking business trips rather than family as it is quiet, and 
    offers a great deal of privacy.
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
       $total = $hotels['Shekinah']*calculateDays($_POST['start'], $_POST['end']);
       echo "R".$total."total";   
 ?>
<input type= "submit">
</body>
</html>
 
<br>

</div>
</div>
<div class= "container">
  <div class="card">
    <div class= "imgBx">
<a href= "#">
  <img src="./images/alisonhotel.webp">
  <form action="final.php" method= "post">
</a>
<h2> Alison Hotel </h2>
<p> Spacious,Comfortable and 'A home away from Home'. It has affordable prices and it's situated right next 
to the Kruger National Park.It will absolutely be one stay to remember!
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
       $total = $hotels['Alison Hotel']*calculateDays($_POST['start'], $_POST['end']);
       echo "R".$total."total";   
 ?>

<br>
<input type= "submit">
</div>


