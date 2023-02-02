<script type="text/javascript">
        var ip = "ws://" + location.host + ":2013/measurement";
        const socket = new WebSocket(ip);
        socket.onopen = function () {
        // console.log("socket Connection Success");
        }
        // message received - show the message in div#messages
        socket.onmessage = function(event) {
        let message = JSON.parse(event.data);
            // console.log(message)
        var data = JSON.parse(event.data);
        var bus_vol = document.getElementById("bus_vol")
        var bts_vol = document.getElementById("bts_vol")
        var vsat_vol = document.getElementById("vsat_vol")
        var bts_cur = document.getElementById("bts_cur")
        var vsat_cur = document.getElementById("vsat_cur")
        var temp = document.getElementById("temp")
        var bts_pow = document.getElementById("bts_pow")
        var vsat_pow = document.getElementById("vsat_pow")
        var tot_pow = document.getElementById("tot_pow")
        var pv_1 = document.getElementById("pv_1")
        var pv_2 = document.getElementById("pv_2")
        var pow = document.getElementById("pv_total")
        bus_vol.innerHTML = data.measurement[0] + ' V';
        bts_vol.innerHTML = data.measurement[1] + ' V';
        vsat_vol.innerHTML = data.measurement[2] + ' V';
        bts_cur.innerHTML = data.measurement[3] + ' A';
        vsat_cur.innerHTML = data.measurement[4] + ' A';
        bts_pow.innerHTML = data.measurement[6] + ' W';
        vsat_pow.innerHTML = data.measurement[7] + ' W';
        tot_pow.innerHTML = data.measurement[8] + ' W';
        temp.innerHTML = data.measurement[5] + ' DegC';
        pv_1.innerHTML = data.measurement[11] + ' W';
        pv_2.innerHTML = data.measurement[12] + ' W';
        pow.innerHTML = data.measurement[13] + ' W';
        }
</script>
