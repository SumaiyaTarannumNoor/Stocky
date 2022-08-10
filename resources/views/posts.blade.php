<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="with=decvice-width, initial-scale=1.0"/>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>All Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body style="background-color:black">
    <section style = "padding-top: 70px;">
    <div id="main">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
        <div class = "container" style="background-color:#00FFFF">
            <div class= "row">
              <div class = "col-md-12">
                <div class = "card">
                  <div class= "card-header">
                    All Post <a href = "/add-post" class="btn btn-success">Add New Post</a>
                  </div>
                  <div class = "card-body">
                    @if(Session::has('post_deleted'))
                      <div class="alert alert-success" role="alert">
                        {{Session::get('post_deleted')}}
                      </div>
                    @endif  
                   <table class = "table table-striped" style="background-color:#00FFFF">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Post Title</th>
                            <th>Post Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->body}}</td>
                                <td>
                                    <a href = "/posts/{{$post->id}}" class="btn btn-info">DETAILS</a>
                                    <a href= "/edit-post/{{$post->id}}" class= "btn btn-success">EDIT</a>
                                    <a href= "/delete-post/{{$post->id}}" class= "btn btn-danger">DELETE</a>
                                </td>
                            </tr>
                        @endforeach    
                    </tbody>
                   </table>
                  </div>
                </div>
              </div>
            </div>
        </div>  
    </div>
    </div>  
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>