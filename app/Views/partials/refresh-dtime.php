<script>
    setTimeout(function refreshTable() {
        $.ajax({
            url: '<?php echo 'ajax/a-dtime' ?>',
            dataType: 'html',
            data: {
                someparam: 'someval'
            },
            success: function(data) {
                $('#dtime').find('div').empty().append(data);
                setTimeout(refreshTable, 1000);
                // console.log(data);
            },
        });
    }, 1000);
</script>