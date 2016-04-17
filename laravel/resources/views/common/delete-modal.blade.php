<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Confirm Deletion</h4>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Not really...</button>
                <form id="form" style="display: inline;" action="" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger">
                        <i class="fa fa-btn fa-trash"></i>Confirm deletion
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
$(document).on("click", ".delete-btn", function() {
    var userId = $(this).data('uid');
    var userName = $(this).data('uname');

    $("#deleteModal .modal-body").html("Do you really want to delete user " + userName + "?");
    $("#deleteModal .modal-footer form").attr('action', "{{ route('user.index') }}/" + userId);
});
</script>