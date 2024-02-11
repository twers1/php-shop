<?php 
    include 'connection.php';
    session_start();
    $user_id = $_SESSION['user_id']; // Fixing variable name

    if(!isset($user_id)){ // Fixing variable name
        header('location:login.php');
    }

    if(isset($_POST['logout'])){
        session_destroy();
        header('location:login.php');
    }

   
?>
<style>
    <?php include './styles/user.css'; ?>
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="banner">
        <div class="detail">
            <h1>about us</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius consectetur, voluptates natus</p>
            <a href="index.php">home</a><span>/ about us</span>
        </div>
    </div>
    <div class="line"></div>
    <div class="line2"></div>
    <div class="about-us">]
        <div class="row">
            <div class="box">
                <div class="title">
                    <span>ABOUT OUR ONLINE STORE</span>
                    <h1>hello, with 25 years of experiance</h1>
                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem quam modi 
                    fugit, saepe corporis natus libero voluptatibus iste nam sapiente quos eum quis repellendus, 
                    aspernatur deleniti. Temporibus delectus in consequatur.</p>
                
            </div>
            <div class="img-box">
                <img src="" alt="">
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script type="" src="./scripts/user.js"></script>
</body>
</html>