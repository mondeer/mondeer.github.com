@extends('head')

@section('content')
<div class="row">


  <div class="col-md-10 col-md-offset-2">
      <h1>{{$blog->title}}</h1>
      <p>
        By {{$blog->author}}
      </p>
              <p> Created: {{$blog->created_at->diffForHumans()}}</p>
            <p>
                <span class="fa fa-clock-o"></span> {{ Carbon\Carbon::parse($blog->created_at)->format('d-m-Y') }}
            </p>
            <hr>
          <p class="lead imondblog" align="justify">
              {!! $blog->content !!}
          </p>

  </div>
  <hr>

</div>
@endsection
