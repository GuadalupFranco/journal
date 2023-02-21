<div class="modal fade" id="editModal-{{ $memory->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="editModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit memory</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('memory.update', $memory->id) }}">
                    @csrf @method('PUT')
                    <div class="form-floating mb-3">
                        <input type="text" id="title" name="title"
                            class="form-control {{ $errors->first('title') ? 'border border-danger' : '' }}"
                            value="{{$memory->title}}">
                        <label for="title">Title</label>
                        <p class="text-danger">{{ $errors->first('title') }}</p>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea id="description" name="description" cols="30" style="height: 100px"
                            class="form-control {{ $errors->first('description') ? 'border border-danger' : '' }}">
                            {{ $memory->description }}
                        </textarea>
                        <label for="description">Description</label>
                        <p class="text-danger">{{ $errors->first('description') }}</p>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">
                    <i class="bi bi-save me-1"></i>
                    Update memory
                </button>
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
