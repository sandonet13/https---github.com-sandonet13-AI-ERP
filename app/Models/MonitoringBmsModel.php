<?php

namespace App\Models;

use CodeIgniter\Model;


class MonitoringBmsModel extends Model
{
      public function __construct()
      {
          $this->db = db_connect(); // Loading database
          // OR $this->db = \Config\Database::connect();
      }

      public function monitoring_bms1()
      {
          // $builder = $this->db->table('config_bms_param');
          // $builder->select('*');
          // // $builder->join('config_bms_param', 'config_bms_param.id = monitoring_bms1.id');
          // $data = $builder->get();
          // return $data;
          $db      = \Config\Database::connect();
          $builder = $db->table('config_bms_param');
          $builder->select('*');
          $query   = $builder->get();
          print_r($query);
          return $query;
      }
}
