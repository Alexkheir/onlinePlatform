<?php
    require_once ("BE/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page </title>
</head>
<body>
    <?php
        $sql = "SELECT id, product_name, price, quantity FROM product";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {    
            while($row = $result->fetch_assoc()) {
                echo '<div class="card" style="width: 18rem;">';
                echo '<img src="path_to_product_image.jpg" class="card-img-top" alt="Product Image">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $row["product_name"] . '</h5>';
                echo '<p class="card-text">Price: $' . $row["price"] . ' | Quantity: ' . $row["quantity"] . '</p>';
                echo '<a href="#" class="btn btn-primary">Buy Now</a>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "0 results";
        }

    ?>



</div>
</body>
</html>