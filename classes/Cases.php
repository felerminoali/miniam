<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/22/2018
 * Time: 8:24 AM
 */

class Cases extends Application{


    private $_table = 'cases';
    public $_id;


    public function getAllCases($srch = null)
    {
        $sql = "SELECT * FROM `{$this->_table}`";
        if (!empty($srch)) {
            $srch = $this->db->escape($srch);
            $sql .= " WHERE `description` LIKE '%{$srch}%' || `exam_year` = '{$srch}'";
        } else {
            $sql .= " ORDER BY `id` DESC";
        }
        return $this->db->fetchAll($sql);
    }
}