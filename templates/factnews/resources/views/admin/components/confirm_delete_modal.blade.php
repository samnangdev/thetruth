
<!-- Confirm Del Modal -->
<div class="mt-3">
    <div class="modal fade" id="deleteModal" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <hr />
                <div class="modal-body">Are you sure you want to delete this record?
                    This action can't be undone.</div>
                <hr />
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <a id="confirmDelete" class="btn btn-sm btn-danger" href="{{route("admin.user.delete", ['id'=> $users->userid])}}">Confirm</a>
                    <!-- <button type="submit" ></button> -->
                </div>
            </div>
        </div>
    </div>
</div>