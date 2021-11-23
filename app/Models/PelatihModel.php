<?php

namespace App\Models;

use CodeIgniter\Model;

use function PHPUnit\Framework\assertNotNull;
use function PHPUnit\Framework\isNull;

class PelatihModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pelatih';
    protected $primaryKey       = 'id_pelatih';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama', 'noreg', 'nama_panggilan', 'alamat', 'tgl_lahir', 'nik', 'lisensi', 'tgl_lisensi', 'notel', 'foto'];

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

    public function pelatih_by_id($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('pelatih');
        $query   = $builder->get();
        return $query;
    }

    public function getpelatih()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('pelatih');
        $query   = $builder->get()->getResultArray();
        // dd($query);
        return $query;
    }

    public function pelatih_by_daerah($id)
    {
        # code...
    }

    public function jumlah_pelatih()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('pelatih');
        $query   = $builder->countAll();
        return $query;
    }

    public function jumlah_pelatih_by_daerah()
    {
        # code...
    }

    public function regist_pelatih()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT id_pelatih, nama, noreg FROM pelatih WHERE noreg IS NOT NULL AND noreg != ""');
        // dd($query);
        return $query->getNumRows();
    }

    public function belum_regist()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT id_pelatih, nama, noreg FROM pelatih WHERE noreg IS NOT NULL AND noreg = ""');
        // dd($query);
        return $query->getNumRows();
    }

    public function belumupdate()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT id_pelatih, nama FROM pelatih WHERE nama IS NOT NULL AND lisensi = ""');
        // dd($query);
        return $query->getNumRows();
    }

    public function pelatih_lisensi()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT id_pelatih, nama, lisensi FROM pelatih WHERE lisensi IS NOT NULL AND lisensi != ""');
        // dd($query);
        return $query->getNumRows();
    }

    public function pelatih_belum_lisens()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT id_pelatih, nama, lisensi FROM pelatih WHERE lisensi IS NOT NULL AND lisensi = "BELUM ADA"');
        // dd($query);
        return $query->getNumRows();
    }

    public function noreg()
    {
    }
}