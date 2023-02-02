<script type="text/javascript">
        var ip = "ws://" + location.host + ":2013/dido";
        const socket_dido_alm = new WebSocket(ip);
        socket_dido_alm.onopen = function () {
        // console.log("socket Connection Success");
        }
        // message received - show the message in div#messages
        socket_dido_alm.onmessage = function(event) {
        let message = JSON.parse(event.data);
            // console.log(message)
        var data = JSON.parse(event.data);
        document.getElementById("lvd_vsat_disconnect").innerHTML = data.lvd_disconnect[0];
        document.getElementById("lvd_vsat_reconnect").innerHTML = data.lvd_reconnect[0];
        document.getElementById("lvd_bts_disconnect").innerHTML = data.lvd_disconnect[1];
        document.getElementById("lvd_bts_reconnect").innerHTML = data.lvd_reconnect[1];

        // Fan alarm
        if (data.di_fan_alm[2] == "Disable")  {
          document.getElementById("di_fan_ena").innerHTML = "Disable";
          document.getElementById("di_fan_ena_class").classList = "mdi mdi-close";
          document.getElementById("di_fan_alm_class").classList = "";
          document.getElementById("di_fan_ena_class_1").classList = "mdi mdi-close";
          document.getElementById("di_fan_ena_1").innerHTML = "Disable";
          document.getElementById("di_fan_state").innerHTML = "";
        }
        else {
          document.getElementById("di_fan_ena").innerHTML = "";
          document.getElementById("di_fan_ena_class").classList = "mdi mdi-alarm text-success";
          if(data.di_fan_alm[1] == false){
            document.getElementById("di_fan_ena_class_1").classList = "text-decoration text-success";
            document.getElementById("di_fan_ena_1").innerHTML = "";
            document.getElementById("di_fan_state").innerHTML = "Close";
          }
          else {
            document.getElementById("di_fan_ena_class_1").classList = "text-decoration text-danger";
            document.getElementById("di_fan_state").innerHTML = "Open";
            document.getElementById("di_fan_ena_1").innerHTML = "";
          }
          if(data.di_fan_alm[1] == 0){
            document.getElementById("di_fan_alm_class").classList = "mdi mdi-check";
          }
          else {
            document.getElementById("di_fan_alm_class").classList = "fa fa-bell text-danger blink";
          }

        }

        // Door Alarm
        if (data.di_door_alm[2] == "Disable")  {
          document.getElementById("di_door_ena").innerHTML = "Disable";
          document.getElementById("di_door_ena_class").classList = "mdi mdi-close";
          document.getElementById("di_door_alm_class").classList = "";
          document.getElementById("di_door_ena_class_1").classList = "mdi mdi-close";
          document.getElementById("di_door_ena_1").innerHTML = "Disable";
          document.getElementById("di_door_state").innerHTML = "";
        }
        else {
          document.getElementById("di_door_ena").innerHTML = "";
          document.getElementById("di_door_ena_class").classList = "mdi mdi-alarm text-success";
          if(data.di_door_alm[1] == false){
            document.getElementById("di_door_ena_class_1").classList = "text-decoration text-success";
            document.getElementById("di_door_ena_1").innerHTML = "";
            document.getElementById("di_door_state").innerHTML = "Close";
          }
          else {
            document.getElementById("di_door_ena_class_1").classList = "text-decoration text-danger";
            document.getElementById("di_door_state").innerHTML = "Open";
            document.getElementById("di_door_ena_1").innerHTML = "";
          }
          if(data.di_door_alm[1] == 0){
            document.getElementById("di_door_alm_class").classList = "mdi mdi-check";
          }
          else {
            document.getElementById("di_door_alm_class").classList = "fa fa-bell text-danger blink";
          }

        }

        //VSAT LVD
        if(data.di_lvd_vsat_alm == 0){
          document.getElementById("di_vsat_alm_class").classList = "text-decoration text-success";
          document.getElementById("di_vsat_alm").innerHTML = "Connect";
          document.getElementById("di_vsat_alm_class_1").classList = "mdi mdi-check";
        }
        else {
          document.getElementById("di_vsat_alm_class").classList = "text-decoration text-danger";
          document.getElementById("di_vsat_alm").innerHTML = "Disconnect";
          document.getElementById("di_vsat_alm_class_1").classList = "mdi mdi-close";
        }

        //BTS LVD
        if(data.di_lvd_bts_alm == 0){
          document.getElementById("di_bts_alm_class").classList = "text-decoration text-success";
          document.getElementById("di_bts_alm").innerHTML = "Connect";
          document.getElementById("di_bts_alm_class_1").classList = "mdi mdi-check";
        }
        else {
          document.getElementById("di_bts_alm_class").classList = "text-decoration text-danger";
          document.getElementById("di_bts_alm").innerHTML = "Disconnect";
          document.getElementById("di_bts_alm_class_1").classList = "mdi mdi-close";
        }

      }
</script>
