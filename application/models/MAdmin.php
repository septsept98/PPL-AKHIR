<?php
class MAdmin extends CI_Model{
    public function Get($table)
    {
        $res = $this->db->get($table);
        return $res->result();
    }

    public function GetWhere($table, $data){
        $res = $this->db->get_where($table, $data);
        return $res->result();
    }

    public function Insert($table, $data){
        $res = $this->db->insert($table, $data);
        return $res;
    }

    public function Update($table, $data, $id){
        $res = $this->db->update($table, $data, $id);
        return $res;
    }

    public function Delete($table, $id){
        $res = $this->db->delete($table, $id);
    }

    public function Sum($table, $field){
        $res = $this->db->select_sum($field)
                        ->from($table)
                        ->get();
        return $res->result();
    }
}
?>