<script type="text/javascript">
        var ip = "ws://" + location.host + ":2013/scc1";
        const socket = new WebSocket(ip);
        socket.onopen = function () {
        // console.log("socket Connection Success");
        }
        // message received - show the message in div#messages
        socket.onmessage = function(event) {
        let message = JSON.parse(event.data);
            // console.log(message)
        var data = JSON.parse(event.data);
        var scc1_vin = document.getElementById("scc1_vin")
        var scc1_vout = document.getElementById("scc1_vout")
        var scc1_iin = document.getElementById("scc1_iin")
        var scc1_iout = document.getElementById("scc1_iout")
        var scc1_state = document.getElementById("scc1_state")
        var scc1_ah = document.getElementById("scc1_ah")
        var scc1_kwh = document.getElementById("scc1_kwh")
        var scc1_max_voc = document.getElementById("scc1_max_voc")
        var scc1_ah_total = document.getElementById("scc1_ah_total")
        var scc1_kwh_total = document.getElementById("scc1_kwh_total")
        var scc2_vin = document.getElementById("scc2_vin")
        var scc2_vout = document.getElementById("scc2_vout")
        var scc2_iin = document.getElementById("scc2_iin")
        var scc2_iout = document.getElementById("scc2_iout")
        var scc2_state = document.getElementById("scc2_state")
        var scc2_ah = document.getElementById("scc2_ah")
        var scc2_kwh = document.getElementById("scc2_kwh")
        var scc2_max_voc = document.getElementById("scc2_max_voc")
        var scc2_ah_total = document.getElementById("scc2_ah_total")
        var scc2_kwh_total = document.getElementById("scc2_kwh_total")
        scc1_vin.innerHTML = data.SCC1[0] + ' V';
        scc1_vout.innerHTML = data.SCC1[1] + ' V';
        scc1_iin.innerHTML = data.SCC1[2] + ' A';
        scc1_iout.innerHTML = data.SCC1[3] + ' A';
        scc1_state.innerHTML = data.SCC1[4];
        scc1_ah.innerHTML = data.SCC1[5] + ' Ah';
        scc1_kwh.innerHTML = data.SCC1[6] + ' kWh';
        scc1_max_voc.innerHTML = data.SCC1[7] + ' V';
        scc1_ah_total.innerHTML = data.SCC1[8] + ' Ah';
        scc1_kwh_total.innerHTML = data.SCC1[9] + ' kWh';
        scc2_vin.innerHTML = data.SCC1[10] + ' V';
        scc2_vout.innerHTML = data.SCC1[11] + ' V';
        scc2_iin.innerHTML = data.SCC1[12] + ' A';
        scc2_iout.innerHTML = data.SCC1[13] + ' A';
        scc2_state.innerHTML = data.SCC1[14];
        scc2_ah.innerHTML = data.SCC1[15] + ' Ah';
        scc2_kwh.innerHTML = data.SCC1[16] + ' kWh';
        scc2_max_voc.innerHTML = data.SCC1[17] + ' V';
        scc2_ah_total.innerHTML = data.SCC1[18] + ' Ah';
        scc2_kwh_total.innerHTML = data.SCC1[19] + ' kWh';
        }
</script>
