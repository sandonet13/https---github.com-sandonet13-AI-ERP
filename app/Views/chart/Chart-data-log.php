<?php
// Inisialisasi nilai variabel awal 
foreach ($log as $data => $s) {
    $arrBusVol[] = [$s->bus_vol];
    $arrBtsVol[] = [$s->bts_vol];
    $arrVsatVol[] = [$s->vsat_vol];
    $arrBtsCur[] = [$s->bts_cur];
    $arrVsatCur[] = [$s->vsat_cur];
    $arrDtime[] = [$s->dtime];
    $allData[] = [$s];
    //print_r($s);
    // dd(); 
}
?>
<!-- Dashboard init -->
<script src="/assets/js/pages/dashboard-crm.init.js"></script>

<!-- App js -->
<script src="/assets/js/app.js"></script>
<script src="/assets/js/jquery-3.6.0.min.js"></script>

<!-- Source untuk JavaScript Pendukung Chart (Local Sources) -->
<script src="/assets/libs/chart.js/chart.min.js"></script>
<script src="/assets/libs/chart.js/chart.js@3.3.2.js"></script>
<script src="/assets/libs/chart.js/luxon@1.27.0.js"></script>
<script src="/assets/libs/chart.js/chartjs-adapter-luxon@1.0.0.js"></script>
<script src="/assets/libs/chart.js/chartjs-plugin-streaming@2.0.0.js"></script>
<script src="/assets/libs/chart.js/FileSaver.min.js"></script>
<script src="/assets/libs/chart.js/chartjs-plugin-crosshair@1.js"></script>

<!-- Source untuk JavaScript Pendukung Chart (Online) -->
<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2"></script>
<script src="https://cdn.jsdelivr.net/npm/luxon@1.27.0"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-luxon@1.0.0"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-streaming@2.0.0"></script> -->

<script>
    //Function Button Save
    $("#save-btn").click(function() {
        $("#myChart").get(0).toBlob(function(blob) {
            saveAs(blob, "Data-Log-SPM");
        });
    });
    // console.log()

    // Macam Macam Constructor
    const ctx = document.getElementById('myChart').getContext('2d');
    const busvol = <?= json_encode($arrBusVol) ?>;
    const btsvol = <?= json_encode($arrBtsVol, JSON_NUMERIC_CHECK) ?>;
    const vsatvol = <?= json_encode($arrVsatVol, JSON_NUMERIC_CHECK) ?>;
    const btscur = <?= json_encode($arrBtsCur, JSON_NUMERIC_CHECK) ?>;
    const vsatcur = <?= json_encode($arrVsatCur, JSON_NUMERIC_CHECK) ?>;
    const dtime = <?= json_encode($arrDtime) ?>;
    const all_data = <?= json_encode($allData) ?>;
    const data_fix =  all_data.slice(0, 288);
    //console.log(data_fix)

    // Warna Background Chart
    const plugin = {
        id: 'myChart',
        beforeDraw: (chart) => {
            const {
                ctx
            } = chart;
            ctx.save();
            ctx.globalCompositeOperation = 'destination-over';
            //ctx.fillStyle = 'rgba(255, 255, 255, 0.9)';
            ctx.fillRect(0, 0, chart.width, chart.height);
            ctx.restore();
        }
    };


var labels_x_axis = data_fix.map(function(e) {
   return Math.floor(new Date(e[0].dtime).getTime());
});
var data_bus_vol = data_fix.map(function(e) {
   return e[0].bus_vol;
});
var data_bts_vol = data_fix.map(function(e) {
   return e[0].bts_vol;
});
var data_vsat_vol = data_fix.map(function(e) {
   return e[0].vsat_vol;
});
var data_btscur = data_fix.map(function(e) {
   return e[0].bts_cur;
});
var data_vsatcur = data_fix.map(function(e) {
   return e[0].vsat_cur;
});
//console.log(labels)

var config = {
   type: 'line',
   data: {
      labels: labels_x_axis,
      datasets: [{
         label: 'Bus Voltage',
         data: data_bus_vol,
         backgroundColor: 'rgba(0, 119, 204, 0.5)'

      },{
         label: 'Bts Voltage',
         data: data_bts_vol,
         backgroundColor: 'rgba(119, 119, 204, 0.5)'
      },{
         label: 'Vsat Voltage',
         data: data_vsat_vol,
         backgroundColor: 'rgba(119, 0, 204, 0.5)'
      },{
         label: 'Bts Current',
         data: data_btscur,
         backgroundColor: 'rgba(119, 0, 0, 0.5)'
      },{
         label: 'Vsat Current',
         data: data_vsatcur,
         backgroundColor: 'rgba(30, 0, 0, 0.5)'
      }
    ]
   },
   options: {
    responsive: true,
    scales: {
      x: {
        type: 'time',
      }
    }
  }
};

    //init / render line
    const myChart = new Chart(
        document.getElementById('myChart'),
        config,

        // setInterval(function()  {

        // }, interval)
    );

</script>