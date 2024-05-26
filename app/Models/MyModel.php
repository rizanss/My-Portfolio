<?php

namespace App\Models;

use CodeIgniter\Model;

class MyModel extends Model{
    public function biodata(){
        return $this->db->table('my_biodata')
                        ->select('*')
                        ->get()
                        ->getResultArray();
    }
}