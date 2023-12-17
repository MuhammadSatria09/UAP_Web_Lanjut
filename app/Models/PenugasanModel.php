<?php

namespace App\Models;

use CodeIgniter\Model;

class PenugasanModel extends Model
{
    protected $table            = 'penugasan';
    protected $primaryKey       = 'id_penugasan';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_order','id_pekerja'];

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

    public function getPenugasan($id = null)
    {
    $auth = service('authentication');
    $userId = $auth->id();

    return $this->select('penugasan.*,order.*')
                ->join('order', 'order.id_order = penugasan.id_order')
                ->where('penugasan.id_pekerja', $userId)
                ->findAll();
                
    }


    public function getPenugasanAll(){
        return $this->select('penugasan.*,users.username')
                    ->join('users','users.id = penugasan.id_pekerja')
                    ->findAll();
    }

    public function savePenugasan($data)
    {

    $builder = $this->db->table('penugasan');

    $existingRow = $builder->getWhere(['id_order' => $data['id_order']])->getRow();

    if ($existingRow) {

        $builder->where('id_order', $data['id_order']);
        $builder->update($data);
    } else {

        $builder->insert($data);
    }
    }

    public function deletePenugasan($data){
        return $this->where('id_order',$data['id_order'])->delete();
    }

}
