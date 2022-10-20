@extends('template')

@section('content')
<div class="container my-2 col-md-5">
    <h1 class="text-center display-2">Register</h1>
    <div class="card text-center my-5">
        <div class="card-header fw-bold">
            Dear journal
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('saveMemory') }}">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" id="title" name="title" class="form-control" required>
                    <label for="title">Título</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" id="memory" name="memory" cols="30" rows="5" required>
                        </textarea>
                    <label for="memory">Memory</label>
                </div>
        </div>
        <div class="card-footer">
                <a href="{{ route('saveMemory') }}">
                    <button type="submit" class="btn btn-success">Save memory</button>
                </a>
            </form>
        </div>
    </div>
</div>

@endsection