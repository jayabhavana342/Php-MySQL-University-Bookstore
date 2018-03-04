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
        </style>
    </head>
    
    <body>
        <form action="purchase_two.php" method="post">
        <?php
        include 'common2.php';
        include 'dbconnection.php';
        ?>
        <center>
        <div class="row">
            <div class="large-12 columns" style="background-color:burlywood;">
            
                <table style="background-color:burlywood; border:none; cellpadding:'0'; cellspacing:'0';">
                    <tr>
                        <td>
                            <select name="sel">
                                <option value="none">Select</option>
                                <option value="title">Title</option>
                                <option value="isbn">ISBN</option>
                                <option value="author">Author</option>
                                <option name="subject">Subject</option>
                                <option name="professor">Professor</option>
                                <option name="course">Course Number   </option>
                            </select>
                        </td>
                        <td>
                            <input type="search" class="search" name = "search" placeholder="Search">
                        </td>
                        <td>
                            <button type="submit" class="submit" name="submit" value="search"><i class="fi-magnifying-glass"></i> Search</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        </center>
        </form>
    </body>
</html>