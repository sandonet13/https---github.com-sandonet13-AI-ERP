<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// $routes->get('/login', 'Auth::loginCheck', ['filter' => 'noauth']);
// $routes->post('/loginCheck', 'Auth::loginCheck');

// $routes->get('/register', 'MonitoringBmsController::bms1');
// $routes->get('/(:any)', 'Home::root/$1');
$routes->get('/', 'Login::index');
$routes->group('', ['filter' => 'auth'], function ($routes) {
    $routes->get('/dashboard', 'Dashboard::index');
    $routes->get('/partials/topbar', 'Profile::profile');
    $routes->get('/dashboard-bms', 'MonitoringBmsController::bms1');
    $routes->get('/dashboard-scc-1', 'MonitoringSccController::scc1');
    $routes->get('/dashboard-log', 'MonitoringLogController::log');
    $routes->get('/dashboard-io', 'MonitoringDioController::input_output');
    $routes->get('/dashboard-settings', 'SiteInfoController::site_info');
    $routes->get('/dashboard-rectifier', 'MonitoringDashController::main_dashboard');
    $routes->get('/chart/Chart-data-log', 'MonitoringLogController::log');
    $routes->get('/chart/Chart-data-scc-1', 'MonitoringSccController::scc1');
    $routes->get('/chart/Chart-data-recti', 'MonitoringDashController::main_dashboard');
    $routes->get('/ajax/a-dashboard-bms', 'MonitoringBmsController::ajax_bms1');
    // $routes->get('/public/assets/js/pages/chartjs-data-log.init.js', 'MonitoringLogController::log');

    // ========= Index Dashboard =========
    $routes->get('/index', 'DashboardSccController::dashboard');
    $routes->get('/ajax/a-dashboard-index', 'DashboardSccController::ajax_dashboard_scc');
    $routes->get('/ajax/a-dashboard-scc-1', 'DashboardSccController::ajax_scc1');
    $routes->get('/ajax/a-dashboard-scc-2', 'DashboardSccController::ajax_scc2');
    $routes->get('/ajax/a-dashboard-pv-power', 'DashboardDashController::ajax_main_dashboard_pv');
    $routes->get('/ajax/a-dashboard-batt-power', 'DashboardDashController::ajax_main_dashboard_batt');
    $routes->get('/ajax/a-dashboard-load-power', 'DashboardDashController::ajax_main_dashboard_load');
    $routes->get('/ajax/a-dashboard-io', 'DashboardDioController::ajax_input_output');
    $routes->get('/ajax/a-settings-lvd', 'DashboardSettingsController::ajax_lvd');
    $routes->get('/ajax/a-settings-io', 'DashboardSettingsController::ajax_io');
    $routes->get('/ajax/a-settings-calibration', 'DashboardSettingsController::ajax_calibration');
    $routes->get('/ajax/a-settings-voltage-calibration', 'DashboardSettingsController::ajax_voltage_calibration');
    $routes->get('/ajax/a-dtime', 'DashboardSettingsController::ajax_get_time');
    $routes->get('/reboot', 'SiteInfoController::reboot');
    $routes->post('settanggal', 'SetDateController::settanggal');
    $routes->get('settanggal', 'SetDateController::settanggal');

    $routes->get('/settanggal', 'SetDateController::settanggal');
    $routes->get('/export_csv', 'DataLogController::export_csv_24');
    $routes->post('update', 'SiteInfoController::save_network');
    $routes->get('update', 'SiteInfoController::save_network');
    $routes->post('update_busvol_scale', 'SetScaleController::update_busvol_scale');
    $routes->get('update_busvol_scale', 'SetScaleController::update_busvol_scale');
    $routes->post('update_btscur_scale', 'SetScaleController::update_btscur_scale');
    $routes->get('update_btscur_scale', 'SetScaleController::update_btscur_scale');
    $routes->post('update_vsatcur_scale', 'SetScaleController::update_vsatcur_scale');
    $routes->get('update_vsatcur_scale', 'SetScaleController::update_vsatcur_scale');
    $routes->post('update_fan', 'SetIOController::update_fan');
    $routes->get('update_fan', 'SetIOController::update_fan');
    $routes->post('update_door', 'SetIOController::update_door');
    $routes->get('update_door', 'SetIOController::update_door');
    $routes->post('update_lvd_vsat', 'SetLVDController::update_lvd_vsat');
    $routes->get('update_lvd_vsat', 'SetLVDController::update_lvd_vsat');
    $routes->post('update_lvd_bts', 'SetLVDController::update_lvd_bts');
    $routes->get('update_lvd_bts', 'SetLVDController::update_lvd_bts');
    $routes->add('get_data_zerobusvol', 'SetZeroSpanController::get_data_zerobusvol');  
    $routes->add('get_data_zerobtscur', 'SetZeroSpanController::get_data_zerobtscur');
    $routes->add('get_data_zerovsatcur', 'SetZeroSpanController::get_data_zerovsatcur');
    $routes->add('get_data_spanbusvol', 'SetZeroSpanController::get_data_spanbusvol');
    $routes->add('get_data_spanbtscur', 'SetZeroSpanController::get_data_spanbtscur');
    $routes->add('get_data_spanvsatcur', 'SetZeroSpanController::get_data_spanvsatcur');
    

// Filter on route group
    $routes->get('/logout', 'Auth::logout');
    // $routes->get('/', 'MonitoringDashController::main_dashboard');
    // $routes->get('/(:any)', 'Home::root/$1');
});



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
