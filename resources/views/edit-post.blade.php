<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="with=decvice-width, initial-scale=1.0"/>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    
    <title>Edit Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <section style = "padding-top: 60px;">
        <div class = "container">
            <div class= "row">
              <div class = "col-md-6 offset-md-3">
                <div class = "card">
                  <div class= "card-header" style= "background-color:rgba(2,3,10,0.4)">
                    Edit Post <a href = "/posts" class="btn btn-success">Show my posts</a>
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
                        <label for = "title">Post Title</label>
                        <input type = "text" name = "title" class= "form-control" placeholder="Enter Post Title" value="{{$post->title}}"/>
                      </div>

                      <div class="form-group" style= "background-color:red">
                        <label for = "body">Post Description</label>
                        <textarea name = "body" class= "form-control" rows= "3" style= "background-color:pink" placeholder="Enter Post Details">{{$post->body}}</textarea>
                      </div>
                      
                      <button type="submit" class="btn btn-success">Update Post</button> 
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>    
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>