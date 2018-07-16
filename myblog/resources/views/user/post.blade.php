@extends('user/app')

@section('bg-img',asset('user/img/post-bg.jpg'))

@section('title',$post->title)

@section('sub-heading',$post->subtitle)



@section('main-content')

<!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <small>Created at {{$post->created_at->diffForHumans()}}</small>
            
               
               @foreach($post->category as $cat)


               <small class="pull-right" style="margin-right: 20px;">{{$cat->name}}</small>

               @endforeach



             
            {!! htmlspecialchars_decode($post->body) !!}
            
          </div>
        </div>
      </div>
    </article>


@endsection