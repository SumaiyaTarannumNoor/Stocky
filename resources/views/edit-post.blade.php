
@extends('layouts.master')



@section('content')
<body style="background-color:black">
    <section style = "padding-top: 60px;">
        <div class = "container">
            <div class= "row">
              <div class = "col-md-6 offset-md-3">
                <div class = "card">
                  <div class= "card-header" style= "background-color:rgba(2,3,10,0.4)">
                    আইটেম হালনাগাদ করুন <a href = "/posts" class="btn btn-success">আইটেম দেখুন</a>
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
                        <label for = "title">আইটেম এর নাম</label>
                        <input type = "text" name = "title" class= "form-control" placeholder="আইটেম এর নাম দিন" value="{{$post->title}}"/>
                      </div>

                      <div class="form-group" style= "background-color:red">
                        <label for = "body">আইটেম এর বর্ণনা</label>
                        <textarea name = "body" class= "form-control" rows= "3" style= "background-color:pink" placeholder="আইটেম এর বর্ণনা দিন">{{$post->body}}</textarea>
                      </div>
                      
                      <button type="submit" class="btn btn-success">আইটেম হালনাগাদ করুন</button> 
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>    
    </section>
</body>
@endsection
