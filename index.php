<!DOCTYPE html>
<html>
<head>
    <title>Movie Collection</title>
    <link href="https://vjs.zencdn.net/7.14.3/video-js.min.css" rel="stylesheet">
    <script src="https://vjs.zencdn.net/7.14.3/video.min.js"></script>
    <link href="styles/stylesheet.css" rel="stylesheet">
</head>
<body>
    <script>
        const darkModeSwitch = document.getElementById('darkModeSwitch');
        const body = document.body;

        // Toggle dark mode
        darkModeSwitch.addEventListener('change', function() {
            body.classList.toggle('dark-mode');
        });
    </script>
    <style>


  


        </style>
    <div class="container">
        <h1>Movie Collection</h1>

        <input type="text" id="searchInput" placeholder="Search movies...">
        <ul id="searchResults"></ul>

        <div class="movie-posters">
        <div class="movie-poster" onclick="playVideo('movie1.mp4')">
                <img src="images/poster1.jpg" alt="Movie 1">
                <div class="movie-name"><h1>Movie</h1></div>
            </div>
            <div class="movie-poster" onclick="playVideo('movie2.mp4')">
                <img src="images/poster2.jpg" alt="Movie 2">
                <div class="movie-name"><h1>Movie</h1></div>
            </div>
            <div class="movie-poster" onclick="playVideo('movie3.mp4')">
                <img src="images/placeholder.png" alt="Movie 3">
                <div class="movie-name"><h1>Movie</h1></div>
            </div>
            <div class="movie-poster" onclick="playVideo('movie4.mp4')">
                <img src="images/placeholder.png" alt="Movie 4">
                <div class="movie-name"><h1>Movie</h1></div>
            </div>
            <div class="movie-poster" onclick="playVideo('movie5.mp4')">
                <img src="images/placeholder.png" alt="Movie 5">
                <div class="movie-name"><h1>Movie</h1></div>
            </div>
            <div class="movie-poster" onclick="playVideo('movie6.mp4')">
                <img src="images/placeholder.png" alt="Movie 6">
                <div class="movie-name"><h1>Movie</h1></div>
            </div>
            <div class="movie-poster" onclick="playVideo('movie7.mp4')">
                <img src="images/placeholder.png" alt="Movie 7">
                <div class="movie-name"><h1>Movie</h1></div>
            </div>
            <div class="movie-poster" onclick="playVideo('movie8.mp4')">
                <img src="images/placeholder.png" alt="Movie 8">
                <div class="movie-name"><h1>Movie</h1></div>
            </div>
            <div class="movie-poster" onclick="playVideo('movie9.mp4')">
                <img src="images/placeholder.png" alt="Movie 9">
                <div class="movie-name"><h1>Movie</h1></div>
            </div>
            <div class="movie-poster" onclick="playVideo('movie10.mp4')">
                <img src="images/placeholder.png" alt="Movie 10">
                <div class="movie-name"><h1>Movie</h1></div>
            </div>
            <div class="movie-poster" onclick="playVideo('movie11.mp4')">
                <img src="images/placeholder.png" alt="Movie 10">
                <div class="movie-name"><h1>Movie</h1></div>
            </div>
            <div class="movie-poster" onclick="playVideo('movie12.mp4')">
                <img src="images/placeholder.png" alt="Movie 10">
                <div class="movie-name"><h1>Movie</h1></div>
            </div>
        </div>
    </div>
    <script>
        const searchInput = document.getElementById('searchInput');
    const moviePosters = document.querySelectorAll('.movie-poster');

    // Listen for input in the search bar
    searchInput.addEventListener('input', function() {
        const searchText = searchInput.value.toLowerCase();

        moviePosters.forEach(function(moviePoster) {
            const movieName = moviePoster.querySelector('.movie-name').textContent.toLowerCase();

            if (movieName.includes(searchText)) {
                moviePoster.style.display = 'block';
            } else {
                moviePoster.style.display = 'none';
            }
        });
    });
    </script>
    <script>
        function playVideo(videoUrl) {
            // Redirect to the video player page with the selected video URL
            window.location.href = 'video-player.php?video=' + encodeURIComponent(videoUrl);
        }
    </script>
</body>
</html>