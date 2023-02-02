<?php

namespace App\Controllers;
// use App\Controllers\BaseController;

class SetDateController extends BaseController
{
  private $db;

  public function __construct()
  {
    $this->db = db_connect(); // Loading database
    // OR $this->db = \Config\Database::connect();
    //$this->dashboardModel = new DashboardModel();
  }


  public function settanggal()
  {
		$date = $this->request->getVar('date');
    $time = $this->request->getVar('time');
    $datetime = "$date $time";
    $data = [
      'tgl' => $date,
      'jam' => $time,
      'msg' => $datetime
    ];
    $builder = $this->db->table('setdate');
    $builder->update($data);
    $postdata = http_build_query(
      array(
        'name' => 'Waktu',
        'id' => '10',
        'code' => 'W1'
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
    $base_url="http://" . $_SERVER['SERVER_NAME'] . ":2013/Waktu";
    $result = file_get_contents($base_url, false, $context);
    return $this->response->redirect(site_url('/dashboard-settings'));
  }
}
