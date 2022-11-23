@extends('template')

@section('content')

@if (session()->has('success'))
<?php $titulo = session()->get('title')?>
{!!
    "<script>
        Swal.fire(
            'Success! {$titulo}',
            'The form was send',
            'success'
        ) 
    </script>"
!!}
@endif
<div class="container my-2 col-md-5">
    <h1 class="text-center display-2 mb-5">Register</h1>
    
    {{-- @if (session()->has('title'))
    {{ session()->get('title')}}
        
    @endif --}}
    @if ($errors->any())
       {{--  @foreach ($errors->all() as $error)
        @endforeach --}}
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
            <form method="POST" action="{{ route('saveMemory') }}">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" id="title" name="title" 
                        class="form-control {{$errors->first('title') ? 'border border-danger' : ''}}"
                        value="{{ old('title') }}">
                    <label for="title">Título</label>
                    <p class="text-danger">{{ $errors->first('title')}}</p>
                </div>
                <div class="form-floating mb-3">
                    <textarea id="memory" name="memory" cols="30" rows="5"
                        class="form-control {{$errors->first('memory') ? 'border border-danger' : ''}}">
                        {{ old('memory') }}
                    </textarea>
                    <label for="memory">Memory</label>
                    <p class="text-danger">{{ $errors->first('memory')}}</p>
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