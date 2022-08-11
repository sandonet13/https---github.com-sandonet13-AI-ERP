<script>
    setTimeout(function refreshTable() {
        $.ajax({
            url: '<?php echo 'ajax/a-settings-io' ?>',
            dataType: 'html',
            data: {
                someparam: 'someval'
            },
            success: function(data) {
                $('#io').find('div').empty().append(data);
                setTimeout(refreshTable, 10000);
                // console.log(data);
            },
        });
    }, 1000);
</script>