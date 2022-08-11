<?= $this->include('partials/main') ?>

<head>

    <?php echo view('partials/title-meta', array('title' => 'Dashboard')); ?>

    <link href="/assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <?= $this->include('partials/head-css') ?>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?= $this->include('partials/menu') ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->

        <div id="scc" class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <!-- =================================================== -->
                    <!-- Content index.php ada di ajax/a-dashboard-index -->
                    <!-- =================================================== -->

                </div>
                <!-- End Page-content -->
                <?= $this->include('partials/footer') ?>
            </div>
            <!-- end main content-->
        </div>
        <!-- END layout-wrapper -->

        <?= $this->include('partials/vendor-scripts') ?>

        <!-- apexcharts -->
        <script src="/assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- prismjs plugin -->
        <script src="/assets/libs/prismjs/prism.js"></script>

        <!-- Swiper Js -->
        <script src="/assets/libs/swiper/swiper-bundle.min.js"></script>

        <!-- CRM js -->
        <script src="/assets/js/pages/dashboard-crypto.init.js"></script>

        <!-- App js -->
        <script src="/assets/js/app.js"></script>

        <!-- echarts js -->
        <script src="/assets/libs/echarts/echarts.min.js"></script>

        <!-- echarts init -->
        <script src="/assets/js/pages/echarts.init.js"></script>

        <!-- Ajax -->
        <script src="/assets/js/jquery-3.6.0.min.js"></script>
        <?php echo view('partials/refresh-scc-dashboard'); ?>
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> -->

</body>

</html>