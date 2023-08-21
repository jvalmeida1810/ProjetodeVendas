<?php defined('BASEPATH') or exit('Ação não permitida');


class Core_model extends CI_Model
{

    public function insert($table, $data)
    {
        $this->db->insert($table, $data);

        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function get_all($table){
        $query = $this->db->get($table);
        // echo '<pre>';
        // print_r($query->result());
        // exit();
        return $query->result();
    }
    
}
