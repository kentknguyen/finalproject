<?php session_start();?>
<!doctype html>
<html>

<head>
    <title>Ken's Rankings</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" type="image/ico" href="assets/img/icon.jpg" />
    <link rel="stylesheet" href="assets/css/stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-store" />
</head>
<body>
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
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th class="w-5" scope="col">Rank</th>
                        <th class="w-10" scope="col">Team</th>
                        <th class="w-35" scope="col">Players</th>
                        <th class="w-50" scope="col">Comment</th>
                    </tr>
                </thead>
                <tbody id="allTeams">
                </tbody>
            </table>
        </header>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/ajax.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<!--Images used By <a href="//commons.wikimedia.org/wiki/User:Madden" title="User:Madden">Madden</a> - <span class="int-own-work" lang="en">Own work</span>, Public Domain, <a href="https://commons.wikimedia.org/w/index.php?curid=343035">Link</a> from By Astralis - http://astralis.gg, Public Domain, https://en.wikipedia.org/w/index.php?curid=50707172; https://pngimg.com/download/58690; https://creativecommons.org/licenses/by-nc/4.0/
https://www.ence.gg/media/
https://commons.wikimedia.org/wiki/File:Flag_of_Finland.svg
https://liquipedia.net/counterstrike/File:Team_liquid_logo_2017.png
https://liquipedia.net/commons/Help:Reusing_and_remixing_Liquipedia_content
https://en.wikipedia.org/wiki/Flag_of_the_United_States#/media/File:Flag_of_the_United_States.svg
https://en.wikipedia.org/wiki/Flag_of_Canada#/media/File:Flag_of_Canada_(Pantone).svg
https://www.flickr.com/photos/steelseries/26576113601
https://en.wikipedia.org/wiki/Natus_Vincere#/media/File:NaVi_LOGO.jpg
https://en.wikipedia.org/wiki/Flag_of_Ukraine#/media/File:Flag_of_Ukraine.svg
https://en.wikipedia.org/wiki/Flag_of_Russia#/media/File:Flag_of_Russia.svg
https://en.wikipedia.org/wiki/Fnatic#/media/File:Fnatic_logo.png
https://en.wikipedia.org/wiki/Flag_of_Sweden#/media/File:Flag_of_Sweden.svg
https://en.wikipedia.org/wiki/File:Flag_of_Brazil.svg
https://commons.wikimedia.org/wiki/File:Made_In_Brazil_logo.png
https://commons.wikimedia.org/wiki/File:K_in_a_circle.png#filelinks
-->
