<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: primap.php");
  }
?>
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
            <a href="index.php" class="logo">Watch<span>3R</span></a>
            <?php  if (isset($_SESSION['username'])) : ?>
    	<h3>Welcome <strong><?php echo $_SESSION['username'];?></strong></h3>
    	<h3> <a href="index.php?logout='1'" style="color: #1b83fa;">&nbsp;&nbsp;Logout</a> </h3>
    <?php endif ?>
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
    <section class="home container" id="home">
        <img src="img/background.png" alt="">
        <div class="home-text">
        </div>
    </section>
    
    <section class="trending container" id="trending">
        <div class="heading">
            <h1>Trending Movies</h1>
        </div>
        <div class="trending-content swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/t1.jpg" alt="">
                        <div class="img_overlay">
                            <h2>Bullet Train</h2>
                            <p class="img_description">Action | Comedy | Thriller</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>7.1</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/m2.png" alt="">
                        <div class="img_overlay">
                            <h2>Violent Night</h2>
                            <p class="img_description">Action | Comedy</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>6.8</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/m3.png" alt="">
                        <div class="img_overlay">
                            <h2>Avatar</h2>
                            <p class="img_description">Action | SF</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>8</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/m4.png" alt="">
                        <div class="img_overlay">
                            <h2>The Menu</h2>
                            <p class="img_description">Horror | Thriller</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>7.8</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/m5.png" alt="">
                        <div class="img_overlay">
                            <h2>Wakanda Forever</h2>
                            <p class="img_description">Action | Adventure</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>7.6</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/m6.png" alt="">
                        <div class="img_overlay">
                            <h2>Amsterdam</h2>
                            <p class="img_description">History | Comedy | Drama</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>5.4</span>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="swiper-slide">
                    <div class="box">
                        <img src="img/m7.png" alt="">
                        <div class="img_overlay">
                            <h2>Dune</h2>
                            <p class="img_description">Action | Adventure | Thriller</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>8.2</span>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="swiper-slide">
                    <div class="box">
                        <img src="img/m8.png" alt="">
                        <div class="img_overlay">
                            <h2>Black Adam</h2>
                            <p class="img_description">Action | Adventure | Fantasy</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>4.9</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="trending container" id="trending">
        <div class="heading">
            <h1>Action Movies</h1>
        </div>
        <div class="trending-content swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="box">
                        <img src="action/Black site.jpg" alt="">
                        <div class="img_overlay">
                            <h2>Black Site</h2>
                            <p class="img_description">Action | Thriller</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>6.1</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="action/Blackout.jpg" alt="">
                        <div class="img_overlay">
                            <h2>Blackout</h2>
                            <p class="img_description">Action | Crime | Thriller</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>4.2</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="action/Bullet Proof.jpg" alt="">
                        <div class="img_overlay">
                            <h2>Bullet Proof</h2>
                            <p class="img_description">Action</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>3.8</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="action/Cop Secret.jpg" alt="">
                        <div class="img_overlay">
                            <h2>Cop Secret</h2>
                            <p class="img_description">Action | Comedy</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>4.5</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="action/Hitman.jpg" alt="">
                        <div class="img_overlay">
                            <h2>Hitman</h2>
                            <p class="img_description">Action | Crime | Thriller</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>5</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="action/Red notice.jpg" alt="">
                        <div class="img_overlay">
                            <h2>Red Notice</h2>
                            <p class="img_description">Action | Comedy | Thriller</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>6.5</span>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="swiper-slide">
                    <div class="box">
                        <img src="action/The kings man.jpg" alt="">
                        <div class="img_overlay">
                            <h2>The Kings Man</h2>
                            <p class="img_description">Action | Adventure | Thriller</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>6.3</span>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="swiper-slide">
                    <div class="box">
                        <img src="action/Top Gunn.jpg" alt="">
                        <div class="img_overlay">
                            <h2>Top Gun</h2>
                            <p class="img_description">Action | Drama</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>7.9</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="trending container" id="trending">
        <div class="heading">
            <h1>Comedy Movies</h1>
        </div>
        <div class="trending-content swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="box">
                        <img src="comedy/Friends with benefits.jpg" alt="">
                        <div class="img_overlay">
                            <h2>Friends With Benefits</h2>
                            <p class="img_description">Comedy | Romance</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>3.9</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="comedy/Hangover.jpg" alt="">
                        <div class="img_overlay">
                            <h2>Hangover 2</h2>
                            <p class="img_description">Comedy</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>4.7</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="comedy/Home alone.jpg" alt="">
                        <div class="img_overlay">
                            <h2>Home Alone 2</h2>
                            <p class="img_description">Comedy | Family</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>6.7</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="comedy/Little man.jpg" alt="">
                        <div class="img_overlay">
                            <h2>Little Man</h2>
                            <p class="img_description">Comedy | Crime</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>3.9</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="comedy/Son of the mask.jpg" alt="">
                        <div class="img_overlay">
                            <h2>Son of the Mask</h2>
                            <p class="img_description">Comedy | Family | Fantasy</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>4</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="comedy/Spirited.jpg" alt="">
                        <div class="img_overlay">
                            <h2>Spirited</h2>
                            <p class="img_description">Comedy | Family | Musical</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>7</span>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="swiper-slide">
                    <div class="box">
                        <img src="comedy/The hot chick.jpg" alt="">
                        <div class="img_overlay">
                            <h2>The Hot Chick</h2>
                            <p class="img_description">Comedy | Fantasy</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>4.3</span>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="swiper-slide">
                    <div class="box">
                        <img src="comedy/The proposal.jpg" alt="">
                        <div class="img_overlay">
                            <h2>The Proposal</h2>
                            <p class="img_description">Comedy | Drama | Romance</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>3.1</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="trending container" id="trending">
        <div class="heading">
            <h1>Shows</h1>
        </div>
        <div class="trending-content swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="box">
                        <img src="seriale/Arrow.jpg" alt="">
                        <div class="img_overlay">
                            <h2>Arrow</h2>
                            <p class="img_description">Action | Crime | Adventure</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>8.5</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="seriale/Breaking bad.jpg" alt="">
                        <div class="img_overlay">
                            <h2>Breaking Bad</h2>
                            <p class="img_description">Crime | Drama | Thriller</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>9.4</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="seriale/Criminal minds.jpg" alt="">
                        <div class="img_overlay">
                            <h2>Criminal Minds</h2>
                            <p class="img_description">Crime | Mistery</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>8.5</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="seriale/Friends.jpg" alt="">
                        <div class="img_overlay">
                            <h2>Friends</h2>
                            <p class="img_description">Comedy | Romance</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>8</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="seriale/Sherlock.jpg" alt="">
                        <div class="img_overlay">
                            <h2>Sherlock</h2>
                            <p class="img_description">Crime | Drama | Mistery</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>8.2</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="seriale/You.jpg" alt="">
                        <div class="img_overlay">
                            <h2>YOU</h2>
                            <p class="img_description">Crime | Drama | Romance</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>7.2</span>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="swiper-slide">
                    <div class="box">
                        <img src="seriale/Greys anatomy.jpg" alt="">
                        <div class="img_overlay">
                            <h2>Greys Anatomy</h2>
                            <p class="img_description">Drama | Romance</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>6.7</span>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="swiper-slide">
                    <div class="box">
                        <img src="seriale/Peaky Blinders.jpg" alt="">
                        <div class="img_overlay">
                            <h2>Peaky Blinders</h2>
                            <p class="img_description">Crime | Drama</p>
                            <div class="rating">
                                <i class='bx bxs-star' ></i>
                                <span>8.9</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <section class="new container" id="new">
        <div class="heading">
            <h1>All Movies & Shows</h1>
        </div>
        <div class="new-content">
            <div class="swiper-slide">
                <div class="box">
                    <img src="img/m6.png" alt="">
                    <div class="img_overlay">
                        <h2>Amsterdam</h2>
                        <p class="img_description">History | Comedy | Drama</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="seriale/Arrow.jpg" alt="">
                    <div class="img_overlay">
                        <h2>Arrow</h2>
                        <p class="img_description">Action | Crime | Adventure</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="img/m3.png" alt="">
                    <div class="img_overlay">
                        <h2>Avatar</h2>
                        <p class="img_description">Action | SF</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="img/m8.png" alt="">
                    <div class="img_overlay">
                        <h2>Black Adam</h2>
                        <p class="img_description">Action | Adventure | Fantasy</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="action/Black site.jpg" alt="">
                    <div class="img_overlay">
                        <h2>Black Site</h2>
                        <p class="img_description">Action | Thriller</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="action/Blackout.jpg" alt="">
                    <div class="img_overlay">
                        <h2>Blackout</h2>
                        <p class="img_description">Action | Crime | Thriller</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="seriale/Breaking bad.jpg" alt="">
                    <div class="img_overlay">
                        <h2>Breaking Bad</h2>
                        <p class="img_description">Crime | Drama | Thriller</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="action/Bullet Proof.jpg" alt="">
                    <div class="img_overlay">
                        <h2>Bullet Proof</h2>
                        <p class="img_description">Action</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="img/t1.jpg" alt="">
                    <div class="img_overlay">
                        <h2>Bullet Train</h2>
                        <p class="img_description">Action | Comedy | Thriller</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="action/Cop Secret.jpg" alt="">
                    <div class="img_overlay">
                        <h2>Cop Secret</h2>
                        <p class="img_description">Action | Comedy</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="seriale/Criminal minds.jpg" alt="">
                    <div class="img_overlay">
                        <h2>Criminal Minds</h2>
                        <p class="img_description">Crime | Mistery</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="img/m7.png" alt="">
                    <div class="img_overlay">
                        <h2>Dune</h2>
                        <p class="img_description">Action | Adventure | Thriller</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="seriale/Friends.jpg" alt="">
                    <div class="img_overlay">
                        <h2>Friends</h2>
                        <p class="img_description">Comedy | Romance</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="comedy/Friends with benefits.jpg" alt="">
                    <div class="img_overlay">
                        <h2>Friends With Benefits</h2>
                        <p class="img_description">Comedy | Romance</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="seriale/Greys anatomy.jpg" alt="">
                    <div class="img_overlay">
                        <h2>Greys Anatomy</h2>
                        <p class="img_description">Drama | Romance</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="comedy/Hangover.jpg" alt="">
                    <div class="img_overlay">
                        <h2>Hangover</h2>
                        <p class="img_description">Comedy</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="action/Hitman.jpg" alt="">
                    <div class="img_overlay">
                        <h2>Hitman</h2>
                        <p class="img_description">Action | Crime | Thriller</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="comedy/Home alone.jpg" alt="">
                    <div class="img_overlay">
                        <h2>Home Alone</h2>
                        <p class="img_description">Comedy | Family</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="comedy/Little man.jpg" alt="">
                    <div class="img_overlay">
                        <h2>Little Man</h2>
                        <p class="img_description">Comedy | Crime</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="seriale/Peaky Blinders.jpg" alt="">
                    <div class="img_overlay">
                        <h2>Peaky Blinders</h2>
                        <p class="img_description">Crime | Drama</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="action/Red notice.jpg" alt="">
                    <div class="img_overlay">
                        <h2>Red Notice</h2>
                        <p class="img_description">Action | Comedy | Thriller</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="seriale/Sherlock.jpg" alt="">
                    <div class="img_overlay">
                        <h2>Sherlock</h2>
                        <p class="img_description">Crime | Drama | Mistery</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="comedy/Son of the mask.jpg" alt="">
                    <div class="img_overlay">
                        <h2>Son of the Mask</h2>
                        <p class="img_description">Comedy | Family | Fantasy</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="comedy/Spirited.jpg" alt="">
                    <div class="img_overlay">
                        <h2>Spirited</h2>
                        <p class="img_description">Comedy | Family | Musical</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="comedy/The hot chick.jpg" alt="">
                    <div class="img_overlay">
                        <h2>The Hot Chick</h2>
                        <p class="img_description">Comedy | Fantasy</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="action/The kings man.jpg" alt="">
                    <div class="img_overlay">
                        <h2>The Kings Man</h2>
                        <p class="img_description">Action | Adventure | Thriller</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="img/m4.png" alt="">
                    <div class="img_overlay">
                        <h2>The Menu</h2>
                        <p class="img_description">Horror | Thriller</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="action/Top Gunn.jpg" alt="">
                    <div class="img_overlay">
                        <h2>Top Gun</h2>
                        <p class="img_description">Action | Drama</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="img/m2.png" alt="">
                    <div class="img_overlay">
                        <h2>Violent Night</h2>
                        <p class="img_description">Action | Comedy</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="img/m5.png" alt="">
                    <div class="img_overlay">
                        <h2>Wakanda Forever</h2>
                        <p class="img_description">Action | Adventure</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="seriale/You.jpg" alt="">
                    <div class="img_overlay">
                        <h2>YOU</h2>
                        <p class="img_description">Crime | Drama | Romance</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="img/venom.jpg" alt="">
                    <div class="img_overlay">
                        <h2>Venom</h2>
                        <p class="img_description">Crime | Drama | Romance</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="img/freedom.jpg" alt="">
                    <div class="img_overlay">
                        <h2>Freeom</h2>
                        <p class="img_description">Crime | Drama | Romance</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="img/takers.jpg" alt="">
                    <div class="img_overlay">
                        <h2>Takers</h2>
                        <p class="img_description">Crime | Drama | Romance</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="img/madmax.jpg" alt="">
                    <div class="img_overlay">
                        <h2>Mad Max</h2>
                        <p class="img_description">Crime | Drama | Romance</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="img/mission.jpg" alt="">
                    <div class="img_overlay">
                        <h2>Mission Impossible</h2>
                        <p class="img_description">Crime | Drama | Romance</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="img/2067s.jpg" alt="">
                    <div class="img_overlay">
                        <h2>2076</h2>
                        <p class="img_description">Crime | Drama | Romance</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="img/deathship.jpg" alt="">
                    <div class="img_overlay">
                        <h2>DeathShip</h2>
                        <p class="img_description">Crime | Drama | Romance</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="img/doctorwho.jpg" alt="">
                    <div class="img_overlay">
                        <h2>Doctor Who</h2>
                        <p class="img_description">Crime | Drama | Romance</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="img/scream.jpg" alt="">
                    <div class="img_overlay">
                        <h2>Scream</h2>
                        <p class="img_description">Crime | Drama | Romance</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="img/reminiscence.jpg" alt="">
                    <div class="img_overlay">
                        <h2>Reminiscence</h2>
                        <p class="img_description">Crime | Drama | Romance</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="img/MrNobody.jpg" alt="">
                    <div class="img_overlay">
                        <h2>MrNobody</h2>
                        <p class="img_description">Crime | Drama | Romance</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="img/jaws.jpg" alt="">
                    <div class="img_overlay">
                        <h2>Jaws</h2>
                        <p class="img_description">Crime | Drama | Romance</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="img/crank.jpg" alt="">
                    <div class="img_overlay">
                        <h2>Crank</h2>
                        <p class="img_description">Crime | Drama | Romance</p>
                        <div class="rating">
                            <i class='bx bxs-star' ></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="copyright container">
        <a href="#" class="logo">Watch<span>3R</span></a>
    </div>
<script src="js/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>