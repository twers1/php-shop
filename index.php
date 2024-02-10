<?php 
    include 'connection.php';
    session_start();
    $admin_id = $_SESSION['user_name'];

    if(!isset($admin_id)){
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
    <!-- home section starts -->
    <div class="container-fluid">
        <div class="hero-slider">
            <div class="slider-item">
                <img src="./img/slider.jpg" alt="" srcset="">
                <div class="slider-caption">
                    <span>test the quality</span>
                    <h1>organic premium <br>Honey</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe vitae nisi fuga dicta eos, vero dolores? Quas, maiores a dolore quae iste, aperiam doloribus hic quaerat est impedit magni provident?</p>
                    <a href="shop.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="slider-item">
                <img src="./img/slider2.jpg" alt="" srcset="">
                <div class="slider-caption">
                    <span>test the quality</span>
                    <h1>organic premium <br>copiratedddddd</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe vitae nisi fuga dicta eos, vero dolores? Quas, maiores a dolore quae iste, aperiam doloribus hic quaerat est impedit magni provident?</p>
                    <a href="shop.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="controls">
                <i class="bx bx-chevron-left prev"></i>
                <i class="bx bx-chevron-right next"></i>
            </div>
        </div>
    </div>

    <div class="line"></div>
    <div class="services">
        <div class="row">
            <div class="box">
                <img src="" alt="">
                <div>
                    <h1>free shipping fast</h1>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </div>
            <div class="box">
                <img src="" alt="">
                <div>
                    <h1>miney back & guarantee</h1>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </div>
            <div class="box">
                <img src="" alt="">
                <div>
                    <h1>online support 24/7</h1>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </div>
        </div>
    </div>
    <div class="line2"></div>
    <div class="story">
        <div class="row">
            <div class="box">
                <span>our story</span>
                <h1>production of natural honey since 1998</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab corporis tempore voluptate aliquid minima qui in! Dolor eaque laborum pariatur quas doloribus quae molestiae similique sit expedita, modi nemo aperiam!</p>
                <a href="shop.php" class="btn">show now</a>
            </div>
            <div class="box">
                <img src="" alt="">
            </div>
        </div>
    </div>
    <div class="line4"></div>
    <!-- testimonial section starts -->
    <div class="testimonial-fluid">
        <h1 class="title">what our customers say's</h1>
        <div class="testimonial-slider">
            <div class="testimonial-item">
                <img src="" alt="">
                <div class="testimonial-caption">
                    <span>test the quantity</span>
                    <h1>organic premium honey</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus vitae beatae perspiciatis modi magnam sit, fugiat mollitia assumenda qui officiis, minus, voluptates at. Eveniet similique neque inventore, architecto asperiores rem.</p>         
                </div>
            </div>
            <div class="testimonial-item">
                <img src="" alt="">
                <div class="testimonial-caption">
                    <span>test the quantity</span>
                    <h1>organic premium honey</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus vitae beatae perspiciatis modi magnam sit, fugiat mollitia assumenda qui officiis, minus, voluptates at. Eveniet similique neque inventore, architecto asperiores rem.</p>         
                </div>
            </div>
            <div class="testimonial-item">
                <img src="" alt="">
                <div class="testimonial-caption">
                    <span>test the quantity</span>
                    <h1>organic premium honey</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus vitae beatae perspiciatis modi magnam sit, fugiat mollitia assumenda qui officiis, minus, voluptates at. Eveniet similique neque inventore, architecto asperiores rem.</p>         
                </div>
            </div>
        </div>
                <div class="controls">
                    <i class="bx bx-chevron-left prev1"></i>
                    <i class="bx bx-chevron-right next2"></i>
                </div>
    </div>
    <div class="line4"></div>
    <!-- discount section starts -->
    <div class="line2"></div>
    <div class="discover">
        <div class="detail">
            <h1 class="title">organic money be healthy</h1>
            <span>buy now and save 30% off!</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus animi, neque molestiae quae a ut nemo ipsam adipisci voluptate esse, cupiditate eaque ullam cumque officiis laudantium ad magnam aspernatur. Provident!</p>
            <a href="shop.php" class="btn">discover now</a>
        </div>
        <div class="img-box">
            <img src="" alt="">
        </div>
    </div>
    <div class="line3"></div>
    <?php include 'homeshop.php'; ?>
    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script type="" src="./scripts/user.js"></script>
</body>
</html>