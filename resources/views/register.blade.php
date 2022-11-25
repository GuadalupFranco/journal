@extends('template')

@section('content')
    @if (session()->has('create-success'))
        <?php $titulo = session()->get('title'); ?>
        {!! "<script>
                Swal.fire(
                    'Success!',
                    'The memory {$titulo} was created',
                    'success'
                ) 
            </script>" !!}
    @endif
    <div class="container my-2 col-md-5">
        <h1 class="text-center display-2 mb-5">Register</h1>
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>The form have some errors</strong>
                <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card text-center mb-5">
            <div class="card-header fw-bold">
                Dear journal
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('memory.store') }}">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" id="title" name="title"
                            class="form-control {{ $errors->first('title') ? 'border border-danger' : '' }}"
                            value="{{ old('title') }}">
                        <label for="title">Title</label>
                        <p class="text-danger">{{ $errors->first('title') }}</p>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea id="description" name="description" cols="30" style="height: 100px"
                            class="form-control {{ $errors->first('description') ? 'border border-danger' : '' }}">
                            {{ old('description') }}
                        </textarea>
                        <label for="description">Description</label>
                        <p class="text-danger">{{ $errors->first('description') }}</p>
                    </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">
                    <i class="bi bi-save me-1"></i>
                    Save memory
                </button>
                </form>
            </div>
        </div>
    </div>
@endsection
