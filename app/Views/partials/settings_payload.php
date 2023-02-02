<script type="text/javascript">
        var ip = "ws://" + location.host + ":2013/conf/meas";
        const socket = new WebSocket(ip);
        socket.onopen = function () {
        // console.log("socket Connection Success");
        }
        // message received - show the message in div#messages
        socket.onmessage = function(event) {
        let message = JSON.parse(event.data);
            // console.log(message)
        var data = JSON.parse(event.data);
        document.getElementById("bus_volt_eu").value = data.conf_meas_eu[0];
        document.getElementById("bts_curr_eu").value = data.conf_meas_eu[3];
        document.getElementById("vsat_curr_eu").value = data.conf_meas_eu[4];
        document.getElementById("bus_volt_eu_maint").value = data.conf_meas_eu[0];
        document.getElementById("bts_curr_eu_maint").value = data.conf_meas_eu[3];
        document.getElementById("vsat_curr_eu_maint").value = data.conf_meas_eu[4];
        document.getElementById("bus_volt_scale_fb").value = data.conf_meas_scale_fb[0]
        document.getElementById("bts_curr_scale_fb").value = data.conf_meas_scale_fb[1]
        document.getElementById("vsat_curr_scale_fb").value = data.conf_meas_scale_fb[2]
        document.getElementById("bus_volt_scale_fb_maint").value = data.conf_meas_scale_fb[0]
        document.getElementById("bts_curr_scale_fb_maint").value = data.conf_meas_scale_fb[1]
        document.getElementById("vsat_curr_scale_fb_maint").value = data.conf_meas_scale_fb[2]
        document.getElementById("bus_volt_raw").value = data.conf_meas_raw[0]
        document.getElementById("bts_curr_raw").value = data.conf_meas_raw[3]
        document.getElementById("vsat_curr_raw").value = data.conf_meas_raw[4]
        document.getElementById("lvd_vsat_disconn_fb").value = data.conf_lvd_disconnect_fb[0]
        document.getElementById("lvd_vsat_reconn_fb").value = data.conf_lvd_reconnect_fb[0]
        document.getElementById("lvd_bts_disconn_fb").value = data.conf_lvd_disconnect_fb[1]
        document.getElementById("lvd_bts_reconn_fb").value = data.conf_lvd_reconnect_fb[1]
        }
</script>
