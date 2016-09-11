<?php

global $NETHUNT;
global $USER;

if(! $USER->logged_in() ) {
    redirect('/login');
}

if( $NETHUNT->get_level()!=$level ) {
    $NETHUNT->goto_level();
}

if($level > $NETHUNT->maxlevel) {
    die("bhai tera ho gaya");
}

$error="";
if(isset($_POST['submit']) && $_POST['submit']=="ANSWER"){
    global $error;
    
    $answer=$_POST["answer"];
    $answer=trim($answer);
    if($answer=="") {
        $error="Please enter Answer";
    }
    else if($NETHUNT->check_ans($level,$answer)){
        $NETHUNT->levelup();
        $NETHUNT->goto_level();
    }
    else {
        $error="WRONG ANSWER";
    }
}

//dump($level);
//die();

?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>
            <?=$title?>
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/font-awesome-4.3.0/css/font-awesome.min.css" /> </head>

    <body>
        <div id="container">
            <div id="header">
                <h1>NETHUNT</h1>
                <p><a href="https://www.facebook.com/groups/264277007009318/" target="_blank"><i class="fa fa-question-circle"></i></a> - Keep Calm and Google - <a title="Leaderboard" target="_blank" href="leaderboard.php"><i class="fa fa-trophy"></i></a></p>
            </div>
            <div id="content">
                <form method="post" name="nethuntform" action="<?=$GLOBALS['site.root']?>/nethunt/<?=$level?>" onsubmit="return validate()">
                    <div class="question">
                        <?php
                        global $NETHUNT;
                        
                        $question = $NETHUNT->get_question($level);
                       
        
                        
                        if($question['type']=="text")
                            echo $question['question'];
                        else {
                            echo "<img class='nethunt-img' src='".$question['question']."'></img>";
                        }
                    ?> </div>
                    <input type="text" name="answer" value="" autofocus />
                    <input type="submit" name="submit" id="submit" class="btn2 btn2-dark overlay-btn overlay-wrapper" value="ANSWER"  /> </form>
                <div id="error">
                    <?php
                    global $error;
                    echo $error;
                    ?>
                </div>
            </div>
        </div>
        <script>
            //document.nethuntform.answer.focus();
            function validate() {
                var result = document.nethuntform.answer.value;
                result = result.trim();
                document.nethuntform.answer.value = result;
                var error = document.getElementById("error");
                if (result == "") {
                    error.innerHTML = "Please enter Answer";
                    return false;
                }
                error.innerHTML = "";
                return true;
            }
        </script>
    </body>

    </html>