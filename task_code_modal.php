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
                <form action="#" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <input name="form_code" class="form-control" rows="5" id="comment" type="text">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="close-modal" type="button" class="btn btn-primary" data-dismiss="modal">Close
                        </button>
                        <button id="confirm-code" type="submit" class="btn btn-primary">OK</button>
                    </div>
                </form>
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