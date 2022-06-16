<?php
    $server = "localhost";                    //server name
    $user = "root";                           //user name
    $password = "";                           //password is empty for sql
    $db = "db_movies";                              //type database name

    $conn = mysqli_connect($server,$user,$password,$db);    //connecting to database

    if(!$conn)                                //incase connection fails
    {
        echo "connection failed";       //exits the program
    }
    $sql = "INSERT INTO movie (name , actor , actress , director , year ) VALUES ('Don' , 'Shiva' , 'Priyanka' , 'Cibi' , 2022),('Ugram' , 'Shrimurli' , 'Haripriya' , 'Prashanth' , 2015),('Bahubali' , 'Prabhas' , 'Anushka' , 'Rajamouli' , 2015),('RRR' , 'Ramcharan' , 'Alia Bhat' , 'Rajmouli' , 2022),('Bahubali 2' , 'Prabhas' , 'Anushka' , 'Rajamouli' , 2017),('Pushpa' , 'Allu Arjun' , 'Rashmitha' , 'Sukumar' , 2022)";       //query

             $insert = mysqli_query($conn,$sql);                     //executing query
             echo '<script type="text/javascript">';
                echo 'alert("stocks added successfully");';
                echo 'window.location.href="display.php";';
                echo "</script>";
?>
