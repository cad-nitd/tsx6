<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Online Events | Technoshine X.6</title>
    <meta name="description" content="Online event of technoshinex6" />
    <meta name="keywords" content="onlineevent, technoshinex6 " />
    <meta name="Resource-type" content="Document" />
    <!--    bootstrap links-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!--end link bootstrap link -->
    <link rel="stylesheet" type="text/css" href="css/online.css" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Bangers' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/jquery.multiscroll.css" />
    <link rel="stylesheet" type="text/css" href="css/examples.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.easings.min.js"></script>
    <script type="text/javascript" src="js/jquery.multiscroll.js"></script>

    <script type="text/javascript">
        var colors = ['rgba(239, 207, 168, 0.76)', 'rgb(207, 168, 109', 'rgba(174, 60, 60, 0.7)', 'rgba(75, 185, 212, 0.74)', 'rgba(113, 166, 84, 0.63)', 'rgba(199, 139, 17, 0.77)'];
        $(document).ready(function () {
            $('#myContainer').multiscroll({
                //sectionsColor: ['transparent', 'transparent', 'white','white','white','white'],
               // anchors: ['first', 'second', 'third', 'fourth', 'fifth', 'sixth'],
                menu: '#menu',
                easing: 'easeInOutCubic',
                onLeave: function (index, nextIndex, direction) {
                    //console.log(index+" "+nextIndex+" "+direction);;
                    document.body.style.backgroundColor = colors[nextIndex - 1];
                }
            });
        });
    </script>

    <style>
        .ms-section {
            text-align: center;
        }
        
        #menu li {
            display: inline-block;
            margin: 10px;
            color: #000;
            background: #fff;
            background: rgba(255, 255, 255, 0.3);
            -webkit-border-radius: 10px;
            border-radius: 10px;
        }
        
        #menu li.active {
            background: #666;
            background: rgba(255, 255, 255, 1);
            color: #000;
        }
        
        #menu li a {
            text-decoration: none;
            color: #000;
        }
        
        #menu li.active a:hover {
            color: #000;
        }
        
        #menu li:hover {
            background: rgba(255, 255, 255, 0.8);
        }
        
        #menu li a,
        #menu li.active a {
            padding: 9px 18px;
            display: block;
        }
        
        #menu li.active a {
            color: #000;
        }
        
        #menu {
            position: fixed;
            top: 0;
            left: 0;
            height: 40px;
            z-index: 70;
            width: 100%;
            padding: 0;
            margin: 0;
        }
    </style>

</head>

<body>
      
    <div id="myContainer">
         <div class="backbtn" >
<!--
  <a href="index.html" > 
      <img  alt="back" src="images/home.png">  
     
   </a>
-->
           <a href="<?=$GLOBALS['site.root']?>/#1">  <i class="fa fa-arrow-left"></i></a> 
 </div>
        <div class="ms-left">
            <div class="ms-section" id="left1">
            </div>
            <div class="ms-section" id="left2">

                <div class="row">
                    <div class="col-lg-12 col-md-12 ">
                        <h1 class="event-name">CODE WARE</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                             <div class="event-pera">
                               
A coding competition not only for the geeks but also for the novice. Code,successfully compile and pass all the test-cases to retain your position at the top of the leader-board. So polish up your coding skills to win cash prizes. 
                               
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="ms-section" id="left3">
            </div>
            <div class="ms-section" id="left4">

                <div class="row">
                    <div class="col-lg-12 col-md-12 ">
                        <h1 class="event-name">JUST CLICK</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                              <div class="event-pera">

Can your facebook friends help you win a contest? Show us your popularity by attaining the maximum numbers of likes on your picture, or by depicting the best thought on the theme provided. Click!! Click!!  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--
            <div class="ms-section" id="left5">

            </div>
-->
<!--
            <div class="ms-section" id="left6">

                <div class="row">
                    <div class="col-lg-12 col-md-12 ">
                        <h1 class="event-name">PERFORMER OF THE YEAR</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <h2 class="event-pera">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h2>
                        </div>
                    </div>
                </div>
            </div>
-->
        </div>
        <div class="ms-right">
            <div class="ms-section" id="right1">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h1 class="event-name">NET HUNT</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                              <div class="event-pera">
Is your Google-fu strong enough to win you a prize? Surf the internet and bring us the correct answer for the given question. Only a correct answer will help you clear the levels. Aim? To reach the highest level possible!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ms-section" id="right2">
            </div>
            <div class="ms-section" id="right3">
                <div class="row">
                    <div class="col-lg-12 col-md-12 ">
                        <h1 class="event-name">INSPIRE INDIA</h1>

                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                             
                                <div class="event-pera">
                                   
It’s time for you to inspire the folks by writing your hearts out. Show us your creativity, write something out of the box on any of the topics provided, and lead among the pack of participants. Imagine, Implement and Inspire!!
                                    
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ms-section" id="right4">
            </div>
<!--
            <div class="ms-section" id="right5">
                <div class="row">
                    <div class="col-lg-12 col-md-12 ">
                        <h1 class="event-name">JUST CLICK</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                                                          <div class="event-pera" style="font-size:10pt;">
                                   
                                        <ol>
                                            <li>Register on www.cadnitd.co.in</li>
                                            <li>You need to send the photo to <a target="_top" href="mailto:justclickts@gmail.com" style="color:crimson">justclickts@gmail.com</a> from your registered email id between 28th SEPT 2015 and 1st OCT 2015</li>
                                            <li>The Submission of more than one picture will lead to disqualification</li>
                                            <li>The Submission must be a digital photo clicked by yourself</li>
                                            <li>The Submission must be entrant's original creation and owned fully by the entrant</li>
                                            <li>The Submission must demonstrate one of the following contest themes: <span style="color:green">Open, Landscape</span></li>
                                            <li>The Submission will be uploaded on our facebook page, you have to get as much likes as possible on your picture before 2nd OCT 2015</li>

                                            <li>One has to like <a style="color:red" href="https://www.facebook.com/technoshinex.5">Technoshine X.5 page</a> for their like to be considered</li>
                                            <li>Winners will be decided with 50% weightage from number of Likes on your photo on our FB page and 50% weightage will be on our judges decision</li>
                                        </ol>
                                                              
                                      
                             
                                </div>
                        </div>
                    </div>
                </div>

            </div>
-->
<!--
            <div class="ms-section" id="right6">
            </div>
-->
        </div>
    </div>

</body>

</html>