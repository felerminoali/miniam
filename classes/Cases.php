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

    public function addCase($params = null)
    {
        if (!empty($params)) {
            $this->db->prepareInsert($params);
            $out = $this->db->insert($this->_table);
            $this->_id = $this->db->_id;
            return $out;
        }
        return false;
    }

    public function updateCase($params = null, $id = null)
    {
        if (!empty($params) && !empty($id)) {

            $this->db->prepareUpdate($params);
            return $this->db->update($this->_table, $id);
        }
    }

    public function removeCase($id = null)
    {
        if(!empty($id)){
            $sql = "DELETE FROM `{$this->_table}`
                      WHERE `id` = '".$this->db->escape($id)."'";
            return $this->db->query($sql);
        }
    }
}