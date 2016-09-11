<?php

global $NETHUNT;
global $USER;

if(! $USER->logged_in() ) {
    redirect('/login');
}

if( $NETHUNT->get_level()!=$level ) {
    redirect("/nethunt/".$NETHUNT->get_level());
}

if($level > $NETHUNT->maxlevel) {
    //show completed page
    // redirect to finish page
    die("bhai tera ho gaya");
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
                <form action="<?=$GLOBALS['site.root']?>/nethunt/<?=$level?>">
                    <div class="question">
                        <?php
                        global $NETHUNT;
                        $question = $NETHUNT->get_question($level);
                        
                        if($question['type']=="text")
                            echo $question['value'];
                        else {
                            echo "<img class='nethunt-img' src='".$question['value']."'></img>";
                        }
                    ?>
                    </div>
                    <input type="text" name="answer" value=""/>
                    <input type="submit" name="submit" id="submit" class="btn2 btn2-dark overlay-btn overlay-wrapper " value="ANSWER" />
                </form>
            </div>
        </div>

        <script src="../js/nethunt/nethunt.js"></script>
    </body>

    </html>