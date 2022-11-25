@extends('template')

@section('content')
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
                    <a href="{{ route('memory.edit', $memory->id) }}" class="btn btn-warning mx-2">
                        <i class="bi bi-journal-text"></i>
                    </a>
                    <a href="{{ route('memory.delete', $memory->id) }}" class="btn btn-danger">
                        <i class="bi bi-journal-x"></i>
                    </a>
                </div>
            </div>
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
