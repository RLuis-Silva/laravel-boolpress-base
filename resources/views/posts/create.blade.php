@extends('layouts/main')
@section('main-content')
    <div class="container mb-5">
        <h1>crea un nuovo post!</h1>

        {{-- se errors is true --}}
        @if ($errors->any() )
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            {{-- FORM-titolo --}}
            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">
            </div>

            {{-- FORM-contenuto --}}
            <div class="form-group">
                <label for="body">Description</label>
                <textarea class="form-control" type="text" name="body" id="body"> {{ old('body') }}</textarea>
            </div>

            <div class="form-group">
                <label for="path_img">Post image</label>
                <input type="file" name="path_img" id="path_img" accept="image/*">
            </div>

            {{-- btn SUBMIT --}}
            <div class="form-group">
               <input type="submit" class="btn btn-primary" value="Create post">
            </div>

        </form>
    </div>
@endsection