<?php 
    include 'connection.php';
    session_start();
    $admin_id = $_SESSION['admin_name'];

    if(!isset($admin_id)){
        header('location:login.php');
    }

    if(isset($_POST['logout'])){
        session_destroy();
        header('location:login.php');
    }

    // добавление продуктов в бд
    if(isset($_POST['add_product'])){
        $product_name = mysqli_real_escape_string($conn, $_POST['name']);
        $product_price = mysqli_real_escape_string($conn, $_POST['price']);
        $product_detail = mysqli_real_escape_string($conn, $_POST['product_detail']); 
        $product_image = $_FILES['image']['name'];
        $product_image_size = $_FILES['image']['size'];
        $product_image_tmp_name = $_FILES['image']['tmp_name'];
        $product_image_folder = 'uploaded_img/'.$product_image;

        $select_product_name = mysqli_query($conn, "SELECT name FROM `products` WHERE name = '$product_name'") or die('query failed');

        if(mysqli_num_rows($select_product_name) > 0){
            $message[] = 'product name already added';
        } else {
            $insert_product = mysqli_query($conn, "INSERT INTO `products`(name, price, product_detail, image) VALUES('$product_name', '$product_price', '$product_detail', '$product_image')") or die('query failed');
            if($insert_product){
                if($product_image_size > 2000000){
                    $message[] = 'image size is too large';
                } else {
                    // move_uploaded_file($product_image_tmp_name, $product_image_folder);
                    $message[] = 'product added successfully';
                }
            } else {
                $message[] = 'product could not be added';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>admin product page</title>
</head>
<body>
     <?php include 'admin_header.php';?>
   <div class="line2">
        <section class="add-products form-container">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="input-field">
                    <label for="">product name</label>
                    <input type="text" name="name" required>
                </div>
                <div class="input-field">
                    <label for="">product price</label>
                    <input type="text" name="price" required>
                </div>
                <div class="input-field">
                    <label for="">product detail</label>
                    <textarea name="product_detail" required></textarea>
                </div>

                <div class="input-field">
                    <label for="">product image</label>
                    <input type="file" name="image" accept="image/*" required>
                </div>
                <input type="submit" name="add_product" value="add product">
            </form>
        </section>
        <div class="line3">

        </div>
        <div class="line4"></div>
        <section class="show-products">
            <div class="box-container">
                <?php
                $select_products = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
                if(mysqli_num_rows($select_products) > 0){
                    while($fetch_products = mysqli_fetch_assoc($select_products)){
                ?>
                <div class="box">
                    <img src="uploaded_img/<?= $fetch_products['image']; ?>">
                    <div class="name"><?= $fetch_products['name']; ?></div>
                    <div class="price">$<?= $fetch_products['price']; ?>/-</div>
                    <a href="admin_product.php?update=<?= $fetch_products['id']; ?>" class="option-btn">update</a>
                    <a href="admin_product.php?delete=<?= $fetch_products['id']; ?>" class="delete-btn" onclick="return confirm('delete this product?');">delete</a>
                </div>
                <?php
                    }
                } else {
                    echo '<p class="empty">no products added yet!</p>';
                }
                ?>
            </div>
        </section>
   </div>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>