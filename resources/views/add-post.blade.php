
@extends('layouts.master')



@section('content')
  <body style="background-color:black">
    <section style = "padding-top: 60px;">
        <div class = "container">
            <div class= "row">
              <div class = "col-md-6 offset-md-3">
                <div class = "card">
                  <div class= "card-header" style= "background-color:rgba(2,3,10,0.4)">
                    Add Post <a href = "/posts" class="btn btn-success">Show my posts</a>
                  </div>
                  <div class = "card-body" style= "background-color:red">
                    @if(Session::has('post_created'))
                    <div class="alert alert success" role="alert">
                      {{Session::get('post_created')}}
                    </div>
                    @endif
                    <form method = "POST" action = "{{route('post.create')}}">
                      @csrf 
                      <div class = "form-group" style= "background-color:magenta">
                        <label for = "title">Post Title</label>
                        <input type = "text" name = "title" class= "form-control" placeholder="Enter Post Title"/>
                      </div>

                      <div class="form-group" style= "background-color:red">
                        <label for = "body">Post Description</label>
                        <textarea name = "body" class= "form-control" rows= "3" tyle= "background-color:pink" placeholder="Enter Post Details"></textarea>
                      </div>
                      
                      <button type="submit" class="btn btn-success">Add Post</button> 
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>    
    </section>
</body>
@endsection