<?php

namespace App\Controllers;
// use App\Controllers\BaseController;

class SetIOController extends BaseController
{
  private $db;

  public function __construct()
  {
    $this->db = db_connect(); // Loading database
    // OR $this->db = \Config\Database::connect();
    //$this->dashboardModel = new DashboardModel();
  }

  public function data_io()
  {
    $builder = $this->db->table('config_di');
    $builder->select('*');
    $io_data = $builder->get()->getResult();
    return json_encode($builder->get()->getResult());
  }


  public function update_fan()
  {
    $fan_state = $this->request->getVar('fan_state');
    $fan_triger = $this->request->getVar('fan_triger');
    $data = [
      'state' => $fan_state,
      'triger' => $fan_triger,
    ];
    $builder = $this->db->table('config_di');
    $builder->where('id', 1);
    $builder->update($data);
    $postdata = http_build_query(
      array(
          'name' => 'DI FAN',
          'id' => '1',
          'code' => 'D1'
      )
    );
    $opts = array('http' =>
        array(
            'method' => 'POST',
            'header' => 'Content-type: application/x-www-form-urlencoded',
            'content' => $postdata
        )
    );
    $context = stream_context_create($opts);
    $base_url="http://" . $_SERVER['SERVER_NAME'] . ":2013/difan";
    $result = file_get_contents($base_url, false, $context);
    return $this->response->redirect(site_url('/dashboard-settings'), 'refresh');
  }

  public function update_door()
  {
    $door_state = $this->request->getVar('door_state');
    $door_triger = $this->request->getVar('door_triger');
    $data = [
      'state' => $door_state,
      'triger' => $door_triger,
    ];
    $builder = $this->db->table('config_di');
    $builder->where('id', 2);
    $builder->update($data);
    $postdata = http_build_query(
      array(
          'name' => 'DI DOOR',
          'id' => '2',
          'code' => 'D2'
      )
    );
    $opts = array('http' =>
        array(
            'method' => 'POST',
            'header' => 'Content-type: application/x-www-form-urlencoded',
            'content' => $postdata
        )
    );
    $context = stream_context_create($opts);
    $base_url="http://" . $_SERVER['SERVER_NAME'] . ":2013/didoor";
    $result = file_get_contents($base_url, false, $context);
    return $this->response->redirect(site_url('/dashboard-settings'));
  }

}
