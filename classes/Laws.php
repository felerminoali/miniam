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
        $sql .= " ORDER BY `id` DESC";
        return $this->db->fetchAll($sql);
    }

    public function getLaws()
    {
        $sql = "SELECT * FROM `{$this->_table}`";
        $sql .= " ORDER BY `id` DESC";
        return $this->db->fetchAll($sql);
    }

    public function addLaw($params = null)
    {
        if (!empty($params)) {
            $this->db->prepareInsert($params);
            $out = $this->db->insert($this->_table);
            $this->_id = $this->db->_id;
            return $out;
        }
        return false;
    }

    public function updateLaw($params = null, $id = null)
    {
        if (!empty($params) && !empty($id)) {

            $this->db->prepareUpdate($params);
            return $this->db->update($this->_table, $id);
        }
    }

    public function removeLaw($id = null)
    {
        if(!empty($id)){
            $sql = "DELETE FROM `{$this->_table}`
                      WHERE `id` = '".$this->db->escape($id)."'";
            return $this->db->query($sql);
        }
    }

}