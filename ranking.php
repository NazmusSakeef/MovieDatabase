<?php
session_start();

if (isset($_POST['rating'])) {
    require_once 'dbconnect.php';

    $rate = mysqli_real_escape_string($connection, $_POST['rate']);
    $comment = mysqli_real_escape_string($connection, $_POST['comment']);

    $sql = "INSERT INTO rate VALUES(". $_GET['id'] . ", ". $_SESSION['usr_id'] . ', '. $rate . ', "'. $comment . '");';
    //echo $sql. '<br>';
    $res = mysqli_query($connection, $sql) or die(mysqli_error($connection)) ;
    $connection->close();
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" http-equiv="Content-Type" content="text/html" charset="UTF-8"/>

    <title>Movie Review | Single</title>

    <!-- Loading third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Loading main css file -->
    <link rel="stylesheet" href="style.css">

    <!--[if lt IE 9]>
    <script src="js/ie-support/html5.js"></script>
    <script src="js/ie-support/respond.js"></script>
    <![endif]-->


    <body>

        <div id="site-content">
            <header class="site-header">
                <div class="container">
                    <a href="index.php" id="branding">
                        <img src="images/logo.png" alt="" class="logo">
                        <div class="logo-copy">
                            <h1 class="site-title">চিত্র সমাচার</h1>
                            <small class="site-description">A Bengali Movie Info Database</small>
                        </div>
                    </a> <!-- #branding -->

                    <div class="main-navigation">
                        <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                        <ul class="menu">
                            <li class="menu-item"><a href="index.php">Home</a></li>
                            <li class="menu-item"><a href="about.php">About</a></li>
                            <li class="menu-item current-menu-item"><a href="review.phpl">Movie reviews</a></li>
                            <li class="menu-item"><a href="single.html">Join us</a></li>
                            <li class="menu-item"><a href="contact.html">Contact</a></li>

                        </ul> <!-- .menu -->

                        <form action="#" class="search-form">
                            <input type="text" placeholder="Search...">
                            <button><i class="fa fa-search"></i></button>
                        </form>
                    </div> <!-- .main-navigation -->

                    <div class="mobile-navigation"></div>
                </div>
            </header>
            <main class="main-content">
                <div class="container">
                    <div class="page">
                        <div class="breadcrumbs">
                            <a href="index.php">Home</a>
                            <a href="review.php">Movie Review</a>
                            <span>হাজার বছর ধরে</span>
                        </div>

                        <div class="content">
                            <div class="row">
                                <?php
                                $id = $_GET['id'];
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "chitra_samachar";

                                // Create connection
                                $conn = new mysqli($servername, $username, $password, $dbname);
                                // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                $query = "SELECT * FROM movie WHERE Movie_id =".$id;
                                $result = $conn->query($query);
                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();

                                    echo '<div class="col-md-6">';
                                    echo    '<img src="'. $row['movie_poster'] . '" alt="movie-poster">';
                                    echo "</div>";
                                    echo '<div class="col-md-6">';
                                    echo '<div class="panel panel-default">';

                                    echo '<h2 class="panel-heading">'. $row['Movie_name'] . '</h2>';
                                    echo '<div class="panel-body"><strong>Year: </strong>'. $row['Year']. '</div>';
                                    echo '<div class="panel-body"><strong>Genre: </strong>'. $row['Genre']. '</div>';
                                    echo '<div class="panel-body"><strong>Description: </strong>'. $row['description']. '</div>';
                                    echo '<div class="panel-body"><strong>Movie Link: </strong>'. '<a href="'.$row['youtube'].'">' . $row["Movie_name"] . "</a>"; '</div>';
                                }
                                $query = "SELECT avg (Rating) as RateAvg FROM rate WHERE Movie_id =".$id;
                                $result = $conn->query($query);
                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    echo '<div class="panel-body"><strong>Average Rating: </strong>'. $row['RateAvg']. '</div>';

                                }

                                $query = "SELECT studio.* FROM studio join production on studio.studio_id = production.studio_id where Movie_id = ".$id;
                                $result = $conn->query($query);
                                if ($result->num_rows > 0) {

                                    echo '<div class="panel-body"><strong>Production: </strong>';
                                    echo "<ul>";
                                    while($row = $result->fetch_assoc()){
                                        echo '<li>' . $row['Name'] . ', ' . $row['City'] . '</li>' ;
                                    }
                                    echo '</ul></div>';

                                }
                                if (isset($_SESSION['usr_id'])) {
                                    $query = "SELECT Rating FROM rate join users on users.User_id = rate.User_id where Movie_id = ".$id." and users.User_id=".$_SESSION['usr_id'];
                                    $result = $conn->query($query);
                                    if ($result->num_rows > 0) {
                                        $row = $result->fetch_assoc();
                                        $usr_rt = $row['Rating'];
                                        echo '<div class="panel-body"><strong>You Rated: </strong>'. $row['Rating']. '</div>';

                                    }
                                }

                                $query = "SELECT artist.details,name,role FROM artist join participation on artist.artist_id = participation.artist_id WHERE Movie_id =".$id;
                                $result = $conn->query($query);
                                if ($result->num_rows > 0) {
                                echo "<div class='panel panel-default'>\n";
                                echo "<br><br>";
                                echo "<hr>";
                                echo "<h2 class='panel-heading'>Cast</h2>\n";
                                echo "<div class='panel-body'>";
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<p class='alert alert-info'><strong>" . $row["role"] . '</strong>:<a href="'.$row['details'].'">' . $row["name"] . "</a></p>";
                                    }
                                    echo "</div></div>\n";
                                }

                                //echo $_SESSION['usr_id'];

                                $conn->close();
                                ?>

                                <?php if (isset($_SESSION['usr_id']) && !isset($usr_rt)): ?>
