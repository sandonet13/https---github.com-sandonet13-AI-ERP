<?php

namespace App\Controllers;
// use App\Controllers\BaseController;

class SetZeroSpanController extends BaseController
{
  private $db;

  public function __construct()
  {
    $this->db = db_connect(); // Loading database
    // OR $this->db = \Config\Database::connect();
    //$this->dashboardModel = new DashboardModel();
  }


  public function get_data_zerobusvol()
  {
      $postdata = http_build_query(
        array(
            'name' => 'Zero Bus Vol',
            'id' => '1',
        'code' => 'Z1'
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
    $base_url="http://" . $_SERVER['SERVER_NAME'] . ":1880/zerobusvol";
    $result = file_get_contents($base_url, false, $context);
    return $this->response->redirect(site_url('/dashboard-settings'));
  }

  public function get_data_zerobtscur()
{
	$postdata = http_build_query(
    array(
        'name' => 'Zero BTS Cur',
        'id' => '4',
		'code' => 'Z4'
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
$base_url="http://" . $_SERVER['SERVER_NAME'] . ":1880/zerobtscur";
$result = file_get_contents($base_url, false, $context);
return $this->response->redirect(site_url('/dashboard-settings'));
}

public function get_data_zerovsatcur()
{
	$postdata = http_build_query(
    array(
        'name' => 'Zero VSAT Cur',
        'id' => '5',
		'code' => 'Z5'
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
$base_url="http://" . $_SERVER['SERVER_NAME'] . ":1880/zerovsatcur";
$result = file_get_contents($base_url, false, $context);
return $this->response->redirect(site_url('/dashboard-settings'));
}

public function get_data_spanbusvol()
{
	$postdata = http_build_query(
    array(
        'name' => 'Span Bus Vol',
        'id' => '1',
		    'code' => 'S1'
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
$base_url="http://" . $_SERVER['SERVER_NAME'] . ":1880/spanbusvol";
$result = file_get_contents($base_url, false, $context);
return $this->response->redirect(site_url('/dashboard-settings'));
}

public function get_data_spanbtscur()
{
	$postdata = http_build_query(
    array(
        'name' => 'Span BTS Cur',
        'id' => '4',
		'code' => 'S4'
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
$base_url="http://" . $_SERVER['SERVER_NAME'] . ":1880/spanbtscur";
$result = file_get_contents($base_url, false, $context);
return $this->response->redirect(site_url('/dashboard-settings'));
}

public function get_data_spanvsatcur()
{
	$postdata = http_build_query(
    array(
        'name' => 'Span VSAT Cur',
        'id' => '5',
		'code' => 'S5'
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
$base_url="http://" . $_SERVER['SERVER_NAME'] . ":1880/spanvsatcur";
$result = file_get_contents($base_url, false, $context);
return $this->response->redirect(site_url('/dashboard-settings'));
}
}
