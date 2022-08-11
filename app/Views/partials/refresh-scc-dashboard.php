<script>
    // setTimeout(function refreshTable() {
    //     $.ajax({
    //         url: '<?php echo 'ajax/a-' . uri_string(); ?>',
    //         dataType: 'html',
    //         data: {
    //             someparam: 'someval'
    //         },
    //         success: function(data) {
    //             $('#scc').find('div').empty().append(data);
    //             setTimeout(refreshTable, 1000);
    //             console.log(data);
    //         },
    //     });
    // }, 1000);

    function loadlink() {
        $('#scc').load('ajax/a-dashboard-index', function() {
            $(this).unwrap();
        });
    }

    loadlink(); // This will run on page load
    setInterval(function() {
        loadlink() // this will run after every 1 seconds
    }, 1000);
</script>