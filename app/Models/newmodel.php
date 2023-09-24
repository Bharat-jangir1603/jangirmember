<?php

namespace App\Models;

use CodeIgniter\Model;

class newmodel extends Model
{
    public function newrow($table, $data = [])
    {
        $tbl = $this->db->table($table);
        $tbl->insert($data);
    }


    public function selectrow($table, $where = '')
    {
        $tbl = $this->db->table($table);
        $tbl->select('*');
        if ($where != '') {
            $tbl->where($where);
        }
        $que = $tbl->get();


        return $que->getResult();
    }
    public function deleterow($table, $where)
    {
        $tbl = $this->db->table($table);
        return $tbl->delete($where);
    }
    public function selectonerow($table, $where)
    {
        $tbl = $this->db->table($table);
        $tbl->select('*');
        $tbl->where($where);
        $que = $tbl->get();

        return $que->getRow();
    }
    public function check($table, $where)
    {
        $tbl = $this->db->table($table);
        $tbl->select('*');
        $tbl->where($where);
        $que = $tbl->get();

        return $que->getRow();
    }
    public function updat($table, $id, $row){
        // print_r($id);
        // print_r($row);
        // echo $table;
        $tbl = $this->db->table($table);
        
        // $tbl->where($id);
        $tbl->where($id);
        $tbl->update($row);
        
    }
}
