<!-- Modal Create And Edit -->
<div class="modal fade" id="modal-md">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="itemForm" name="itemForm" method="post">
                @csrf
                <input type="hidden" name="berita_id" id="berita_id">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="judul">News Title<span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm mr-2" name="judul" id="judul">
                    </div>
                    <div class="form-group">
                        <label for="isi">News Content<span class="text-danger">*</span></label>
                        <textarea class="form-control" id="isi" name="isi" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="saveBtn">Save changes</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
