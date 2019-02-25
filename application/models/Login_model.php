<?php


class Login_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

   
    public function addusers($params)
    {
            $this->db->insert('users',$params);
                   $userid = $this->db->insert_id();
                $this->db->insert('users_groups',array('user_id' => $userid, 'group_id'=> 1));
                return $userid;
          
    }

}
