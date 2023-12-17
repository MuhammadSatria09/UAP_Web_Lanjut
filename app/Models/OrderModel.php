<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table            = 'order';
    protected $primaryKey       = 'id_order';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_order','nama_barang','customer_id','foto'];

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

    public function getOrder($id=null){
        $auth = service('authentication');
        $userId = $auth->id();


        if ($id != null){
            return $this->select('user.*,kelas.nama_kelas')->join('kelas','kelas.id=user.id_kelas')->find($id);
        }
        return $this->select('order.*')->where('customer_id',$userId)->findAll();
    }

    public function getOrderAll(){
        return $this->select('order.*')->where('status != 2')->findAll();
    }

    public function saveOrder($data){
        $this->insert($data);
    }

    public function updateStatus($data){
        $builder = $this->db->table('order');
        $builder->where('id_order', $data['id_order']);
        $builder->update($data);
    }

    public function deleteOrder($data){
        return $this->where('id_order',$data['id_order'])->delete();
    }
}
