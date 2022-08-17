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
    $data = "$date $time";
    $result = str_replace(',', '', $data);
    shell_exec("sudo date --set '" . $result . ":00' ");
    return $this->response->redirect(site_url('/dashboard-settings'));
  }
}
