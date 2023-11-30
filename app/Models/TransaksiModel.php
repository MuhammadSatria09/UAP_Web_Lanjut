<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table            = 'transaksi';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_pelanggan','id_karyawan','id_barang','jumlah','total_harga'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function saveTransaksi($data)
    {
        $this->insert($data);
    }

    public function getTransaksi()
    {
        return $this->select('transaksi.*, pelanggan.username AS nama_pelanggan, karyawan.username AS nama_karyawan, katalog.*')
        ->join('users AS pelanggan','transaksi.id_pelanggan = pelanggan.id')
        ->join('users AS karyawan', 'transaksi.id_karyawan = karyawan.id')  
        ->join('katalog', 'transaksi.id_barang = katalog.id')->find();
    }
}
