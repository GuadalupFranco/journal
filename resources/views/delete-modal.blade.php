<div class="modal fade" id="deleteModal-{{ $memory->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="deleteModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete memory</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-warning fw-bold" role="alert">
                    Are you sure that you want to delete this memory?
                </div>
                <div class="form-floating mb-3">
                    <input type="text" id="title" name="title"
                        class="form-control" value="{{ $memory->title }}"
                        readonly disabled>
                    <label for="title">Title</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea id="description" name="description" cols="30" style="height: 100px"
                        class="form-control" readonly disabled>
                        {{ $memory->description }}
                    </textarea>
                    <label for="description">Description</label>
                </div>
            </div>
            <div class="modal-footer">
                <form method="POST" action="{{ route('memory.destroy', $memory->id) }}">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="bi bi-trash me-1"></i>
                        Yes, delete it
                    </button>
                </form>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                    <i class="bi bi-arrow-return-left me-1"></i>
                    No, close modal
                </button>
            </div>
        </div>
    </div>
</div>
