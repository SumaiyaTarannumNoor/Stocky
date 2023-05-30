
@extends('layouts.master')



@section('content')
  <body style= "background-color:blue">
    <section style = "padding-top: 60px;">
        <div class = "container">
            <div class= "row">
              <div class = "col-md-6 offset-md-3">
                <div class = "card">
                  <div class= "card-header" style= "background-color:rgba(2,3,10,0.4)">
                    আইটেম এর বর্ণনা <a href = "/posts" class="btn btn-success">আইটেম দেখুন</a>
                  </div>
                  <div class = "card-body" style= "background-color:red">
                    <h1>{{$post->title}}</h1>
                    <p>{{$post->body}}</p>
                  </div>
                </div>
              </div>
            </div>
        </div>    
    </section>
</body>
@endsection
