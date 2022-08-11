<script>
    setTimeout(function refreshTable() {
        $.ajax({
            url: '<?php echo 'ajax/a-settings-lvd' ?>',
            dataType: 'html',
            data: {
                someparam: 'someval'
            },
            success: function(data) {
                $('#lvd_refresh').find('div').empty().append(data);
                setTimeout(refreshTable, 10000);
                // console.log(data);
            },
        });
    }, 1000);
</script>