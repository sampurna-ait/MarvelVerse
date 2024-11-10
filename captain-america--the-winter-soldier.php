
<?php
session_start();
include 'db.php'; 
$connection = getDbConnection();
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
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles -->
    <link rel="stylesheet" href="movies.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="Navigation.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="Product.css?v=<?php echo time(); ?>">
  
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
<div class="content">
    
    <div class="col-md-6">
    <figure class="movie-poster">
        <div class="poster-wrapper">
            <img src="posters/Movies/captainamerica2.jpg" alt="Captain America The Winter Soldier Poster">
        </div>
    </figure>
</div>
        <div class="col-md-6">
            <h2 class="movie-title">Thor: The Dark World</h2>
            <div class="movie-summary">
                <p>
                After the cataclysmic events in New York with The Avengers, Marvel's "Captain America: The Winter Soldier," finds Steve Rogers, aka Captain America, living quietly in Washington, D.C. and trying to adjust to the modern world. But when a S.H.I.E.L.D. colleague comes under attack, Steve becomes embroiled in a web of intrigue that threatens to put the world at risk. Joining forces with the Black Widow, Captain America struggles to expose the ever-widening conspiracy while fighting off professional assassins sent to silence him at every turn. When the full scope of the villainous plot is revealed, Captain America and the Black Widow
                 enlist the help of a new ally, the Falcon. However, they soon find themselves up against an unexpected and formidable enemy--the Winter Soldier.</p>
</div>
            <ul class="movie-meta">
                <li><strong>Rating:</strong>
                    <div class="star-rating" title="Rate this movie">
                        <span id="user-rating" style="width:<?php echo isset($averageRating) ? ($averageRating / 5 * 100) . '%' : '0%'; ?>">
                            <strong class="rating"><?php echo isset($averageRating) ? number_format($averageRating, 2) : '0.00'; ?></strong> out of 5
                        </span>
                    </div>
                </li>
                <li><strong>Director:</strong>Anthony Russo, Joe Russo</li>
                <li><strong>Length:</strong> 136 min</li>
                <li><strong>Premiere:</strong> 4, April 2014 (USA)</li>
                <li><strong>Category:</strong> Phase 2</li>
            </ul>

            <div class="rating-input">
            <form method="POST" action="submit_rating.php">
            <input type="hidden" name="movies_id" value="1">
                <label for="rating">Rate this movie:</label>
                <select id="rating">
                    <option value="0">Select Rating</option>
                    <option value="1">1 Star</option>
                    <option value="2">2 Stars</option>
                    <option value="3">3 Stars</option>
                    <option value="4">4 Stars</option>
                    <option value="5">5 Stars</option>
                </select>
                <button id="submit-rating">Submit Rating</button>
</form>
            </div>
        </div>
    </div> <!-- .row -->
    <div class="entry-content">
       
    </div>
</div> <!-- .content -->

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
                     

    </div>

    <script>
    document.getElementById('submit-rating').addEventListener('click', function() {
        var rating = document.getElementById('rating').value;
        var ratingDisplay = document.getElementById('user-rating');
        
        if (rating > 0) {
            ratingDisplay.style.width = (rating / 5 * 100) + '%'; 
            ratingDisplay.querySelector('.rating').innerText = rating; 
            
            //send the rating to the server 
            var formData = new FormData();
            formData.append('rating', rating);
            
            fetch(window.location.href, {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                alert('Thank you for rating this movie!');
                //update the average rating displayed
                location.reload(); //show the updated rating
            })
            .catch(error => console.error('Error:', error));
        } else {
            alert('Please select a rating.');
        }
    });
</script>

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/app.js"></script>
 
    <script src="script.js"></script>
</body>
</body>
</html> 