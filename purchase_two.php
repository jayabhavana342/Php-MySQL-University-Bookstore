<?php
session_start();
if(isset($_POST["add_to_cart"])){
    if(isset($_SESSION["shopping_cart"])){
        $item_array_id = array_column($_SESSION["shopping_cart"],"item_id");
        if(!in_array($_GET["id"],$item_array_id)){
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'item_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'item_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"]
            );
             $_SESSION["shopping_cart"][$count] = $item_array;
        }
        else{
            echo '<script>alert("Item Already Added")</script>';
            echo '<script>window.location="purchase_two.php"</script>';
        }
    }
    else{
        $item_array = array(
        'item_id' => $_GET["id"],
        'item_name' => $_POST["hidden_name"],
        'item_price' => $_POST["hidden_price"],
        'item_quantity' => $_POST["quantity"]
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}

if(isset($_GET["action"])){
    if($_GET["action"] == "delete"){
        foreach($_SESSION["shopping_cart"] as $keys=>$values){
            if($values["item_id"] == $_GET["id"]){
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("Item removed")</script>';
                echo '<script>window.location="purchase_two.php"</script>';
            }
        }
    }
}
?>
<html>
    <head>
        <title>
            Book Finder
        </title>
    
        <meta charset="utf-8">
 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/normalize.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/foundation.min.css">
        <link href='http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js">
        </script>

        <style>
            select {
                width: 100px !important;
            }
            .search{
                width: 500px !important;
            }
            table,tr,th,td{
                border: 1;
                border-color: brown;
            }
        </style>
    </head>
    
    <body>
        
        <?php
        include 'purchase_one.php';
        include 'dbconnection.php';
        ?>
        <center>
        <div class="row">
            <div class="large-12 columns" style="background-color:burlywood;">
            
                <table style="background-color:burlywood; border:1; cellpadding:'0'; cellspacing:'0';">

                        <tr>

                        <?php
                        if(isset($_POST['sel']) && $_POST['sel']!="none" ){
                            $select = $_POST['sel'];
                            if(isset($_POST['search'])){
                                $value = $_POST["search"];
                                $query = "SELECT * FROM books WHERE {$select} like '%{$value}%'";
                                $result = mysqli_query($connection,$query);
                                if(!$result){
                                    die("Database query failed.");
                                }
                                while($subject = mysqli_fetch_assoc($result)){
                        ?>
                        <div style="background-color:blurywood;">
                            <form method="post" action="purchase_two.php?action=add&id=<?php echo $subject["id"];?>">
                            
                                <tr>
                                    <td>
                                    <?php
                                    switch($subject["id"]){
                            case 1: echo '<img src="images/books_images/1_tonny_gaddis.jpg" height=\"500\" width=\"100\">';
                                break;
                            case 2: echo '<img src="images/books_images/2_Object_oriented.jpg" height=\"500\" width=\"100\">';
                                break;
                            case 3: echo '<img src="images/books_images/3_DataStructures.jpg" height=\"500\" width=\"100\/>';
                                break;
                            case 4: echo '<img src="images/books_images/4_Operatingsystems.jpg" height=\"500\" width=\"100\/>';
                                break;
                            case 5: echo '<img src="images/books_images/5_survey.jpg" height=\"500\" width=\"100\/>';
                                break;
                            case 6: echo '<img src="images/books_images/6_Ngu_JAVA.jpg" height=\"500\" width=\"100\/>';
                                break;
                            case 7: echo '<img src="images/books_images/7_Fundaments%20DB_NGU.jpg" height=\"500\" width=\"100\/>';
                                break;
                            case 8: echo '<img src="images/books_images/8_Computer_networks.jpg" height=\"500\" width=\"100\/>';
                                break;
                            case 9: echo '<img src="images/books_images/9_Wireless_networks.jpg" height=\"500\" width=\"100\/>';
                                break;
                            case 10: echo '<img src="images/books_images/10_GUI.jpg" height=\"500\" width=\"100\/>';
                                break;
                            case 11: echo '<img src="images/books_images/11_advanced_OS.jpg" height=\"500\" width=\"100\/>';
                                break;
                        }
                                    ?>
                                    </td>
                                    <td >
                                    <h6 class="text-info">
                                        <?php 
                                        echo $subject["title"];
                                        echo "<br>";
                                        echo "Author: " . $subject["author"];
                                        ?></h6>
                                    </td>
                                    <td>
                                    <h6 class="text-info">$<?php echo $subject["price"];?></h6>
                                    </td>
                                    <td>
                                    <h6 class="text-info"><?php echo $subject["availability"];?></h6>
                                    </td>
                                    <td>
                                    <input type="text" name="quantity" class="form-control" value="1"/>
                                    </td>
                                    <td>
                                    <button type="submit" name="add_to_cart" class="submit" value="Add to Cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                    </td>
                                </tr>
                            
                                <input type="hidden" name="hidden_name" value="<?php echo $subject["title"];?>"/>
                                <input type="hidden" name="hidden_price" value="<?php echo $subject["price"];?>"/>
                                
                            </form>
                        </div>
                        <?php
                            
                                }
                            }
                        }
                        ?>  
                    </tr>
                </table>
            </div>
        </div>
            <div class="row" style="background-color:burlywood;">
                <font color="#FFFFFF"><marquee bgcolor="brown" direction="right" loop="40" width="50%">CART!</marquee></font>
                <table>
                    <tr>
                        <th>
                        Book Name
                        </th>
                        <th>
                        Quantity
                        </th>
                        <th>
                        Price
                        </th>
                        <th>
                        Action
                        </th>
                        <?php
                            if(!empty($_SESSION["shopping_cart"])){
                                $total = 0;
                                foreach($_SESSION["shopping_cart"] as $keys => $values){
                        ?>
                    <tr>
                        <td><?php echo $values["item_name"];?></td>
                        <td><?php echo $values["item_quantity"];?></td>
                        <td>$<?php echo $values["item_price"];?></td>
                        <td><?php echo number_format($values["item_quantity"] * $values["item_price"],2);?></td>
                        <td><a href = "purchase_two.php?action=delete&id=<?php echo $values["item_id"];?>"><span class="text-danger">Remove</span></a></td>
                    </tr>
                        <?php
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);
                                }
                        ?>
                    <tr>
                        <td colspan="3" align = "right"><b>Total</b></td>
                        <td align="right"><b>$<?php echo number_format($total,2);?></b></td>
                        <td>
                        <input type="button" onclick="checkout.php" name="add_to_cart" class="submit" value="checkout"/>
                        </td>
                    </tr>
                        <?php
                                
                            }
                        ?>
                
                    </tr>
                
                </table>
            </div>
        </center>
    </body>
</html>