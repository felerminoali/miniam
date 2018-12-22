<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/22/2018
 * Time: 8:45 AM
 */

class Laws extends Application{


    private $_table = 'laws';
    public $_id;


    public function getAllLaws()
    {
        $sql = "SELECT * FROM `{$this->_table}`";
        $sql .= " GROUP BY `year` DESC";
        return $this->db->fetchAll($sql);
    }

}