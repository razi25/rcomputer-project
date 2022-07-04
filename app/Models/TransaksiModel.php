<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'pembayaran';
    protected $useTimestamp = true;
    protected $allowedFields = ['id', 'id_order', 'date_in', 'kode_id', 'produk', 'pelanggan', 'jumlah', 'alamat', 'payment', 'harga', 'diskon', 'status', 'total', 'date_out', 'gambar', 'admin'];
}
