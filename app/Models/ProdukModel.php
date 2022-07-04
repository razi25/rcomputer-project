<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';
    protected $useTimestamp = true;
    protected $allowedFields = ['kode', 'Tanggal', 'produk', 'kategori', 'subkategori', 'keterangan', 'stok', 'harga', 'gambar'];

    // public function getPro($kode = false)
    // {
    //     if ($kode == false) {
    //         return $this->findAll();
    //     }
    //     return $this->where(['kode' => $kode])->first();
    // }
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

    public function getKategoriProduct()
    {
        $builder = $this->db->table('kategori');
        $builder->select('*');
        $builder->join('subkategori', 'subkategori.kategori_id = kategori.id', 'left');
        return $builder->get();
    }

    public function getProduct()
    {
        $builder = $this->db->table('produk');
        $builder->select('*');
        $builder->join('kategori', 'kategori.id = produk.kategori_id', 'left');
        $builder->join('subkategori', 'subkategori.id_sub = produk.subkategori_id', 'left');
        $builder->orderBy('Tanggal', 'DESC');
        return $builder->get();
    }

    public function saveProduct($data)
    {
        $query = $this->db->table('produk')->insert($data);
        return $query;
    }

    public function updateProduct($data, $kode)
    {
        $query = $this->db->table('produk')->update($data, array('kode' => $kode));
        return $query;
    }

    public function deleteProduct($id)
    {
        $query = $this->db->table('produk')->delete(array('kode' => $id));
        return $query;
    }
}
