<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 6/28/2019
 * Time: 3:58 PM
 */

class teacher_model extends  CI_Model
{

    public function chick_teacher ($user_name,$password){

        $this->db->where('username', $user_name);
        $query = $this->db->get('teacher');
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


}