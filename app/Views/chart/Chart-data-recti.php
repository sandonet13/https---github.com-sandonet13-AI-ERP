<?php
// Inisialisasi nilai variabel awal 
foreach ($power as $power_data => $s) {
    $arrValue[] = [$s->value];
    //print_r($s);
    // dd(); 
}
foreach ($batt as $batt_data => $s2) {
   $arrValue2[] = [$s2->value];
   //print_r($s);
   // dd(); 
}
foreach ($load as $load_data => $s3) {
  $arrValue3[] = [$s3->value];
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
<!-- Source untuk JavaScript Pendukung Chart (Online) -->
<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2"></script>
<script src="https://cdn.jsdelivr.net/npm/luxon@1.27.0"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-luxon@1.0.0"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-streaming@2.0.0"></script> -->

<script>

    const ctx = document.getElementById('myChart1').getContext('2d');
    const pv1 = <?= json_encode($arrValue[0]) ?>;
    const pv2 = <?= json_encode($arrValue[1]) ?>;
    const totalpv = <?= json_encode($arrValue[2]) ?>;

    var pv1_parse = parseInt(pv1);
    var pv2_parse = parseInt(pv2);
    var totalpv_parse = parseInt(totalpv);
    
    //console.log(parseInt(kwhtot));


    // console.log()
    // Warna Background Chart
    const plugin = {
        id: 'myChart1',
        beforeDraw: (chart) => {
            const {
                ctx
            } = chart;
            ctx.save();
            ctx.globalCompositeOperation = 'destination-over';
            ctx.fillStyle = 'rgba(255, 255, 255, 0.9)';
            ctx.fillRect(0, 0, chart.width, chart.height);
            ctx.restore();
        }
    };


   const config = {
   type: 'line',
   data: {
      datasets: [
         {
         data: [],
         backgroundColor: 'rgba(0, 119, 204, 0.5)',
         label: "PV1"
         },
         {
         data: [],
         backgroundColor: 'rgba(119, 119, 204, 0.5)',
         label: "PV2"

         },
         {
         data: [],
         backgroundColor: 'rgba(119, 119, 0, 0.5)',
         label: "Total PV"

         }
      ]
   },
   options: {
    scales: {
      y : {
            min: 0,
            //max: 1,
        },
      x: {
        type: 'realtime',
        realtime: {
          duration: 60000,
          refresh: 2000,
          delay: 2500,
          onRefresh: function(chart) {
            chart.data.datasets[0].data.push({
              x: Date.now(),
              y: pv1_parse
            });
            chart.data.datasets[1].data.push({
              x: Date.now(),
              y: pv2_parse
            });
            chart.data.datasets[2].data.push({
              x: Date.now(),
              y: totalpv_parse
            });
          }
        }
      }
    }
  }
};

    //init / render line
    const myChart1 = new Chart(
        document.getElementById('myChart1'),
        config,
    );

</script>


<script>

    const ctx2 = document.getElementById('myChart2').getContext('2d');
    const batt_vol = <?= json_encode($arrValue2[0]) ?>;
    const batt_cur = <?= json_encode($arrValue2[1]) ?>;
    const batt_pow = <?= json_encode($arrValue2[2]) ?>;
    const batt_soc = <?= json_encode($arrValue2[3]) ?>;
    var batt_vol_parse = parseInt(batt_vol);
    var batt_cur_parse = parseInt(batt_cur);
    var batt_pow_parse = parseInt(batt_pow);
    var batt_soc_parse = parseInt(batt_soc);


    
    //console.log(parseInt(kwhtot));


    // console.log()
    // Warna Background Chart
    const plugin2 = {
        id: 'myChart2',
        beforeDraw: (chart) => {
            const {
                ctx
            } = chart;
            ctx.save();
            ctx.globalCompositeOperation = 'destination-over';
            ctx.fillStyle = 'rgba(255, 255, 255, 0.9)';
            ctx.fillRect(0, 0, chart.width, chart.height);
            ctx.restore();
        }
    };


const config2 = {
  type: 'line',
  data: {
    datasets: [
      {
        data: [],
        backgroundColor: 'rgba(0, 119, 204, 0.5)',
        label: "Voltage"
      },
      {
        data: [],
        backgroundColor: 'rgba(119, 119, 204, 0.5)',
        label: "Current"

      },
      {
        data: [],
        backgroundColor: 'rgba(119, 119, 0, 0.5)',
        label: "Power"

      },
      {
        data: [],
        backgroundColor: 'rgba(119, 20, 204, 0.5)',
        label: "Soc"

      }
    ]
  },
   options: {
    scales: {
      y : {
            min: 0,
            //max: 1,
        },
      x: {
        type: 'realtime',
        realtime: {
          duration: 60000,
          refresh: 2000,
          delay: 2500,
          onRefresh: function(chart) {
            chart.data.datasets[0].data.push({
              x: Date.now(),
              y: batt_vol_parse
            });
            chart.data.datasets[1].data.push({
              x: Date.now(),
              y: batt_cur_parse
            });
            chart.data.datasets[2].data.push({
              x: Date.now(),
              y: batt_pow_parse
            });
            chart.data.datasets[3].data.push({
              x: Date.now(),
              y: batt_soc_parse
            });
          }
        }
      }
    }
  }
};

    //init / render line
    const myChart2 = new Chart(
        document.getElementById('myChart2'),
        config2,
    );

</script>


<script>

    const ctx3 = document.getElementById('myChart3').getContext('2d');
    const busvol = <?= json_encode($arrValue3[0]) ?>;
    const btsvol = <?= json_encode($arrValue3[1]) ?>;
    const vsatvol = <?= json_encode($arrValue3[2]) ?>;
    const btscur = <?= json_encode($arrValue3[3]) ?>;
    const vsatcur = <?= json_encode($arrValue3[4]) ?>;
    const temp = <?= json_encode($arrValue3[5]) ?>;
    const btspow = <?= json_encode($arrValue3[6]) ?>;
    const vsatpow = <?= json_encode($arrValue3[7]) ?>;
    const totpow = <?= json_encode($arrValue3[8]) ?>;
    var busvol_parse = parseInt(busvol);
    var btsvol_parse = parseInt(btsvol);
    var vsatvol_parse = parseInt(vsatvol);
    var btscur_parse = parseInt(btscur);
    var vsatcur_parse = parseInt(vsatcur);
    var temp_parse = parseInt(temp);
    var btspow_parse = parseInt(btspow);
    var vsatpow_parse = parseInt(vsatpow);
    var totpow_parse = parseInt(totpow);



    
    //console.log(parseInt(kwhtot));


    // console.log()
    // Warna Background Chart
    const plugin3 = {
        id: 'myChart3',
        beforeDraw: (chart) => {
            const {
                ctx
            } = chart;
            ctx.save();
            ctx.globalCompositeOperation = 'destination-over';
            ctx.fillStyle = 'rgba(255, 255, 255, 0.9)';
            ctx.fillRect(0, 0, chart.width, chart.height);
            ctx.restore();
        }
    };


const config3 = {
  type: 'line',
  data: {
    datasets: [
      {
        data: [],
        backgroundColor: 'rgba(0, 119, 204, 0.5)',
        label: "Bus Voltage"
      },
      {
        data: [],
        backgroundColor: 'rgba(119, 119, 204, 0.5)',
        label: "BTS Voltage"

      },
      {
        data: [],
        backgroundColor: 'rgba(119, 200, 0, 0.5)',
        label: "Vsat Voltage"

      },
      {
        data: [],
        backgroundColor: 'rgba(119, 20, 204, 0.5)',
        label: "BTS Current"

      },
      {
        data: [],
        backgroundColor: 'rgba(0, 119, 0, 0.5)',
        label: "Vsat Current"

      },
      {
        data: [],
        backgroundColor: 'rgba(2000, 20, 0, 0.5)',
        label: "Temperature"

      },
      {
        data: [],
        backgroundColor: 'rgba(32, 20, 204, 0.5)',
        label: "BTS Power"

      },
      {
        data: [],
        backgroundColor: 'rgba(32, 20, 204, 0.5)',
        label: "Vsat Power"

      },
      {
        data: [],
        backgroundColor: 'rgba(110, 20, 0, 0.5)',
        label: "Total Power"

      }
    ]
  },
   options: {
    scales: {
      y : {
            min: 0,
            //max: 1,
        },
      x: {
        type: 'realtime',
        realtime: {
          duration: 60000,
          refresh: 2000,
          delay: 2500,
          onRefresh: function(chart) {
            chart.data.datasets[0].data.push({
              x: Date.now(),
              y: busvol_parse
            });
            chart.data.datasets[1].data.push({
              x: Date.now(),
              y: btsvol_parse
            });
            chart.data.datasets[2].data.push({
              x: Date.now(),
              y: vsatvol_parse
            });
            chart.data.datasets[3].data.push({
              x: Date.now(),
              y: btscur_parse
            });
            chart.data.datasets[4].data.push({
              x: Date.now(),
              y: vsatcur_parse
            });
            chart.data.datasets[5].data.push({
              x: Date.now(),
              y: temp_parse
            });
            chart.data.datasets[6].data.push({
              x: Date.now(),
              y: btspow_parse
            });
            chart.data.datasets[7].data.push({
              x: Date.now(),
              y: vsatpow_parse
            });
            chart.data.datasets[8].data.push({
              x: Date.now(),
              y: totpow_parse
            });
          }
        }
      }
    }
  }
};

    //init / render line
    const myChart3 = new Chart(
        document.getElementById('myChart3'),
        config3,
    );

</script>