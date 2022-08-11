<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Information</h4>
        </div>
        <div class="modal-body">
            The System will be rebooted?
        </div>
        <div class="modal-footer">
            <div class="doc-buttons1">
                <form action="<?php echo site_url('/reboot') ?>">

                    <!--<button type="submit" href="--><?php //echo site_url('verify/logout') ?><!--" class="btn btn-s-sm btn-info">Yes</button>-->
                    <button type="submit" onclick="window.location.href = 'http://google.com';" class="btn btn-s-sm btn-info">Yes</button>
                    <button href="#" class="btn btn-s-sm btn-warning" data-dismiss="modal">Cancel</button>
                </form>

            </div>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->