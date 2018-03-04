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
        include 'common.php';
        include 'dbconnection.php';
        ?>
        <?php

            function redirect_to($new_location){
                header("Location: " . $new_location);
                exit;
            }
        ?>
        <div class="row" style="background-color:burlywood;">
            <pre>
                <?php
                    //print_r($_POST);
                ?>
            </pre>
            <?php
            if(isset($_POST["name"])){
                $name = $_POST["name"];
            }else{
                $name = "";
            }
            if(isset($_POST["mail_address"])){
                $mail_address = $_POST["mail_address"];
            }else{
                $mail_address = "";
            }
            if(isset($_POST["bill_address"])){
                $bill_address = $_POST["bill_address"];
            }else{
                $bill_address = "";
            }
            if(isset($_POST["card_type"])){
                $card_type = $_POST["card_type"];
            }else{
                $card_type = "";
            }
            if(isset($_POST["card_num"])){
                $card_num = $_POST["card_num"];
            }else{
                $card_num = "";
            }
            if(isset($_POST["date"])){
                $date = $_POST["date"];
            }else{
                $date = "";
            }
            if(isset($_POST["username"])){
                $username = $_POST["username"];
            }else{
                $username = "";
            }
            if(isset($_POST["password"])){
                $password = $_POST["password"];
            }else{
                $password = "";
            }
            
            if($name == "" || $mail_address=="" || $bill_address=="" || $card_type=="" || $card_num == "" || $date == "" || $username =="" || $password == ""){
                redirect_to("signup.php");
            }
            ?>
            <?php
            $query = "INSERT INTO user_info(name,mail_address,bill_address,card_type,card_number,exp_date,username,password) ";
            $query .= "VALUES('$name','$mail_address','$bill_address','$card_type','$card_num','$date','$username','$password');";
           $result = mysqli_query($connection,$query);
            //Test if there was a query error
            if(!$result){
                die("Database query failed.");
            }
            ?>
            <center>
                <b style="Color:brown;">
                    <?php
                        echo "Account has been successfully created!";
                    ?>
                </b>
            <?php
            echo "<table>";
            echo "<tr>";
            echo "<td>Username:</td>";
            echo "<td>{$username}</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Name:</td>";
            echo "<td>{$name}</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Mailing Address:</td>";
            echo "<td>{$mail_address}</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Billing Address:</td>";
            echo "<td>{$bill_address}</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Credit Card Type:</td>";
            echo "<td>{$card_type}</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Credit Card Number:</td>";
            echo "<td>{$card_num}</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Expiration Date:</td>";
            echo "<td>{$date}</td>";
            echo "</tr>";
            echo "</table>";
            ?>
            <p style="Color:brown;"><a href="login.php">Login here &raquo</a></p>
            </center>
            <?php
        ?>
        </div>
    <?php
    mysqli_close($connection);
    ?>    
        
    </body>
    
</html>
