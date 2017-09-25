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

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Please insert your code</h4>
                </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input name="form_code" class="form-control" rows="5" id="form-code" type="text">
                            <label id="confirmation-label"></label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="close-modal" type="button" class="btn btn-primary" data-dismiss="modal">Close
                        </button>
                        <button id="confirm-code" type="button" class="btn btn-primary">OK</button>
                    </div>
            </div>

        </div>
    </div>

<?php
//<script>
//    $("#confirm-code").click(
//        function () {
//            $("#task_code_modal .close").click()
//        }
//    );
//</script>
?>

<script>
    $('#confirm-code').click(function () {
        $.post( "/pages/corvee_post_handler.php", { form_code: $('#form-code').val() } );
        $('#confirmation-label').text('Code submitted');
    })

    $('#close-modal').click(function () {
        $('#form-code').val('');
        $('#confirmation-label').text('');
    });

</script>
