<script type="text/javascript">
        var ip = "ws://" + location.host + ":2013/conf/dido";
        const socket_dido = new WebSocket(ip);
        socket_dido.onopen = function () {
        // console.log("socket Connection Success");
        }
        // message received - show the message in div#messages
        socket_dido.onmessage = function(event) {
        let message = JSON.parse(event.data);
            // console.log(message)
        var data = JSON.parse(event.data);
        var di_fan_enable_fb = document.getElementById("di_fan_enable_fb")
        var di_fan_trigger_fb = document.getElementById("di_fan_trigger_fb")
        var di_door_enable_fb = document.getElementById("di_door_enable_fb")
        var di_door_trigger_fb = document.getElementById("di_door_trigger_fb")
        di_fan_enable_fb.innerHTML = data.di_fan[0];
        di_fan_trigger_fb.innerHTML = data.di_fan[1];
        di_door_enable_fb.innerHTML = data.di_door[0];
        di_door_trigger_fb.innerHTML = data.di_door[1];

        }
</script>
