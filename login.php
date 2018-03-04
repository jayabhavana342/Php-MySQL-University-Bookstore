<?php
ob_start();
?>
<html>
<title>Login</title>
    <head>
    
        <meta charset="utf-8">
 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/normalize.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/foundation.min.css">
        <link href='http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>
 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    
        <style>
        .log-in-form {
            border: 1px solid #cacaca;
            padding: 1rem;
            border-radius: 3px; }
        </style>
    </head>
    <body>
        <?php
        include 'common.php';
        ?>
        <div class="row" style="background-color:burlywood;">
            <div class="medium-6 medium-centered large-4 large-centered columns">
                <form action="login.php" method="post">
                    <div class="row column log-in-form">
                        <h4 class="text-center" style="Color:brown;">Log in with Username</h4>
                        <label>Username
                            <input type="text" placeholder="Username" name="username">
                        </label>
                        <label>Password
                            <input type="password" placeholder="Password" name="password">
                        </label>
                        <center><p><input type="submit" class="small button" name="submit" value="Log In!"/></p>
                        <?php
                            include 'dbconnection.php';
                            function redirect_to($new_location){
                                header("Location:".$new_location);
                                exit();
                            }
                            if(isset($_POST['submit'])){
                                //form was submitted
                                $username = $_POST["username"];
                                $password = $_POST["password"];
    
                                $query = "SELECT password FROM user_info WHERE name = '$username';";
    
                                $result = mysqli_query($connection,$query);
                                //Test if there was a query error
                                if(!$result){
                                    die("Database query failed.");
                                }
                                while($subject = mysqli_fetch_assoc($result)){
                                    $r = $subject["password"];
                                }
                                if($password == $r && $username!= "" && $password != ""){
                                    //successful login
                                    redirect_to("useraccount.php");
                                }
                                else{
                                    echo "<font color='red'><small><b>Please Try Again!</b></small></font>";
                                }
                            }
                            ?>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
<?php
ob_end_flush();
?>