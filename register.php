<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watc3R - Watch Movies Online</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.0/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
</head>
<body>
    <div class="progress">
        <div class="progress-bar" id="scroll-bar"></div>
    </div>
    <header>
        <div class="nav container">
            <a href="index.html" class="logo">Watch<span>3R</span></a>
            <div class="nav-icons">
                <i class='' id="bell-icon"></i>
                
                <div class="menu-icon">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </div>
            <div class="menu">
                <img src="img/menu.png" alt="">
                <div class="navbar">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#trending">Trending</a></li>
                    <li><a href="#new">Comedy Movies</a></li>
                    <li><a href="#action">Action Movies</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </div>
            </div>
            

        </div>
    </header>
    <form method="post" action="register.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
          <label class="p2">Username</label>
          <input type="text" name="username" value="<?php echo $username; ?>">
        </div>
        <div class="input-group">
            <label class="p2">Email</label>
          <input type="email" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
            <label class="p2">Password</label>
          <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label class="p2">Confirm password</label>
          <input type="password" name="password_2">
        </div>
        <div class="input-group">
          <button type="submit" class="btn1" name="reg_user">Register</button>
        </div>
        <p class="p1">
            Already a member? <a href="login.php">Sign in</a>
        </p>
    </form>
    </body>