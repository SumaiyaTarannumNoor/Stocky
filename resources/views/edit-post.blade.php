
@extends('layouts.master')



@section('content')
<body style="background-color:black">
    <section style = "padding-top: 60px;">
        <div class = "container">
            <div class= "row">
              <div class = "col-md-6 offset-md-3">
                <div class = "card">
                  <div class= "card-header" style= "background-color:rgba(2,3,10,0.4)">
                    Edit Product <a href = "/posts" class="btn btn-success">Show my Products</a>
                  </div>
                  <div class = "card-body" style= "background-color:red">
                    @if(Session::has('post_updated'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('post_updated')}}
                        </div>
                    @endif
                    <form method = "POST" action = "{{route('post.update')}}">
                      @csrf 
                      <input type = "hidden" name="id" value="{{$post->id}}"/>
                      <div class = "form-group" style= "background-color:magenta">
                        <label for = "title">Product Title</label>
                        <input type = "text" name = "title" class= "form-control" placeholder="Enter Product Title" value="{{$post->title}}"/>
                      </div>

                      <div class="form-group" style= "background-color:red">
                        <label for = "body">Product Description</label>
                        <textarea name = "body" class= "form-control" rows= "3" style= "background-color:pink" placeholder="Enter Product Details">{{$post->body}}</textarea>
                      </div>
                      
                      <button type="submit" class="btn btn-success">Update Product</button> 
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>    
    </section>
</body>
@endsection
