<?php
// Starts the session 
session_start();
include 'db.php'; 
$connection = getDbConnection();

// get movies from the database
$query = "SELECT * FROM movies";
$result = mysqli_query($connection, $query);
if (!$result) {
    die("Query failed: " . mysqli_error($connection));
}

$movies = mysqli_fetch_all($result, MYSQLI_ASSOC);

// get the selected phase 
$selected_phase = isset($_GET['phase']) ? $_GET['phase'] : 'all';

// valid phases
$valid_phases = ['Phase 1', 'Phase 2', 'Phase 3', 'Phase 4', 'Phase 5', 'all'];

// check selected phase
if (!in_array($selected_phase, $valid_phases)) {
    $selected_phase = 'all';
}

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
    <link rel="stylesheet" href="movies.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="Navigation.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="filterbar.css?v=<?php echo time(); ?>">
  
</head>
<body>

<nav class="main-navigation">
    <ul class="menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="movies.php" class="active">Movies</a></li>
        <li><a href="Tvshows.php">TV Shows</a></li>
        <li><a href="joinus.php">Movie Reviews</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Sign Up</a></li>
    </ul>
</nav>

<div class="filter-container">
    <h2>Filter by Phase:</h2>
    <div class="filter-buttons">
        <a href="Movies.php?phase=Phase 1" class="filter-button">Phase 1</a>
        <a href="Movies.php?phase=Phase 2" class="filter-button">Phase 2</a>
        <a href="Movies.php?phase=Phase 3" class="filter-button">Phase 3</a>
        <a href="Movies.php?phase=Phase 4" class="filter-button">Phase 4</a>
        <a href="Movies.php?phase=Phase 5" class="filter-button">Phase 5</a>
        <a href="Movies.php?phase=all" class="filter-button active">All Movies</a>
    </div>
</div>



<main>
    <h1>Marvel Movies</h1>
    <div class="movie-grid">
    <?php
// loop through each movie in the array
foreach ($movies as $movie) {
    
    // checks if the movie matches the selected phase or if all movies is selected
    if ($selected_phase === 'all' || $movie['phase'] === $selected_phase) {
        echo '<div class="movie-item" data-phase="' . $movie["phase"] . '">';
        $movieTitle = strtolower(str_replace([' ', ':'], '-', $movie['title'])); 
        
        // link to the  detailed page of each movie
        echo '<a href="' . $movieTitle . '.php">';
        // shows movie posters
        echo '<img src="' . $movie["image"] . '" alt="' . $movie["title"] . '">';
        // movie information 
        echo '<div class="movie-info">';
        echo '<h2 class="movie-title">' . $movie["title"] . '</h2>';
        echo '<p class="movie-year">' . $movie["year"] . '</p>';
        echo '</div>';
        
      
        echo '</a>';
        echo '</div>';
    }
}
?>

    </div>
</main>

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

</body>
</html>
