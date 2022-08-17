<?php

namespace App\Controllers;

class DashboardDioController extends BaseController
{
  private $db;

  public function __construct()
  {
    $this->db = db_connect(); // Loading database
  }
  
  public function ajax_input_output()
  {
    $builder = $this->db->table('di_status');
    $builder->select('*');
    $builder->join('config_di', 'config_di.id = di_status.id', 'left');
    $data['di'] = $builder->get()->getResult();
    $builder = $this->db->table('config_lvd');
    $builder->select('*');
    $builder->join('lvd_status', 'lvd_status.id = config_lvd.id', 'left');
    $data['lvd'] = $builder->get()->getResult();
    $session = session();
    $name = $session->get('user_name');
    $email = $session->get('email');
    $data['name'] = $name;
    $data['email'] = $email;
    return view('ajax/a-dashboard-io', $data);
  }

}
