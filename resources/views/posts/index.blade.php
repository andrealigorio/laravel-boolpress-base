@extends('layouts.app')

@section('title', 'Boolpress')

@section('content')

<div class="my_container">
    <h2>Tutti i post:</h2>
        @foreach ($posts as $post)
            <div class="box_post">
                <div class="post_img">
                    <img src="{{$post['image']}}" alt="">
                </div>
                <div class="post_text">
                    <div class="author">
                        <div class="icon">
                            <img src="{{$post['icon']}}" alt="">
                        </div>
                        <div class="name">
                            {{$post['author']}}
                        </div>
                    </div>
                    <div class="post_date">
                        {{$post['created_at']}}
                    </div>
                    <div class="post_title">
                        {{$post['title']}}
                    </div>
                    <div class="post_content">
                        {{$post['content']}}
                    </div>
                    <a class="btn" href="{{route('posts.create')}}">UPDATE</a>
                    <form action="" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">DELETE</button>
                    </form>
                </div>
            </div>
        @endforeach
</div>

@endsection