<?php

namespace App\Controllers;
// use App\Controllers\BaseController;

class SetScaleController extends BaseController
{
  private $db;

  public function __construct()
  {
    $this->db = db_connect(); // Loading database
    // OR $this->db = \Config\Database::connect();
    //$this->dashboardModel = new DashboardModel();
  }


  public function update_busvol_scale()
  {
    $busvol_scale = $this->request->getVar('busvol_scale');
    $data = [
      'scale' => $busvol_scale
    ];
    $builder = $this->db->table('config_measurement');
    $builder->where('id', 1);
    $builder->update($data);
    $postdata = http_build_query(
      array(
          'name' => 'VBus scale',
          'id' => '6',
           'code' => 'Scale1'
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
    $base_url="http://" . $_SERVER['SERVER_NAME'] . ":2013/vbusscale";
    $result = file_get_contents($base_url, false, $context);
    return $this->response->redirect(site_url('/dashboard-settings'));
  }

  public function update_btscur_scale()
  {
    $btscur_scale = $this->request->getVar('btscur_scale');
    $data = [
      'scale' => $btscur_scale
    ];
    $builder = $this->db->table('config_measurement');
    $builder->where('id', 4);
    $builder->update($data);
    $postdata = http_build_query(
        array(
          'name' => 'BTS Current scale',
          'id' => '7',
          'code' => 'Scale2'
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
    $base_url="http://" . $_SERVER['SERVER_NAME'] . ":2013/btscurrscale";
    $result = file_get_contents($base_url, false, $context);
    return $this->response->redirect(site_url('/dashboard-settings'));
  }

  public function update_vsatcur_scale()
  {
    $vsatcur_scale = $this->request->getVar('vsatcur_scale');
    $data = [
      'scale' => $vsatcur_scale
    ];
    $builder = $this->db->table('config_measurement');
    $builder->where('id', 5);
    $builder->update($data);
    $postdata = http_build_query(
        array(
          'name' => 'VSAT Current scale',
          'id' => '8',
          'code' => 'Scale3'
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
    $base_url="http://" . $_SERVER['SERVER_NAME'] . ":2013/vsatcurrscale";
    $result = file_get_contents($base_url, false, $context);
    return $this->response->redirect(site_url('/dashboard-settings'));
  }


  public function data_mc()
  {
    $builder = $this->db->table('config_measurement');
    $builder->select('*');
    $mc_data = $builder->get()->getResult();
    return json_encode($builder->get()->getResult());
  }

}
