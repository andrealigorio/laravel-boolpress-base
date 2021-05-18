@extends('layouts.app')

@section('title', 'Boolpress')

@section('content')

<h2>Tutti i post:</h2>
    @foreach ($posts as $post)
        <div class="box_post">
            <div class="post_img">
                <img src="" alt="">
            </div>
            <div class="post_text">
                <div class="author">
                    <div class="icon">
                        
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
            </div>
        </div>
    @endforeach

@endsection