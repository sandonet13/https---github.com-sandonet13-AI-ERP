<?php

namespace App\Controllers;
// use App\Controllers\BaseController;

class SetLVDController extends BaseController
{
  private $db;

  public function __construct()
  {
    $this->db = db_connect(); // Loading database
    // OR $this->db = \Config\Database::connect();
    //$this->dashboardModel = new DashboardModel();
  }

  
  public function update_lvd_vsat()
  {
        $lvd_vsat_disconnect = $this->request->getVar('lvd_vsat_disconnect');
        $lvd_vsat_reconnect = $this->request->getVar('lvd_vsat_reconnect');
        $lvd_vsat_state = $this->request->getVar('lvd_vsat_state');
        $data = [  
          'disconnect' => $lvd_vsat_disconnect,
          'reconnect' => $lvd_vsat_disconnect,
          'state' => $lvd_vsat_state
        ];
        $builder = $this->db->table('config_lvd');
        $builder->where('id', 1);
        $builder->update($data);
        $postdata = http_build_query(
          array(
            'name' => 'LVD VSAT',
            'id' => '1',
            'code' => 'L1'
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
        $base_url="http://" . $_SERVER['SERVER_NAME'] . ":1880/lvdvsat";
        $result = file_get_contents($base_url, false, $context);
        return $this->response->redirect(site_url('/dashboard-settings'));
  }

  public function update_lvd_bts()
  {
        $lvd_bts_disconnect = $this->request->getVar('lvd_bts_disconnect');
        $lvd_bts_reconnect = $this->request->getVar('lvd_bts_reconnect');
        $lvd_bts_state = $this->request->getVar('lvd_bts_state');
        $data = [  
          'disconnect' => $lvd_bts_disconnect,
          'reconnect' => $lvd_bts_disconnect,
          'state' => $lvd_bts_state
        ];
        $builder = $this->db->table('config_lvd');
        $builder->where('id', 2);
        $builder->update($data);
        $postdata = http_build_query(
          array(
            'name' => 'LVD BTS',
            'id' => '2',
            'code' => 'L2'
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
        $base_url="http://" . $_SERVER['SERVER_NAME'] . ":1880/lvdbts";
        $result = file_get_contents($base_url, false, $context);
        return $this->response->redirect(site_url('/dashboard-settings'));
  }

}
