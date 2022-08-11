<script>
    setTimeout(function refreshTable() {
        $.ajax({
            url: '<?php echo 'ajax/a-settings-calibration' ?>',
            dataType: 'html',
            data: {
                someparam: 'someval'
            },
            success: function(data) {
                $('#calibration_refresh').find('div').empty().append(data);
                setTimeout(refreshTable, 10000);
                // console.log(data);
            },
        });
    }, 1000);
</script>