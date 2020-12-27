@extends('layout')



@section('contenido')

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @foreach ($posts as $post)
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title" >
                        {{$post->title}}

                    </h2>
                    <h3 class="post-subtitle">
                        {{$post->excerpt}}
                    </h3>
                </a>
                <p class="post-meta">Posted by
                    <a href="#">Start Bootstrap</a>
                    {{$post->published_at->format('M d')}}</p>
            </div>
            <hr>
            @endforeach
            <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
            </div>
        </div>
    </div>
</div>

<hr>

@stop
