@extends('layouts.app')

@section('title', 'Inserimento post')

@section('content')
<div class="my_container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="my_form" action="{{route('posts.store')}}" method="post">
        @csrf
        
        @method('POST')
        <div class="form-group">
            <label for="name">Author</label>
            <input type="text" class="form-control" name="author" id="author" placeholder="Author" value={{old('author')}}>
        </div>
        <div class="form-group">
            <label for="description">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Title" {{old('title')}}>
        </div>
        <div class="form-group">
            <label for="size">Content</label>
            <input type="text" class="form-control" name="content" id="content" placeholder="Content" {{old('content')}}>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" class="form-control" name="image" id="image" placeholder="Image" {{old('image')}}>
        </div>
        <div class="form-group">
            <label for="color">Icon</label>
            <input type="text" class="form-control" name="icon" id="icon" placeholder="Icon" {{old('icon')}}>
        </div>
        
        <button type="submit" class="btn">ADD POST</button>
    </form>
</div>
@endsection