<!-- Modal -->
<form id="editForm" method="POST" action="{{ route('admin.contact-us.update', ':id') }}">
    @csrf
    @method('PUT')
    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Edit Status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-4 mt-2">
                            <div class="form-floating form-floating-outline">
                                <span class="badge bg-info" id="status_edit"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-4 mt-2">
                            <div class="form-floating form-floating-outline">
                                <select class="form-select" id="floatingSelectFilled"
                                    aria-label="Floating label select example" name="status">
                                    <option value="PENDING">PENDING</option>
                                    <option value="UNDER REVIEW">UNDER REVIEW</option>
                                    <option value="COMPLETED">COMPLETED</option>
                                    <option value="REJECTED">REJECTED</option>
                                </select>
                                <label for="floatingSelectFilled">Update Status</label>
                                <span class="form-floating-focused"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-4 mt-2">
                            <div class="form-floating form-floating-outline mb-4">
                                <textarea class="form-control h-px-100" id="feedback_edit" name="feedback"></textarea>
                                <label for="feedback_edit">Feedback</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>
