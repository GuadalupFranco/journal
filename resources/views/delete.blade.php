@extends('template')

@section('content')
    <div class="container my-2 col-md-5">
        <h1 class="text-center display-2 mb-5">Delete</h1>
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>The form have some errors</strong>
                <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="alert alert-warning fw-bold" role="alert">
            Are you sure that you want to delete the memory?
        </div>
        <div class="card text-center mb-5">
            <div class="card-header fw-bold">
                Dear journal
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('memory.destroy', $memory->id) }}">
                    @csrf @method('DELETE')
                    <div class="form-floating mb-3">
                        <input type="text" id="title" name="title"
                            class="form-control {{ $errors->first('title') ? 'border border-danger' : '' }}"
                            value="{{ $memory->title }}" readonly>
                        <label for="title">Title</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea id="description" name="description" cols="30" style="height: 100px" readonly
                            class="form-control {{ $errors->first('description') ? 'border border-danger' : '' }}">
                            {{ $memory->description }}
                        </textarea>
                        <label for="description">Description</label>
                    </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-danger">Delete memory</button>
                <a href="{{ route('memory.index') }}">
                    <button type="button" class="btn btn-primary">No, take me bak</button>
                </a>
                </form>
            </div>
        </div>
    </div>
@endsection
