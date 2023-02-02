<?php

namespace App\Models;

use CodeIgniter\Model;


class DataLogModel extends Model
{

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function datalog_model($from, $to){
        $this->db->select('*');
        $this->db->from('data_log');
        $this->db->where('dtime >=', $from);
        $this->db->where('dtime <=', $to);
        $this->db->order_by('id',"desc");
        $this->db->limit(15000);

        return $this->db->get()->result();
    }

    public function hour_datalog($from, $to)
    {
        $builder = $this->db->table('data_log');
        $builder->select('*');
        $builder->orderBy('id', 'desc');
        $builder->limit(300);
        $query   = $builder->get()->getResult();
        return $query;
    }

    public function datalog($from, $to)
    {
        $builder = $this->db->table('data_log');
        $builder->select('*');
        $builder->where('dtime >=', $from);
        $builder->where('dtime <=', $to);
        // $builder->order_by(`id`,"desc");
        $builder->limit(1000);
        $query   = $builder->get()->getResult();
        return $query;
    }
}