<hr>

                                <form action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $_GET['id']; ?>" method="post">
                                    <div class="form-group">
                                        <label for="rate" class="col-md-4">Your Rating: </label>
                                        <div class="col-md-8">
                                            <input type="number" name="rate" id="rate" min="0" max="10" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="comment" class="col-md-4">Your Comment: </label>
                                        <div class="col-md-8">
                                            <input type="text" name="comment" id="comment" style="width:100%" class="form-control">
                                        </div>
                                    </div>
                                    <input type="submit" name="rating" value="Submit">
                                </form>
                                <?php endif; ?>
                                <?php
                                $id = $_GET['id'];
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "chitra_samachar";

                                // Create connection
                                $conn = new mysqli($servername, $username, $password, $dbname);
                                // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }
                                $query = "SELECT name,Comment FROM users join rate on users.User_id = rate.User_id WHERE Movie_id =".$id;
                                $result = $conn->query($query);
                                if ($result->num_rows > 0) {
                                echo "<div class='panel panel-default'>\n";
                                echo "<br><br><br><br>";
                                echo "<hr>";
                                echo "<h2 class='panel-heading'>Comments</h2>\n";
                                echo "<div class='panel-body'>";
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<p class='alert alert-info'><strong>" . $row["name"] . '</strong>:' . $row["Comment"] . "</p>";
                                    }
                                    echo "</div></div>\n";
                                }
                                $conn->close();

                                ?>

                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- .container -->
        </main>


        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="widget">
                            <h3 class="widget-title">About Us</h3>
                            <p>We some movie freak people from the southern part of Bangladesh trying to put together all about Bengali movie from orthodox.It will help to pursue about Bengali culture from the very beginning.</p>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="widget">
                            <h3 class="widget-title">Social Media</h3>
                            <ul class="no-bullet">
                                <li><a href="https://www.facebook.com/">Facebook</a></li>
                                <li><a href="https://twitter.com/">Twitter</a></li>
                                <li><a href="https://plus.google.com/">Google+</a></li>
                                <li><a href="https://www.pinterest.com/">Pinterest</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="widget">
                            <h3 class="widget-title">Newsletter</h3>
                            <form action="#" class="subscribe-form">
                                <input type="text" placeholder="Email Address">
                                <hr>
                                <li><input type = "button" id = "btn" value = "PDF" onclick="window.print();"</li>
                            </form>
                        </div>
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container -->

        </footer>
    </div>
    <!-- Default snippet for navigation -->

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/app.js"></script>

</body>

</html>
