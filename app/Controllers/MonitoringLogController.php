<?php

namespace App\Controllers;
// use App\Controllers\BaseController;

class MonitoringLogController extends BaseController
{
    private $db;

    public function __construct()
    {
        $this->db = db_connect(); // Loading database
        // OR $this->db = \Config\Database::connect();
    }
    public function log()
    {
        $builder = $this->db->table('data_log');
        $builder->select('*');
        $builder->orderBy('id', 'desc');
        $builder->limit(200);
        $session = session();
        $name = $session->get('user_name');
        $email = $session->get('email');
        $data['name'] = $name;
        $data['email'] = $email;
        $data['log'] = $builder->get()->getResult();
        return view('dashboard-log', $data);
    }


}