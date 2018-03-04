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


        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js">
        </script>
    
        <style>
            .signup-panel {
                border-radius: 5px;
                border: 1px solid #ccc;
                padding: 15px;
                margin-top: 30px;
               color: 
            }
            .signup-panel i {
                font-size: 30px;
                line-height: 50px;
                color: #999;
            }
            .signup-panel form input, .signup-panel form span {
                height: 30px;
            }
            .signup-panel .welcome {
                font-size: 20px;
                text-align: center;
                margin-left: 0;
            }
            .signup-panel p {
                font-size: 13px;
                font-weight: 200;
                margin-left: 25%;
                Color:brown;
            }
            .signup-panel .button {
                margin-left: 35%;
            }
        </style>
    </head>
    <body>
        <?php
        include 'common.php';
        ?>
        <div class="row" style="background-color: burlywood;">
            <div class="large-6 large-centered columns" >
                <div class="signup-panel">
                    <p class="welcome"><b> Sign up to Book Finder!</b></p>
                    <form data-abide action="signup_output.php" method="post">
                        <div class="row collapse">
                            <div class="small-2  columns">
                                <span class="prefix"><i class="fi-torso-female"></i></span>
                            </div>
                            <div class="small-10  columns">
                                <input type="text" placeholder="Name" name="name" required>
                            </div>
                        </div>
                        <div class="row collapse">
                            <div class="small-2 columns">
                                <span class="prefix"><i class="fi-mail"></i></span>
                            </div>
                            <div class="small-10  columns">
                                <input type="text" placeholder="Mailing Address" name="mail_address" required>
                            </div>
                        </div>
                        <div class="row collapse">
                            <div class="small-2 columns">
                                <span class="prefix"><i class="fi-mail"></i></span>
                            </div>
                            <div class="small-10  columns">
                                <input type="text" placeholder="Billing Address" name="bill_address" required>
                            </div>
                        </div>
                        <div class="row collapse">
                            <div class="small-2 columns">
                                <span class="prefix"><i class="fi-credit-card"></i></span>
                            </div>
                            <div class="small-10  columns">
                                <input type="text" placeholder="Credit Card Type(Visa/Master Card)" name="card_type" required>
                            </div>                           
                        </div>
                        <div class="row collapse">
                            <div class="small-2 columns">
                                <span class="prefix"><i class="fi-credit-card"></i></span>
                            </div>
                            <div class="small-10  columns">
                                <input type="text" placeholder="Credit Card Number" name="card_num" required>
                            </div>                           
                        </div>
                        <div class="row collapse">
                            <div class="small-2 columns">
                                <span class="prefix"><i class="fi-calendar"></i></span>
                            </div>
                            <div class="small-10  columns">
                                <input type="text" placeholder="Expiration Date(mm/yy)" name="date" required>
                            </div>                           
                        </div>
                        <div class="row collapse">
                            <div class="small-2  columns">
                                <span class="prefix"><i class="fi-torso-female"></i></span>
                            </div>
                            <div class="small-10  columns">
                                <input type="text" placeholder="Username" name="username" required>
                            </div>
                        </div>
                        <div class="row collapse">
                            <div class="small-2 columns ">
                                <span class="prefix"><i class="fi-lock"></i></span>
                            </div>
                            <div class="small-10 columns ">
                                <input type="text" placeholder="password" name="password" required>
                            </div>
                        </div>
                    
                    <button type="submit" class="small button" name="submit" value="Sign Up!">Sign Up!</button>
                    <p>Already have an account? <a href="login.php">Login here &raquo</a></p>
                    </form>
                </div>                   
            </div>
            
        </div>
    </body>
</html>