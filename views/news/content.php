
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
    $sql = "SELECT name, message FROM comments WHERE message !=''";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
?>
<section id="comments">
    <div class="container flex-container">
        <table class="comment">
            <tr class="comment-title">
                <th>Poster's ID:</th>
                <th>Comment:</th>
            </tr>
        <?php
            while($row = $result->fetch_assoc()) {
        ?>
        <tr class="comment-name-message">
            <td class="comment-name"><?php echo $row["name"]; ?></td>
            <td class="comment-message"><?php echo $row["message"]; ?></td>
        </tr>
        <?php
            }
        ?>
        </table>
        <?php 
        } else {
            echo "0 results";
        }   
        $conn->close();
        ?>
    </div>
</section>
<section class="page-news-article">
        <div class="container flex-container">
            <div class="page-news-article-image">
                <img src="images/newspapers-stack.jpg" alt="newspapers">
            </div>
            <div class="page-new-article-paragraphs flex-container">
                <div class="page-news-article-headings">
                    <p>opsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat </p>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <h1>Heading 1</h1>
                    <h2>Heading 2</h2>
                    <h3>Heading 3</h3>
                    <h4>Heading 4</h4>
                    <h5>Heading 5</h5>
                    <h6>Heading 6</h6>
                </div>
                <div>
                    <h3>Deserunt mollit anim idest laborum</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <ul>
                        <li>Officia deserunt mollit anim id est laborum </li>
                        <li>Excepteur sintoccaecat cupidatat</li>
                        <li>Reprehenderit in voluptate velit</li>
                        <li>Exercitation ullamco laboris</li>
                    </ul>
                </div>
                <div>
                    <h3>Mollit anim idest laborum</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <ol>
                        <li>Officia deserunt mollit anim id est laborum </li>
                        <li>Excepteur sintoccaecat cupidatat</li>
                        <li>Reprehenderit in voluptate velit</li>
                        <li>Exercitation ullamco laboris</li>
                    </ol>
                    <p>Utenim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sintoccaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="page-article-reply" class="flex-container">
                    <h2>Leave a Reply</h2>
                    <p>Your email address will not be published. Required fields are marked *</p>
                    <form id="page-article-comment" class="flex-container" action="news.php" method="post">
                        <p>Comment</p>
                        <textarea name="message" rows="12" placeholder="Your Message"></textarea>
                        <p>Name *</p>
                        <input type="text" name="name" placeholder="Your Name" required>
                        <p>Email *</p>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <p>Website</p>
                        <input type="text" name="website" placeholder="Your Website">
                        <div class="form-check-box flex-container">
                            <input class="check-box" type="checkbox" name="checkbox" required>
                            <p>By checking this box I agree to terms and service of the website.</p>
                        </div>
                        <button class="btn btn-form" type="submit" name="submit">Post Comment</button>
                    </form>
                </div>
            </div> 
        </div>
    </section>
    <section id="pages-projects">
        <div class="logoipsum-learn-more flex-container">
            <div class="container logoipsum-logos flex-container">
                <img src="images/logoipsum logos/logoipsum 1.png" alt="logoipsum_logo_1">
                <img src="images/logoipsum logos/logoipsum 2.png" alt="logoipsum_logo_2">
                <img src="images/logoipsum logos/logoipsum 3.png" alt="logoipsum_logo_3">
                <img src="images/logoipsum logos/logoipsum 4.png" alt="logoipsum_logo_4">
            </div>
            <div class="learn-more-consultant flex-container">
                <p>looking for a first-class business consultant?</p>
                <button class="yellow-btn" type="button">Learn More</button>
            </div>
        </div>
    </section>