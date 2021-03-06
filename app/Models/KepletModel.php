<?php

namespace App\Models;

use CodeIgniter\Model;

class KepletModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'data_kepelatihan';
    protected $primaryKey       = 'id_data_kepelatihan';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_pelatih', 'nama_team', 'kategori_team', 'jabatan', 'tahun_awal', 'tahun_akhir'];

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


    public function keplet($id_pelatih)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('data_kepelatihan');
        $query   = $builder->where('id_pelatih', $id_pelatih)->get();
        return $query->getResultArray();
    }
}