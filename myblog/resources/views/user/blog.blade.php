@extends('user/app')

@section('bg-img',asset('user/img/home-bg.jpg'))

@section('title','Learn Camp')

@section('sub-heading','Learn Together and Grow Together')

@section('main-content')
 <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
             @foreach($posts as $post)
            <a href="{{route('post',$post->slug)}}">
              <h2 class="post-title">
                 {{ $post->title }}
              </h2>
              <h3 class="post-subtitle">
                 {{$post->subtitle}}
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              Created at {{$post->created_at->diffForHumans()}}</p>
              @endforeach
          </div>
          <hr>
        </div>
      </div>
    </div>
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>

@endsection