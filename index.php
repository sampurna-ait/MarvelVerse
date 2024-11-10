<?php
// Start the session if needed
session_start();
include 'db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marvel Verse</title>

    <!-- Loading fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.min.css" />
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="movies.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="Navigation.css?v=<?php echo time(); ?>">
    <script src="indexc.js"></script>
</head>

<body>


<nav class="main-navigation">
    <ul class="menu">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="Movies.php">Movies</a></li>
        <li><a href="Tvshows.php">TV Shows</a></li>
        <li><a href="joinus.php">Movie Reviews</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Sign Up</a></li>
    </ul>
    
</nav>

    
</header>


        <main class="main-content">
        <div class="carousel" data-flickity='{ "autoPlay": true }'>
            <div class="carousel-cell"><img src="posters/1.jpg" alt="Plot Detail 1"></div>
            <div class="carousel-cell"><img src="posters/3.jpg" alt="Plot Detail 3"></div>
            <div class="carousel-cell"><img src="posters/4.jfif" alt="Plot Detail 3"></div>
            <div class="carousel-cell"><img src="posters/5.jpg" alt="Plot Detail 3"></div>
            <div class="carousel-cell"><img src="posters/6.jpg" alt="Plot Detail 3"></div>
            <div class="carousel-cell"><img src="posters/7.jpg" alt="Plot Detail 3"></div>
            <div class="carousel-cell"><img src="posters/8.jpg" alt="Plot Detail 3"></div>
        
        </div>

    


                    <section>
                        <h2>Now Playing</h2>
                        <div class="movie-grid">
                            <div class="movie-item">
                                <a href="#"><img src="posters/Now Playing/agatha.jpg" alt="Now Playing 1"></a>
                                <p class="movie-title">Agatha All Along </p>
                            </div>
                            <div class="movie-item">
                                <a href="#"><img src="posters/Now Playing/deadpoolandwolverine.jpg" alt="Now Playing 2"></a>
                                <p class="movie-title">Deadpool and Wolverine</p>
                            </div>
                            <div class="movie-item">
                                <a href="#"><img src="posters/Now Playing/xmen.jpg" alt="Now Playing 3"></a>
                                <p class="movie-title">Xmen 97</p>
                            </div>
                            <div class="movie-item">
                                <a href="#"><img src="posters/Now Playing/thelastdance.jpg" alt="Now Playing 4"></a>
                                <p class="movie-title">Venom: The Last Dance</p>
                            </div>
                            
                        </div>
                    </section>

                    <section>
                        <h2>Upcoming</h2>
                        <div class="movie-grid">
                            <div class="movie-item">
                                <a href="#"><img src="posters/Upcoming/avengersdoomsday.jpg" alt="Upcoming 1"></a>
                                <p class="movie-title">Avengers Doomsday - 26 June 2026</p>
                            </div>
                            <div class="movie-item">
                                <a href="#"><img src="posters/Upcoming/avengerssecretwars.jpg" alt="Upcoming 2"></a>
                                <p class="movie-title">Avengers Secret War - 07 May 2027</p>
                            </div>
                            <div class="movie-item">
                                <a href="#"><img src="posters/Upcoming/captainamericabravenewworld.jpg" alt="Upcoming 3"></a>
                                <p class="movie-title">Captain America - 05 Feburary 2025</p>
                            </div>
                            <div class="movie-item">
                                <a href="#"><img src="posters/Upcoming/thefantasticfourfirststep.jpg" alt="Upcoming 4"></a>
                                <p class="movie-title">Fantastic Four First Step 25 July 2025</p>
                            </div>
                        </div>
                    </section>
                    
                   <h2>Top IMDb</h2>
              <div class="movie-grid">
        <div class="movie-item">
            <a href="#"><img src="posters/Top IMBD/blackpanther.jpg" alt="Top IMDb 1"></a>
            <p class="movie-title">Black Panther </p>
            <p class="rotten-tomato-score">Rotten Tomatoes: 96%</p>
        </div>
          <div class="movie-item">
            <a href="#"><img src="posters/Top IMBD/captainamericacivilwar.jpg" alt="Top IMDb 2"></a>
            <p class="movie-title">Captain America Civil War</p>
            <p class="rotten-tomato-score">Rotten Tomatoes: 91%</p>
         </div>
        <div class="movie-item">
            <a href="#"><img src="posters/Top IMBD/avengersendgame.jpg" alt="Top IMDb 3"></a>
            <p class="movie-title">Avengers Endgame</p>
            <p class="rotten-tomato-score">Rotten Tomatoes: 94%</p>
        </div>
        <div class="movie-item">
            <a href="#"><img src="posters/Top IMBD/spider-mannowayhome.jpg" alt="Top IMDb 4"></a>
            <p class="movie-title">Spider-Man: No Way Home</p>
            <p class="rotten-tomato-score">Rotten Tomatoes: 93%</p>
        </div>
    </div>
</section>

                  
                </div>
            </div>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="footer-sections">
                    <section class="footer-social">
                        
                        <ul class="social-media no-bullet">
                        <footer class="site-footer">
            <div class="container">
                <div class="footer-sections">
                    <section class="footer-social">
                        <h2>Social Media</h2>
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
                     

    </div>

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.pkgd.min.js"></script>
    <script src="script.js"></script>
</body>
</body>
</html> 