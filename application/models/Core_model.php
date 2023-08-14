<?php defined('BASEPATH') or exit('Ação não permitida');


class Core_model extends CI_Model
{
    public function insert($table, $data)
    {
        $this->db->insert($table, $data);

        if ($this->db->affected_rows() > 0) {
            return True;
        } else {
            return FALSE;
        }
    }
    
}
