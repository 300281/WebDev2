<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<!--Version 3.0
        Name:Emmet Hoversten
        Date Completed:2/4/20
    -->

<head>
    <link rel="shortcut icon" type="image/ico" href="images/FaviconE.ico">
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Menu Sample">

    <title>Emmet's Autobiography</title>

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="CSS/SampleCSS.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <style type="text/css">
        .menu {
            margin: 0px;
        }

        .wideMargin {
            margin: 15px;
        }

        #footer {
            font-size: 12px;
            text-align: center;
        }

        h1 {
            color: green;
        }

        #buttonthing {
            background-color: red;
            color: black;
        }

        .report-container {
            border: #E0E0E0 1px solid;
            padding: 20px 40px 40px 40px;
            border-radius: 2px;
            width: 550px;
            margin: 0 auto;
        }

        .weather-icon {
            vertical-align: middle;
            margin-right: 20px;
        }

        .weather-forecast {
            color: ghostwhite;
            font-size: 1.2em;
            font-weight: bold;
            margin: 20px 0px;
        }

        span.min-temperature {
            margin-left: 15px;
            color: #929292;
        }

        .time {
            line-height: 25px;
        }

        .hidden {
            visibility: hidden;
        }

        .showing {
            visibility: visible;
        }

        td {
            color: #FF0000;

        }

        #weatherbox {
            color: white;
        }

    </style>
    <script src="JS/SampleJS.js"></script>
    <link rel="shortcut icon" type="image/ico" href="images/FaviconE.ico">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Menu Sample">

    <title>Emmet's Autobiography</title>

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="CSS/SampleCSS.css">
    <script src="JS/SampleJS.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <style type="text/css">
        .menu {
            margin: 0px;
        }

        .wideMargin {
            margin: 15px;
        }

        #footer {
            font-size: 12px;
            text-align: center;
        }

        h2 {
            color: white;
            font-size: 25px;
        }

        #titlehaha {
            color: green;
            font-size: 25px;
        }

        #hahalol {
            color: green;
            font-size: 20px;
        }

    </style>
    <link href="CSS/WebDevUser10.css" rel="stylesheet" type="text/css">

    <style>
        td {
            color: #FF0000;

        }

    </style>
    <link rel="shortcut icon" type="image/ico" href="images/FaviconE.ico">
    <title>My Favorite Movies</title>
    <link href="CSS/WebDevUser10.css" rel="stylesheet" type="text/css">
    <style>
        td {
            color: #FFFFFF;
            background-color: black
        }

    </style>
    <script type="text/javascript" src="scripts.js"></script>
</head>

