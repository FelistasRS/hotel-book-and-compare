<?php
session_start();

require "calculateDays.inc.php";
require "calculateAmount.php";


  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> African Luxury Lifestyle </title>
    <link rel= "stylesheet" href= "style3.css">
  

<div class= "container">
  <div class="card">
    <div class= "imgBx">
  <img src="./images/nqohotel.webp">
  <form action="final.php" method= "post">
<h2> Nqobizitha Hotel </h2>
<p> Situated in the heart of 'The Motherland' Capetown ,the 4 star Hotel is surrounded by the beautiful city mountains 
and its interior is just magnificent. With an inhouse spa that will get you relaxed and feeling good. Your stay will be worthwhile, guaranteed.
</p>
           
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
            <!--Get your own code at fontawesome.com-->
          
            
            <i style='font-size:24px' class='fas'>&#xf1eb;</i>
            <i style='font-size:24px' class='fas'>&#xf2e7;</i>
            <i style='font-size:24px' class='fas'>&#xf5bb;</i>
            <i style='font-size:24px' class='fas'>&#xf000;</i>
            <i style='font-size:24px' class='fas'>&#xf77d;</i>
            <br>
            



            <?php 
$hotels =[
  'Nqobizitha Hotel'=> 889,
   'Clifton Hotel'=> 910
];

     echo "Check-in: ".$_GET['start'];
     echo "<br>";
      echo "Check-out: ".$_GET['end'];
      echo "<br>";
       $total = $hotels['Nqobizitha Hotel']*calculateDays($_POST['start'], $_POST['end']);
       echo "R".$total."total";   
 ?>

<input type= "submit">

</form>
<br />
</div>
</div>


<form action="booking.php"   method="post"> 
<div class= "container">
  <div class="card">
    <div class= "imgBx">
<a href= "#">
  <img src="./images/Cliftonhotel.jpg">
  <form action="final.php" method= "post">
</a>
<h2> Clifton Hotel </h2>
<p> Now this is one place that will guarantee fun and excitement!
  If you're a wine lover, get your taste buds ready as Clifton is famous for its incredible wines.
'Clifton Hotel' does not only offfer affordable prices but a tour 
around the wonderful Capetown. And guess what? It's all part of the package!
You get a whole free tour around the city!
</p>
           
           <meta name='viewport' content='width=device-width, initial-scale=1'>
           <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
           
          
           
           <i style='font-size:24px' class='fas'>&#xf1eb;</i>
           <i style='font-size:24px' class='fas'>&#xf5c5;</i>
           <i style='font-size:24px' class='fas'>&#xf000;</i>
           <br>
           <?php 
     echo "Check-in: ".$_GET['start'];
     echo "<br>";
      echo "Check-out: ".$_GET['end'];
      echo "<br>";
       $total = $hotels['Clifton Hotel']*calculateDays($_POST['start'], $_POST['end']);
       echo "R".$total."total";   
 ?>

<input type= "submit">
