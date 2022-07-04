<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'kategori';


    protected $allowedFields = ['kategori'];

    public function getCategory()
    {
        $builder = $this->db->table('kategori');
        return $builder->get();
    }

    // public function getSubCategory()
    // {
    //     $builder = $this->db->table('subkategori');
    //     return $builder->get();
    // }

    public function getKategoriProduct($id)
    {
        $builder = $this->db->table('subkategori');
        $builder->select('*');
        $builder->where('kategori_id', $id);
        return $builder->get();
    }
    public function saveKategori($data)
    {
        $query = $this->db->table('kategori')->insert($data);
        return $query;
    }

    public function updateKategori($data, $id)
    {
        $query = $this->db->table('kategori')->update($data, array('id' => $id));
        return $query;
    }

    public function deleteKategori($id)
    {
        $query = $this->db->table('kategori')->delete(array('id' => $id));
        return $query;
    }
    public function saveSubKategori($data)
    {
        $query = $this->db->table('subkategori')->insert($data);
        return $query;
    }

    public function updateSubKategori($data, $id_sub)
    {
        $query = $this->db->table('subkategori')->update($data, array('id_sub' => $id_sub));

        return $query;
    }

    public function deleteSubKategori($id_sub)
    {
        $query = $this->db->table('subkategori')->delete(array('id_sub' => $id_sub));
        return $query;
    }
}
