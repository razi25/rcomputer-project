<?php

namespace App\Models;

use CodeIgniter\Model;

class ServisModel extends Model
{
    protected $table = 'servis';
    protected $useTimestamp = true;
    protected $allowedFields = ['id', 'date_in', 'pemilik', 'barang', 'kerusakan', 'perbaikan', 'date_out', 'biaya', 'keterangan'];



    public function getServis()
    {
        $builder = $this->db->table('servis');
        $builder->select('*');
        $builder->orderBy('date_in', 'DESC');
        return $builder->get();
    }

    public function saveProduct($data)
    {
        $query = $this->db->table('servis')->insert($data);
        return $query;
    }

    public function updateProduct($data, $id)
    {
        $query = $this->db->table('servis')->update($data, array('id' => $id));
        return $query;
    }

    public function deleteProduct($id)
    {
        $query = $this->db->table('servis')->delete(array('id' => $id));
        return $query;
    }
}
