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
    
    public function finish() {
        return ($this->get_level()>$this->maxlevel);
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
        $query="SELECT level FROM nethunt WHERE uid=:uid";

        $rows=$this->db->query($query,['uid'=>$this->user->get_uid()]);

        return $rows[0]['level'];
    }
    
    public function set_level($level) {
        if($level>$maxlevel) {
            return false;
        }
    }
    
    public function get_question($level) {
        $query="SELECT question,type,level FROM questions WHERE level=:level";
     
        $result=$this->db->query($query,["level"=>$level]);
       
        return $result[0];
    }
    
    public function goto_level(){
        redirect("/nethunt/".$this->get_level());
    }
    
    public function levelup() {
        $query="UPDATE nethunt set level=level+1,TIME=NOW() WHERE uid=:uid";
        $this->db->execute($query,["uid"=>$this->user->get_uid()]);
        //unset($_SESSION['level']);
    } 
    
    public function check_ans($level,$answer) {
        $query="SELECT level FROM questions WHERE level=:level AND answer=:answer";
        $result=$this->db->query($query,["level"=>$level,"answer"=>$answer]);
        if (count($result)>0){
            return true;
        }
        return false;
    }
    public function get_time(){}
}