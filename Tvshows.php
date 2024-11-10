<?php
// Start the session 
session_start();
include 'db.php'; 
$connection = getDbConnection();

$query = "SELECT * FROM shows";

// check if a phase is specified in the URL
if (isset($_GET['phase']) && $_GET['phase'] !== 'all') {
    $phase = mysqli_real_escape_string($connection, $_GET['phase']);
    $query .= " WHERE category = '$phase'"; //filter by phase
}

// fetch TV shows from the database
$result = mysqli_query($connection, $query);

// check if the query is sucessful 
if (!$result) {
    die("Query failed: " . mysqli_error($connection));
}
$shows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marvel Movies</title>

    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles -->
    <link rel="stylesheet" href="tvshows.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="Navigation.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="filterbar.css?v=<?php echo time(); ?>">
</head>
<body>


<nav class="main-navigation">
    <ul class="menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="Movies.php">Movies</a></li>
        <li><a href="Tvshows.php" class="active">TV Shows</a></li>
        <li><a href="joinus.php">Movie Reviews</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Sign Up</a></li>
    </ul>
</nav>


<div class="filter-container">
    <h2>Filter by Phase:</h2>
    <div class="filter-buttons">
        <a href="Tvshows.php?phase=Phase 4" class="filter-button">Phase 4</a>
        <a href="Tvshows.php?phase=Phase 5" class="filter-button">Phase 5</a>
        <a href="Tvshows.php?phase=Phase 6" class="filter-button">Phase 6</a>
        <a href="Tvshows.php?phase=all" class="filter-button active">All Shows</a>
    </div>
</div>
                
        </header>


        <main>
            <h1>Marvel Television</h1>
            <div class="shows-grid">
                <?php
                
                
        // loops through each show and display it
        foreach ($shows as $show) {
            echo '<div class="shows-item">';
            echo '<img src="' . $show["image"] . '" alt="' . $show["title"] . '">';
            echo '<h2>' . $show["title"] . '</h2>';
            echo '<p>' . $show["year"] . '</p>';
            echo '<p>Category: ' . $show["category"] . '</p>'; // Displays the category/phase
            echo '</div>';
        }
                ?>
            </div>
        </main>
    </div>
</body>
</html>


<footer class="site-footer">
            <div class="container">
                <div class="footer-sections">
                    <section class="footer-social">
                        
                        <ul class="social-media no-bullet">
                        <footer class="site-footer">
            <div class="container">
                <div class="footer-sections">
                    <section class="footer-social">
                        <h3>Social Media</h3>
                        <ul class="social-media no-bullet">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-google"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                          
                        </ul>
                    </section>
                </div>
                <p class="colophon">&copy; 2024 Marvel Verse All rights reserved.</p>
            </div>
        </footer>