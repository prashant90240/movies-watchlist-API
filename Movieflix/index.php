<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
   
    <title>Search Movies | Watchlist Creator</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="stylee.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
</head>

<body>
    <header>
        <div class="header-contents">
            <h1>Find your film</h1>
            <a href="watchlist.html" class="header-link">My Watchlist</a>
            <a href="logout.php"   class="header-link">Logout</a>
        </div>
    </header>
    <main>
        <div class="main-search-field">
            <label aria-label="Search for a movie" class="hide">Search for a
                movie</label>
            <input type="text" for="submit" id="searchInput" placeholder="Search for a movie">
            <button type="submit" value="Submit" id="searchBtn">Search</button>
        </div>

        <div class="main-contents" id="moviesList">
            <div id="movielist-default-container">
                <img src="images/movie-icon.svg" alt="Search movie list to start exploring movies."
                    class="movie-icon movie-list-default-display">
                <p class="text-grey-light fs-18 bold movie-list-default-display">Start exploring</p>
            </div>
        </div>
    </main>
    <script src="index.js"></script>
</body>

</html>