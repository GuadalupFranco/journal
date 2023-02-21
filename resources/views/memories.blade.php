@extends('template')

@include('create-modal')

@section('content')
    @if (session()->has('store-success'))
        <?php $titulo = session()->get('title'); ?>
        {!! "<script>
                Swal.fire(
                    'Success!',
                    'The memory {$titulo} was created',
                    'success'
                ) 
            </script>" !!}
    @endif
    @if (session()->has('update-success'))
        <?php $titulo = session()->get('title'); ?>
        {!! "<script>
                Swal.fire(
                    'Success!',
                    'The memory {$titulo} was edited',
                    'success'
                ) 
            </script>" !!}
    @endif
    @if (session()->has('destroy-success'))
        {!! "<script>
                Swal.fire(
                    'Success!',
                    'The memory was deleted',
                    'success'
                ) 
            </script>" !!}
    @endif
    <div class="container my-2 col-md-5">
        <h1 class="text-center">Memories</h1>
        <div class="d-grid gap-2 my-4">
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createModal">
                <i class="bi bi-journal-plus me-2"></i>
                Add memory
            </button>
        </div>
        @forelse($memories as $memory)
            <div class="card text-center my-3">
                <div class="card-header">
                    <p class="card-text text-primary fw-bold">{{ $memory->date }}</p>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $memory->title }}</h5>
                    <p class="card-text">{{ $memory->description }}</p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-warning mx-2" data-bs-toggle="modal" data-bs-target="#editModal-{{ $memory->id }}">
                        <i class="bi bi-journal-text me-2"></i>Edit
                    </button>
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $memory->id }}">
                        <i class="bi bi-journal-x me-2"></i>Delete
                    </button>
                </div>
            </div>
            @include('edit-modal')
            @include('delete-modal')
        @empty
            <div class="container mt-5 col-md-5 text-center">
                <span>
                    <i class="bi bi-exclamation-octagon text-danger"></i>
                    <p class="text-danger">No memories</p>
                </span>
            </div>
        @endforelse
    </div>
@endsection
