@extends('head')

@section('content')
  <div class="row">
    <hr>
    <div class="col-md-3">
      <h2>  Blogs ({{$blogs->count()}})</h2>
    </div>
    <div class="col-md-6">
      @foreach($blogs as $blog)
            <div class="col-sm-12" style="color:black; font-size:12; ">
                <h1><a href="/viewblog/{{$blog->id}}">{{$blog->title}}</h1>
                <em style="color:gray; ">Created by {{$blog->author}}</em><br>
                <p class="imondblack">{!! str_limit($blog->content, $limit = 150, $end = "...") !!}</p>
                <p> Created: {{$blog->created_at->diffForHumans()}}</p>
                {{ Carbon\Carbon::parse($blog->created_at)->format('d-m-Y') }}</a>

                <hr>
            </div>
        @endforeach
    </div>
  </div>
@endsection
