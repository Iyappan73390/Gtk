<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php echo $pageTitle; ?>
  </title>
  <meta name="description" content="<?php echo $pageDescription; ?>">
  <meta name="Keywords" content="<?php echo $pageKeywords; ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <!-- Testimonial slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <!-- slider -->

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section class="navsec">
        <a href="home.php"><img src="./images/logo.png" class="navlogo"></a>
        <nav class="mobile-nav">
            <!-- <h1>LOGO</h1> -->
            <a href="home.php"><img src="./images/logo.png" class="innernavlogo"></a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a>About us</a></li> 
                <li><a href="ongoing-project.php">Ongoing Projects</a></li>
                <li><a>Completed Projects</a></li>
                <li><a>Testimonials</a></li>
                <li><a>Gallery</a></li>
                <li><a href="contact-us.php">Contact us</a></li>
            </ul>

            <div class="burger">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </nav>
        <div class="contactdetails">
            <a href="#">081449 81449</a>
            <a href="#">info@gtkfoundation.com</a>
        </div>
    </section>
    <script>
        
        const burger = document.querySelector('.burger');
        const navbar = document.querySelector('ul');

        burger.addEventListener('click', ()=>{
            navbar.classList.toggle('slider');
        }) 

    </script>
</body>
</html>