<?php


class Admin extends Application{

    private $_table = 'admin';
    public $_id;

    public function isUser($email = null, $password = null)
    {
        if(!empty($email) && !empty($password)){
            $password = Login::string2hash($password);
            $sql = "SELECT * FROM `{$this->_table}`
                 WHERE `email` ='" . $this->db->escape($email) . "'
                 AND `password` ='" . $this->db->escape($password) . "'";

            $result = $this->db->fetchOne($sql);

            if(!empty($result)){
                $this->_id = $result['id'];
                return true;
            }

            return false;

        }
    }


    public function getUser($id = null){
        if(!empty($id)){
            $sql = "SELECT * FROM `{$this->_table}`
                    WHERE `id` = '".$this->db->escape($id) ."'";
            return $this->db->fetchOne($sql);
        }
    }
}