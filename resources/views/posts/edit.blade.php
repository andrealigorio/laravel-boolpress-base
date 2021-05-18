@extends('layouts.app')

@section('title', 'Modifica post')

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
    <form class="my_form" action="{{route('posts.update', $post['id'])}}" method="post">
        @csrf
        
        @method('PUT')
        <div class="form-group">
            <label for="name">Author</label>
            <input type="text" class="form-control" name="author" id="author" placeholder="Author" value={{$post->author}}>
        </div>
        <div class="form-group">
            <label for="description">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Title" value={{$post->title}}>
        </div>
        <div class="form-group">
            <label for="size">Content</label>
            <input type="text" class="form-control" name="content" id="content" placeholder="Content" value={{$post->content}}>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" class="form-control" name="image" id="image" placeholder="Image" value={{$post->image}}>
        </div>
        <div class="form-group">
            <label for="color">Icon</label>
            <input type="text" class="form-control" name="icon" id="icon" placeholder="Icon" value={{$post->icon}}>
        </div>
        
        <button type="submit" class="btn">EDIT POST</button>
    </form>
</div>
@endsection