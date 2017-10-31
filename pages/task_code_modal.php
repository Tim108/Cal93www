<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 24/09/2017
 * Time: 14:55
 */
?>

<!-- Modal -->
<div id="task_code_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <form action="" method="post">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Please insert your code</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input name="form_code" class="form-control" rows="5" id="form-code" type="text">
                    </div>
                </div>
                <div class="modal-footer">
                    <input id="confirm-code" type="submit" class="btn btn-primary">
                </div>
            </div>
        </form>

    </div>
</div>

<script>
    $('#confirm-code').click(function () {
        $.post("index.php", {form_code: $('#form-code').val()});
        $('#confirmation-label').text('Code submitted');
        console.log("clicked");
    })

    $('#close-modal').click(function () {
        $('#form-code').val('');
        $('#confirmation-label').text('');
    });

</script>
