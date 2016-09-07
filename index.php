<?php
ob_start();
require "config.php";
require "vendor/autoload.php";

$app = new Silex\Application();

$app->get('/', function () use($TEMPLATE) {
    $params = ["title" => "Technoshine X.6 | Techfest of NIT Durgapur"];
    return $TEMPLATE->render('index',$params);
});



$app->post('/user', function() use ($USER) {
    $email=$_POST['email'];
    
    $response=[];
    $response["email"] = $email;
    $response['exist'] = $USER->exists($email);
    
    return json_encode($response);
});

$app->match('/login', function () use($TEMPLATE,$DB) { 
    $message="";
    if( isset($_GET["message"]) ) {
        $message=$_GET["message"];
        seturl("/login");
    }
    return $TEMPLATE->render('login',
                             ["title" => "Login | Technoshine X.6",
                              "message"=>$message] );
});

$app->get('/email-sent', function () use($TEMPLATE,$DB) {    
    redirect("/login",["message"=>"Verification Mail has been sent to your email"]);
});

$app->match('/logout', function () use($USER) {
    $USER->logout();
    redirect('/');
    //return "";
});

$app->match('/register', function () use($TEMPLATE,$DB){
    return $TEMPLATE->render('register',["title"=> "Register | Technoshine x.6"]);

});

$app->get('/online-event', function () use($TEMPLATE) {
    $titleholder = ["title" => "Online Events | Technoshine X.6"];
    return $TEMPLATE->render('onlineevent',$titleholder);
});

$app->get('/offline-event', function () use($TEMPLATE) {
    return $TEMPLATE->render('offlineevent');
});


$app->get('/activate', function () use ($USER,$TEMPLATE) {
    if( isset($_GET['email']) && isset($_GET['hash']) ) {
        
        $email=$_GET['email'];
        $hash=$_GET['hash'];
        
        //dump($_GET);
        //die();
        
        if($USER->activate($email,$hash)) {
	        redirect('/login',["message" => "Your account is activated. Please Login"]);
           /* return $TEMPLATE->render('login',
                             ["title" => "Login | Technoshine X.6",
                             "message" => "Your account is activated. Please Login"]);*/
        }
        else {
            redirect('/');
        }
    }
    else
        redirect('/');
});

$app->match('/nethunt', function() use ($TEMPLATE,$DB,$USER) {    
    return $TEMPLATE->render('nethunt',["title"=> "Welcome | Net Hunt"]);
});
$app->match('/nethunt/{level}', function($level) use ($TEMPLATE,$USER,$DB) {
        
    return $TEMPLATE->render('nethunt_level',
                                ["title"=>"Level $level | Net Hunt",
                                "level"=>$level]);
});
$app->match('/forgotpassword', function () use($TEMPLATE,$DB,$USER) {
    if(isset($_GET["email"]) && isset($_GET["hash"])) {
        $email=trim($_GET["email"]);
        $hash=trim($_GET["hash"]);
        seturl("/forgotpassword");
        return $TEMPLATE->render('forgotpassword',["title"=>"Forgotpassword | Technoshine x.6",
                                                   "email" => $email, "hash" => $hash,
                                                  "reset"=>true]);
    }
    else {
        return $TEMPLATE->render('forgotpassword',["title"=> "Forgotpassword | Technoshine x.6",
                                               "message" => "",
                                                  "reset"=>false]);
    }

});


$app->run();
