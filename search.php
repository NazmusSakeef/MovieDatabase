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
                            <li class="menu-item current-menu-item"><a href="review.php">Movie reviews</a></li>
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
                                <div class="col-md-6">
                                    <h2 class="panel-heading">Search By Rating</h2>
                                    <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                                        <div class="form-group">
                                            <label for="search">Search</label>
                                            <input type="number" name="rating" min="0" max="10" value="<?php if(isset($_POST['rating'])) echo $_POST['rating']; ?>">
                                            <input type="submit" value="search">

                                        </div>

                                    </form>
                                    <?php
                                    if (isset($_POST['rating'])) {
                                        //$id = $_GET['id'];
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

                                        $query = "SELECT Movie_name, movie.Movie_id, avg(rate.Rating) AS avg_rate FROM movie JOIN rate on movie.Movie_id = rate.Movie_id GROUP BY movie.Movie_id, Movie_name HAVING avg_rate >= " . $_POST['rating'] . " ORDER BY avg_rate DESC";
                                        //echo $query;
                                        $result = $conn->query($query);
                                        if ($result->num_rows > 0) {
                                            echo "<div class='panel panel-default'>\n";
                                            echo "<br><br><br><br>";
                                            echo "<hr>";
                                            echo "<h2 class='panel-heading'>Movies</h2>\n";
                                            echo "<div class='panel-body'>";
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<p class='alert alert-info'><strong><a href='ranking.php?id=" . $row['Movie_id'] . "'>" . $row["Movie_name"] . '</a></strong>:' . $row["avg_rate"] . "</p>";
                                            }
                                            echo "</div></div>\n";
                                        }
                                        else{
                                            echo "<hr><br>";
                                            echo "No Movie Found";
                                        }
                                        $conn->close();


                                    }
                                    ?>

                                </div>
                                <div class="col-md-6">
                                    <h2 class="panel-heading">Search By Movie Name</h2>
                                    <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                                        <div class="form-group">
                                            <label for="search">Search</label>
                                            <input type="text" name="moviename" value="<?php if(isset($_POST['moviename'])) echo $_POST['moviename']; ?>">
                                            <input type="submit" value="search">

                                        </div>

                                    </form>
                                    <?php
                                    if (isset($_POST['moviename'])) {
                                        //$id = $_GET['id'];
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

                                        $query = "SELECT Movie_name, movie.Movie_id, avg(rate.Rating) AS avg_rate FROM movie JOIN rate on movie.Movie_id = rate.Movie_id WHERE movie.Movie_name LIKE '%" . $_POST['moviename'] . "%' GROUP BY movie.Movie_id, Movie_name ORDER BY movie.Movie_name";
                                        $result = $conn->query($query);
                                        if ($result->num_rows > 0) {
                                            echo "<div class='panel panel-default'>\n";
                                            echo "<br><br><br><br>";
                                            echo "<hr>";
                                            echo "<h2 class='panel-heading'>Movies</h2>\n";
                                            echo "<div class='panel-body'>";
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<p class='alert alert-info'><strong><a href='ranking.php?id=" . $row['Movie_id'] . "'>" . $row["Movie_name"] . '</a></strong>:' . $row["avg_rate"] . "</p>";
                                            }

                                            echo "</div></div>\n";
                                        }
                                        else{
                                            echo "<hr><br>";
                                            echo "No Movie Found";
                                        }
                                        $conn->close();


                                    }
                                    ?>

                                </div>
                            </div> <!-- .row -->

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
