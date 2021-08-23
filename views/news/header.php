<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "az_boos_projektas";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $countDisplay = $conn->query("SELECT count(message) FROM comments WHERE message !=''")->fetch_array();
    $showLastPoster = $conn->query("SELECT name FROM comments ORDER BY id DESC LIMIT 1")->fetch_row();
?>
<header class="top-header">
        <div class="top-bar flex-container">
            <div class="hours">
                <p>We're 24/7 Hours Service Provider</p>
            </div>
            <div class="top-contacts">
                <ul class="top-bar-ul flex-container">
                    <li class="contact-list">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:support@boos.com">support@boos.com</a>
                    </li>
                    <li class="contact-list">
                        <i class="fas fa-phone"></i>
                        <a href="tel:621234678010">(+62) 1234 678 010</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <section class="hero">
        <header class="site-header">
            <div class="container flex-container">
                <div class="logo">
                    <img src="images/logo.png" alt="Boos">
                </div>
                <nav class="main-nav">
                    <ul class="flex-container">
                        <li><a href="index.php">Home +</a></li>
                        <li ><a href="index.php#About">About</a></li>
                        <li><a href="index.php#Services">Services +</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="pages.php">Pages +</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
                <nav class="mob-nav">
                    <ul id="mobMenu" class="flex-container">
                        <li><a href="index.php">Home +</a></li>
                        <li><a href="index.php#About">About</a></li>
                        <li><a href="index.php#Services">Services +</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="pages.php">Pages +</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                    <a href="javascript:void(0);" class="icon" onclick="displayMobileNav()">
                        <i class="fa fa-bars"></i>
                    </a>
                </nav>
                <div class="search flex-container">
                    <textarea id="search-bar" name="message" rows="1" placeholder="Search here..."></textarea>
                    <i class="fas fa-search" onclick="displaySearchBar()"></i>
                </div>
            </div>
        </header>
        <div class="container flex-container">
            <h1>Amet consectetur adipisicing elit sed do eiusmod</h1>
            <div class="hero-news-icons flex-container">
                <div class="flex-container">
                    <i class="far fa-user-circle"></i>
                    <p><?php echo $showLastPoster[0]; ?></p>
                </div>
                <div class="flex-container">
                    <i class="far fa-calendar-alt"></i>
                    <p><?php echo date("F jS Y"); ?></p>
                </div>
                <div class="flex-container" onclick="displayComments()"  href="javascript:void(0)">
                    <i class="far fa-comment-alt"></i>
                    <p><?php echo($countDisplay[0]);?> Comments</p>
                </div>
            </div>
        </div>
    </section>