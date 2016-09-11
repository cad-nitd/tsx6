<?php


$user_answer="";
$error="";



if(! $USER->logged_in() ) {
        redirect('/login');
    }


$query  = "SELECT level FROM nethunt WHERE uid=".$_SESSION['uid'];
$result = $this->db->query($query);




//LEADERBOARD==============
$query="SELECT u.first, u.last, n.level FROM nethunt n, users u WHERE n.uid=u.id ORDER BY n.level DESC, n.time LIMIT 10";
$lb_chk=$this->db->query($query);
  
?>