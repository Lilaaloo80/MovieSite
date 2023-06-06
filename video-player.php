<!DOCTYPE html>
<html>
<head>
    <?php
    // Check if the video URL is provided as a query parameter
    if (isset($_GET['video'])) {
        $videoUrl = $_GET['video'];
        // Extract the movie name from the video URL
        $movieName = basename($videoUrl, ".mp4");
        // Set the page title to the movie name
        echo '<title>' . $movieName . '</title>';
    } else {
        // No video URL provided
        echo '<title>Video Player</title>';
    }
    ?>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.4/plyr.css" />
    <link href="styles/stylesheet.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1><?php echo $movieName; ?></h1>
        <?php
        // Check if the video URL is provided as a query parameter
        if (isset($_GET['video'])) {
            $videoUrl = $_GET['video'];
            // Output the video player with the specified video URL
            echo '<video id="player" playsinline controls><source src="' . $videoUrl . '" type="video/mp4"></video>';
            // Display the movie name
            echo '<div class="movie-name"><strong>Movie:</strong> ' . $movieName . '</div>';
        } else {
            // No video URL provided
            echo '<p>No video selected.</p>';
        }
        ?>
        <div class="back-button">
            <button onclick="goBack()">Back</button>
        </div>
    </div>

    <script src="https://cdn.plyr.io/3.6.4/plyr.js"></script>
    <script>
        function goBack() {
            // Go back to the previous page
            window.history.back();
        }

        const player = new Plyr('#player');
    </script>
</body>
</html>
