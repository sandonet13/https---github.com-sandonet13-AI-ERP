<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="/" class="logo logo-dark">
            <span class="logo-sm">
                <img src="/assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="/assets/images/logo-dark.png" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="/" class="logo logo-light">
            <span class="logo-sm">
                <img src="/assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="/assets/images/logo-light.png" alt="">
            </span>
            <div id="dtime">
                <div><span class="logo-lg"><?php echo $dtime ?></span></div>
                <?php echo view('partials/refresh-dtime'); ?> 
            </div>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="dashboard-rectifier" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-home-2-line"></i> <span data-key="t-index">Dashboards</span>
                    </a>
                </li> <!-- end Dashboard Menu -->

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-monitoring">Monitoring</span>
                    </a>
                </li>
                <div class="collapse menu-dropdown" id="sidebarApps">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="dashboard-scc-1" class="nav-link" data-key="t-scc"> Solar Charger Controller </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="#sidebarSCC" class="nav-link" data-key="t-scc" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSCC"> Solar Charger Controller </a>
                            <div class="collapse menu-dropdown" id="sidebarSCC">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="dashboard-scc-1" class="nav-link" data-key="t-scc-1"> SCC1 </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-scc-2" class="nav-link" data-key="t-scc-2"> SCC2 </a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
                        <li class="nav-item">
                            <a href="dashboard-io" class="nav-link" data-key="t-rectifier"> Input Output </a>
                        </li>
                        <li class="nav-item">
                            <a href="dashboard-bms" class="nav-link" data-key="t-rectifier"> Battery Monitoring </a>
                        </li>
                    </ul>
                    <!-- end Dashboard Config -->
                </div>

                <!-- ================================================================================== -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="dashboard-log" role="button" aria-expanded="false" aria-controls="sidebarConfig">
                        <i class="ri-settings-3-line"></i> <span data-key="t-config">Data Log</span>
                    </a>
                </li>

                <!-- ================================================================================== -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="dashboard-settings" role="button" aria-expanded="false" aria-controls="sidebarConfig">
                        <i class="ri-settings-2-line"></i> <span data-key="t-config">Settings</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Sidebar -->
</div>


<div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>