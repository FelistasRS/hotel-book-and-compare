
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
    <title> African Hotels</title>
    <link rel="stylesheet" href="styling.css">
    <style> 
        .warning {
            color: lime;
            font: 14px;
        } 
    </style>
</head>

<body>
    <header>
        <div class="title">

            <h1> Exclusive African Hotels </h1>
           
        </div>
    </header>
    <body>
    
</body>

<!-- creating a form -->

<main>

    <p>     
        
        <h2>fill in the form below </h2>     

    </p>
    
    <div class= "container">

    <div class="card">

        <form method="post" action="compare.php">
            
        <input type="text" name="name" placeholder="Enter your name"  required/>
        <br>
        <input type="text" name="Sname"placeholder="Enter your last name" required/>
        <br>
        <input type="text" placeholder="Enter your e-mail" required/>

    </div>


    <h3> Find the best Hotels suitable for you at the best prices!!!</h3>
    <br>
    <hr>
 
        <?php
        
            if ( isset($_SESSION['dateError']) ) {
                            
                echo "<p class='warning'>" . $_SESSION['dateError'] ."</p>";
            }
        ?>


        <form action="booking.php" method="post">

                    <label for="start">Check-in: </label>
                    <input type="date" name="start" id="" required/>
                
                    <br>
                        <label for="end">Check-out: </label>
                        <input type="date" name="end" required/>
                    <br>
                    <input type="submit" name="submit" value="submit">


                </div>
            
                <br>
                <h1>

        </form>

</main>