<body>
    <div style="margin: 0px; border:0px; padding:0px;" class="menu">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="reset_password.php" class="navbar-brand">Emmet H</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!---------------------------------- Edit These Items in your Menu ------------->
                    <a href="index.php" class="nav-item nav-link " tabindex="1">Who</a>
                    <a href="what.php" class="nav-item nav-link">What</a>
                    <a href="movies.php" class="nav-item nav-link active" tabindex="-1">Movies</a>
                    <a href="index_list.php" class="nav-item nav-link" tabindex="-2">Favorites</a>
                    <a href="talents.php" class="nav-item nav-link " tabindex="-2">Talents</a>
                    <a href="javagames.php" class="nav-item nav-link " tabindex="-2">TicTacToe</a>
                    <button data-file="day" onClick="lightmode()" class="col-lg-5">Light Mode</button>

                    <!----------------------------------^ Edit These Items in your Menu ^ ------------->
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="reset_password.php" class="nav-item nav-link active"><i class="fa fa-cog fa-lg" aria-hidden="true"></i><?php echo htmlspecialchars($_SESSION["username"]); ?></a>

                    <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                    echo "<a href='logout.php' class='nav-item nav-link btn-danger' onclick='return confirm(\"Are you sure?\");'> Logout </a>";
                    } else { echo "<a href='login.php' class='nav-item nav-link'> Login </a>";} ?>
                </div>
            </div>
        </nav>
    </div>


    <h2 id="titlehaha"><u>My Top 5 Movies</u></h2>
    <img src="https://m.media-amazon.com/images/M/MV5BOTg4ZTNkZmUtMzNlZi00YmFjLTk1MmUtNWQwNTM0YjcyNTNkXkEyXkFqcGdeQXVyNjg2NjQwMDQ@._V1_UY1200_CR90,0,630,1200_AL_.jpg" class="resizableImage" width="200
        " height="350" alt="once apon a time in hollywood moive poster">

    <img src="https://econlife.com/wp-content/uploads/2014/07/Suply-and-demand-movie-theater-seats.jpg..jpg" class="resizableImage" width="250" height="175" alt="image of movie theater">

    <img src="https://bryantarchway.com/wp-content/uploads/2019/10/shutter-island.png" class="resizableImage" width="200
        " height="300" alt="once apon a time in hollywood moive poster">

    <table>
        <thead>
            <tr>
                <th>Rank</th>
                <th>Movie</th>
                <th>Why</th>
            </tr>
        </thead>
        <tr>
            <td style="color:#6a0dad; background-color:cyan;">1</td>
            <td style="color:#6a0dad; background-color:cyan;">Shutter Island</td>
            <td style="color:#6a0dad; background-color:cyan;">Trippiest movie, craziest ending, 10/10.</td>
        </tr>
        <tr>
            <td style="color:#00F000; background-color:palevioletred;">2</td>
            <td style="color:#00F000; background-color:palevioletred;">Joker</td>
            <td style="color:#00F000; background-color:palevioletred;">Very ominous and moody feel to the movie and very good acting.</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Once Apon a Time in HollyWood</td>
            <td>Very violent and good story.</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Guardians of the Galaxy</td>
            <td>Lots of action mixed with a lot of comedy.</td>
        </tr>
        <tr>
            <td style="color:#000f00; background-color:royalblue;">5</td>
            <td style="color:#000f00; background-color:royalblue;">Holes</td>
            <td style="color:#000f00; background-color:royalblue;">Classic movie and very cool story.</td>
        </tr>
    </table>
    <div>
    <div class="container">

      <div class="example-div report-container">
        
        <h1 style="text-align: left;">Search</h1>
        
        <section id="fetch">
          <form name="fetch">
            <input type="text" placeholder="Enter a movie title" id="term" style="padding: 100px; background-color: purple; border-color: black;"/>
            <input type="submit" id="search" value="Find me a poster" style="border-color: black; border: 50px dashed red"/>
          </form> 
        </section>
        
        <section id="poster">
          
        </section>
          
    </div>

    <p id="hahalol">
        Watch them illegally online here <a href="https://www.yahoo.com" target="_blank"> Bad Site</a>
    </p>
    <div id="footer">

    </div>

    <script>
        $('.resizableImage').hover(makeBigger, returnToOriginalSize);

        function makeBigger() {
            $(this).css({
                height: '+=10%',
                width: '+=10%'
            });
        }

        function returnToOriginalSize() {
            $(this).css({
                height: "",
                width: ""
            });
        }

    </script>
   <div class="footer-dark">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item">
                            <h3>Services</h3>
                            <ul>
                                <li><a href="index.php">Main Page</a></li>
                                <li><a href="javagames.php">Games</a></li>
                                <li><a href="talents.php">Cool Things</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 item">
                            <h3>About</h3>
                            <ul>
                                <li><a href="#">Company</a></li>
                                <li><a href="what.php">Team</a></li>
                                <li><a href="index_list.php">Careers</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 item text">
                            <h3>Emmet Hoverten</h3>
                            <p>Just a young lad doing coding for school.</p>
                        </div>
                        <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                    </div>
                    <p class="copyright">Emmet Hoversten © 2020</p>
                </div>
            </footer>
        </div>
</body>

</html>
