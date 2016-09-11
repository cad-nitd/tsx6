<?php


if( isset($_POST['submit']) && $_POST['submit']=="PLAY" ){

    global $NETHUNT;
    global $USER;
    
    if(! $USER->logged_in() ) {
        redirect('/login');
    }
    
    $NETHUNT->register();
    redirect("/nethunt/".$NETHUNT->get_level());
}


?>

<!DOCTYPE html>
    <html>

    <head>
        <title>NetHunt</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="../css/font-awesome-4.3.0/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link rel="stylesheet" type="text/css" href="../css/nethunt.css">
    </head>

    <body>
        <div id="container">
            <div id="header">
                <h1>NETHUNT</h1>
                <p><a href="https://www.facebook.com/groups/264277007009318/" target="_blank"><i class="fa fa-question-circle"></i></a> - Keep Calm and Google - <a title="Leaderboard" target="_blank" href="leaderboard.php"><i class="fa fa-trophy"></i></a></p>
            </div>
            <div id="content">
                <div class="instructions">
                    <h2>Instructions:</h2>
                    <ul>
                        <li>- All characters should be in small letters</li>
                        <li>- Numbers should be entered in alphabetical form</li>
                        <li>- There should be no space between words</li>
                        <li>- There is no time limit</li>
                    </ul>
                </div>
            </div>
            <div id="material-overlay"></div>
            <div id="footer">
                <div class="play-button">
                    <i class="fa fa-play"></i>
                </div>
            </div>
            <form id="submit_form" name="submit_form" method="post" action="<?=$GLOBALS['site.root']?>/nethunt">
                
                <input type="submit" name="submit" id="submit" class="btn2 btn2-dark overlay-btn overlay-wrapper " value="PLAY" />
            </form>
        </div>
        
        <script src="../js/nethunt/nethunt.js"></script>
    </body>

    </html>