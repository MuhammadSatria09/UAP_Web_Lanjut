<?php

namespace App\Models;

use CodeIgniter\Model;

class PekerjaanModel extends Model
{
    protected $table            = 'pekerjaan';
    protected $primaryKey       = 'id_pekerjaan';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_order', 'nama_barang', 'status', 'id_pekerja'];

    // Dates
    protected $useTimestamps = false;
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

    public function getPekerjaan()
    {
        $this->select('pekerjaan.*, users.username, users.email');

        $this->join('users', 'users.id = pekerjaan.id_pekerja');

        return $this->orderBy('pekerjaan.id_pekerjaan', 'desc')->findAll();
    }

    public function statusOptions()
    {
        return [
            'Belum Dikerjaan' => 'Belum Dikerjaan',
            'Proses' => 'Proses',
            'Selesai' => 'Selesai'
        ];
    }
}
