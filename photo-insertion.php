<?php include ('server1.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shoghl Masry</title>
</head>
<body>


    <header><h1>Insert</h1></header>
    <form method="post" action="photo-insertion.php">                  
        <?php 
        if (count($error)>0):                                
        ?>
        <div class="error">
            <?php
            foreach($error as $error1){
                echo $error1;
                echo"<br>";
            }
            ?>
        </div>
        <?php endif ?>
        <table>
        <tr>
            <td><label>id</label></td>
                <td> <input type="text" name="id"></td>
            </tr>
            <tr>
                <td><label>Name</label></td>
                <td> <input type="text" name="name"></td>
            </tr>
            <tr>
                <td><label>Code</label></td>
                <td><input type="text" name="code"></td>
            </tr>
            <tr>
                <td><label>Size</label></td>
                <td><input type="text" name="size"></td>
            </tr>
            <tr>
                <td><label>Img</label></td>
                <td><input type="file" name="img"></td>
            </tr>
            <tr>
                <td><label>Price</label></td>
                <td><input type="text" name="price"></td>
            </tr>
            <tr>
                <td><label>Category</label></td>
                <td><input type="text" name="category"></td>
            </tr>
            <tr>
                <td><label>offered</label></td>
                <td><input type="text" name="offered"></td>
            </tr>
        </table>
        <button name="save">Save</button>
    </form>

<br><br><br>
<a href="./products.php">View products</a>

</body>
</html>