
<!-- resources/views/pages/role/add.blade.php -->
<div class="modal fade" id="addRoleModal" tabindex="-1" aria-labelledby="addRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addRoleModalLabel">Add Role</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form for adding a new role -->
                <form action="{{ url('pages/role/add') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="roleName" class="form-label">Role Name</label>
                        <input type="text" class="form-control" id="roleName" name="name" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
