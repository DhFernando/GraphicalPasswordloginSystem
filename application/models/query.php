<?php

class query extends CI_Model{
    function insertUserData($url){
        $userdetails=array(
            'fname'=>$this->input->post('fname',TRUE),
            'lname'=>$this->input->post('lname',TRUE),
            'email'=>$this->input->post('email',TRUE),
            'Mpw'=>sha1($this->input->post('Mpw',TRUE)),
            'aORv'=>$this->input->post('aORv',TRUE),
        );
       $res_userDetails=$this->db->insert('user',$userdetails);

       $picOFusers=array(
        'URL'=>$url,
       );

       $res_uplord_userPic = $this->db->insert('imgs',$picOFusers);

      $Query1 = $this->db->query("SELECT * FROM imgs WHERE Pid = (SELECT MAX(Pid) FROM imgs)");
       
       if($Query1->num_rows()>0){
           foreach($Query1->result() as $row1){
               $Query2 = $this->db->query("SELECT * FROM user WHERE uid = (SELECT MAX(uid) FROM user)");
               foreach($Query2->result() as $row2){
                    $this->db->query("UPDATE user SET Pid=$row1->Pid WHERE uid=$row2->uid");  
                    return $this->db->query("SELECT * FROM user WHERE uid=$row2->uid");
               }
           }
       }
    }

   public function picPWQ($Pid){  
        $PX=$this->input->post('PX',TRUE);
        $PY=$this->input->post('PY',TRUE);
        $PX1=$this->input->post('PX1',TRUE);
        $PY1=$this->input->post('PY1',TRUE);
        $PX2=$this->input->post('PX2',TRUE);
        $PY2=$this->input->post('PY2',TRUE);
        return $this->db->query("UPDATE imgs SET PX=$PX,PY=$PY,PX1=$PX1,PY1=$PY1,PX2=$PX2,PY2=$PY2 WHERE Pid=$Pid");
   }

   public function login(){
    $email=$this->input->post('email');
    $Mpw=sha1($this->input->post('Mpw'));

    $this->db->where('email',$email);
    $this->db->where('Mpw',$Mpw);
    
    $respond=$this->db->get('user');

    if($respond->num_rows()>0){
        return $respond->row(0);
            
    }else{
        return !true;
        
    }

   }

   public function picPWVeryfy(){
       $Pid=$_GET['Pid'];
       return $this->db->query("SELECT * FROM imgs WHERE Pid=$Pid");
   }

   public function uplordnote(){
       $uid=$_SESSION['uid'];
       $noteInformations=array(
        'uid'=>$this->input->post('uid',TRUE),
        'notetopic'=>$this->input->post('notetopic',TRUE),
        'note'=>$this->input->post('note',TRUE),
    );

    return $this->db->insert('note',$noteInformations);
   }

}
