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

        h1 {
            color: green;
        }

    </style>

    <style>
        body {
            background-image: none;
        }

        td {
            color: #FF0000;

        }

        .changeback {
            background-color: red;
        }

    </style>
    <script src="JS/SampleJS.js"></script>
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
                    <a href="index.php" class="nav-item nav-link" tabindex="1">Who</a>
                    <a href="what.php" class="nav-item nav-link">What</a>
                    <a href="movies.php" class="nav-item nav-link" tabindex="-1">Movies</a>
                    <a href="index_list.php" class="nav-item nav-link" tabindex="-2">Favorites</a>
                    <a href="talents.php" class="nav-item nav-link " tabindex="-2">Talents</a>
                    <a href="javagames.php" class="nav-item nav-link active" tabindex="-2">TicTacToe</a>
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


    <div class="wideMargin" id="content">

        <h1 class="text-left my-3">Games</h1><!-- Edit this line for the title of your page -->

        <!--↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ Put your content below this line ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->
        <p color="red">

            PLAY TICTACTOE NOWNOWNOWNONWOW!!!!!!
        </p>

        <div>

            <SCRIPT>
                if (document.all || document.getElementById) {
                    document.write('<style>.tictac{')
                    document.write('width:50px;height:50px;')
                    document.write('}</style>')
                }

                var sqr1
                var sqr2
                var sqr3
                var sqr4
                var sqr5
                var sqr6
                var sqr7
                var sqr8
                var sqr9
                var sqr1T = 0
                var sqr2T = 0
                var sqr3T = 0
                var sqr4T = 0
                var sqr5T = 0
                var sqr6T = 0
                var sqr7T = 0
                var sqr8T = 0
                var sqr9T = 0
                var moveCount = 0
                var turn = 0
                var mode = 1

                function vari() {
                    sqr1 = document.tic.sqr1.value
                    sqr2 = document.tic.sqr2.value
                    sqr3 = document.tic.sqr3.value
                    sqr4 = document.tic.sqr4.value
                    sqr5 = document.tic.sqr5.value
                    sqr6 = document.tic.sqr6.value
                    sqr7 = document.tic.sqr7.value
                    sqr8 = document.tic.sqr8.value
                    sqr9 = document.tic.sqr9.value
                }

                function check() {
                    if (sqr1 == " X " && sqr2 == " X " && sqr3 == " X ") {
                        alert("You Win!")
                        reset()
                    } else if (sqr4 == " X " && sqr5 == " X " && sqr6 == " X ") {
                        alert("You Win!")
                        reset()
                    } else if (sqr7 == " X " && sqr8 == " X " && sqr9 == " X ") {
                        alert("You Win!")
                        reset()
                    } else if (sqr1 == " X " && sqr5 == " X " && sqr9 == " X ") {
                        alert("You Win!")
                        reset()
                    } else if (sqr1 == " X " && sqr4 == " X " && sqr7 == " X ") {
                        alert("You Win!")
                        reset()
                    } else if (sqr2 == " X " && sqr5 == " X " && sqr8 == " X ") {
                        alert("You Win!")
                        reset()
                    } else if (sqr3 == " X " && sqr6 == " X " && sqr9 == " X ") {
                        alert("You Win!")
                        reset()
                    } else if (sqr1 == " X " && sqr5 == " X " && sqr9 == " X ") {
                        alert("You Win!")
                        reset()
                    } else if (sqr3 == " X " && sqr5 == " X " && sqr7 == " X ") {
                        alert("You Win!")
                        reset()
                    } else {
                        winCheck()
                        check2()
                        drawCheck()
                    }
                }

                function check2() {
                    vari()
                    drawCheck()
                    if (sqr1 == " O " && sqr2 == " O " && sqr3 == " O ") {
                        alert("You Lose!")
                        reset()
                    } else if (sqr4 == " O " && sqr5 == " O " && sqr6 == " O ") {
                        alert("You Lose!")
                        reset()
                    } else if (sqr7 == " O " && sqr8 == " O " && sqr9 == " O ") {
                        alert("You Lose!")
                        reset()
                    } else if (sqr1 == " O " && sqr5 == " O " && sqr9 == " O ") {
                        alert("You Lose!")
                        reset()
                    } else if (sqr1 == " O " && sqr4 == " O " && sqr7 == " O ") {
                        alert("You Lose!")
                        reset()
                    } else if (sqr2 == " O " && sqr5 == " O " && sqr8 == " O ") {
                        alert("You Lose!")
                        reset()
                    } else if (sqr3 == " O " && sqr6 == " O " && sqr9 == " O ") {
                        alert("You Lose!")
                        reset()
                    } else if (sqr1 == " O " && sqr5 == " O " && sqr9 == " O ") {
                        alert("You Lose!")
                        reset()
                    } else if (sqr3 == " O " && sqr5 == " O " && sqr7 == " O ") {
                        alert("You Lose!")
                        reset()
                    }
                }

                function player1Check() {
                    if (sqr1 == " X " && sqr2 == " X " && sqr3 == " X ") {
                        alert("Player 1 wins!")
                        reset()
                    } else if (sqr4 == " X " && sqr5 == " X " && sqr6 == " X ") {
                        alert("Player 1 wins!")
                        reset()
                    } else if (sqr7 == " X " && sqr8 == " X " && sqr9 == " X ") {
                        alert("Player 1 wins!")
                        reset()
                    } else if (sqr1 == " X " && sqr5 == " X " && sqr9 == " X ") {
                        alert("Player 1 wins!")
                        reset()
                    } else if (sqr1 == " X " && sqr4 == " X " && sqr7 == " X ") {
                        alert("Player 1 wins!")
                        reset()
                    } else if (sqr2 == " X " && sqr5 == " X " && sqr8 == " X ") {
                        alert("Player 1 wins!")
                        reset()
                    } else if (sqr3 == " X " && sqr6 == " X " && sqr9 == " X ") {
                        alert("Player 1 wins!")
                        reset()
                    } else if (sqr1 == " X " && sqr5 == " X " && sqr9 == " X ") {
                        alert("Player 1 wins!")
                        reset()
                    } else if (sqr3 == " X " && sqr5 == " X " && sqr7 == " X ") {
                        alert("Player 1 wins!")
                        reset()
                    } else {
                        player2Check()
                        drawCheck()
                    }
                }

                function player2Check() {
                    vari()
                    drawCheck()
                    if (sqr1 == " O " && sqr2 == " O " && sqr3 == " O ") {
                        alert("Player 2 wins!")
                        reset()
                    } else if (sqr4 == " O " && sqr5 == " O " && sqr6 == " O ") {
                        alert("Player 2 wins!")
                        reset()
                    } else if (sqr7 == " O " && sqr8 == " O " && sqr9 == " O ") {
                        alert("Player 2 wins!")
                        reset()
                    } else if (sqr1 == " O " && sqr5 == " O " && sqr9 == " O ") {
                        alert("Player 2 wins!")
                        reset()
                    } else if (sqr1 == " O " && sqr4 == " O " && sqr7 == " O ") {
                        alert("Player 2 wins!")
                        reset()
                    } else if (sqr2 == " O " && sqr5 == " O " && sqr8 == " O ") {
                        alert("Player 2 wins!")
                        reset()
                    } else if (sqr3 == " O " && sqr6 == " O " && sqr9 == " O ") {
                        alert("Player 2 wins!")
                        reset()
                    } else if (sqr1 == " O " && sqr5 == " O " && sqr9 == " O ") {
                        alert("Player 2 wins!")
                        reset()
                    } else if (sqr3 == " O " && sqr5 == " O " && sqr7 == " O ") {
                        alert("Player 2 wins!")
                        reset()
                    }
                }

                function drawCheck() {
                    vari()
                    moveCount = sqr1T + sqr2T + sqr3T + sqr4T + sqr5T + sqr6T + sqr7T + sqr8T + sqr9T
                    if (moveCount == 9) {
                        reset()
                        alert("Draw")
                    }
                }

                function winCheck() {
                    check2()
                    if (sqr1 == " O " && sqr2 == " O " && sqr3T == 0 && turn == 1) {
                        document.tic.sqr3.value = " O "
                        sqr3T = 1;
                        turn = 0;
                    } else if (sqr2 == " O " && sqr3 == " O " && sqr1T == 0 && turn == 1) {
                        document.tic.sqr1.value = " O "
                        sqr1T = 1;
                        turn = 0;
                    } else if (sqr4 == " O " && sqr5 == " O " && sqr6T == 0 && turn == 1) {
                        document.tic.sqr6.value = " O "
                        sqr6T = 1;
                        turn = 0;
                    } else if (sqr5 == " O " && sqr6 == " O " && sqr4T == 0 && turn == 1) {
                        document.tic.sqr4.value = " O "
                        sqr4T = 1;
                        turn = 0;
                    } else if (sqr7 == " O " && sqr8 == " O " && sqr9T == 0 && turn == 1) {
                        document.tic.sqr9.value = " O "
                        sqr9T = 1;
                        turn = 0;
                    } else if (sqr8 == " O " && sqr9 == " O " && sqr7T == 0 && turn == 1) {
                        document.tic.sqr7.value = " O "
                        sqr7T = 1;
                        turn = 0;
                    } else if (sqr1 == " O " && sqr5 == " O " && sqr9T == 0 && turn == 1) {
                        document.tic.sqr9.value = " O "
                        sqr9T = 1;
                        turn = 0;
                    } else if (sqr5 == " O " && sqr9 == " O " && sqr1T == 0 && turn == 1) {
                        document.tic.sqr1.value = " O "
                        sqr1T = 1;
                        turn = 0;
                    } else if (sqr3 == " O " && sqr5 == " O " && sqr7T == 0 && turn == 1) {
                        document.tic.sqr7.value = " O "
                        sqr7T = 1;
                        turn = 0;
                    } else if (sqr7 == " O " && sqr5 == " O " && sqr3T == 0 && turn == 1) {
                        document.tic.sqr3.value = " O "
                        sqr3T = 1;
                        turn = 0;
                    } else if (sqr1 == " O " && sqr3 == " O " && sqr2T == 0 && turn == 1) {
                        document.tic.sqr2.value = " O "
                        sqr2T = 1;
                        turn = 0;
                    } else if (sqr4 == " O " && sqr6 == " O " && sqr5T == 0 && turn == 1) {
                        document.tic.sqr5.value = " O "
                        sqr5T = 1;
                        turn = 0;
                    } else if (sqr7 == " O " && sqr9 == " O " && sqr8T == 0 && turn == 1) {
                        document.tic.sqr8.value = " O "
                        sqr8T = 1;
                        turn = 0;
                    } else if (sqr1 == " O " && sqr7 == " O " && sqr4T == 0 && turn == 1) {
                        document.tic.sqr4.value = " O "
                        sqr4T = 1;
                        turn = 0;
                    } else if (sqr2 == " O " && sqr8 == " O " && sqr5T == 0 && turn == 1) {
                        document.tic.sqr5.value = " O "
                        sqr5T = 1;
                        turn = 0;
                    } else if (sqr3 == " O " && sqr9 == " O " && sqr6T == 0 && turn == 1) {
                        document.tic.sqr6.value = " O "
                        sqr6T = 1;
                        turn = 0;
                    } else if (sqr1 == " O " && sqr5 == " O " && sqr9T == 0 && turn == 1) {
                        document.tic.sqr9.value = " O "
                        sqr9T = 1;
                        turn = 0;
                    } else if (sqr4 == " O " && sqr7 == " O " && sqr1T == 0 && turn == 1) {
                        document.tic.sqr1.value = " O "
                        sqr1T = 1;
                        turn = 0;
                    } else if (sqr5 == " O " && sqr8 == " O " && sqr2T == 0 && turn == 1) {
                        document.tic.sqr2.value = " O "
                        sqr2T = 1;
                        turn = 0;
                    } else if (sqr6 == " O " && sqr9 == " O " && sqr3T == 0 && turn == 1) {
                        document.tic.sqr3.value = " O "
                        sqr3T = 1;
                        turn = 0;
                    } else if (sqr1 == " O " && sqr4 == " O " && sqr7T == 0 && turn == 1) {
                        document.tic.sqr7.value = " O "
                        sqr7T = 1;
                        turn = 0;
                    } else if (sqr2 == " O " && sqr5 == " O " && sqr8T == 0 && turn == 1) {
                        document.tic.sqr8.value = " O "
                        sqr8T = 1;
                        turn = 0;
                    } else if (sqr3 == " O " && sqr6 == " O " && sqr9T == 0 && turn == 1) {
                        document.tic.sqr9.value = " O "
                        sqr9T = 1;
                        turn = 0;
                    } else if (sqr1 == " O " && sqr9 == " O " && sqr5T == 0 && turn == 1) {
                        document.tic.sqr5.value = " O "
                        sqr5T = 1;
                        turn = 0;
                    } else if (sqr3 == " O " && sqr7 == " O " && sqr5T == 0 && turn == 1) {
                        document.tic.sqr5.value = " O "
                        sqr5T = 1;
                        turn = 0;
                    } else {
                        computer()
                    }
                    check2()
                }

                function computer() {
                    check2()
                    if (sqr1 == " X " && sqr2 == " X " && sqr3T == 0 && turn == 1) {
                        document.tic.sqr3.value = " O "
                        sqr3T = 1;
                        turn = 0;
                    } else if (sqr2 == " X " && sqr3 == " X " && sqr1T == 0 && turn == 1) {
                        document.tic.sqr1.value = " O "
                        sqr1T = 1;
                        turn = 0;
                    } else if (sqr4 == " X " && sqr5 == " X " && sqr6T == 0 && turn == 1) {
                        document.tic.sqr6.value = " O "
                        sqr6T = 1;
                        turn = 0;
                    } else if (sqr5 == " X " && sqr6 == " X " && sqr4T == 0 && turn == 1) {
                        document.tic.sqr4.value = " O "
                        sqr4T = 1;
                        turn = 0;
                    } else if (sqr7 == " X " && sqr8 == " X " && sqr9T == 0 && turn == 1) {
                        document.tic.sqr9.value = " O "
                        sqr9T = 1;
                        turn = 0;
                    } else if (sqr8 == " X " && sqr9 == " X " && sqr7T == 0 && turn == 1) {
                        document.tic.sqr7.value = " O "
                        sqr7T = 1;
                        turn = 0;
                    } else if (sqr1 == " X " && sqr5 == " X " && sqr9T == 0 && turn == 1) {
                        document.tic.sqr9.value = " O "
                        sqr9T = 1;
                        turn = 0;
                    } else if (sqr5 == " X " && sqr9 == " X " && sqr1T == 0 && turn == 1) {
                        document.tic.sqr1.value = " O "
                        sqr1T = 1;
                        turn = 0;
                    } else if (sqr3 == " X " && sqr5 == " X " && sqr7T == 0 && turn == 1) {
                        document.tic.sqr7.value = " O "
                        sqr7T = 1;
                        turn = 0;
                    } else if (sqr7 == " X " && sqr5 == " X " && sqr3T == 0 && turn == 1) {
                        document.tic.sqr3.value = " O "
                        sqr3T = 1;
                        turn = 0;
                    } else if (sqr1 == " X " && sqr3 == " X " && sqr2T == 0 && turn == 1) {
                        document.tic.sqr2.value = " O "
                        sqr2T = 1;
                        turn = 0;
                    } else if (sqr4 == " X " && sqr6 == " X " && sqr5T == 0 && turn == 1) {
                        document.tic.sqr5.value = " O "
                        sqr5T = 1;
                        turn = 0;
                    } else if (sqr7 == " X " && sqr9 == " X " && sqr8T == 0 && turn == 1) {
                        document.tic.sqr8.value = " O "
                        sqr8T = 1;
                        turn = 0;
                    } else if (sqr1 == " X " && sqr7 == " X " && sqr4T == 0 && turn == 1) {
                        document.tic.sqr4.value = " O "
                        sqr4T = 1;
                        turn = 0;
                    } else if (sqr2 == " X " && sqr8 == " X " && sqr5T == 0 && turn == 1) {
                        document.tic.sqr5.value = " O "
                        sqr5T = 1;
                        turn = 0;
                    } else if (sqr3 == " X " && sqr9 == " X " && sqr6T == 0 && turn == 1) {
                        document.tic.sqr6.value = " O "
                        sqr6T = 1;
                        turn = 0;
                    } else if (sqr1 == " X " && sqr5 == " X " && sqr9T == 0 && turn == 1) {
                        document.tic.sqr9.value = " O "
                        sqr9T = 1;
                        turn = 0;
                    } else if (sqr4 == " X " && sqr7 == " X " && sqr1T == 0 && turn == 1) {
                        document.tic.sqr1.value = " O "
                        sqr1T = 1;
                        turn = 0;
                    } else if (sqr5 == " X " && sqr8 == " X " && sqr2T == 0 && turn == 1) {
                        document.tic.sqr2.value = " O "
                        sqr2T = 1;
                        turn = 0;
                    } else if (sqr6 == " X " && sqr9 == " X " && sqr3T == 0 && turn == 1) {
                        document.tic.sqr3.value = " O "
                        sqr3T = 1;
                        turn = 0;
                    } else if (sqr1 == " X " && sqr4 == " X " && sqr7T == 0 && turn == 1) {
                        document.tic.sqr7.value = " O "
                        sqr7T = 1;
                        turn = 0;
                    } else if (sqr2 == " X " && sqr5 == " X " && sqr8T == 0 && turn == 1) {
                        document.tic.sqr8.value = " O "
                        sqr8T = 1;
                        turn = 0;
                    } else if (sqr3 == " X " && sqr6 == " X " && sqr9T == 0 && turn == 1) {
                        document.tic.sqr9.value = " O "
                        sqr9T = 1;
                        turn = 0;
                    } else if (sqr1 == " X " && sqr9 == " X " && sqr5T == 0 && turn == 1) {
                        document.tic.sqr5.value = " O "
                        sqr5T = 1;
                        turn = 0;
                    } else if (sqr3 == " X " && sqr7 == " X " && sqr5T == 0 && turn == 1) {
                        document.tic.sqr5.value = " O "
                        sqr5T = 1;
                        turn = 0;
                    } else {
                        AI()
                    }
                    check2()
                }

                function AI() {
                    vari()
                    if (document.tic.sqr5.value == "     " && turn == 1) {
                        document.tic.sqr5.value = " O "
                        turn = 0
                        sqr5T = 1
                    } else if (document.tic.sqr1.value == "     " && turn == 1) {
                        document.tic.sqr1.value = " O "
                        turn = 0
                        sqr1T = 1
                    } else if (document.tic.sqr9.value == "     " && turn == 1) {
                        document.tic.sqr9.value = " O "
                        turn = 0
                        sqr9T = 1
                    } else if (document.tic.sqr6.value == "     " && turn == 1) {
                        document.tic.sqr6.value = " O "
                        turn = 0
                        sqr6T = 1
                    } else if (document.tic.sqr2.value == "     " && turn == 1) {
                        document.tic.sqr2.value = " O "
                        turn = 0
                        sqr2T = 1
                    } else if (document.tic.sqr8.value == "     " && turn == 1) {
                        document.tic.sqr8.value = " O "
                        turn = 0
                        sqr8T = 1
                    } else if (document.tic.sqr3.value == "     " && turn == 1) {
                        document.tic.sqr3.value = " O "
                        turn = 0
                        sqr3T = 1
                    } else if (document.tic.sqr7.value == "     " && turn == 1) {
                        document.tic.sqr7.value = " O "
                        turn = 0
                        sqr7T = 1
                    } else if (document.tic.sqr4.value == "     " && turn == 1) {
                        document.tic.sqr4.value = " O "
                        turn = 0
                        sqr4T = 1
                    }
                    check2()
                }

                function reset() {
                    document.tic.sqr1.value = "     "
                    document.tic.sqr2.value = "     "
                    document.tic.sqr3.value = "     "
                    document.tic.sqr4.value = "     "
                    document.tic.sqr5.value = "     "
                    document.tic.sqr6.value = "     "
                    document.tic.sqr7.value = "     "
                    document.tic.sqr8.value = "     "
                    document.tic.sqr9.value = "     "
                    sqr1T = 0
                    sqr2T = 0
                    sqr3T = 0
                    sqr4T = 0
                    sqr5T = 0
                    sqr6T = 0
                    sqr7T = 0
                    sqr8T = 0
                    sqr9T = 0
                    vari()
                    turn = 0
                    moveCount = 0
                }

                function resetter() {
                    reset()
                }

            </SCRIPT>

            <FORM NAME="tic" method="post">
                <INPUT TYPE="button" NAME="sqr1" class="tictac" value="     " onClick="if(document.tic.sqr1.value == '     ' && turn == 0 && mode == 1) {document.tic.sqr1.value = ' X '; sqr1T = 1; turn = 1; vari(); check();} else if(document.tic.sqr1.value == '     ' && turn == 1 && mode == 2) {document.tic.sqr1.value = ' X '; sqr1T = 1; turn = 0; vari(); player1Check()} else if(document.tic.sqr1.value == '     ' && turn == 0 && mode == 2) {document.tic.sqr1.value = ' O '; sqr1T = 1; turn = 1; vari(); player1Check()} drawCheck()">
                <INPUT TYPE="button" NAME="sqr2" class="tictac" value="     " onClick="if(document.tic.sqr2.value == '     ' && turn == 0 && mode == 1) {document.tic.sqr2.value = ' X '; sqr2T = 1; turn = 1; vari(); check();} else if(document.tic.sqr2.value == '     ' && turn == 1 && mode == 2) {document.tic.sqr2.value = ' X '; sqr2T = 1; turn = 0; vari(); player1Check()} else if(document.tic.sqr2.value == '     ' && turn == 0 && mode == 2) {document.tic.sqr2.value = ' O '; sqr2T = 1; turn = 1; vari(); player1Check()} drawCheck()">
                <INPUT TYPE="button" NAME="sqr3" class="tictac" value="     " onClick="if(document.tic.sqr3.value == '     ' && turn == 0 && mode == 1) {document.tic.sqr3.value = ' X '; sqr3T = 1; turn = 1; vari(); check();} else if(document.tic.sqr3.value == '     ' && turn == 1 && mode == 2) {document.tic.sqr3.value = ' X '; sqr3T = 1; turn = 0; vari(); player1Check()} else if(document.tic.sqr3.value == '     ' && turn == 0 && mode == 2) {document.tic.sqr3.value = ' O '; sqr3T = 1; turn = 1; vari(); player1Check()} drawCheck()"><br />
                <INPUT TYPE="button" NAME="sqr4" class="tictac" value="     " onClick="if(document.tic.sqr4.value == '     ' && turn == 0 && mode == 1) {document.tic.sqr4.value = ' X '; sqr4T = 1; turn = 1; vari(); check();} else if(document.tic.sqr4.value == '     ' && turn == 1 && mode == 2) {document.tic.sqr4.value = ' X '; sqr4T = 1; turn = 0; vari(); player1Check()} else if(document.tic.sqr4.value == '     ' && turn == 0 && mode == 2) {document.tic.sqr4.value = ' O '; sqr4T = 1; turn = 1; vari(); player1Check()} drawCheck()">
                <INPUT TYPE="button" NAME="sqr5" class="tictac" value="     " onClick="if(document.tic.sqr5.value == '     ' && turn == 0 && mode == 1) {document.tic.sqr5.value = ' X '; sqr5T = 1; turn = 1; vari(); check();} else if(document.tic.sqr5.value == '     ' && turn == 1 && mode == 2) {document.tic.sqr5.value = ' X '; sqr5T = 1; turn = 0; vari(); player1Check()} else if(document.tic.sqr5.value == '     ' && turn == 0 && mode == 2) {document.tic.sqr5.value = ' O '; sqr5T = 1; turn = 1; vari(); player1Check()} drawCheck()">
                <INPUT TYPE="button" NAME="sqr6" class="tictac" value="     " onClick="if(document.tic.sqr6.value == '     ' && turn == 0 && mode == 1) {document.tic.sqr6.value = ' X '; sqr6T = 1; turn = 1; vari(); check();} else if(document.tic.sqr6.value == '     ' && turn == 1 && mode == 2) {document.tic.sqr6.value = ' X '; sqr6T = 1; turn = 0; vari(); player1Check()} else if(document.tic.sqr6.value == '     ' && turn == 0 && mode == 2) {document.tic.sqr6.value = ' O '; sqr6T = 1; turn = 1; vari(); player1Check()} drawCheck()"><br />
                <INPUT TYPE="button" NAME="sqr7" class="tictac" value="     " onClick="if(document.tic.sqr7.value == '     ' && turn == 0 && mode == 1) {document.tic.sqr7.value = ' X '; sqr7T = 1; turn = 1; vari(); check();} else if(document.tic.sqr7.value == '     ' && turn == 1 && mode == 2) {document.tic.sqr7.value = ' X '; sqr7T = 1; turn = 0; vari(); player1Check()} else if(document.tic.sqr7.value == '     ' && turn == 0 && mode == 2) {document.tic.sqr7.value = ' O '; sqr7T = 1; turn = 1; vari(); player1Check()} drawCheck()">
                <INPUT TYPE="button" NAME="sqr8" class="tictac" value="     " onClick="if(document.tic.sqr8.value == '     ' && turn == 0 && mode == 1) {document.tic.sqr8.value = ' X '; sqr8T = 1; turn = 1; vari(); check();} else if(document.tic.sqr8.value == '     ' && turn == 1 && mode == 2) {document.tic.sqr8.value = ' X '; sqr8T = 1; turn = 0; vari(); player1Check()} else if(document.tic.sqr8.value == '     ' && turn == 0 && mode == 2) {document.tic.sqr8.value = ' O '; sqr8T = 1; turn = 1; vari(); player1Check()} drawCheck()">
                <INPUT TYPE="button" NAME="sqr9" class="tictac" value="     " onClick="if(document.tic.sqr9.value == '     ' && turn == 0 && mode == 1) {document.tic.sqr9.value = ' X '; sqr9T = 1; turn = 1; vari(); check();} else if(document.tic.sqr9.value == '     ' && turn == 1 && mode == 2) {document.tic.sqr9.value = ' X '; sqr9T = 1; turn = 0; vari(); player1Check()} else if(document.tic.sqr9.value == '     ' && turn == 0 && mode == 2) {document.tic.sqr9.value = ' O '; sqr9T = 1; turn = 1; vari(); player1Check()} drawCheck()">
        </div>
        <script>
            var lol = $('body');
            setInterval(function() {
                lol.toggleClass('changeback');
            }, 250);

        </script>
        <script>


        </script>
        <div class="wideMargin" id="footer">
            <p>

                Webpage made by <a href="index.html" target="_blank">[Emmet Hoversten]</a>
            </p>
        </div>
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