<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $table = 'pesanan';
    protected $useTimestamp = true;
    protected $allowedFields = ['id', 'Tanggal', 'kode_id', 'produk', 'pelanggan', 'stok', 'alamat', 'payment', 'harga', 'status'];

    public function getOrder()
    {
        $builder = $this->db->table('pesanan');
        $builder->select('*');
        $builder->where('status !=', 'success');
        $builder->orderBy('Tanggal', 'DESC');
        return $builder->get();
    }
    public function pending()
    {
        $builder = $this->db->table('pesanan');
        $builder->select('*');
        $builder->where('status', 'pending');
        $builder->orderBy('Tanggal', 'DESC');
        return $builder->get();
    }

    public function saveProduct($data)
    {
        $query = $this->db->table('pesanan')->insert($data);
        return $query;
    }

    // public function updateProduct($data, $id)
    // {
    //     $query = $this->db->table('produk')->update($data, array('kode' => $id));
    //     return $query;
    // }

    public function deleteProduct($id)
    {
        $query = $this->db->table('pesanan')->delete(array('id' => $id));
        return $query;
    }
}
