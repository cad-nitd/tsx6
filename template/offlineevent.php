
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Offline Events | Technoshine X.6</title>
    <meta name="description" content="Online event of technoshinex6" />
    <meta name="keywords" content="onlineevent, technoshinex6 " />
    <meta name="Resource-type" content="Document" />
    <!--    bootstrap links-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!--end link bootstrap link -->
    <link rel="stylesheet" type="text/css" href="css/offline.css" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Bangers' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/jquery.multiscroll.css" />
    <link rel="stylesheet" type="text/css" href="css/examples.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.easings.min.js"></script>
    <script type="text/javascript" src="js/jquery.multiscroll.js"></script>

    <script type="text/javascript">
        var colors = ['rgba(239, 207, 168, 0.76)', 'rgba(41, 175, 209, 0.71)', 'rgba(40, 36, 36, 0.38)', 'rgba(248, 147, 29, 0.64)', 'rgba(82, 120, 122, 0.63)', 'rgba(199, 139, 17, 0.77)',  'rgba(220, 213, 152, 0.83)', 'rgba(199, 139, 17, 0.77)',  'rgba(253, 201, 144, 0.89)','rgba(253, 201, 144, 0.89)'];
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
           <a href="/#2">  <i class="fa fa-arrow-left"></i></a> 
 </div>
        <div class="ms-left">
            <div class="ms-section" id="left1">
            </div>
            <div class="ms-section" id="left2">

                <div class="row">
                    <div class="col-lg-12 col-md-12 ">
                        <h1 class="event-name">GADGET GURU</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                             <div class="event-pera">
                               
                                   
 Are you a Gadget freak? Always google in searching latest technology
advancements? If yes, then participate in this geeky event to analyse your knowledge about
technology gadgets with our trivia challenge. So come, put your skills to the test in this ultimate
gadget quiz and win exciting cash prizes.

                                
                               
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
                        <h1 class="event-name">SOCKET COMBAT</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                              <div class="event-pera">

Good in understanding and implementing the concepts of data and packet transfer through computer networks? Then answer some interesting questions on the concepts of computer networking and implement some socket programs to build your way to success!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ms-section" id="left5">

            </div>
            <div class="ms-section" id="left6">

                <div class="row">
                    <div class="col-lg-12 col-md-12 ">
                        <h1 class="event-name">PERFORMER OF THE YEAR</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="event-pera">
Are you the born-dancer, the oh-so-perfect singer or the actor deserving a standing ovation? Then this is the perfect platform for you to showcase your talents. Come, participate and win the most memorable title of the lot: The Performer of the Year.
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ms-section landscape" id="left7">
            </div>
<div class="ms-section" id="left8">
         <div class="row">
                    <div class="col-lg-12 col-md-12 ">
                        <h1 class="event-name">TREASURE HUNT</h1>

                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                             <div class="event-pera">
Bring out the Bond in you. Solve the riddles at each stage as fast as you can, or opt for some alternative tasks. Knowledge of the campus, and shortcuts routes from one location to another can help you reach the destinations faster. Be the team covering the maximum number of destination points within the stipulated time period to be the winners!
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<div class="ms-section" id="left9">
            </div><!--
<div class="ms-section" id="left10">
            </div>
-->
        </div>
        <div class="ms-right">
            <div class="ms-section" id="right1">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h1 class="event-name">BRAIN MARATHON </h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                             <div class="event-pera">
 How well is your General knowledge? Are you aware of latest competitions
and changes happening across the globe? Now the platform has come to your way to assess your
awareness from all categories. This factful event provides you a great opportunity to unveil your
talent, ability and skills by fighting in war of minds . Now stir yourself, spike your knowledge and
run your brains to conquest this marathon of mind. 

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
                        <h1 class="event-name">FACE PAINTING</h1>

                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                              <div class="event-pera">
 Do you want to express your feelings by painting the face of one of your
lovable friend? If yes, then this is the exact platform for you to express how you think about certain
things and also your general ideas about life and everything which is encountered. So participate,
emblazon your talent and win this sparkling title of tattoo maker.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ms-section landscape" id="right4">
            </div>
            <div class="ms-section" id="right5">
                <div class="row">
                    <div class="col-lg-12 col-md-12 ">
                        <h1 class="event-name">TOTAL CHAOS </h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                                                          <div class="event-pera" >
                                   
Present us with your talent of multitasking and your knowledge of the computer system! Clear out the chaos in your minds, and start brainstorming with your team mates to solve the different aptitude, reasoning and system-based problems to be the ultimate winners.
                                      
                             
                                </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="ms-section" id="right6">
            </div>
            
            <div class="ms-section" id="right7">
                     <div class="row">
                    <div class="col-lg-12 col-md-12 ">
                        <h1 class="event-name">COUNTER STRIKE</h1>

                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                             <div class="event-pera">
 Are you interested in Gaming? Yes ?,then this is the appurtenant opportunity
for you to concur in this first person shooter game. Each team attempts to complete their mission
objective and/or eliminate the opposing team. So gear up guys for this amazing event, cash prizes
are waiting for you.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="ms-section" id="right8">
            </div>
            

            <div class="ms-section" id="right9">
                                    <div class="row">
                    <div class="col-lg-12 col-md-12 ">
                        <h1 class="event-name">TRICKOLOGY</h1>

                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                             <div class="event-pera">
Clear your basics in high level languages.If you are the program-freak, this will be a cake walk for you!  Check the syntax, predict the outputs and answer some basic questions to earn points. 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 <!--           
            <div class="ms-section" id="right10">
            </div>
-->
        </div>
    </div>

</body>

</html>