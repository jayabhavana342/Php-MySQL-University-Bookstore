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
        <form action="update_account_two.php" method="post">
        <?php
        include 'common2.php';
        ?>
        <div class="row" style="background-color: burlywood;">
            <center>
            <table style="background-color:burlywood;">
                    <tr>
                        <td>
                            <select name="sel">
                                <option value="none">Select</option>
                                <option value="name">Name</option>
                                <option value="mail_address">Mail Address</option>
                                <option value="bill_address">Bill Address</option>
                                <option name="card_type">Card Type</option>
                                <option name="card_number">Card Number</option>
                                <option name="exp_date">Expiry Date</option>
                                <option name="username">Username</option>
                                <option name="password">Password</option>
                            </select>
                        </td>
                        <td>
                            <input type="search" class="search" name = "search" placeholder="Enter Value.">
                        </td>
                        <td>
                            <button type="submit" class="submit" name="update" value="search">Update</button>
                        </td>
                    </tr>
                </table>
                </center>
        </div>
            </form>
    </body>
</html>