<?php 
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "calculateDays.inc.php";


$hotels =[
   'Nqobizitha Hotel'=> 889,
    'Rockefellar Hotel'=> 756,
     'Shekinah'=> 701,
     'Ilanda Hotel'=> 1099
    ];
?>

    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <h1> Find the best hotels and compare!</h1>
        <link rel= "stylesheet" href= "style2.css">
      

<form action="booking.php" method="post"> 

    <div class= "container">
    <div class="card">
    <div class= "imgBx">
    <div class= "star">
          <a>⭐</a>
          <a>⭐</a>
          <a>⭐</a>
          <a>⭐</a>
          
          </div>
      
        <h2> Nqobizitha Hotel </h2>
          <img src="./images/nqohotel.webp">
          <div class= "price">
 <?php 
     echo "Check-in: ".$_POST['start'];
     echo "<br>";
      echo "Check-out: ".$_POST['end'];
      echo "<br>";
       $total = $hotels['Nqobizitha Hotel']*calculateDays($_POST['start'], $_POST['end']);
       echo "R".$total."total";   
 ?>
              
          <button class="button">compare</button>
          
</a> 

</form>
<br />

<hr>
<br>
<main>
            
<form action="booking2.php" method="post">
         <div class= "container">
         <div class="card">
         <div class= "imgBx">
         <div class= "star">
  
                <a>⭐</a>
                <a>⭐</a>
                <a>⭐</a>
                <a>⭐</a>
                </div>
              
              <h2> Rockefellar Hotel </h2>
              <img src="./images/371264478.jpg">
<div class= "price">
 <?php 
     echo "Check-in: ".$_POST['start'];
     echo "<br>";
      echo "Check-out: ".$_POST['end'];
      echo "<br>";
       $total = $hotels['Rockefellar Hotel']*calculateDays($_POST['start'], $_POST['end']);
       echo "R".$total."total";   
 ?>
</div>  
       
             <button class="button">compare</button>

            </a>
</form>

<br />


<form action="booking3.php" method="post">
          <div class= "container">
          <div class="card">
          <div class= "imgBx">
          <div class= "star">
                <a>⭐</a>
                <a>⭐</a>
                <a>⭐</a>
                </div>
              
              <h2> Shekinah </h2>
              <img src="./images/07g.jpg">
              <div class= "price">
 <?php 
     echo "Check-in: ".$_POST['start'];
     echo "<br>";
      echo "Check-out: ".$_POST['end'];
      echo "<br>";
       $total = $hotels['Shekinah']*calculateDays($_POST['start'], $_POST['end']);
       echo "R".$total."total";   
 ?>
                <button class="button">compare</button>
                </a>

</form>

<br />
                  <br>                    
                  <form action="booking4.php" method="post">
                <div class= "container">
                  <div class="card">
                    <div class= "imgBx">
                    <div class= "star">
          <a>⭐</a>
          <a>⭐</a>
          <a>⭐</a>
          <a>⭐</a>
          <a>⭐</a>
          </div>
                
                  <h2> Ilanda Hotel </h2>
                  <img src="./images/94420696.jpg">
                  <div class= "price">
 <?php 
     echo "Check-in: ".$_POST['start'];
     echo "<br>";
      echo "Check-out: ".$_POST['end'];
      echo "<br>";
       $total = $hotels['Ilanda Hotel']*calculateDays($_POST['start'], $_POST['end']);
       echo "R".$total."total";   
 ?>
                  <button class="button">compare</button>
                  </a> 

                </form>
</hr>
<div>
</body>
</html>     
