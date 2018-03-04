<html>
    <title>
        Sign Up
    </title>
    <head>
    
        <meta charset="utf-8">
 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/normalize.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/foundation.min.css">
        <link href='http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>
 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
                text-align: center;
                
            }
        </style>
    </head>
    <body>
        <?php
        include 'common2.php';
        include 'dbconnection.php';
        ?>
        <div class="row" style="background-color:burlywood;">
            <pre>
                <?php
                   // print_r($_POST);
                ?>
            </pre>
            <?php

            ?>
            <?php
            $query = "Select * from user_info where name=\"bhavana\"; ";
            $result = mysqli_query($connection,$query);
            //Test if there was a query error
            if(!$result){
                die("Database query failed.");
            }
            ?>
            <center>
                <b>Account Details Before Updation!!</b>
            <?php
            while($subject = mysqli_fetch_assoc($result)){
                echo "<table>";
            echo "<tr>";
            echo "<td>Username:</td>";
            echo "<td>".$subject["username"]."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Name:</td>";
            echo "<td>".$subject["name"]."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Mailing Address:</td>";
            echo "<td>".$subject["mail_address"]."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Billing Address:</td>";
            echo "<td>".$subject["bill_address"]."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Credit Card Type:</td>";
            echo "<td>".$subject["card_type"]."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Credit Card Number:</td>";
            echo "<td>".$subject["card_number"]."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Expiration Date:</td>";
            echo "<td>".$subject["exp_date"]."</td>";
            echo "</tr>";
            echo "</table>";
            }
                ?>
            </center>
            
            <?php
                if(isset($_POST['sel']) && $_POST['sel']!="none" ){
                    $select1 = $_POST['sel'];
                    if(isset($_POST['update'])){
                        $value1 = $_POST["update"];
                        $query1 = "UPDATE user_info SET {$select1}=\"{$value1}\";";
                        $result1 = mysqli_query($connection,$query1);
                        if(!$result1){
                            die("Database query failed.");
                        }
            ?>
            <center>
                <b>Account Details After Updation!!</b>
            <?php
            while($subject1 = mysqli_fetch_assoc($result1)){
                echo "<table>";
            echo "<tr>";
            echo "<td>Username:</td>";
            echo "<td>".$subject1["username"]."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Name:</td>";
            echo "<td>".$subject1["name"]."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Mailing Address:</td>";
            echo "<td>".$subject1["mail_address"]."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Billing Address:</td>";
            echo "<td>".$subject1["bill_address"]."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Credit Card Type:</td>";
            echo "<td>".$subject1["card_type"]."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Credit Card Number:</td>";
            echo "<td>".$subject1["card_number"]."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Expiration Date:</td>";
            echo "<td>".$subject1["exp_date"]."</td>";
            echo "</tr>";
            echo "</table>";
            }
                    }
                }
                ?>
            </center>
            
        </div>
    <?php
    mysqli_close($connection);
    ?>    
        
    </body>
    
</html>
