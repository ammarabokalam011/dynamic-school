<?php
/**
 * Created by PhpStorm.
 * User: ammar
 * Date: 6/15/2019
 * Time: 12:03 PM
 */

class Login_model extends CI_Model{
    function can_login($email, $password)
    {
        $this->db->where('username', $email);
        $query = $this->db->get('student');
        if($query->num_rows() > 0)
        {

            foreach($query->result() as $row)
            {
                if($row->password == $password)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
        }
        else
        {
            return false;
        }
    }

    public function get_user($username){
        if($username==null)
            return null;
        $this->db->where('username', $username);
        $query = $this->db->get('student');
        if($query->num_rows() > 0)
        {

            foreach($query->result() as $row)
            {
                return $row;
            }
        }
        else
        {
            return null;
        }
    }
}