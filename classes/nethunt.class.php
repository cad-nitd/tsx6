<?php 

class Nethunt {

    private $db;
    private $user;
    public $maxlevel;

    public function __construct($db,$user){
        $this->db = $db;
        $this->user = $user;
       // query to get count of questions
        $query="SELECT count(*) as maxlevel FROM questions";
       
        $result = $this->db->query($query);
        $this->maxlevel=$result[0]['maxlevel'];
       
    }

    public function register() {
        $query="SELECT uid FROM nethunt WHERE uid=:uid";
        $result = $this->db->query($query,['uid'=>$this->user->get_uid()]);
        
        if(count($result)==0){
            
            $values=[];
            $values['uid']=$this->user->get_uid();
            $values['level']=1;
            $this->db->insert('nethunt',$values);
        }
        return true;
    }
    public function get_level() {
        
        if ( !isset($_SESSION['level']) ) {
            $query="SELECT level FROM nethunt WHERE uid=:uid";

            $rows=$this->db->query($query,["uid"=>$this->user->get_uid()]);

            $_SESSION['level']=$rows[0]['level'];
        }

        return $_SESSION['level'];
    }
    
    public function set_level($level) {
        if($level>$maxlevel) {
            return false;
        }
    }
    
    public function get_question($level) {
        $query="SELECT type , question as value FROM questions WHERE level=:level";
        $resarr=$this->db->query($query,["level"=>$level]);
        
        return $resarr[0];
        //dump($resarr);
        //die();
    }
    
    public function check_ans($level,$ans) {
        //check answer with db ans
        return false;
    }
    public function get_time(){}
}
