<?php session_start();?>
<!doctype html>
<html>

<head>
    <title>Edit Table</title>
    <link rel="icon" type="image/ico" href="assets/img/icon.jpg" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/stylesheet.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-store" />
    <style>
        body {
            background-image: none;
        }
    </style>
</head>
<body class="container">
    <div>
        <header>
            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href=index.php>Ken's<img id="navImg" src="assets/img/cslogo.png">Rankings</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="https://store.steampowered.com/app/730/CounterStrike_Global_Offensive/"target="_blank"><i class="fa fa-steam" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="https://www.twitch.tv/directory/game/Counter-Strike%3A%20Global%20Offensive"target="_blank"><i class="fa fa-twitch" style="font-size:36pxx"></i></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="edit.php">Edit <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <h2>Edit Table</h2>
            <p><span class="error">* required field.</span></p>
            <form method="post" action="ajaxprocess.php" enctype='multipart/form-data'>
                <label>Rank
                    <input type="text" name="rank" required><span class="error">*</span><br>
                </label>
                <br>
                <label>Team
                    <input type="text" name="team" required><span class="error">*</span><br>
                </label>
                <br>
                <label>Team Logo
                    <input type="file" name="teamLogo"><br>
                </label>
                <br>
                <label>Player 1
                    <input type="text" name="playerOne" required><span class="error">*</span><br>
                </label>
                <br>
                <label>Player 1 Flag
                    <input type="file" name="playerOneFlag"><br>
                </label>
                <br>
                <label>Player 2
                    <input type="text" name="playerTwo" required><span class="error">*</span><br>
                </label>
                <br>
                <label>Player 2 Flag
                    <input type="file" name="playerTwoFlag"><br>
                </label>
                <br>
                <label>Player 3
                    <input type="text" name="playerThree" required><span class="error">*</span><br>
                </label>
                <br>
                <label>Player 3 Flag
                    <input type="file" name="playerThreeFlag"><br>
                </label>
                <br>
                <label>Player 4
                    <input type="text" name="playerFour" required><span class="error">*</span><br>
                </label>
                <br>
                <label>Player 4 Flag
                    <input type="file" name="playerFourFlag"><br>
                </label>
                <br>
                <label>Player 5
                    <input type="text" name="playerFive" required><span class="error">*</span><br>
                </label>
                <br>
                <label>Player 4 Flag
                    <input type="file" name="playerFiveFlag"><br>
                </label>
                <br>
                <label>Comment
                    <textarea class="inputComment" name="comment" required></textarea><span class="error">*</span><br>
                </label>
                <br>
                <input type="submit" name="submit" value="Submit">
            </form>
            <script src="js/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </header>
    </div>
</body>
</html>
