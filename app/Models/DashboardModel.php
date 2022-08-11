<?php

namespace App\Models;

use CodeIgniter\Model;


class MonitoringPowerModel extends Model
{

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function monitoring_power()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('monitoring_outback1');
        $builder->select('*');
        $query   = $builder->get();
        return $query;
    }

    public function model_scc1(){
        $this->db->select('*');
        $this->db->from('monitoring_outback1');
        return $this->db->get()->result_array();
    }
}
